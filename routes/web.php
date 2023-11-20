<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SendContactController;
use App\Http\Controllers\ToSController;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/iniciarsesion', [HomeController::class, 'iniciarsesion'])->name('iniciarsesion');
Route::get('/tos', [AboutController::class, 'index'])->name('tos');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/contactSuccess', [SendContactController::class, 'index'])->name('contactSuccess');

Route::post('/sendContact', function (Request $request) {
    try {
        // Validaciones
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'message' => 'required|string|max:500',
        ]);

        // Si las validaciones fallan, redirige de vuelta con los errores
        if ($validator->fails()) {
            return redirect()->route('contact')->withErrors($validator)->withInput();
        }

        // Lógica para procesar el formulario y enviar el correo electrónico
        $name = $request->input('name');
        $email = $request->input('email');
        $address = $request->input('address');
        $message = $request->input('message');

        // Guardar en la base de datos usando Eloquent
        $contact = new Contact();
        $contact->name = $name;
        $contact->email = $email;
        $contact->address = $address;
        $contact->message = $message;
        $contact->save();

        // Enviar correo electrónico
        /* $data = [
            'name' => $contact->name,
            'email' => $contact->email,
            'address' => $contact->address,
            'message' => $contact->message,
        ];

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('j_thegod@hotmail.com', 'Destinatario')->subject('Nuevo formulario de contacto');
            $message->from('tu_correo_electronico@example.com', 'Tu Nombre');
        }); */

        // Redirige a la vista 'contactSuccess' con mensajes de éxito
        return redirect()->route('contactSuccess')->with([
            'success' => 'Formulario enviado con éxito',
            'error' => null,
        ]);
    } catch (\Exception $e) {
        // Captura cualquier excepción y muestra un mensaje de error
        $errorCode = $e->getCode();
        $errorMessage = $e->getMessage();
        return redirect()->route('contactSuccess')->with('error', 'Hubo un problema al enviar el formulario. Código de error: ' . $errorCode . '. Mensaje: ' . $errorMessage);
    }
});