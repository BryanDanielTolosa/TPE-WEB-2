<?php 

class ModelCruceros{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=agencia_de_viajes;charset=utf8', 'root', '');
    }

    function GetCruceros(){
        $query = $this->db->prepare('SELECT * FROM cruceros INNER JOIN ciudad  on cruceros.id_ciudad = ciudad.id_ciudad');
        $query->execute();

        //Obtengo arreglo de cruceros
        $cruceros= $query->fetchAll(PDO::FETCH_OBJ);
        
        return $cruceros;
    }

    //Agregamos cruceros a la base de datos.
    //INSERT INTO `cruceros`(`id_cruceros`, `nombre`, `cantidad tripulantes`, `estrellas`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
    function agregarCrucero($nombre,$cantidad_tripulantes,$estrellas,$id_ciudad){
        echo "hola";
        $query=$this->db->prepare("INSERT INTO cruceros(id_ciudad,nombre,cantidad_tripulantes,estrellas) VALUES(?,?,?,?)");
        $query->execute([$id_ciudad,$nombre,$cantidad_tripulantes,$estrellas]);
echo "hola";

        return $this->db->lastInsertId();
    }

    function eliminarCrucero($id){            
        $query = $this->db->prepare('DELETE FROM `cruceros` WHERE id_cruceros = ?'); //Verificar los nombres si estan bien.
        $query->execute([$id]);
    }

    
    function GetCrucero($id){
        $query =$this->db->prepare("SELECT * FROM cruceros LEFT JOIN ciudad on cruceros.id_ciudad = ciudad.id_ciudad WHERE cruceros.id_cruceros = ?");
        $query->execute([$id]);
        $cruceros= $query->fetch(PDO::FETCH_OBJ);
        
          return $cruceros;
        }
    function editarCruceros($id,$id_ciudad,$nombre,$cantidad_tripulantes,$estrellas){
        $query=$this->db->prepare("UPDATE `cruceros` SET id_ciudad = ?, nombre = ? ,cantidad_tripulantes= ?, estrellas = ?  WHERE id_cruceros = ?");
        $query->execute([$id_ciudad,$nombre,$cantidad_tripulantes,$estrellas,$id]);
    }


    function GetCrucero_x_ciudad($id) {
        $query = $this->db->prepare("SELECT * FROM cruceros WHERE id_ciudad = ?");
        $query->execute([$id]);
        $cruceros = $query->fetchAll(PDO::FETCH_OBJ);    
        return $cruceros;
    }
}

    
?>
