<html lang="en">
<head>
	<title>Bootstrap Tutorial</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style>
		td{
			padding: 10px;
		}
	</style>
</head>
<body>
<div class="container">
	@if(isset($errors))
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<br />
	{{ Form::open(array('url'=>'addnew', 'method'=>'post')) }}
		<table>
			<tr>
				<td>
					Naam: <br />
					{{ Form::text('name') }}
				</td>
			</tr> <tr>
				<td>
					gemiddelde: <br />
					{{ Form::text('average') }}
				</td>
			</tr> <tr>
				<td>
					Geslacht: <br />
					<select name="sex" >
						<option value="Man">Man</option>
						<option value="Vrouw">Vrouw</option>
					</select> 
				</td>
			</tr> <tr>
				<td span="2">
					{{ Form::submit('Toevoegen') }}
				</td>
			</tr>
		</table>
	{{ Form::close() }}
</div>
</body>
</html>





































