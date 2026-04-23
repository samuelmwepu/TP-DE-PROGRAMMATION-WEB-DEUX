<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\ProjectRequest;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Afficher la liste des projets
    public function index()
    {
        $projects = Project::latest()->paginate(6);
        return view('projects.index', compact('projects'));
    }

    // Afficher le formulaire de création
    public function create()
    {
        return view('projects.create');
    }

    // Enregistrer un nouveau projet
    public function store(ProjectRequest $request)
    {
        Project::create($request->validated());

        return redirect()->route('projects.index')
            ->with('success', 'Projet ajouté avec succès !');
    }

    // Afficher un projet spécifique
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    // Afficher le formulaire d'édition
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    // Mettre à jour un projet
    public function update(ProjectRequest $request, Project $project)
    {
        $project->update($request->validated());

        return redirect()->route('projects.index')
            ->with('success', 'Projet modifié avec succès !');
    }

    // Supprimer un projet
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')
            ->with('success', 'Projet supprimé avec succès !');
    }
}
