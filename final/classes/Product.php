<?php 

class Product extends DbConn{

    protected $sku;
    protected $name;
    protected $price;
    protected $size;

     function __construct()
     {
        
             
     }

    function getDvd()
    {

        return $this->getAllAttributes('DVDs');
    }
    function getBook()
    {

        return $this->getAllAttributes('Books');
    }
    function getFurniture()
    {

        return $this->getAllAttributes('Furnitures');
    }

    function getAllAttributes($get)
    {

        $query= "SELECT * FROM productlist WHERE producttype = '$get'";
        $mydb = new DbConn();
        $data = $mydb->read($query);
        if(is_array($data))
        {
            return $data;
            exit;
        }
        return false;
    }

    function deleteDvd()
    {
        foreach($_POST['check'] as $delete_sku)
            {
                $mydb = new DbConn();
                $query = "DELETE FROM productlist WHERE sku='$delete_sku'";
                $stmt = $mydb->db_connect()->prepare($query);
                $stmt->execute(array());
            }
    }
    function deleteBook()
    {
        foreach($_POST['checkbook'] as $delete_sku)
                {
                    $mydb = new DbConn();
                    $query = "DELETE FROM productlist WHERE sku='$delete_sku'";
                    $stmt = $mydb->db_connect()->prepare($query);
                    $stmt->execute(array());
                    
                }
    }
    function deleteFurniture()
    {
        foreach($_POST['checkfurn'] as $delete_sku)
            {
                $mydb = new DbConn();
                $query = "DELETE FROM productlist WHERE sku='$delete_sku'";
                $stmt = $mydb->db_connect()->prepare($query);
                $stmt->execute(array());
                

            }
    }

}