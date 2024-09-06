@extends('layouts.masterlayout')

@section('content')
    <h1>Test</h1>
@endsection

@section('title')
    Test
@endsection

@php
    $user = "Ali";
    $nums = [1,2, 3, 4]
@endphp

<script>
    // var data = {{$user}};
    // console.log(data);

    // var data = @json($nums);
    // console.log(data);

    // var data = {{ Js::from($nums) }}
    // data.forEach(element => {
    //     console.log(element);
    // });
</script>