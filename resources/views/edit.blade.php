<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>laravel-base-crud</title>
</head>

<body>
	<h1>edit - laravel-base-crud</h1>
	<a href="{{route('albums.index')}}">HOME</a>

	<form action="{{route('albums.update', $album->id)}}" method="POST">
		{{-- token generator --}}
		@csrf
		{{-- specify method --}}
		@method('PATCH')
		{{-- normal form --}}
		<label for="title">Album</label>
		<input type="text" name="album" placeholder="Album" value="{{$album->album}}"><br>

		<label for="title">Artist</label>
		<input type="text" name="artist" placeholder="Artist" value="{{$album->artist}}"><br>

		<label for="title">Tracks</label>
		<input type="text" name="tracks" placeholder="Tracks" value="{{$album->tracks}}"><br>

		<label for="title">Genre</label>
		<input type="text" name="genre" placeholder="Genre" value="{{$album->genre}}"><br>

		<label for="title">Released</label>
		<input type="text" name="released" placeholder="Released" value="{{$album->released}}"><br>

		<label for="title">Cover</label>
		<input type="text" name="cover" placeholder="Cover" value="{{$album->cover}}"><br>

		<input type="submit" value="Submit">
	</form>
</body>

</html>