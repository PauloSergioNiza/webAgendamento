<?php


date_default_timezone_set ('America/Sao_Paulo');



define ( 'BD_SERVIDOR' , 'localhost' );
define ( 'BD_USUARIO' , 'root' );
define ( 'BD_SENHA' , '' );
define ( 'BD_BANCO' , 'webagendamentos' );
    
class banco {

   protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setAgendar($nome,$telefone,$origem,$data_contato,$observacao){
        $stmt = $this->mysqli->prepare("INSERT INTO agendamentos (`nome`, `telefone`, `origem`, `data_contato`, `observacao`) VALUES (?,?,?,?,?)");
       
	   $stmt->bindParam("sssss",$nome,$telefone,$origem,$data_contato,$observacao);
	   
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }
}    
?>