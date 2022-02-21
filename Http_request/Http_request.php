<?php   

    namespace library;

    class Http {

        public function  get(string $url, array $array, array $headers = []) {

            // o padrão dos verbos HTTP no curl é GET


            $ch = curl_init();

            $data = http_build_query($array);

            $url = $url . "?" . $data;  
            

            curl_setopt($ch, CURLOPT_URL, $url); // configura a url 
            
            curl_setopt($ch, CURLINFO_HEADER_OUT, true); // habilita a possibilidade monitorar o header enviado através da função curl_getinfo()
            
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // envia os dados

            if(!empty($headers)) {

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                //echo "header do GET deu certo. <br><br>";

                
            }else{
                echo "header está vazio <br><br>";
            }

            $result["curlHandle"] = $ch; // retorna o objeto curl para ser usado no monitoramento do cabeçalho HTTP enviado, para isso basta usar a função curl_getinfo()
            $result["output"] = curl_exec($ch);  // executa e retorna uma reposta            
            
            curl_close($ch); 
            
            return $result;


        }


        public function post(string $url, array $array, array $headers = []) {
            
                   
            $ch = curl_init();
        
            curl_setopt($ch, CURLOPT_URL, $url); // configura a url
        
            curl_setopt($ch, CURLOPT_POST, true); // configura o verbo http post
            
            curl_setopt($ch, CURLINFO_HEADER_OUT, true); // habilita a possibilidade monitorar o header enviado através da função curl_getinfo()
        
            $post_data = http_build_query($array);              
        
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data); // prepara os dados para enviar via post
        
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // envia os dados

            if(!empty($headers)) {

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);                
                

            }else{
               echo "Verbo post: header está vazio";
            }
        
            $result["curlHandle"] = $ch; // retorna o objeto curl para ser usado no monitoramento do cabeçalho HTTP enviado, para isso basta usar a função curl_getinfo()
            $result["output"] = curl_exec($ch);  // executa e retorna uma reposta
        
            curl_close($ch);
            
            
            
            return $result;
            
        
            
        }

        public function put() {}

        public function patch() {}

        public function delete() {}

    }








?>
