<?php

namespace App\Database\Seeds;

use App\Models\CategoriaModel;
use CodeIgniter\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
       
        // $this->db->table('categoria');
        // CategoriaModel = new CategoriaModel();

        $this->db->table('categoria')->where('id >= 1')->delete();


        for ($i=0; $i < 20 ; $i++) { 
            $this->db->table('categoria')->insert([
                'titulo'=> "categorias # $i"
            ]);
        }
    }

      
}
