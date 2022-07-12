<?php

include "classes/DbConn.php";
include "classes/Product.php";

$mydel = new Product();

 
    if (isset($_POST['delete-btn'])) {

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
    
    header("location: /final/index.php");
    }
    


?>

<head>
  
  <title>Product List</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/myindex.css" rel="stylesheet">
  
</head>
<body>
    <header id="header" class="d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a>Product List</a></h1>
        </div>
    </header>
    
    <div class="container-fluid">
    <button id="add-product-btn" onclick="window.location.href='/final/addproduct.php';" 
        role="button">ADD</button>
        <form method="post" action="">
        
        <input type='submit' value=" MASS DELETE" class='delete_button' id="delete-product-btn"
        name='delete-btn'> 
          
            <div class="container py-5">
                <div class="row mt-4">
                    
                    <?php 
                    $data = new Product();
                    if(is_array($data->getDvd())): ?> 
                        <?php foreach($data->getDvd() as $row): ?>
                    <div class="col-md-3" style="margin-bottom: 20px;">

                        <div class="card">
                            <div class="card-body" align="center">
                                <input class="delete-checkbox" style="margin-right: 200px;" type="checkbox" name="check[]" value="<?=$row->sku?>">
                                <p class="card-text"><?=$row->sku?></p>
                                <p class="card-text"><?=$row->name?></p>
                                <p class="card-text"><?=$row->price?> $</p>
                                <p class="card-text">Size: <?=$row->size?> MB</p>
                            </div>
                        </div>
                    </div>
                        <?php endforeach; ?>
                    <?php endif;?>

                    <?php
                    if(is_array($data->getBook())): ?> 
                        <?php foreach($data->getBook() as $row): ?>    
                        <div class="col-md-3" style="margin-bottom: 20px;">

                            <div class="card">
                            
                            <div class="card-body" align="center">
                                <input class="delete-checkbox" style="margin-right: 200px;" type="checkbox" name="checkbook[]" value="<?=$row->sku?>">
                                <p class="card-text"><?=$row->sku?></p>
                                <p class="card-text"><?=$row->name?></p>
                                <p class="card-text"><?=$row->price?> $</p>
                                <p class="card-text">Weight: <?=$row->weight?>KG</p>
                            </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <?php if(is_array($data->getFurniture())): ?> 
                        <?php foreach($data->getFurniture() as $row): ?>    
                        <div class="col-md-3" style="margin-bottom: 20px;">

                            <div class="card">
                            
                            <div class="card-body" align="center">
                                <input class="delete-checkbox" style="margin-right: 200px;" type="checkbox" name="checkfurn[]" value="<?=$row->sku?>">
                                <p class="card-text"><?=$row->sku?></p>
                                <p class="card-text"><?=$row->name?></p>
                                <p class="card-text"><?=$row->price?> $</p>
                                <p class="card-text">Dimensions: <?=$row->height?>x<?=$row->width?>x<?=$row->length?></p>
                            </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </form>
    </div>
    <footer id="footer">
        <div class="container py-4" align="center">
            Scandiweb Test assignment
        </div>
    </footer>
    
</body>
</html>
