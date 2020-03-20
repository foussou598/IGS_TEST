
<!DOCTYPE html>
<html lang="en" dir="ltr">


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>achat_article</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="paye.css">
    <!--menu gauche calculatrice-->
   

    
    <title></title>
  </head>
  <body>

    <!--menu gauche calculatrice-->
   
    

    <!--fin menu gauche calculatrice-->

    <!--debut calculatrice-->
      <div class="wrapper">
        <div class="payment">
              <div class="payment-logo">
                <p>A</p>
              </div>
              <h2>ACHATS ARTICLES</h2>

<form name="form" action="" action="index.html" method="post">


                            <label class="label">Choix Articles:</label>
                            <select class="arti" name="articl" id="article" onchange="PrixU()">
                              <option value="0">votre choix</option>
                                <option value="1">Ceinture Thoracique</option>
                                <option value="2">Redresse Dos</option>
                                <option value="3">Redresse Dos Transpirable</option>
                                <option value="4">Ceinture Hernie Ombricale</option>
                                <option value="5">Bande Echarpe</option>
                                <option value="6">Orthese de Poignet Courte</option>
                            </select>
                                     <br><br>
                                     <label for="seller">prix Unitaire:</label>
                                      <input type="text" name="unitaire" id="prixu" disabled>

                                     <br><br>
                          <label class="">Nombre Articles:</label>
                          <input type="number" class="" placeholder="Nombres" id="nombre" onkeyup="PrixU()">
                                      <br><br>

                                   <br>
                        <div class="tota">
                            <label class="">Total a Payer:</label>
                            <input type="text" class="" id="affiche" disabled>

                        </div>

                        <div class="calc">
                            <input  type="button" name="" value="PAYER" id="valide">
                        </div>


</form>

        </div>
  </div>
  <script src="paye.js"></script>
  
  </body>
</html>
