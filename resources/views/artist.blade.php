<x-guest-layout>
    <div class="section-container">
        <section class="artist-name">
            {{ $artist }}
        </section>
        <section class="logo">
            <img src="https://dummyimage.com/600x400/ffffff/000000&text=artist+logo"
                alt="logo" />
        </section>
        <section class="btn-container">
            <button class="btn"><a href="#">Portfolio</a></button>
            <button class="btn"><a href="#">Booking</a></button>
        </section>
    </div>
</x-guest-layout>
