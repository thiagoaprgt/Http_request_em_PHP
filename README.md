# Http_request_em_PHP
 Abstração orientada a objetos da função curl do PHP
 
 
 #Exemplo como monitorar o cabeçalho HTTP que foi enviado:
 
 
 <?php

    require_once "Http/Http.php";
    
    $url = "http://localhost/teste/php/api.php";


    $parameters = [

        "nome" => "Carla",
        "esporte" => "natação"

    ];



    $http = new Http;

    $headers = array("access_token: Bearer123", "msg: Deu Certo");
    
    
       

    $result = $http->post($url, $parameters, $headers);

    echo "<pre>";

            

            echo "<br>----- http header ------<br><br>";

            $info = curl_getinfo($result["curlHandle"])["request_header"];

            print_r($info);

            echo "<br>----- http header ------ <br><br><br>";

    echo $result["output"];
