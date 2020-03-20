<?php
    //   il recupere les informations du formulaire lorsqu'il clique sur submit 
	if (isset($_POST['submit'])) {
        include('db.php');
        $pseudo =$_POST['pseudo'];
        $mot_pass =$_POST['mot_pass'];
        $confirmation =$_POST['confirmation'];
        $sql ='INSERT INTO client (pseudo,mot_pass, confirmation)
               VALUES("'.$pseudo.'","'.$mot_pass.'","'.$confirmation.'")';

               $test = mysqli_query($conn,$sql);
               if ($test == true) {
                   echo "Insertion reussie <a href=index.php>retour</a>";
               }else{
                   echo "erreur";
               }

    }
  ?>