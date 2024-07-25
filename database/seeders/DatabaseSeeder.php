<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\{User,Category,Blog,Comment};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::truncate();
        // Category::truncate();
        // Blog::truncate();
        // Comment::truncate();

        $user1=User::factory()->create(['name'=>'mgmg','username'=>'mgmg']);
        $user2=User::factory()->create(['name'=>'aungaung','username'=>'aungaung']);
        $frontend=Category::factory()->create(['name'=>'frontend','slug'=>'frontend']);
        $backend=Category::factory()->create(['name'=>'backend','slug'=>'backend']);
        Blog::factory(10)->create(['category_id'=>$frontend->id,'user_id'=>$user1->id]);
        Blog::factory(10)->create(['category_id'=>$backend->id,'user_id'=>$user2->id]);
        Comment::factory(5)->create();
    }
}
