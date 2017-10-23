<?php
include './activos.php';

session_start();
//sino esta vacio
if(!empty($_GET['terminar'])){
    
    header('Location:factura.php');
    return;
}

//borrar

//if(!empty($_GET['posicion'])){
//     $activoss=  unserialize($_SESSION['activoss']);
//     $posicion=$_GET['posicion'];
//     array_splice($activoss,$posicion,1);
//      $_SESSION['activoss']=  serialize($activoss);
//    header('Location:factura.php');
//    return;
//}



$bien=$_GET['bien'];
$valor=$_GET['valor'];
$vida=$_GET['vida'];

$activos =new activos($bien, $valor, $vida);


//manejo de array
if(!isset($_SESSION['activoss'])){
    $activoss=array();//crea un nuevo vector
    $_SESSION['activoss']=  serialize($activoss);
      
}else{
    
    $activoss=  unserialize($_SESSION['activoss']);
}



//guarda la ultima posicion
array_push($activoss, $activos);

$_SESSION['activoss']=  serialize($activoss);

header('Location:index.php');

