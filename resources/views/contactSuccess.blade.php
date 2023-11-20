
@extends('layouts.app')

@section('content')
<div class="container" >
    <h2>Envío de formulario </h2>
    <hr>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @elseif (session('error'))
        <p>{{ session('error') }}</p>
    @endif
    
</div>
@endsection
