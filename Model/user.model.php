<?php 

    class ModeloUsuario{
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;dbname=agencia_de_viajes;charset=utf8', 'root', '');
        }
        
        function verUsuarios(){
            $query =$this->db->prepare('SELECT * FROM usuarios');
            $query->execute();
            $usuario= $query->fetchAll(PDO::FETCH_OBJ);
         
              return $usuario;
            //
        }

        //OBTENEMOS USUARIOS POR EMAIL quitar el *
        public function obtenerPorUsuario($usuario){
            $query = $this->db->prepare('SELECT * FROM usuarios WHERE Nombre = ?');
            $query->execute([$usuario]);
            return $query->fetch(PDO::FETCH_OBJ);
        }
    }
    ?>
