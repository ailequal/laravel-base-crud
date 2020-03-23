<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>laravel-base-crud</title>
</head>

<body>
	<h1>create - laravel-base-crud</h1>

	<form action="{{route('albums.store')}}" method="POST">
		{{-- token generator --}}
		@csrf
		{{-- specify the method used (only use one of these lines) --}}
		<input name="_method" type="hidden" value="POST">
		@method('POST')
		{{-- normal form --}}
		<label for="title">Album</label>
		<input type="text" name="album" placeholder="Album">

		<label for="title">Artist</label>
		<input type="text" name="artist" placeholder="Artist">

		<label for="title">Tracks</label>
		<input type="text" name="tracks" placeholder="Tracks">

		<label for="title">Genre</label>
		<input type="text" name="genre" placeholder="Genre">

		<label for="title">Released</label>
		<input type="text" name="released" placeholder="Released">

		<label for="title">Cover</label>
		<input type="text" name="cover" placeholder="Cover">

		<input type="submit" value="Submit">
	</form>
</body>

</html>