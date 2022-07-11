<?php 
class AddProduct extends Controller
{
    function index ()
    {
        $data['page_title']="Add Product";
        $this->view("addproduct",$data);
    }
    
}