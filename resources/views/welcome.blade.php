@extends('layouts.main')
@section('content')
    @include('frontend.welcome-page.hero-section')
    <div class="pt-5 px-5 lg:px-10">
        @include('frontend.welcome-page.video-section')
        @include('frontend.welcome-page.pokja-section')
    </div>

    <div class="px-10">
        @include('frontend.welcome-page.profile-section')
    </div>
    @include('frontend.welcome-page.berita-section')
    @include('frontend.welcome-page.time-divider')
    <div class="px-10">
        @include('frontend.welcome-page.galeri-section')
    </div>
    <script>
        const items = document.querySelectorAll('.carousel-item');
        const circles = document.querySelectorAll('.circle');
        let currentIndex = 0;

        function changeSlide() {
            items[currentIndex].classList.remove('active');
            circles[currentIndex].classList.remove('active');

            currentIndex = (currentIndex + 1) % items.length;

            items[currentIndex].classList.add('active');
            circles[currentIndex].classList.add('active');
        }

        // Change slide every 3 seconds (3000 ms)
        setInterval(changeSlide, 6000);


        function updateClock() {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            const currentTime = `${hours}:${minutes}:${seconds}`;

            document.getElementById('clock').textContent = currentTime;
        }

        // Update the clock every second
        setInterval(updateClock, 1000);

        // Initialize clock display
        updateClock();
    </script>
@endsection
