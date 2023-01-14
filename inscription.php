<?php

try{
    $base= new PDO('mysql:host=localhost;dbname=polytech','root','root');
   
}
catch(Exception $e){
    die('erreur'.$e->getMessage());
}

$message;
if(isset($_POST['envoyer'])):
    if($_POST['reference']!=''):
    $request=$base->prepare('INSERT INTO inscri(reference,datepayemment,nom,prenom,naissance,province,sexe,adresse,phone,annebacc,serie,centre,matiere,pole) 
    VALUES(:reference,:datepayemment,:nom,:prenom,:naissance,:province,:sexe,:adresse,:phone,:annebacc,:serie,:centre,:matiere,:pole)');
    // mandefa req any @ base
     $request->execute(array(
    'reference'=>$_POST['reference'],
    'datepayemment'=>$_POST['datepayemment'],
    'nom'=>$_POST['nom'],
    'prenom'=>$_POST['prenom'],
    'naissance'=>$_POST['naissance'],
    'province'=>$_POST['province'],
    'sexe'=>$_POST['sexe'],
    'adresse'=>$_POST['adresse'],
    'phone'=>$_POST['phone'],
    'annebacc'=>$_POST['annebacc'],
    'serie'=>$_POST['serie'],
    'centre'=>$_POST['centre'],
    'matiere'=>$_POST['matiere'],
    'pole'=>$_POST['pole'],

));

$message='insertion avec succes';
else:
  $message='insertion avec incorrecte';
endif;
endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="actualite.css">
</head>
<body>
<header>
        <nav class="navbar">
           <img src="./asset/images/Sans titre.png" alt="">
           <h5>Ecole superieur polytechnique administration central</h5>
        </nav>
    </header>

    <main>
    <?php if(isset($message)):?>
     <div class="alert alert-success" role="alert">
      <?php echo $message;?>
    </div>
  <?php endif; ?>
        <form action="" method="post">
            <label  >Reference</label>
            <input name='reference' type="text">
            <p>(ampidiro ny reference nanoavana ilay droit d'inscription)</p>
            <label  >date de payment</label>
            <input name='datepayemment' type="date">
            <p>(date nandoavana anazy)</p>
            <!-- info eleve -->
            <h4>Etat civil</h4>
            <label  >nom</label>
            <input name='nom' type="text">
            <label  >prenom</label>
            <input name='prenom' type="text">
            <label  >date de naissance</label>
            <input name='naissance' type="date">
            <label  >region de naissance</label>
            <select name="province" id="">
            <option value='antananarivo'>antananarivo</option>
                    <option value="toamasina">toamasina</option>
                    <option value="antsiranana">antsiranana</option>
                    <option value="fianarantsoa">fianarantsoa</option>
                    <option value="mahajanga">mahajanga</option>
                    <option value="toliara">toliara</option>
            </select>
            <select name="sexe" id="">
                <option value="male">male</option>
                <option value="femme">femme</option>
            </select>

            <!--coordonne -->
            <h4>coordonne</h4>
            <label  >adresse de convocation</label>
            <input name='adresse' type="text">
            <p>adresy mazava andefasana ny convocation</p>
            <label  >telephone</label>
            <input name='phone' type="text">

            <!-- info du bacc -->
            <h4>information du bacc</h4>
            <label  >anne obtention </label>
            <input name='annebacc' type="text">
            <select name="serie" id="">
                <option value="D">D</option>
                <option value="C">C</option>
                <option value="S">S</option>
                <option value="TECH">TECH</option>
            </select>


            <!-- info concours -->
            <h5>centre de concours</h5> <span>mettre votre choix de concours</span>
                    <h4>information concours</h4>
            <select name="centre" id="">
                     <option value="antananarivo"selcted>antananarivo</option>
                    <option value="toamasina">toamasina</option>
                    <option value="antsiranana">antsiranana</option>
                    <option value="fianarantsoa">fianarantsoa</option>
                    <option value="mahajanga">mahajanga</option>
                    <option value="toliara">toliara</option>
            </select>

            <h4>matiere optionnel</h4>
            <select name="matiere" id="">
                <option value="CHIMIE">CHIMIE</option>
                <option value="ELECTRICITE">ELECTRICITE</option>
                <option value="RDM">RDM</option>
               
            </select>

            <h4>pole</h4>
            <select name="pole" id="">
                    <option class='choose-I' value="Genie Des Procedes Industrielle">Genie Des Procedes Industrielle</option>
                    <option class='choose-II' value="Genie Des Sciences Et Technologie Industrielle">Genie Des Sciences Et Technologie Industrielle</option>
                    <option class='choose-III' value="Genie Des Sciences Et De La Terre">Genie Des Sciences Et De La Terre</option>
                    <option class='choose-IV' value="Genie Civil">Genie Civil</option>
               
            </select>

            <div class="choose"  style="display: none;">

            <select name="filiere" class='choose-1' id="">
                    <option value="electronique">electronique/option&gt;
                    </option><option value="telecommunication">telecommunication</option>
                    <option value="Meteorologie">Meteorologie</option>
            </select>

            <select name="filiere" class='choose-2' id="">
                    <option value="genie rural">genie rural</option>
                    <option value="Génie Mécanique et industriel">Génie Mécanique et industriel</option>
                    <option value="Génie Electrique ">Génie Electrique </option>
                    <option value="Sciences et Ingénierie des Matériaux  ">Sciences et Ingénierie des Matériaux 
                    </option><option value="genie des Procédés Chimiques et Industriels ">genie des Procédés Chimiques et Industriels </option>
            </select>

            <select name="filiere" class='choose-3' id="">
                    <option value="Bâtiments et Travaux Publics">Bâtiments et Travaux Publics </option>
                    <option value="Urbanisme et Génie Civil">Urbanisme et Génie Civil</option>
                    <option value="Information Géographique et Aménagement du Territoire">Information Géographique et Aménagement du Territoire</option>
            </select>
            
            <select name="filiere" class='choose-4' id="">
                    <option value="Ingénierie minière">Ingénierie minière</option>
                    <option value="Ingénierie pétrolière">Ingénierie pétrolière</option>
            </select>
         </div>

          
            <button name='envoyer' id='ok' type="submit">INSCRIRE</button>
        </form>

    </main>
    <script src="./asset/js/jquery.min.js"></script>
    <script src="./asset/js/formulaire.js"></script>

  
</body>
</html>