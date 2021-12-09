<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
	public function index()
	{
		return view('pages.admin.donatur'); //ambil dari folder view/pages/pengurus/home
	}
}
