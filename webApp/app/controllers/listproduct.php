<?php 

class ListProduct extends Controller
{
    function index ()
    {
        $mydb = new Product();
        
        
        $data['thedvd']=$mydb->getDvd();
        $data['thebook']=$mydb->getBook();
        $data['thefurniture']=$mydb->getFurniture();
        $data['page_title']="List Product";
        $this->view("listproduct",$data);
    }
    
}