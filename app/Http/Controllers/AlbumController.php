<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{

		public function __construct() {

		}

		public function index() {
			return view('index');
		}

}
