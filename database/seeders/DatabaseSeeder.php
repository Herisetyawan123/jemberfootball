<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Photo;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test Account',
            'email' => 'test@example.com',
            'password' => Hash::make('12345678')
        ]);
        \App\Models\User::factory()->create([
            'name' => 'wali Account',
            'email' => 'wali@wali.com',
            'password' => Hash::make('wali')
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Admin Account',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'password' => Hash::make('admin')
        ]);
        for ($i=1; $i <= 20; $i++) { 
            $category = "match";
            if ($i > 10){
                $category = "meeting";
            }
            Post::create([
                'title'     => fake()->name(),
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'place'  => 'Patrang',
                'date'      => "19-10-2020 19.00",
                'category'  => $category,
            ]);
            for ($j=0; $j < 3; $j++) { 
                Photo::create([
                    'path'     => 'https://picsum.photos/id/237/200/300',
                    'post_id'  => $i
                ]);
            }
        }
    }
}
