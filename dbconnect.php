<?php
    //connect to mydb
    try{
            $db=new PDO('mysql:dbname=shortcut_db;host=127.0.0.1;charset=utf8','root','');
        }catch(PDOException $e){
            echo 'DB error:'.$e->getMessage();
        }
?>