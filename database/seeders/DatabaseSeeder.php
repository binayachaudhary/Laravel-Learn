<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$family->id,
            'title'=>'My Family Post',
            'slug'=>'my-family-post',
            'excerpt'=>'Hello my world',
            'body'=>'An article is any member of a class of dedicated words that are used with noun phrases to mark the identifiability of the referents of the noun phrases. The category of articles constitutes a part of speech. In English, both "the" and "a(n)" are articles, which combine with nouns to form noun phrases. Wikipedia An article is any member of a class of dedicated words that are used with noun phrases to mark the identifiability of the referents of the noun phrases. The category of articles constitutes a part of speech. In English, both "the" and "a(n)" are articles, which combine with nouns to form noun phrases. Wikipedia'
        ]);
        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$work->id,
            'title'=>'My Post',
            'slug'=>'my-post',
            'excerpt'=>'Hello my world',
            'body'=>'An article is any member of a class of dedicated words that are used with noun phrases to mark the identifiability of the referents of the noun phrases. The category of articles constitutes a part of speech. In English, both "the" and "a(n)" are articles, which combine with nouns to form noun phrases. Wikipedia An article is any member of a class of dedicated words that are used with noun phrases to mark the identifiability of the referents of the noun phrases. The category of articles constitutes a part of speech. In English, both "the" and "a(n)" are articles, which combine with nouns to form noun phrases. Wikipedia'
        ]);
        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$personal->id,
            'title'=>'My Work Post',
            'slug'=>'my-work-post',
            'excerpt'=>'Hello my world',
            'body'=>'An article is any member of a class of dedicated words that are used with noun phrases to mark the identifiability of the referents of the noun phrases. The category of articles constitutes a part of speech. In English, both "the" and "a(n)" are articles, which combine with nouns to form noun phrases. Wikipedia An article is any member of a class of dedicated words that are used with noun phrases to mark the identifiability of the referents of the noun phrases. The category of articles constitutes a part of speech. In English, both "the" and "a(n)" are articles, which combine with nouns to form noun phrases. Wikipedia'
        ]);
    }
}
