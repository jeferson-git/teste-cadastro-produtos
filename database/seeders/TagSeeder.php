<?php

namespace Database\Seeders;

use App\Models\Tag;

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name'  => 'Material Escolar'
        ]);

        Tag::create([
            'name'  => 'Mesa/Banho'
        ]);

        Tag::create([
            'name'  => 'Eletrodomésticos'
        ]);

        Tag::create([
            'name'  => 'Jardinagem'  
        ]);

        Tag::create([
            'name'=> 'Tecnologia/Eletronicos'
        ]);

        Tag::create([
            'name'=> 'Pintura'
        ]);
      
        Tag::create([
            'name'=> 'Ferramentas em Geral'
        ]);

        Tag::create([
            'name'=> 'Automotivos'
        ]);
     
        Tag::create([
            'name'=> 'Brinquedos'
        ]);

        Tag::create([
            'name' => 'Móveis'
        ]);
    }
}
