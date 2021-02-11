@extends('template.main')

@section('content')
    <section class="container">
        @include('partials.form')
        <h1 class="text-center">Car List</h1>
        <section class="d-flex justify-content-center mt-5">
            @include('partials.modalAll')
            @include('partials.modalCheap')
            @include('partials.modalExp')
            @include('partials.modalDiscount')
        </section>
    </section>
@endsection