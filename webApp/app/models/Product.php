<?php 

class Product extends DbConn 
{
    public function getDvd()
    {
        $query= "SELECT * FROM productlist WHERE producttype = 'dvds'";
        $mydb = new DbConn();
        $data = $mydb->read($query);
        if(is_array($data))
        {
            return $data;
            exit;
        }
        return false;
    }
    public function getBook()
    {
        $query= "SELECT * FROM productlist WHERE producttype = 'books'";
        $mydb = new DbConn();
        $data = $mydb->read($query);
        if(is_array($data))
        {
            return $data;
            exit;
        }
        return false;
    }

    public function getFurniture()
    {
        $query= "SELECT * FROM productlist WHERE producttype = 'furnitures'";
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