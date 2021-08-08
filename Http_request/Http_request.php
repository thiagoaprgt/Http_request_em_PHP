<?php   


    class Http_request {

        public function  http_get_Request() {

            // o padrão dos verbos HTTP no curl é GET


            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url); // configura a 
            
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // envia os dados

            $result = curl_exec($ch);     // executa e retorna uma reposta
        
            curl_close($ch);     

        }


        public function http_post_Request(string $url, array $array) {
            
                   
            $ch = curl_init();
        
            curl_setopt($ch, CURLOPT_URL, $url); // configura a url
        
            curl_setopt($ch, CURLOPT_POST, true); // configura o verbo http post
        
            $post_data = http_build_query($array);    
        
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data); // prepara os dados para enviar via post
        
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // envia os dados
        
            $result = curl_exec($ch);     // executa e retorna uma reposta
        
            curl_close($ch); 
            
            return $result;
            
        
            
        }

        public function http_put_Request() {}

        public function http_patch_Request() {}

        public function http_delete_Request() {}

    }








?>