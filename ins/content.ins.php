<?php

echo "\n".'<div class="col-md-9">'."\n";
echo "<h1>".strtoupper($currentPage)."</h1>";

$zaznamy = array();
$nazvy = array();
$sekcie = array();

//Importovanie jednotlivých zaznamov a ich casti do poli				
foreach($xml->children() as $zaznam){
	if($zaznam->kategoria == strtoupper($currentPage)){
		array_push($zaznamy, $zaznam);
		array_push($nazvy, (string)$zaznam->nazov);
		
		//Kontrola unikátnosti sekcii - budu zobrazene v rozcestniku
		if(!in_array((string)$zaznam -> sekcia, $sekcie)){
		array_push($sekcie,(string)$zaznam -> sekcia);
		}
	}
}

//Abecedne sortovanie poli
usort($zaznamy, function($a, $b) {return strcmp($a->sekcia, $b->sekcia);});
sort($nazvy);
sort($sekcie);

//Vytvarananie url názvu z vlozeneho textu
function url($textURL){
	$url = preg_replace('~[^\\pL0-9_]+~u', '-', $textURL);
	$url = trim($url, "-");
	$url = iconv("utf-8", "us-ascii//TRANSLIT", $url);
	$url = strtolower($url);
	$url = preg_replace('~[^-a-z0-9_]+~', '', $url);
	return $url;
}
	
//Vypis unikátnych sekcii
foreach($sekcie as $sekcia){
	echo "<hr>\n<h4><small>".mb_strtoupper($sekcia, "UTF-8")."</small></h4>\n";
	echo "<ul>\n";
	foreach ($zaznamy as $zaznam){
		if((string)$zaznam -> sekcia == $sekcia){
			echo '<li><a href="#'.url((string)$zaznam -> nazov).'">'.(string)$zaznam -> nazov."</a></li>\n";
		}
	}
	echo "</ul>\n";
}
	
echo "<hr><p>&nbsp;</p><p>&nbsp;</p>\n";
	
//Vypis jednotlivých záznamov
foreach($zaznamy as $zaznam){
	echo '<h2 id="'.url((string)$zaznam -> nazov).'">'.(string)$zaznam -> nazov."</h2>\n";
	echo "<p>".(string)$zaznam->obsah."</p>\n";
	echo "<hr>\n";
}

echo "</div>\n";