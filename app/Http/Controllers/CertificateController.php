<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\Code;
use Carbon\Carbon;
use Http\Helper;
use Illuminate\Http\Request;
use PDF;

class CertificateController extends Controller {

	public function showQueryForm(Request $request) {
		if ($request->session()->has('cert_id')) {
			$request->session()->forget('cert_id');
			$request->session()->flush();
		}

		return view('certificate.query');
	}

	public function query(Request $request) {
		$certId = $request->input('cert_id');
		$cardId = $request->input('card_id');

		if ($request->isMethod('post')) {
			$exists = Certificate::whereGpzh($certId)
				->whereSfz($cardId)
				->exists();

			if ($exists) {
				$request->session()->put('cert_id', $certId);

				return redirect()->route('certificate.show');
			}
		}

		return back();
	}

	public function show(Request $request) {
		if ($request->session()->has('cert_id')) {
			$certificate = Certificate::find($request->session()->get('cert_id'));

			return view('certificate.show', compact('certificate'));
		}

		return redirect()->route('query');
	}

	public function report(Request $request) {
		if ($request->session()->has('cert_id')) {
			$certId = $request->session()->get('cert_id');
			$exists = Code::whereCertId($certId)->exists();

			if (!$exists) {
				$code = new Code;

				$code->cert_id    = $certId;
				$code->code       = Helper::num_random(12);
				$code->valid_date = Carbon::now()->addYear();

				$code->save();
			}

			$certificate = Certificate::with('codes')->find($certId);
			$code        = $certificate->codes->first();

			$pdf = PDF::loadView('certificate.pdf', compact('certificate', 'code'))->setOption('encoding', 'utf-8');
			return $pdf->download('report.pdf');
			// return view('certificate.pdf', compact('certificate', 'code'));
		}

		return redirect()->route('query');
	}

}
