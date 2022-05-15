<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorie = new \App\Models\Categorie([
            'name' => 'Product #1',
            'product' => 'Product #1 details'
        ]);
        $categorie->save();

        $categorie = new \App\Models\Categorie([
            'name' => 'Product #2',
            'product' => 'Product #2 details'
                ]);
        $categorie->save();

        $categorie = new \App\Models\Categorie([
            'name' => 'Product #3',
            'product' => 'Product #3 details'
        ]);
        $categorie->save();

        $categorie = new \App\Models\Categorie([
            'name' => 'Product #4',
            'product' => 'Product #4 details'
        ]);
        $categorie->save();

        $categorie = new \App\Models\Categorie([
            'name' => 'Product #5',
            'product' => 'Product #5 details'
        ]);
        $categorie->save();

        $categorie = new \App\Models\Categorie([
            'name' => 'Product #6',
            'product' => 'Product #6 details'
        ]);
        $categorie->save();

        $categorie = new \App\Models\Categorie([
            'name' => 'Product #7',
            'product' => 'Product #7 details'
        ]);
        $categorie->save();

        $categorie = new \App\Models\Categorie([
            'name' => 'Product #8',
            'product' => 'Product #8 details'
        ]);
        $categorie->save();

        $categorie = new \App\Models\Categorie([
            'name' => 'Product #9',
            'product' => 'Product #9 details'
        ]);
        $categorie->save();

        $categorie = new \App\Models\Categorie([
            'name' => 'Product #10',
            'product' => 'Product #10 details'
        
        ]);
        $categorie->save();
    }
}
