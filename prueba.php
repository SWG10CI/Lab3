<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
  	<?php

		$xml = simplexml_load_file('preguntas.xml');
 
        $registro = $xml->addChild('assessmentItem');
 
        $registro->addAttribute('complexity', '1');
        $registro->addAttribute('subject','a');
        $registro->addAttribute('author', 'a');
 
        $registro->addChild('itemBody', 'a');
 
          $correcta = $registro->addChild('correctResponse');
       		 $correcta->addChild('value', 'a');
 
          $incorrecta = $registro->addChild('incorrectResponses');
 
        $incorrecta->addChild('value', 'a');
        $incorrecta->addChild('value','a');
        $incorrecta->addChild('value', 'a');
 
        $dom = dom_import_simplexml($xml)->ownerDocument;
        $dom->formatOutput = TRUE;
 
        echo $xml->asXML();
        $xml->asXML('preguntas.xml');


	?>








  </body>