@extends('layouts.masterlayout')

@section('content')
    {{-- <h1>About Us</h1>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit soluta rerum sint ratcto maiores reiciendiorum? --}}
@endsection

@verbatim
<div id="app">{{ message }}</div>
@endverbatim

@section('title')
    About
@endsection

@push('script')
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script>
    const { createApp, ref } = Vue

    createApp({
        setup() {
        const message = ref('Hello vue!')
        return {
            message
        }
        }
    }).mount('#app')
    </script>
@endpush
