@extends('app')
@section('content')
	<h1>Impressum</h1>
	<p>asdsadsadsa sadsadsadsa dsadsad as dsad sa dasd sa dsadgfsdgfd gfdgfd hdfh fh</p>
	@foreach ($people as $human)
		{{ $human }}
	@endforeach
@stop

@section('footer')	
	<footer>
		YOLO
	</footer>
@stop