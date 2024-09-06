@extends('layouts.masterlayout')

@section('content')
    <h1>Post</h1>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam incidunt modi repellat odit quae dolore? Aliquam sit atque ea autem provident labore accusamus doloribus laboriosam recusandae facere, ex rerum. Facilis!
@endsection


{{-- Only shows the first one --}}
{{-- @section('content')
    <h1>Another Post</h1>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam incidunt modi repellat odit quae dolore? Aliquam sit atque ea autem provident labore accusamus doloribus laboriosam recusandae facere, ex rerum. Facilis!
@endsection --}}

@section('navbar')
<p>Appended through Post page to the master navbar</p>
@parent
@endsection

@section('title')
    Post
@endsection