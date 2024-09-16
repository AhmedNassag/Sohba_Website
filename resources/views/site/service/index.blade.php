@extends('layout.master')


@section('content')
    <!--&--------------- Carousel Start -->
    @include('site.service.inc.cards')
    <!--&--------------- Carousel End -->


    <div class="main-divider  container mx-auto"></div>

    <!--^--------------- Form start -->
    @include('site.service.inc.form')
    <!--^--------------- Form End -->
@endsection


@section('js')
   <!-- Include SweetAlert2 CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        @if (session('success'))
            Swal.fire({
                toast: true, // Enables toast notifications
                position: 'top-end', // Position in the top right
                icon: 'success',
                title: '{{ session('success') }}',
                showConfirmButton: false, // No need for a confirm button
                timer: 3000, // Disappear after 3 seconds
                timerProgressBar: true, // Show a progress bar for the timer
                background: '#fefefe', // Background color of the toast
                color: '#333', // Text color
                customClass: {
                    container: 'my-toast-container',
                },
            });
        @endif
    });
</script>

<!-- Add custom CSS styles -->
<style>
    .my-toast-container {
        top: 20px; /* Adjust if needed */
        right: 20px; /* Adjust if needed */
        position: fixed; /* Ensure it stays in place */
    }
</style>

@endsection
