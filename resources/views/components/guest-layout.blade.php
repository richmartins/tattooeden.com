<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ $title ?? "Tattoo Eden" }}</title>
	<link rel="stylesheet" href="{{ asset('css/main.css') }}" media="all" type="text/css">
</head>

<body>
	<x-guest-header></x-guest-header>
	<div class="wrapper">
		<main>
			{{ $slot }}
		</main>
	</div>
	<x-guest-footer></x-guest-footer>
	<script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
</body>

</html>