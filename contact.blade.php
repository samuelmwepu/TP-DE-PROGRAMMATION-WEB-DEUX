@extends('layouts.app')

@section('title', 'Contact - Samuel Mwepu')

@section('content')
<div class="contact-page">
    <div class="contact-image">
        <img src="{{ asset('images/profil.jpg') }}" alt="Contact">
        <div class="contact-overlay">
            <h2>Restons en contact</h2>
            <p>N'hésitez pas à m'écrire</p>
        </div>
    </div>

    <div class="contact-form-box">
        <h1>Me contacter</h1>

        <form method="POST" action="{{ route('contact.store') }}" class="contact-form">
            @csrf

            <div class="form-group">
                <label for="name">Nom complet *</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Votre nom">
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="votre@email.com">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="message">Message *</label>
                <textarea id="message" name="message" rows="5" placeholder="Votre message...">{{ old('message') }}</textarea>
                @error('message')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="submit-btn">Envoyer le message</button>
        </form>

        <div class="contact-details">
            <p><strong>Email :</strong> samuelmwepu90@gmail.com</p>
            <p><strong>Téléphone :</strong> +243 821 467 674</p>
            <p><strong>Adresse :</strong> UNIVERSITE PROTESTANTE DE LUBUMBASHI</p>
        </div>
    </div>
</div>
@endsection
