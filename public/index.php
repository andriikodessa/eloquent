<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

use \Hillel\Models\Category;
use Hillel\Models\Post;
use Hillel\Models\Tag;

//$cat = Category::all();
//
//echo "<pre>";
//var_dump($cat);
//echo "<pre>";

//$category1 = new Category;
//$category1->title = 'Title1';
//$category1->slug = 'Slug1';
//$category1->save();
//
//$category2 = new Category;
//$category2->title = 'Title2';
//$category2->slug = 'Slug2';
//$category2->save();
//
//$category3 = new Category;
//$category3->title = 'Title3';
//$category3->slug = 'Slug3';
//$category3->save();
//
//$category4 = new Category;
//$category4->title = 'Title4';
//$category4->slug = 'Slug4';
//$category4->save();
//
//$category5 = new Category;
//$category5->title = 'Title5';
//$category5->slug = 'Slug5';
//$category5->save();

//$category = Category::find(9);
//$category->title = 'Titletitle';
//$category->slug = 'Slugslug';
//$category->save();

//$category = Category::find(8);
//$category ->delete(8);

//$category = Category::find(27);
//$category->title = 'Titletitle';
//$category->slug = 'Slugslug';
//$category->save();

//$category = Category::find(26);
//$category->delete(26);

//$dataPost = [
//    'title' => 'Title10',
//    'slug' => 'Slug10',
//    'body' => 'Body10',
//    'category_id' => '27'
//];
//
//$post = Post:: create($dataPost);

//$updatepost = Post::find(5);
//$updatepost->title = 'Titletitle';
//$updatepost->slug = 'Slugslug';
//$updatepost->body = 'Bodybody';
//$updatepost->category_id = '25';
//$updatepost->save();

//$updatepost = Post::find(9);
//$updatepost->delete();

//$dataTags = [
//    'title' => 'Title10',
//    'slug' => 'Slug10',
//];
//
//$post = Tag:: create($dataTags);

//$category = Category::find(25);
//
//echo "<pre>";
//var_dump($category->post-> title);
//echo "<pre>";

//$category = Category::find(27);
//foreach ($category->posts as $post) {
//    echo $post->title;
//}

//$post = Post::find(3);
//
//echo $post->title . "<br>";
//
//$post->category->title . ' ' . $post->category->slug;

//$category = Category::find(27);
//
//foreach ($category->posts as $post){
//    echo $post->title . '<br>';
//    foreach ($post->tags as $tag) {
//        echo $tag->title . ' ';
//    }
//}

//$tag = Tag::find(2);
//
//foreach ($tag->posts as $post){
//    echo $post->title . '<br>';
//    foreach ($post->tags as $tag) {
//        echo $tag->title . ' ';
//    }
//}

//$tags = Tag::all();
