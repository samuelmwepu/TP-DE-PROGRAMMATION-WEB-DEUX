<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $recentProjects = Project::latest()->take(3)->get();
        return view('pages.home', compact('recentProjects'));
    }

    public function competences()
    {
        $competences = [
            'programmation' => ['HTML', 'CSS', 'JavaScript (bases)', 'SQL', 'PHP', 'Laravel (bases)'],
            'informatique' => ['Conception de bases de données', 'Modélisation UML', 'Git', 'Développement web'],
            'sportives' => ['Esprit d\'équipe', 'Bonne lecture de jeu', 'Leadership']
        ];

        return view('pages.competences', compact('competences'));
    }
}
