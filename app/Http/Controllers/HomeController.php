<?php

namespace App\Http\Controllers;

use App\Certificate;
use Yajra\Datatables\Datatables;

class HomeController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('home');
	}

	public function getCertificates() {
		$certificates = Certificate::all();

		return Datatables::of($certificates)->make(true);
	}
}
