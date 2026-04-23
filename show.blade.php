@extends('layouts.app')

@section('title', $project->title)

@section('content')
<div class="skills-section">
    <div style="margin-bottom: 2rem;">
        <a href="{{ route('projects.index') }}" style="color: #d4a373; text-decoration: none;">← Retour aux projets</a>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
        <div>
            @if($project->image_url)
                <img src="{{ $project->image_url }}" alt="{{ $project->title }}" style="width: 100%; border-radius: 8px;">
            @else
                <div style="width: 100%; height: 300px; background: #f0f0f0; display: flex; align-items: center; justify-content: center; border-radius: 8px;">Image non disponible</div>
            @endif
        </div>

        <div>
            <h1 style="color: #1a1a1a; margin-bottom: 1rem;">{{ $project->title }}</h1>

            @if($project->technologies)
                <p style="color: #d4a373; margin-bottom: 1rem; font-weight: bold;">🔧 {{ $project->technologies }}</p>
            @endif

            <div style="margin-bottom: 2rem;">
                <h3 style="margin-bottom: 0.5rem;">Description</h3>
                <p style="color: #555; line-height: 1.8;">{{ $project->description }}</p>
            </div>

            @if($project->project_url)
                <a href="{{ $project->project_url }}" target="_blank" style="background: #d4a373; color: #1a1a1a; padding: 0.8rem 1.5rem; text-decoration: none; border-radius: 5px; font-weight: bold;">Voir le projet →</a>
            @endif
        </div>
    </div>
</div>
@endsection
