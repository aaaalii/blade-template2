@extends('layouts.masterlayout')

@section('content')
    <h1>Home Page</h1>
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus aspernatur voluptates, quasi perspiciatis voluptatem optio ex placeat quibusdam voluptatum ad nostrum, asperiores, aperiam nam repellendus similique quisquam cumque error nemo!
@endsection

{{-- @section('title')
    Home
@endsection --}}

{{-- Difference from yield (section) is that, we can add multiple push in a file --}}
{{-- @push('script')
    <script src="/example.js"></script>
@endpush

@push('script')
    <script src="/jQuery.js"></script>
@endpush --}}

@prepend('style')
    <style>
        .container{
            background-color: rgb(229, 132, 132);
        }
    </style>
@endprepend