 <?php 

include 'includes/coneccion.php';
$cn = conectar::ctn();//la coneccion a la base de datos
// header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$cantidad_paginas = 5;
// $initial = $_GET["dato"];

if(!isset($_GET['pagina'])){

// echo json_encode("no ha venido nada en la url");
    $datos = conectar::ilimitado($cn,0, $cantidad_paginas);
    /*obtenemos la canticad de fillas en total encontradas y 
    la dividimis entre la cantidad de paguinas que queremos enviar*/
    $sub_t = $datos->rowCount() / $cantidad_paginas; //encuentra 22 / 5 = 4.4
     // redondeamos hacia arriba pra obtener un numero entero
              $redond = ceil($sub_t); //obtenemos4.4 redondeado hacia arriba 5
	// $total[] = array("total" => $redond); --



	$datos = conectar::limitado($cn,0, $cantidad_paginas);
while($result = $datos->fetch(PDO::FETCH_ASSOC)){
       $data[] = array("nomb"=>$result['nombre'], "total" => $redond);}
     

//impimimos la cantidad total + 5 filas por defecto
 // $tt = json_encode($total);--
 // echo $tt;--

$resultado = json_encode($data);
echo $resultado;

}else{
$limit = $_GET['pagina'];
$datos = conectar::limitado($cn, $limit, $cantidad_paginas);
while($result = $datos->fetch(PDO::FETCH_ASSOC)){

        $data[] = array("nomb"=>$result['nombre']);

	}
	
$resultado = json_encode($data);
echo $resultado;
}







  ?>
