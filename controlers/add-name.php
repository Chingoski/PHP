<?php

//var_dump('You typed '.$_POST['name']);
//dd($tasks = $db->sellectAll('user','User'));
try{
    App::getItem('database')->insertTo($_POST);
}

catch (PDOException $e){
    echo $e->getMessage();
}


header("Location:/");
