<?php
 

        // put your code here

        
      
  
            $nombre=$_REQUEST["Nombre"];
            $password=$_REQUEST["contra1"];
        
        
    
     
                if(isset($_REQUEST["contra1"]) && strlen($_REQUEST["contra1"])<7)
                    {

                echo "shu!!";

            }else{

                $enlaceDB = mysqli_connect('localhost', 'root', 'mysql2017','formulario',  3306) or die("DANGER!! DANGER!! DANGER!! DANGER!! DANGER!!");
                $cadena="SELECT * FROM usuario WHERE name= '".$nombre."' AND password='".$password."'";
                $resultado= mysqli_query($enlaceDB, $cadena);
//posible error en este if
                if($resultado){
                    
                $total= mysqli_num_rows($resultado);
                //error no detecta el if
                   if($total>0){
                    echo "XD";
                }else{
                  echo "T_T";
                }



                 }

                }

?>