<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('dishes')->insert([
            [
                
                'name' => 'Beef Chunks',
                'price' => '350',
                'gallery' => 'https://bestbeefrecipes.com/wp-content/uploads/2021/08/beef-chuck-roast-hero.jpg',
            ],
            [
                
                'name' => 'Pilau',
                'price' => '300',
                'gallery'=>'https://www.preciouscore.com/wp-content/uploads/2019/02/East-African-Pilau.jpg',
            ],
           
            [
                
                'name' => 'Calamari ',
                'price' => '500',
                'gallery'=>'https://media.istockphoto.com/id/1362869453/photo/fried-calamari.jpg?s=612x612&w=0&k=20&c=py8k6O9BrZBZM91n2CD2_j9SVAt8F8tUNtzB4CdUqn4=',
            ],
            [
                
                'name' => 'Fries ',
                'price' => '250',
                'gallery'=>'https://imgs.search.brave.com/sIOvLdsNrmOmzLfXk9emCGHyumdrLJLW1cvhEY6lmOE/rs:fit:860:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzA0LzU3LzcyLzk5/LzM2MF9GXzQ1Nzcy/OTk5Nl9pTmpMczZN/Q0tkWWtTczFtclFt/b1BCaDlpamJDVVJI/eS5qcGc',
            ],
            [
                
                'name' => 'Pizza ',
                'price' => '1250',
                'gallery'=>'https://media.istockphoto.com/id/910195988/photo/pizza-margarita.jpg?s=612x612&w=0&k=20&c=ZPlovEsbFWJq6M3kLR98u0eo8NCYiFEuRjkMKQCwH40=',
            ],
           
           
        ]);
        
    }
}

 
