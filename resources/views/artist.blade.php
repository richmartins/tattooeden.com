<x-guest-layout>
	{{ $name }}
	<div class="section-container">
		<section class="logo">
			<img src="{{ asset('/img/logo.png') }}" alt="logo" />
		</section>
		<section class="btn-container">
			<button class="btn"><a href="/artists">Artists</a></button>
			<button class="btn"><a href="#">Itinerary</a></button>
		</section>
	</div>
</x-guest-layout>