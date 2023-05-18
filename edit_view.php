<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>
        CRUD CI
    </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>
<body>
    
    <div class="jumbotron">
        <h1 align="center">Product Management System</h1>
    </div>
    <div class="container">        
        <h1 align="center">Edit Product</h1>
        <form action="<?php echo base_url();?>crud/update/<?php echo $singleProduct->id ?>" method="post">  
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Enter product name" class="form-control" value="<?php echo $singleProduct->name?>">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" placeholder="Enter product price" class="form-control" value="<?php echo $singleProduct->price?>">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" name="quantity" placeholder="Enter product quantity" class="form-control" value="<?php echo $singleProduct->quantity?>">
            </div>

            <input type="submit" name="edit" value="Update" class="btn btn-primary">
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>