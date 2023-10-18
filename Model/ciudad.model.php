<?php 

    class ModeloCiudad{
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;dbname=agencia_de_viajes;charset=utf8', 'root', '');
        
        }

        //ObtenerCiudad()
        function GetCiudades(){    
            $query =$this->db->prepare('SELECT * FROM ciudad');
            $query->execute();
            $ciudades= $query->fetchAll(PDO::FETCH_OBJ);

          return $ciudades;
        }
        function GetCiudad($id){
            $query=$this->db->prepare("SELECT * FROM ciudad  WHERE id_ciudad = ? ");
            $query->execute([$id]);
            return $query->fetch(PDO::FETCH_OBJ);
        }
        function eliminarCiudad($id){
            $query=$this->db->prepare("DELETE FROM ciudad WHERE id_ciudad = ?  ");
            try{
                $query->execute([$id]);
            }
            catch(PDOException $ex){
                die('no se puede borrar esta ciudad');
            }
        }
        function insertarCiudad($ciudad,$pais){
            $query=$this->db->prepare("INSERT INTO ciudad(ciudad,pais) VALUES (?,?)");
            $query->execute([$ciudad,$pais]);
            return $this->db->lastInsertId();
        }
        function editarCiudad($ciudad,$pais,$id){
            $query=$this->db->prepare ("UPDATE ciudad SET ciudad = ?, pais= ? WHERE id_ciudad = ?");
            $query->execute([$ciudad,$pais,$id]);
        }
        }
    ?>
