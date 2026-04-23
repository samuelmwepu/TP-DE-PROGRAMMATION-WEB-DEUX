@extends('layouts.app')

@section('title', 'Ajouter un projet')

@section('content')
<div class="skills-section">
    <h1 class="section-title">Ajouter un projet</h1>

    <form method="POST" action="{{ route('projects.store') }}" class="contact-form">
        @csrf

        <div class="form-group">
            <label for="title">Titre du projet *</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
            @error('title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description *</label>
            <textarea id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
            @error('description')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="technologies">Technologies utilisées</label>
            <input type="text" id="technologies" name="technologies" value="{{ old('technologies') }}" placeholder="Ex: HTML, CSS, Laravel">
            @error('technologies')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="image_url">URL de l'image</label>
            <input type="url" id="image_url" name="image_url" value="{{ old('image_url') }}" placeholder="https://...">
            @error('image_url')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="project_url">URL du projet (lien démo)</label>
            <input type="url" id="project_url" name="project_url" value="{{ old('project_url') }}" placeholder="https://...">
            @error('project_url')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div style="display: flex; gap: 1rem;">
            <button type="submit" class="submit-btn">Ajouter le projet</button>
            <a href="{{ route('projects.index') }}" style="background: #666; color: white; padding: 1rem; text-decoration: none; border-radius: 4px;">Annuler</a>
        </div>
    </form>
</div>
@endsection
