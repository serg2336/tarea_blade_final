@extends('layouts.app')

@section('titulo', 'Contacto')

@section('contenido')
    <h2>Contacto</h2>
    <p>Puede comunicarse con nosotros mediante el siguiente correo:</p>
    
    @isset($email)
        <p><strong>Email:</strong> {{ $email }}</p>
    @endisset
    
    <form method="POST" action="/enviar-contacto">
        @csrf
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>
        <label>Mensaje:</label><br>
        <textarea name="mensaje" rows="5" required></textarea><br><br>
        <button type="submit">Enviar</button>
    </form>
@endsection