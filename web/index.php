<?php

    //Connexio a la BD
    $connexio = new mysqli("localhost", "root", "Fat/3232", "empresa");

    //Comprovasio de la connexio
    if($connexio->connect_errno){
        die ("No s'ha pogut fer la connexió");
    } else {

      $where = "";
      // $ordre = $_POST['ordre'];

      if (isset($_POST['buscar'])) {
      $categories = $_POST['categories'];
      $material = $_POST['materials'];

        if (empty($_POST['categories'])) {

              $where="where material='".$material."'";

        	} else if (empty($_POST['material'])) {

              $where="where C.nom ='".$categories."'";

          	} else {

		          $where="where C.nom ='".$categories."' and material='".$material."'";
	        }
      } else {
        $where = "";
      }







        //Consulta
        $sql = "SELECT P.codi, P.nom nom_producte, material, estoc, C.nom nom_categoria FROM productes P join categories C on P.codi_cat = C.codi $where order by P.codi;" ;
        $result = $connexio->query($sql);
      }






    require 'index.view.php';
?>
