@extends('layouts.app')

@section('title', 'Accueil - Samuel Mwepu')

@section('content')
<div class="page-content with-image">
    <div class="content-text">
        <h1>Bienvenue sur mon portfolio</h1>
        <p>
            Je suis étudiant à l'Université Protestante de Lubumbashi.
            Passionné par la technologie, la programmation et l'innovation.
        </p>
        <p>
            Je travaille sur différents projets informatiques comme le développement web,
            les bases de données et les systèmes intelligents.
        </p>
    </div>
    <div class="content-image">
        <img src="{{ asset('images/profil.jpg') }}" alt="Samuel Mwepu" class="profile-img">
        <div class="image-caption">Samuel Mwepu Nsenga</div>
    </div>
</div>

@if($recentProjects->count() > 0)
<div class="skills-section" style="margin-top: 3rem;">
    <h2 class="section-title">Derniers Projets</h2>
    <div class="projects-grid">
        @foreach($recentProjects as $project)
        <div class="project-card">
            <div class="project-content">
                <h2>{{ $project->title }}</h2>
                <p>{{ Str::limit($project->description, 100) }}</p>
                <a href="{{ route('projects.show', $project) }}" style="color: #d4a373; text-decoration: none;">En savoir plus →</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
@endsection
