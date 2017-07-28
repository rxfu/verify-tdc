<?php

namespace App\Http\Controllers;

use App\Code;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CodeController extends Controller {

	public function showVerifyForm(Request $request) {
		return view('certificate.verify');
	}

	public function verify(Request $request) {
		$token = $request->input('token');

		$exists = Code::whereCode($token)->exists();

		if ($exists) {
			$code = Code::whereCode($token)->first();

			$code->verified    = true;
			$code->verified_at = Carbon::now();

			$code->save();

			return view('verified.success');
		} else {
			return view('verified.failed');
		}
	}
}
