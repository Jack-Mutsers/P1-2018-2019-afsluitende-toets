<html lang="en">
<head>
	<title>Klasgenoot bekijken</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			@foreach ($details as $item)
				naam:<br />
				<input value="{{{$item->name}}}" readonly="readonly">
				<br />
				gemiddelde: <br />
				<input value="{{{$item->average}}}" readonly="readonly">
				<br />
				Geslacht: <br />
				<input value="{{{$item->sex}}}" readonly="readonly">
			@endforeach
		</div>
	</div>
	<br />
	<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<a href="/"><button>Terug naar overzicht</button></a>
			</div>
		</div>
</div>

</body>
</html>






































