<?php

/**
 * http://localhost/Welcome/Docs/php-bigxhtml.html#pdo.setattribute
 */
    $a = $_POST['start'];
    $b = $_POST['limit'];

    $conn = new PDO("mysql:host=localhost;dbname=teste;","root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     
    $r = $conn->query("SELECT * FROM pessoa limit $a,$b")->fetchAll(PDO::FETCH_ASSOC);
      if(count($r) != 0){
          print_r(json_encode($r));
      } else{
          echo -1;
      }

   
    

    

  