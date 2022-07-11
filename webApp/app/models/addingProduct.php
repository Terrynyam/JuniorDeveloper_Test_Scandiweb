<?php 
class AddingProduct extends DbConn{

  public function AddAll($sku,$name, $price, $size, $weight, $height, $length, $width, $productType)
  {

    $query = "INSERT INTO productlist (sku,name,price,size,weight,height,length,width,producttype) VALUES (?,?,?,?,?,?,?,?,?)";
    $stmt = $this->db_connect()->prepare($query);

    try{
        if($stmt->execute(array($sku,$name, $price, $size, $weight, $height, $length, $width, $productType))){
          header("location: /webapp/listproduct");
        }
    }
    catch(Exception $e){
       
      header("location: /webapp/addproduct");
      
    } 
  }

 
}