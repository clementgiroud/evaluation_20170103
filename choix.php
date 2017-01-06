<?php
//print_r($_POST);
// Le tableau $_POST['prenom'] contient les valeurs des checkbox cochées

//$fp = fopen("reponses.html", "w+");
//header('Location:reponses.html');
  fputs($fp, '<!DOCTYPE html>

      <html>

      <head>

      <meta http-equiv="content-type" content="text/html; charset=utf-8" />

      <title>evaluations du 03 janvier 2017 – ville</title>

      <link rel="stylesheet" type="text/css" href="style.css">

      </head>

      <body>');

foreach($_POST as $key => $value)

{
  echo '<!DOCTYPE html>'.

      '<html>'.

      '<head>'.

      '<meta http-equiv="content-type" content="text/html; charset=utf-8" />'.

      '<title>evaluations du 03 janvier 2017 – ville</title>'.

      '<link rel="stylesheet" type="text/css" href="reponse.css">'.

      '</head>'.

      '<body>';
	echo $key . '<p>'," réponse :   $value<br>",'</p>';

   //echo '<p>',"La checkbox, $valeur a été cochée<br>", //'<section id=heure>',$heure //=date("H:i"),'</section>','</p>';
//fputs($fp, '<p>La checkbox $valeur a été cochée<br><section //id=heure>$heure =date("H:i")</section></p>');
//fputs($fp, $valeur);	
	
}


//foreach($_POST['numero'] as $valeur) 
//{
//		echo '<p>',"La box, $valeur a été entrée<br>", '<section id=heure>',$heure =date("H:i"),'</section>','</p>';
//fputs($fp, '<p>La box $value a été ecrite<br> <section id=heure>$heure =date("H:i")</section></p>');	
//}

