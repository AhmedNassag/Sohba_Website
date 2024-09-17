@extends('layout.master')


@section('content')

@include('site.contact.inc.form')

@if(session('success'))
    <script>
        Swal.fire({
            position: 'top-end',  // Top right
            icon: 'success',
            title: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 3000
        })
    </script>
@endif
@if($errors->any())
    <script>
        let errorMessages = '';
        @foreach ($errors->all() as $error)
            errorMessages += '{{ $error }}\n';
        @endforeach

        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: errorMessages,
            position: 'top-end',
        });
    </script>
@endif
<div class="main-divider  container-xxl mx-auto"></div>

@include('site.contact.inc.info')



@endsection
