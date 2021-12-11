<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte_1</title>
    <link rel="stylesheet" href="estils/estils.css">
</head>
<body>
  <div class="all">
    <header>
      <h1 id="titol"></h1>
    </header>

    <nav>
        <form method="post">
          <select name="categories">
					       <option value="">Categories </option>
                 <option value="llits"> Llits </option>
                 <option value="cadires"> Cadires </option>
                 <option value="sofas"> Sofas </option>
                 <option value="emmagatzematge"> Emmagatzematge </option>
                 <option value="taules"> Taules </option>
				</select>
          <select name="materials">
					       <option value="">Material </option>
                 <option value="Acer"> Acer </option>
                 <option value="Fusta"> Fusta </option>
                 <option value="Plastic"> Plastic </option>
                 <option value="Poliéster"> Poliéster </option>
				</select>
          <select name="ordre">
					       <option value="">Ordena per:</option>
                 <option value="P.nom asc"> Alfabeticament (A-Z) </option>
                 <option value="P.nom desc"> Alfabeticament (Z-A) </option>
                 <option value="P.codi asc"> Id asendent </option>
                 <option value="P.codi desc"> Id desendent </option>
				</select>
				<button name="buscar" type="submit">filtra</button>
      </FROM>
    </nav>

      <main>

        <table id="taula">
          <tr>
            <th>Codi</th>
            <th>Nom</th>
            <th>Material</th>
            <th>Estoc</th>
            <th>Categories</th>
          </tr>

          <?php foreach($result as $registre): ?>
          <tr>
            <td> <?php echo $registre['codi']; ?> </td>
            <td> <?php echo $registre['nom_producte']; ?> </td>
            <td> <?php echo $registre['material']; ?> </td>
            <td> <?php echo $registre['estoc']; ?> </td>
            <td> <?php echo $registre['nom_categoria']; ?> </td>
          </tr>

          <?php endforeach; ?>
        </table>



               <div id="esquerra">
               <h1>Producte destacat</h1>
               <img src="fts/destacat11-21.png" alt="Producte destacat Novembre">

               </div>
               <div id="dreta">
                   <div id="adalt">
                   <h1 class="titol"></h1>
                       <div id="dalt">
                       <div id=button>
                       <p></p>
                       <a href="#">Mes Informació</a>
                       </div>
                       <img src="" alt="">
                   </div>
                   </div>
               <div id="abaix">
                   <h1></h1>
                   <div id="dbaix">
                   <p></p>
                   <img src="" alt="">
                   <a href="#">Mes Informació</a>
               </div>
               </div>
               </div>

      <h2>Aqui estaran els nostres mobles que oferim en la nostra empresa.</h2>
      <img src="fts/DISSENY WEB.png" alt="websito">
    </main>
    <footer>
      <div id="contacte"></div>
      <div class="footleft">
       <a id="fotitle">Més Informació</a>
        <div class="location">
          <br />
          <b>Direcció |</b> AV.Tarrega,18 25300
          <br />
          <br />
          <b>Tel |</b> 973570651
          <br />
          <br />
          <b>Email |</b> moblesdam@contacte.com
          <br />
          <br />
          <b>Horari |</b> Dilluns a Divendres
          <br />
          <br />
          10.00h - 14.00h i 16.00 - 20.00, Dissabte i Diumenge 10.00h - 14.00h
          </div>
        <br />
        <br />
        <br />
          Sponsors:
        <br />
        <br />
        <img class="sponsor" src="fts/descarga.png"/>
        <div class="politica">
          <a href="documents/privacitat" target="_blank"><u>Política de privacitat</u></a>
        </div>
        <div class="xarxes">
          <a href="https://es-es.facebook.com/" target="_blank"><img src="fts/facebook.png" id="facebook" alt="facebook"/></a>
          <a href="https://www.instagram.com//" target="_blank"><img src="fts/insta.png" id="insta" alt="instagram"/></a>
          <a href="https://twitter.com/" target="_blank"><img src="fts/twitter.png" id="twitter" alt="twitter"/></a>
        </div>
      </div>
    </footer>
  </div>
  <!-- <script src="js/funcions.js"></script> -->
</body>



</html>
