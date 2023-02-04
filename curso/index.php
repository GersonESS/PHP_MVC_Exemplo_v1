<?php
 try 
 {
     $pdo = new PDO("mysql:dbname=cadastro;host=localhost","root","gabibi89");
 }  
 catch(PDOException $e) {
    echo "Erro ".$e->getMessage();
 } 
 catch(Exception $e)
 {
    echo "Erro ".$e->getMessage();
 }      