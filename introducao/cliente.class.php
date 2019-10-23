<?php

    class Cliente{
        private  $id;
        private  $nome;
        private  $telefone;
        private  $email;
        private  $cpf;

        public function setEmail($email){
            $this->email = $email;
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $this->email = $email;
            }else {
                throw new Exception('E-mail Inválido');
            }
        }
        public function getEmail(){
            return $this->email;
        }
        public static function mensagem(){
            //Informação que não muda  
            echo "Olá Mundo <br/> ";
        } 
    }
     Cliente::mensagem();//Informação que não muda  
       
    $obj = new Cliente();
    $obj->setEmail("gabriel@gmail.com");// com encapsulamento
    echo $obj->getEmail();//com encapsulamento
    echo "<br/>";
    $obj->email = "gabrielslolijjkk@gmail.com";//sem encapsulamento 
    echo $obj->email;

?>