<?php

namespace App\Http\Controllers;

use App\Certificate;
use Illuminate\Http\Request;

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

}
