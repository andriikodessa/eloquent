<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

$categories = [];
for ($i =1; $i <= 5; $i++) {
    $categories[] =  [
        'title' => 'Category ' . $i,
        'slug' => 'category ' . $i,
        'created_at' => date('Y-m-d H-i-s'),
        'updated_at' => date('Y-m-d H-i-s'),
    ];
}

\Hillel\Models\Category::insert($categories);

$category = \Hillel\Models\Category::inRandomOrder()->first();
$category->title = 'Category-Uodate';
$category->slug = 'Slug-Update';
$category->save();

\Hillel\Models\Category::inRandomOrder()->first()->delete();

$categories = \Hillel\Models\Category::all();

$posts = [];
for ($i =1; $i <= 10; $i++) {
    $posts[] =  [
        'title' => 'Post ' . $i,
        'slug' => 'post ' . $i,
        'body' => 'post-body ' . $i,
        'category_id' => $categories->random()->id,
        'created_at' => date('Y-m-d H-i-s'),
        'updated_at' => date('Y-m-d H-i-s'),
    ];
}

\Hillel\Models\Post::insert($posts);

$post = \Hillel\Models\Post::inRandomOrder()->first();
$post->title = 'Post-Uodate';
$post->slug = 'Post-Slug-Update';
$post->save();

\Hillel\Models\Post::inRandomOrder()->first()->delete();

$tags = [];
for ($i =1; $i <= 10; $i++) {
    $tags[] =  [
        'title' => 'title-teg ' . $i,
        'slug' => 'title-slug ' . $i,
        'created_at' => date('Y-m-d H-i-s'),
        'updated_at' => date('Y-m-d H-i-s'),
    ];
}

\Hillel\Models\Tag::insert($tags);

$tags = \Hillel\Models\Tag::all();

$posts = \Hillel\Models\Post::all();

foreach ($posts as $pos) {
    $tagsIds = $tags->pluck('id')->random(3);

    $post->tags()->sync($tagsIds);
}
