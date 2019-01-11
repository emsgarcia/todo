<!DOCTYPE html>
<html>
<head>
	<title>Sample View</title>
</head>
<body>

	<h1>This is a sample views file</h1>
	<p> Lorem impusm.</p>
	<p> Hello, </p>


<!-- THE FOLLOWING ARE THE SAMPLE -->


<!-- FETCHING WIDTH METHO -->
	<!-- <h2>Hello, 
		{{ $fullname['name'] }}
		{{ $fullname['middlename'] }}
		{{ $fullname['surname'] }}
	</h2>

	<h2>Hello, 
		{{ $helloworld }}
	</h2>
 -->
<!-- LARAVEL CONDITIONS -->
	@if($fullname['name'] == 'juan')

		<h2>
			Hello {{ $fullname['name'] }}
		</h2>

	@else
		<h2>You're not Juan!</h2>
	@endif

	<!-- LOOP -->
<!-- @foreach($fullname as $key => $value)
	<h2>
	Key is {{ $key }},
	value is {{ $value }}
	</h2>
@endforeach
 -->
</body>
</html>