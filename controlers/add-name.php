<?php

//var_dump('You typed '.$_POST['name']);
//dd($tasks = $db->sellectAll('user','User'));
try{
$db->insertTo($_POST);
}

catch (PDOException $e){
    echo $e->getMessage();
}


header("Location:/");
