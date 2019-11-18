 <?php


// creamos la clase para la coneccion
class conectar{
	// funcion que crea la coneccion
	//no recibimos parametros, queda tal cual
	public function ctn(){
		$server = "localhost";
		$dtb  = "destinia";
		$user = "ricardo";
		$pass = "pass123456";
     try {
    $c = new PDO("mysql:host=$server;dbname=$dtb", $user, $pass);
    // capturamos los errores de una mala coneccion
    $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // echo "Connected successfully";
       return $c;
    }
      catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
  
	} //ctn


  public function insert($cn,$ciudad, $provincia, $imagen, $tipo, $nombre, $estrellas, $hab_tipo, $disponible, $capacidad){


$inser = "INSERT INTO propiedades (ciudad, provincia, url_img, tipo, nombre_propiedad, estrellas, tipo_hab, cantidad_disp, capacidad) VALUES (?,?,?,?,?,?,?,?,?)";

$b = $cn->prepare($inser);
$salio = $b->execute([$ciudad, $provincia, $imagen, $tipo, $nombre, $estrellas, $hab_tipo, $disponible, $capacidad]);
 return $salio;
   } //inserta



   public function formatjson($cn){

    $gsent = $cn->prepare("SELECT * FROM propiedades");
$gsent->execute();
  return $gsent;

   }


   public function limitado($cn , $limit, $cant ){
      $bsc_data = "SELECT * FROM minipractica LIMIT $limit, $cant";
      $envia = $cn->prepare($bsc_data);
      $envia->execute();
      return $envia;

   }

   public function ilimitado($cn ){
      $bsc_data = "SELECT * FROM minipractica";
      $envia = $cn->prepare($bsc_data);
      $envia->execute();
      return $envia;

   }
    
}


 
 
    
 

?> 