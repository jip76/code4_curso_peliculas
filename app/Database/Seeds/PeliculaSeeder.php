<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PeliculaSeeder extends Seeder
{
    public function run()
    {
        // $this->db->table('categoria');
        // CategoriaModel = new CategoriaModel();

        $this->db->table('pelicula')->where('id >= 1')->delete();


        for ($i=0; $i < 20 ; $i++) { 
            $this->db->table('pelicula')->insert([
                'titulo'=> "Peliculas # $i",
                'descripcion'=> "Descripcion peliculas # $i"
            ]);
        }
    }
}
