<?php  
/*
@ PHP + XML @

	$ Para carregar um XML:
		# Se for um arquivo, use:
			$xml = simplexml_load_file("file.xml");

		# Se for uma string em XML ou um XML da internet, use:
			$xml = simplexml_load_string("file.xml");

*/

echo "<h2>Acesso e Exibição do XML</h2>";
$xml = simplexml_load_file("ondas.xml");
print_r($xml);

echo "Cidade: ". $xml->nome ."<br><br>";

foreach ($xml->manha as $key => $value) {
	// print_r($prev);
	foreach ($value as $subkey => $subvalue){
		echo $subkey." => ".$subvalue."<br><br>";
	}
}

echo "<br><br>---------------------------<br><br>";

echo "<h2>Manipulação do XML</h2>";
/*
	&$xml_data => significa que vai alterar ele mesmo, está dizendo que a variavel xml_data será alterada para além da função
*/
function array_to_xml( $data, &$xml_data ) {
    foreach( $data as $key => $value ) {
        if( is_array($value) ) {
            if( is_numeric($key) ){
                $key = 'item'.$key;
            }
            $subnode = $xml_data->addChild($key);
            array_to_xml($value, $subnode);
        } else {
        	if( is_numeric($key) ){
                $key = 'item'.$key;
            }
            $xml_data->addChild($key, htmlspecialchars($value));
        }
     }
}

$data = array(
	"nome" => "Soler",
	"sobrenome" => "de Lawdor",
	"idade" => 9000,
	"caracteristicas" => array(
		"amigo",
		"fiel",
		"companheiro",
		"legal"
	)
);

// SimpleXMLElement - Representa um elemento em um documento XML. (Cria um novo objeto SimpleXMLElement)
$xml_data = new SimpleXMLElement('<data/>');

array_to_xml($data, $xml_data);

$result = $xml_data->asXML();
echo $result;


?>