@extends('layouts.app')

@section('title', 'Message envoyé - Samuel Mwepu')

@section('content')
<div class="contact-page">
    <div class="contact-image">
        <img src="{{ asset('images/profil.jpg') }}" alt="Contact">
        <div class="contact-overlay">
            <h2>Message envoyé !</h2>
            <p>Merci de m'avoir contacté</p>
        </div>
    </div>

    <div class="contact-form-box">
        <div class="success-message">
            <h2>✓ Message envoyé avec succès !</h2>
            @if(session('messageData'))
            <div class="message-details">
                <p><strong>Nom :</strong> {{ session('messageData.name') }}</p>
                <p><strong>Email :</strong> {{ session('messageData.email') }}</p>
                <p><strong>Message :</strong></p>
                <div class="message-content">
                    {{ nl2br(e(session('messageData.message'))) }}
                </div>
            </div>
            @endif
            <a href="{{ route('contact') }}" class="new-message-btn">Envoyer un nouveau message</a>
        </div>

        <div class="contact-details">
            <p><strong>Email :</strong> samuelmwepu90@gmail.com</p>
            <p><strong>Téléphone :</strong> +243 821 467 674</p>
            <p><strong>Adresse :</strong> UNIVERSITE PROTESTANTE DE LUBUMBASHI</p>
        </div>
    </div>
</div>
@endsection
