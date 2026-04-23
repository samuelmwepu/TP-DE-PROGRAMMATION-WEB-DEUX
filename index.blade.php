@extends('layouts.app')

@section('title', 'Projets - Samuel Mwepu')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
    <h1 class="section-title" style="margin-bottom: 0;">Mes Projets</h1>
    <a href="{{ route('projects.create') }}" style="background: #d4a373; color: #1a1a1a; padding: 0.8rem 1.5rem; text-decoration: none; border-radius: 5px; font-weight: bold;">+ Ajouter un projet</a>
</div>

<div class="projects-grid">
    @forelse($projects as $project)
    <div class="project-card">
        @if($project->image_url)
            <img src="{{ $project->image_url }}" alt="{{ $project->title }}" style="width: 100%; height: 200px; object-fit: cover;">
        @else
            <div style="width: 100%; height: 200px; background: #f0f0f0; display: flex; align-items: center; justify-content: center; color: #999;">Image non disponible</div>
        @endif
        <div class="project-content">
            <h2>{{ $project->title }}</h2>
            @if($project->technologies)
                <p style="color: #d4a373; font-size: 0.85rem; margin-bottom: 0.5rem;">{{ $project->technologies }}</p>
            @endif
            <p>{{ Str::limit($project->description, 120) }}</p>
            <div style="display: flex; gap: 1rem; margin-top: 1rem;">
                <a href="{{ route('projects.show', $project) }}" style="color: #d4a373; text-decoration: none;">Voir détails →</a>
                <a href="{{ route('projects.edit', $project) }}" style="color: #666; text-decoration: none;">✏️ Modifier</a>
                <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background: none; border: none; color: #dc3545; cursor: pointer;" onclick="return confirm('Supprimer ce projet ?')">🗑️ Supprimer</button>
                </form>
            </div>
        </div>
    </div>
    @empty
        <p>Aucun projet pour le moment.</p>
    @endforelse
</div>

<div style="margin-top: 2rem;">
    {{ $projects->links() }}
</div>
@endsection
