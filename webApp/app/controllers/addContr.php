<?php 

class AddContr extends AddingProduct{

    protected $sku;
    protected $name;
    protected $price;
    protected $size;
    protected $productType;
    protected $weight;
    protected $height;
    protected $length;
    protected $width;

    public function __construct($sku,$name,$price,$size,$weight,$height,$length,$width,$productType)
    {
        $this->sku =$sku;
        $this->name =$name;
        $this->price =$price;
        $this->size =$size;
        $this->weight =$weight;
        $this->height =$height;
        $this->length =$length;
        $this->width =$width;
        $this->productType =$productType;
    }

    function checkProduct()
    {
        
            if(($this->productType =="DVDs")&&(!empty($this->size)))
            {
                $this->weight =null;
                $this->height =null;
                $this->length =null;
                $this->width =null;
                $this->AddAll($this->sku,$this->name,$this->price,$this->size,
                $this->weight,$this->height,$this->width,$this->length,$this->productType);
            }

            elseif(($this->productType =="Books")&&(!empty($this->weight)))
            {
                $this->size =null;
                $this->height =null;
                $this->length =null;
                $this->width =null;

                $this->AddAll($this->sku,$this->name,$this->price,$this->size,
                $this->weight,$this->height,$this->width,$this->length,$this->productType);
            }
            elseif(($this->productType =="Furnitures")&&(!empty($this->height))&&(!empty($this->width))&&(!empty($this->length)))
            {
                $this->size =null;
                $this->weight =null;
                $this->AddAll($this->sku,$this->name,$this->price,$this->size,
                $this->weight,$this->height,$this->width,$this->length,$this->productType);
            }
            else{
            header("location: /webapp/addproduct");
            }
        }
    
}