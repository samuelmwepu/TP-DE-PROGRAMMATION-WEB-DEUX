@extends('layouts.app')

@section('title', 'Compétences - Samuel Mwepu')

@section('content')
<section class="skills-section">
    <h1 class="section-title">Mes Compétences</h1>
    <div class="skills-grid">
        <div class="skill-category">
            <h2>Programmation</h2>
            <ul class="values-list">
                @foreach($competences['programmation'] as $skill)
                    <li>{{ $skill }}</li>
                @endforeach
            </ul>
        </div>
        <div class="skill-category">
            <h2>Informatique</h2>
            <ul class="values-list">
                @foreach($competences['informatique'] as $skill)
                    <li>{{ $skill }}</li>
                @endforeach
            </ul>
        </div>
        <div class="skill-category">
            <h2>Compétences Sportives</h2>
            <ul class="values-list">
                @foreach($competences['sportives'] as $skill)
                    <li>{{ $skill }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
@endsection
