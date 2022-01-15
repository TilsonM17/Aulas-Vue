<?php

/**
 * http://localhost/Welcome/Docs/php-bigxhtml.html#pdo.setattribute
 */


   $conn = new PDO("mysql:host=localhost;dbname=teste;","root","");
   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     
   //id, nome, morada, senha, email, id, id
   $r = $conn->prepare("INSERT INTO pessoa Values(:id,:nome,:morada, :senha, :email); ")->execute([
      ':id' => 0,
      ':nome' => $_POST['nome'],
      ':morada' => $_POST['morada'],
      ':email' => $_POST['email'] 
      ]);



   echo $r;

   
    

    

  