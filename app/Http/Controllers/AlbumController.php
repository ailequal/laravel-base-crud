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

		private $albumValidation = [
			'album' => 'required|string|max:100',
			'artist' => 'required|string|max:100',
			'tracks' => 'required|numeric',
			'genre' => 'required|string|max:100',
			'released' => 'required|date_format:Y',
			'cover' => 'required|string|max:100'
		];

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
				$request->validate($this->albumValidation);

				// creating a new object to store inside the db
				$album = new Album();
				$album->fill($data);

				// if the save process was successful show the new album
				$save = $album->save();
				if ($save) {
					return redirect()->route('albums.show', $album->id);
				} else {
					abort('500');
				}
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

				// if the selection process was successful show the selected album
				if (!empty($album)) {
					return view('show', ["album"=>$album]);
				} else {
					abort('404');
				}
		}

		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function edit($id)
		{
			// call from the db the record matching the given id
			$album = Album::where('id', $id)->first();

			// if the selection process was successful go to edit with selected album
			if (!empty($album)) {
				return view('edit', ["album"=>$album]);
			} else {
				abort('404');
			}
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
				// store all the data passed with patch method
				$data = $request->all();

				// form validation with laravel for the patch data
				$request->validate($this->albumValidation);

				// find album to patch
				$album = Album::find($id);

				// if the selection process was successful
				if (!empty($album)) {
					// patch the object stored inside the db matching the id
					$album->update($data);
					// start the show function from controller
					return redirect()->route('albums.show', $album->id);
				} else {
					abort('404');
				}
			}

		/**
		 * Remove the specified resource from storage.
		 *
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function destroy($id)
		{
				// select album matching id from db and delete it
				Album::find($id)->delete();

				// requesting all the albums from the db
				$albums = Album::all();

				return view('index', ["albums"=>$albums]);
		}
}
