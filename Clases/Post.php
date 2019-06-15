<?php
require '../core/Functions.php';


class Post
{
    public $title;
    public  $published;

public function __construct($title, $published)
{
    $this->published = $published;
    $this->title = $title;
}
}

$posts = [
    new Post('Post1' ,true ),
    new Post('Post2' , false ),
    new Post('Post3' , true ),
    new Post('Post4' , false ),
    new Post('Post5' ,  true),
    new Post('Post6' ,  false),
];

//First arg = array we want to filter second arg = function that returns if we want to include the item from the aray
$unpublishedPosts = array_filter($posts , function ($post){
    return !$post->published;
});

//Going trough an array and changing some of the items values // usefull for modifying arrays
$modified = array_map(function ($post){
    $post->published = true;
    return (array)$post;
},$posts);

//Getting all the values from a specified key // paramater must be public
$titles = array_column($posts , 'title');

dd($titles);
