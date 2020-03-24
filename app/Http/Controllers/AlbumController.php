<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumController extends Controller
{
		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */

		public function __construct()
		{
				//
		}

		public function index()
		{
				// requesting all the albums from the db
				$albums = Album::all();

				return view('index', ["albums"=>$albums]);
		}

		/**
		 * Show the form for creating a new resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function create()
		{
				// redirect to the form for creating a new entry inside the db
				return view('create');
		}

		/**
		 * Store a newly created resource in storage.
		 *
		 * @param  \Illuminate\Http\Request  $request
		 * @return \Illuminate\Http\Response
		 */
		public function store(Request $request)
		{
				// store all the data passed with post method
				$data = $request->all();

				// form validation with laravel for the post data
				$request->validate([
					'album' => 'required|string|max:100',
					'artist' => 'required|string|max:100',
					'tracks' => 'required|numeric',
					'genre' => 'required|string|max:100',
					'released' => 'required|date_format:Y',
					'cover' => 'required|string|max:100',
				]);

				// creating a new object to store inside the db
				$album = new Album();
				$album->fill($data);
				$album->save();

				return redirect()->route('albums.show', $album->id);
		}

		/**
		 * Display the specified resource.
		 *
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function show($id)
		{
				// call from the db the record matching the given id
				$album = Album::where('id', $id)->first();

				return view('show', ["album"=>$album]);
		}

		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function edit($id)
		{
				//
		}

		/**
		 * Update the specified resource in storage.
		 *
		 * @param  \Illuminate\Http\Request  $request
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function update(Request $request, $id)
		{
				//
		}

		/**
		 * Remove the specified resource from storage.
		 *
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function destroy($id)
		{
				//
		}
}
