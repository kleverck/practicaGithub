<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Amazzon_Editacion</title>
    </head>
    <body>
           
            <h2>Empresa XYZ</h2>
            <form action="controler.php">
         
            <h2>Registro de activos</h2>
            Nombre del bien: <input type="text" name="bien"><br><br>
            
            Valor (dòlares): <input type="text" name="valor"><br><br>
            
            Vida util (años): <input type="text" name="vida"><br><br>
            
            <input type="submit" value="enviar"><br><br>
        </form  >
            
        
        
        
        
        
        
            <form action="controler.php">
                <input type="hidden" name="terminar" value="SI" >
                 <input type="submit" value="Listar">
                
                
            </form>
        
      
    </body>
</html>
