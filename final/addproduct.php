<?php 
include "classes/DbConn.php";


if (isset($_POST['save'])) {
    $data = new DbConn();

            $sku= trim($_POST['sku']);
            $name = trim($_POST['name']);
            $price = trim($_POST['price']);
            $weight = trim($_POST['weight']);
            $size = trim($_POST['size']);
            $height = trim($_POST['height']);
            $width = trim($_POST['width']);
            $length =trim($_POST['length']);
            $productType = trim($_POST['productType']);
    
            if($productType == 'DVDs'){
                $weight =null;
                $width = null;
                $length =null;
                $height = null;
            }
            elseif($productType == 'Books'){
                $size =null;
                $width = null;
                $length =null;
                $height = null;
            }
            elseif($productType == 'Furnitures'){
                $size =null;
                $weight = null;
            }
            
            $query = "INSERT INTO productlist (sku,name,price,size,weight,height,length,width,producttype) VALUES (?,?,?,?,?,?,?,?,?)";
            $stmt = $data->db_connect()->prepare($query);
    
            try{
                if($stmt->execute(array($sku,$name, $price, $size, $weight, $height, $length, $width,$productType))){
                  header("location: /final/index.php");
                  exit;
                }
            }
            catch(Exception $e){
                echo "<script>alert('SKU Exists')</script>";
            }
        }
?>

<head>
  <title>Add Product</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/myindex.css" rel="stylesheet">
  
</head>
<body>
    <header id="header" class="d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a>Add Product</a></h1>
        </div>
    </header>
    
    <div class="container-fluid">
       <div class="container">

       </div>
    <button name="cancel" onclick="window.location.href='/final/index.php';" id="cancel" value="cancel">Cancel</button>
    <form id="product_form" method="post" action="">
        
        <button type="submit" role="button" value="save" id="save" name="save">Save</button>
        <section id="hero" class="d-flex align-items-center">
            <div style="max-width: 500px; margin: 0 auto;">
                <div class="border border-secondary round p-3">
                    <div class="form-group row m-2">
                        <label class="col-sm-4 col-form-label">SKU</label>
                        <div class="col-sm-8">
                        <input type="text" id="sku" name="sku" class="form-control" required title="Please submit required data" minlength="1" maxlength="45"/>
                        </div>
                    </div>

                    <div class="form-group row m-2">
                        <label class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" id="name" name="name" class="form-control" required minlength="1" maxlength="45"/>
                        </div>
                    </div>
                    <div class="form-group row m-2">
                        <label class="col-sm-4 col-form-label">Price ($)</label>
                        <div class="col-sm-8">
                            <input type="number" step=".01" id="price" name="price" class="form-control" required minlength="1" maxlength="45"/>
                        </div>
                    </div>
                    <div class="form-group row m-2">
                        <label class="col-sm-5 col-form-label">Type Switcher</label>
                        <div class="col-sm-7">
                            <select id="productType" required name="productType" >
                                <option value="" disabled selected hidden>Select&nbsp</option>
                                <option id="DVD" value="DVDs">DVD</option>
                                <option id="Furniture" value="Furnitures">Furniture</option>
                                <option id="Book" value="Books">Book</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="fieldbox" id="DVDs">
                        <div class="border border-secondary round p-3">
                            <div class="form-group row m-2">
                                <label class="col-sm-4 col-form-label">Size (MB)</label>
                                <div class="col-sm-8">
                                    <input type="number" step=".01" name="size" id="size" class="form-control" minlength="1" maxlength="45"/>
                                </div>
                                
                            </div>
                            <p align="center">Please provide the size of the DVD in MBs</p>
                        </div>
                    </div>
                    <div class="fieldbox" id="Books">
                        <div class="border border-secondary round p-3">
                            <div class="form-group row m-2">
                                <label class="col-sm-4 col-form-label">Weight (KG)</label>
                                <div class="col-sm-8">
                                    <input type="number" step=".01" name="weight" id="weight" class="form-control" minlength="1" maxlength="45"/>
                                </div>
                            </div>
                            <p align="center">Please provide the weight of the Book</p>
                        </div>
                    </div>
                    <div class="fieldbox" id="Furnitures">
                    <div class="border border-secondary round p-3">
                        <div class="form-group row m-2">
                            <label class="col-sm-4 col-form-label">Height (CM)</label>
                            <div class="col-sm-8">
                                <input type="number" step=".01" name="height" id="height" class="form-control" minlength="1" maxlength="45"/>
                            </div>
                        </div>
                        <div class="form-group row m-2">
                            <label class="col-sm-4 col-form-label">Width (CM)</label>
                            <div class="col-sm-8">
                                <input type="number" step=".01" name="width" id="width" class="form-control" minlength="1" maxlength="45"/>
                            </div>
                        </div>
                        <div class="form-group row m-2">
                            <label class="col-sm-4 col-form-label">Length (CM)</label>
                            <div class="col-sm-8">
                                <input type="number" step=".01" name="length" id="length" class="form-control" minlength="1" maxlength="45"/>
                            </div>
                        </div>
                        <p align="center">Please provide the Height, Width, Length of the furniture</p>
                    </div>
                </div> 
            </div>
        </section>
    </form>
    </div>
    <footer id="footer">
        <div class="container py-4" align="center">
            Scandiweb Test assignment
        </div>
    </footer>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/form.js"></script>
</body>
</html>