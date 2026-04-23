<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Détecteur de Fake News',
            'description' => 'Extension Chrome capable de détecter les sites de désinformation et d\'afficher des alertes aux utilisateurs.',
            'technologies' => 'JavaScript, Chrome Extension API',
        ]);

        Project::create([
            'title' => 'Système de gestion des travaux de fin de cycle',
            'description' => 'Projet universitaire visant à créer un système intelligent permettant de gérer et suivre les mémoires des étudiants.',
            'technologies' => 'PHP, Laravel, MySQL',
        ]);

        Project::create([
            'title' => 'Base de données boutique d\'habillement',
            'description' => 'Conception d\'une base de données SQL pour gérer les produits, les catégories, les tailles et les quantités d\'une boutique.',
            'technologies' => 'MySQL, SQL, phpMyAdmin',
        ]);

        Project::create([
            'title' => 'Site web universitaire',
            'description' => 'Création d\'un site web avec plusieurs pages en HTML et CSS pour représenter une structure universitaire.',
            'technologies' => 'HTML, CSS, JavaScript',
        ]);
    }
}
