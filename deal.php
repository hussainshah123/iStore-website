<?php
include('topbar.php');
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deal Cart</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .old-price {
            text-decoration: line-through;
            color: red;
        }
        .cart-item {
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
        }
        
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Deals</h2>
    <div class="row cart-item">
        <div class="col-md-4">
            <img src="images/st4.jpg" class="img-fluid" alt="Product Image">
        </div>
        <div class="col-md-6">
            <h5>Product Name</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore unde dignissimos, sit quaerat officiis culpa vitae voluptate, ducimus illo odit cumque neque laudantium tempora voluptatum quasi optio iusto repellat dicta.</p>
            <p class="old-price">$50.00</p>
            <p><strong>$30.00</strong></p>
        </div>
        <div class="col-md-2">
            <button class="bt">Order Now</button>
        </div>
    </div>
    <div class="row cart-item">
        <div class="col-md-4">
            <img src="images/st3.jpg" class="img-fluid" alt="Product Image">
        </div>
        <div class="col-md-6">
            <h5>Product Name</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore unde dignissimos, sit quaerat officiis culpa vitae voluptate, ducimus illo odit cumque neque laudantium tempora voluptatum quasi optio iusto repellat dicta.</p>
            <p class="old-price">$50.00</p>
            <p><strong>$30.00</strong></p>
        </div>
        <div class="col-md-2">
            <button class="bt">Order Now</button>
        </div>
    </div>
    <div class="row cart-item">
        <div class="col-md-4">
            <img src="images/st2.jpg" class="img-fluid" alt="Product Image">
        </div>
        <div class="col-md-6">
            <h5>Product Name</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore unde dignissimos, sit quaerat officiis culpa vitae voluptate, ducimus illo odit cumque neque laudantium tempora voluptatum quasi optio iusto repellat dicta.</p>
            <p class="old-price">$50.00</p>
            <p><strong>$30.00</strong></p>
        </div>
        <div class="col-md-2">
            <button class="bt">Order Now</button>
        </div> 
    </div>
    <div class="row cart-item">
        <div class="col-md-4">
            <img src="images/st.jpg" class="img-fluid" alt="Product Image">
        </div>
        <div class="col-md-6">
            <h5>Product Name</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore unde dignissimos, sit quaerat officiis culpa vitae voluptate, ducimus illo odit cumque neque laudantium tempora voluptatum quasi optio iusto repellat dicta.</p>
            <p class="old-price">$50.00</p>
            <p><strong>$30.00</strong></p>
        </div>
        <div class="col-md-2">
            <button class="bt">Order Now</button>
        </div>
    </div>
    <!-- Repeat for more items -->
</div>

</body>
</html>
<?php 
include('footer.php');
?>
