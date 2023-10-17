<?php
  require_once("../conection.php");
    
  if (isset($_GET['id'])) {
  
      $id = $_GET['id'];
  
      $select = "SELECT * FROM costumer WHERE id=$id";

      $result = $conection->prepare($select);
      $result->execute();

      $count = $result->rowCount();
      
     if($count > 0)
     {
        $delete = "DELETE FROM costumer WHERE id=$id";
        $result = $conection->prepare($delete);
        $result->execute();

        header('Location: system.php');
     }
  }else {
      header('Location: system.php');
  }

?>