<?php

    //Connexio a la BD
    $connexio = new mysqli("localhost", "root", "1234", "empresa");

    //Comprovasio de la connexio
    if($connexio->connect_errno){
        die ("No s'ha pogut fer la connexió");
    } else {

      $where = "";
      $ordre = "P.codi";

      if (isset($_POST['buscar'])) {
        $categories = $_POST['categories'];
        $material = $_POST['materials'];

        if(empty($_POST['categories']) and empty($_POST['materials'])){

          $where = "";

        } else if (empty($_POST['categories'])) {

          $where="where material='".$material."'";

        } else if (empty($_POST['materials'])) {

          $where="where C.nom ='".$categories."'";

        } else {

		      $where="where C.nom ='".$categories."' and material='".$material."'";
	      }

        if(empty($_POST['ordre'])){
          $ordre = "P.codi";

        } else {
          $ordre = $_POST['ordre'];
        }
      }


        //Consulta
        $sql = "SELECT P.codi, P.nom nom_producte, material, estoc, C.nom nom_categoria FROM productes P join categories C on P.codi_cat = C.codi $where order by $ordre;" ;
        $result = $connexio->query($sql);
      }


    require 'index.view.php';
?>
