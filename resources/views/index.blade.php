<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>laravel-base-crud</title>
</head>

<body>
	<h1>index - laravel-base-crud</h1>
	<a href="{{route('albums.create')}}">CREATE</a>

	@foreach ($albums as $album)
	<div>
		<h2>{{$album->album}}</h2>
		<h3>{{$album->artist}}</h3>
		<h4>{{$album->tracks}}</h4>
		<h4>{{$album->genre}}</h4>
		<h4>{{$album->released}}</h4>
		<h4>{{$album->cover}}</h4>
		<h4>{{$album->created_at}}</h4>
		<h4>{{$album->updated_at}}</h4>
		<br>
	</div>
	@endforeach

</body>

</html>