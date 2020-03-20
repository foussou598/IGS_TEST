<?php 
      if (isset($_POST['connexion'])) {
          include('db.ph');
          $pseudo =$_POST['pseudo'];
          $_mot_pass =$_POST['mot_pass'];
          $sql ='INSERT INTO client(pseudo,mot_pass)
                 VALUES("'.$pseudo.'", "'.$mot_pass.'")';
                 

      }

?>