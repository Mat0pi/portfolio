<?php
  require_once("../conection.php");
    
  if (isset($_GET['id'])) {
  
      $id = $_GET['id'];
  
      $select = "SELECT * FROM usuarios WHERE id=$id";

      $result = $conection->prepare($select);
      $result->execute();

      $count = $result->rowCount();
      
     if($count > 0)
     {
        $delete = "DELETE FROM usuarios WHERE id=$id";
        $result = $conection->prepare($delete);
        $result->execute();

        header('Location: system.php?page=clients');
     }
  }else {
      header('Location: system.php?page=clients');
  }

?>