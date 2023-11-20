
@extends('layouts.app')

@section('content')
<div class="container contactContainer">
    <div class="row contactFrame">
        <div class="col-lg-6 contactPhoto">
                <div class="companyData">
                    <h4 ><i class="fa fa-home fa-sm" ></i> Dirección:</h4>               
                    <p >Calle Cantera de Juniors, 23º</p>
                   
                    <h4 ><i class="fa fa-envelope fa-sm" ></i> Correo electrónico:</h4>
                    <p >info@sensive.com</p>
                    
                    <h4 ><i class="fa fa-user fa-sm" ></i> Web Developer Junior:</h4>
                    <p >Julián VC</p>
                    
                    <h4 ><i class="fa fa-link fa-sm" ></i> Página Web</h4>
                    <p ><a href="https://www.linkedin.com/in/julian-valladares-casero-/" target="_blank">www.linkedin.com/in/julian-valladares-casero</a></p>
                
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51170.84957580083!2d-4.490466411589384!3d36.71828370291555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7259c44fdb212d%3A0x6025dc92c9ca32cf!2zTcOhbGFnYQ!5e0!3m2!1ses!2ses!4v1700335304523!5m2!1ses!2ses" width="320" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
        </div>
        <div class="col-lg-6 contactFormf">
            <div class="inner">
              <h2 class="p-2">Contacta con nosotros</h2>
            <!-- Default form contact -->
            <form class=" border border-light p-2 align-items-center" action="/sendContact" method="POST" >
            @csrf
                <!-- Name -->
                <input name="name" type="text" required id="defaultContactFormName" class="form-control mb-4" placeholder="Nombre">

                <!-- Email -->
                <input name="email" type="text" required id="defaultContactFormEmail" class="form-control mb-4" placeholder="Correo electrónico
                ">

                <!-- address -->
                <input name="address" type="text" required id="defaultContactFormEmail" class="form-control mb-4" placeholder="Dirección
                ">

                <!-- Message -->
                <div class="form-group">
                    <textarea name="message" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Mensaje"></textarea>
                </div>

                <!-- Send button -->
                <button class="btn btn-success w-100 mt-4 mb-4" type="submit">Enviar</button>
            </form>             
            </div>
                
        </div>  
    </div>
</div>
    
@endsection