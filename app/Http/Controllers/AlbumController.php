<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumController extends Controller
{

		public function __construct() {
			$this->data = Album::all();
			dd($this->data);
		}

		public function index() {
			return view('index');
		}

}
