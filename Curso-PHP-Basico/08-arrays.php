<?php 
//Arrays
	$carros = array(1 =>"BMW", 2=> "HILLUX", 3=> "PAJERO");
	
	//inserindo no array

	$carros[] = "CAMARO";
	print_r($carros);

	echo "<hr>";

	$motos = array();
	$motos[] = "Yamaha";
	$motos[] = "Honda";
	$motos[] = "Suzuki";
	print_r($motos);
	echo "<hr>";

	$clientes = ["Rodrigo", "Felipe", "Bia"];
	print_r($clientes);
	echo "<br>";
	
	//função count
	$totalClientes = count($clientes);
	echo $totalClientes;

	echo "<hr>";

	//ForEach
	foreach ($carros as $carro) {
		echo "$carro <br>";
	}
	echo "<hr>";
	//Arrays associativos

	$pessoa = array("nome" => "Tobias", "idade" => 36, "altura" => 1.76);
	$pessoa["cidade"] = "São Luís";
	print_r($pessoa);
	echo $pessoa["nome"]."<br>";

	foreach ($pessoa as $indice => $value) {
		echo $indice." - ".$value."<br>";
	}
	//Arrays multidimensionais
	$times = array("cariocas" => array("vasco", "flamengo", "botafogo"),
					"paulistas" => array("santos", "sao paulo", "palmeiras"),
					"maranhenses" => array("moto", "sampaio", "MAC"));
	//print_r($times);
	echo $times["cariocas"][0];

	echo "<br>";

	$regioes = array(
              "Norte" => array("Roraima", "Acre", "Amapá", "Amazonas", "Pará", "Rondônia", "Tocantins")
            , "Nordeste"  => array("Maranhão", "Piauí", "Ceará", "Rio Grande do Norte", "Paraíba", "Pernambuco", "Alagoas", "Sergipe", "Bahia")
            , "CentroOeste" => array("Goiás", "Mato Grosso", "Mato Grosso do Sul", "Distrito Federal")
            , "Sudeste" => array("Espírito Santo", "Minas Gerais", "São Paulo", "Rio de Janeiro")
            , "Sul" => array("Santa Catarina", "Paraná", "Rio Grande do Sul")
        );
                
        echo "Os estados da região sul são: <br/>";
        foreach($regioes['Nordeste'] as $estado){
            echo $estado . "<br/>";
        }
 ?>
