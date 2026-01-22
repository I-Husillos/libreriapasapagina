<?php

namespace Database\Seeders;

use App\Models\Libro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Libro::create([
            'titulo' => 'El principito',
            'autor' => 'Antoine de Saint-Exupéry',
            'paginas' => 100,
            'precio' => 10.99
        ]);

        Libro::create([
            'titulo' => 'Harry Potter y la piedra filosofal',
            'autor' => 'J.K. Rowling',
            'paginas' => 223,
            'precio' => 19.9
        ]);

    }
}
