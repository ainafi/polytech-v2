<?php

try{
    $base= new PDO('mysql:host=localhost;dbname=polytech','root','root');
   
}
catch(Exception  $e){
    die('erreur'.$e->getMessage());
}
if(isset($_POST['sub'])):
    $request=$base->prepare('INSERT INTO test(reference,dateP,nom,sel) 
  VALUES(:reference,:dateP,:nom:sel)');
    $request->execute(array(
        'reference'=>$_POST['reference'],
        'dateP'=>$_POST['dateP'],
        'nom'=>$_POST['nom'],
        'sel'=>$_POST['sel'],
        
        
        
        
        
));
var_dump($request);

endif;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post">
        <!-- <label for="">Reference</label> -->
        <input type="text" name="reference" id="">
        <p>(ampidiro ny reference nanoavana ilay droit d'inscription)</p>
        <!-- <label for="">date de payment</label> -->
        <input type="date" name="dateP" id="">
        <p>(date nandoavana anazy)</p>
        <h4>Etat civil</h4>
        <!-- <label for="">nom</label> -->
        <input name="nom" type="text">
        <select name="sel" id="">
            <option value="a">a</option>
            <option value="b">b</option>
        </select>
       
        <input type="submit" name="sub" id="">

    </form>
</body>
</html>