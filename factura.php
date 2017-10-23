<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>LISTADO DE ACTIVOS FIJOS – EMPRESA XYZ</h1>;
        <table border="2">
        <?php
        include './activos.php';
        include './Carrito.php';
       session_start();
       $activoss=  unserialize($_SESSION['activoss']);
    //   $suma1=0;
       $carrito= new Carrito();
       $suma=$carrito->getSuma($activoss);
//      $iva=$carrito->getIva($activoss);
      $total=$carrito->getTotal($activoss);
      
       
        echo "<tr>"."<td>"."Producto"."</td>"."<td>"."valor"."</td>"."<td>"."vida"."</td>"."</tr>"; 
         
       
       foreach ($activoss as $art){
           
           if($art->getVida()==1)
           { 
           echo "<tr>"."<td>"."<font color=#FA8072>".$art->getBien()."</td>"."<td>"."<font color=#FA8072>".$art->getValor()."</td>"."<td>"."<font color=#FA8072>".$art->getVida()."</td>"."</tr>"; 
           echo '<br>';
          // $suma1+=$art->getPrecio()*$art->getCantidad();
       }else
       {
           echo "<tr>"."<td>".$art->getBien()."</td>"."<td>".$art->getValor()."</td>"."<td>".$art->getVida()."</td>"."</tr>"; 
           echo '<br>';
           
       }
       }
       echo "<tr>"."<td>"."Total: "."</td>"."<td>".$suma."</td>"."<td>"."</td>"."</tr>"; 
           echo '<br>';
  
          
           
        ?>
            </table>
       
    </body>
</html>
