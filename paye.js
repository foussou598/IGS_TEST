function PrixU()
{
  var navigue = document.getElementById("article").value;
  if (navigue == 1)  {
    prixU1 = 10000;
    document.getElementById("prixu").value = prixU1;
  nbre =  document.getElementById("nombre").value;
  opera = nbre*prixU1;
  document.getElementById("affiche").value=opera;

  }
  else if (navigue == 2) {
         prixU2 = 16000;
         document.getElementById("prixu").value = prixU2;
         nbre =  document.getElementById("nombre").value;
         opera = nbre*prixU2;
         document.getElementById("affiche").value=opera;
  }
  else if (navigue == 3) {
    prixU3 = 12000;
    document.getElementById("prixu").value = prixU3;
    nbre =  document.getElementById("nombre").value;
    opera = nbre*prixU3;
    document.getElementById("affiche").value=opera;

  }
  else if (navigue == 4) {
    prixU4 = 18000;
    document.getElementById("prixu").value = prixU4;
    nbre =  document.getElementById("nombre").value;
    opera = nbre*prixU4;
    document.getElementById("affiche").value=opera;

  }
  else if (navigue == 5) {
    prixU5 = 12000;
    document.getElementById("prixu").value = prixU5;
    nbre =  document.getElementById("nombre").value;
    opera = nbre*prixU5;
    document.getElementById("affiche").value=opera;

  }
  else if (navigue == 6) {
    prixU6 = 12000;
    document.getElementById("prixu").value = prixU6;
    nbre =  document.getElementById("nombre").value;
    opera = nbre*prixU6;
    document.getElementById("affiche").value=opera;

  }

}


