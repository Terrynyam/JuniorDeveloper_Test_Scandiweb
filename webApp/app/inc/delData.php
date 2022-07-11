<?php 

include "../models/DbConn.php";
include "../models/Product.php";

if (isset($_POST['delete'])) {

    $mydata = new DbConn();
    $mydel = new Product();

    if (isset($_POST['check'])) {
        
        $mydel->deleteDvd();
           
               
    }
    
    if(isset($_POST['checkbook']))
            {
                $mydel->deleteBook(); 
               
                
    
            }
    if(isset($_POST['checkfurn']))
            {
                $mydel->deleteFurniture();
           
                
            }
}
header("location: /webapp/index.php");