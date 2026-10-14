<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user1 = \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'role' => 'apprenant',
        ]);

        $user2 = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // Création d'un profil CV pour chaque utilisateur
        \App\Models\CvProfil::create([
            'user_id' => $user1->id,
            'username' => $user1->name,
            'title' => 'Développeur',
            'email' => $user1->email,
            'phone' => '0600000000',
            'city' => 'Paris',
            'url_linkedin' => null,
            'url_portfolio' => null,
            'photo' => null,
            'situation_mat' => 'Célibataire',
            'nationality' => 'Française',
            'birthday' => '1990-01-01',
            'lieu_naissance' => 'Paris',
            'resume' => 'Profil test utilisateur',
        ]);
        \App\Models\CvProfil::create([
            'user_id' => $user2->id,
            'username' => $user2->name,
            'title' => 'Administrateur',
            'email' => $user2->email,
            'phone' => '0600000001',
            'city' => 'Lyon',
            'url_linkedin' => null,
            'url_portfolio' => null,
            'photo' => null,
            'situation_mat' => 'Marié',
            'nationality' => 'Française',
            'birthday' => '1985-01-01',
            'lieu_naissance' => 'Lyon',
            'resume' => 'Profil administrateur',
        ]);
    }
}
