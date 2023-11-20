@extends('layouts.app')

@section('content')
<div class="container homeContainer">
    <div class="row justify-content-center">
        <div class="col-12 frontPage" >
            <h3>Tours & Viajes</h3>
            <h1>Visita lugares asombrosos</h1>
            <h5>Noviembre 2023</h5>
        </div>        
    </div>
    <div class="row cardFrame justify-content-center justify-content-md-around">
         <div class="col-md-4 card">
            <img src="/card1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <button class="buttonCard" >RESERVAR</button>
                <p class="card-text">Descubre destinos fascinantes con nuestros emocionantes viajes y tours. Sumérgete en aventuras inolvidables y crea recuerdos que perdurarán toda la vida. ¡Explora el mundo con nosotros!</p>                
            </div>
        </div>
        <div class="col-md-4 card">
            <img src="/card2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <button class="buttonCard" >RESERVAR</button>
                <p class="card-text">¡Aprovecha nuestras ofertas especiales! Descubre experiencias únicas a precios irresistibles. Desde escapadas de fin de semana hasta paquetes completos, encuentra la oferta perfecta para tu próxima aventura.</p>                
            </div>
        </div>
        <div class="col-md-4 card">
            <img src="/card3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <button class="buttonCard" >RESERVAR</button>
                <p class="card-text">Nuestro paquete especial para parejas ofrece una combinación perfecta de lujo y romance.¡Reserva ahora y regálate un fin de semana romántico!</p>                
            </div>
        </div>
    </div>

</div>
@endsection
