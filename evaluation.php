<?php

$file = fopen("questions.qs", "r" );//ouvre le fichier

$lines=file("questions.qs");$theme = "##";//lit la 1ere ligne

$question = "#";
$tableau=file("questions.qs");
$possibilites = array();//tableau
//$monfichier = fopen('reponses.html', 'rw');

$numero=0;

echo '<!DOCTYPE html>'.

    '<html>'.

    '<head>'.

    '<meta http-equiv="content-type" content="text/html; charset=utf-8" />'.

    '<title>evaluations du 03 janvier 2017 – ville</title>'.

    '<link rel="stylesheet" type="text/css" href="style.css">'.

    '</head>'.

    '<body>'.
		'<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>'.
	
    '<article>'.

    '<h1>evaluations du 03 janvier 2017 – Beziers</h1>'.

    '<h2>Giroud Clément</h2>'.

    '<section id="bloc1">'.
		'<form method="POST" action="choix.php">';
    echo "\n";
		

foreach ($lines as $linenumber => $linecontent) {

  if (empty($linecontent) or strlen($linecontent) < 2) continue;

  if (substr($linecontent, 0, 2) == "##") {

      // On reinitialise les variables quand on detecte un nouveau theme

      $question = "";

      $possibilites = array();

echo '</article><article>';

      $tableau1 = $linecontent;

echo '<h3>',$tableau1,'</h3>'."\n";

  }

  elseif ($linecontent[0] == '#' and $linecontent[1] != '#') {

      // On reinitialise notre variable possibilité quand on detecte une nouvelle question

      $possibilites = array();

      $tableau2 = $linecontent;

echo '<section id=bloc1><h4><span>',$numero, $tableau2,'</span></h4>', "\n";

      $numero ++; 
	    if ($tableau[$linenumber+1][0]=="#")
			{
				echo '<input type="textarea" onkeyup="updateTime(\'h' . $value . '\')"  name="'.$numero.'" value="'.$value.'">'.'<br>';
				
				// <input type="box" name="saisie[]" value="2"> nom 2<br>
			}
	}    elseif ($linecontent[0] == '-')
		
  {

    $possibilites = $linecontent;
// echo '<li>'.$possibilites.'</li>'."\n";
		 
		 
     echo'<input type="radio" onclick="updateTime(\'h' . $value . '\')" name="'.$numero.'" value="'.$tableau2.$linecontent.'">'.$possibilites.'<br>';     // <input type="checkbox" name="choix[]" value="2"> nom 2<br>
     // <input type="checkbox" name="choix[]" value="3"> nom 3<br>
     // <input type="checkbox" name="choix[]" value="4"> nom 4<br>
     // <input type="checkbox" name="choix[]" value="5"> nom 5<br>

   }

 }
//$monfichier =fclose('reponses.html');
echo '<input type="submit" value="Envoyer">';
echo '</form>';
