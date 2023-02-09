<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add New Item</title>
    <link rel="stylesheet" href="crud.css" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="crud-form">
    <div class="wrapper">
        <div class="circle">
            <p>+</p>
        </div>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="productID">Product ID:</label>
                    <input type="text" class="form-control" id="ProductID">
                </div>
                <div class="form-group col-md-6">
                    <label for="brandName">Brand Name:</label>
                    <input type="text" class="form-control" id="ProductID">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="genericName">Generic Name:</label>
                    <input type="text" class="form-control" id="ItemName">
                </div>
                <div class="form-group col-md-6">
                    <label class="mr-sm-2" for="drugType">Drug Type:</label>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Choose...</option>
                        <option value="1">Over-the-Counter</option>
                        <option value="2">Prescribed</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" placeholder="PHP">
                </div>
                <div class="form-group col-md-6">
                    <label for="quantity">Quantity:</label>
                    <input type="text" class="form-control" id="quantity">
                </div>
            </div>
            <div class="form-row">
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="Price">Description:</label>
                    <input type="text" class="form-control" id="inputPassword4">
                </div>
            </div>
            <div class="btn-group button">
                <button type="button" onclick="location.href='pharmacyInventory.php'" style="cursor: pointer" class="btn submit">Submit</button>
                <button type="button" onclick="location.href='pharmacyInventory.php'" style="cursor: pointer"class="btn cancel">Cancel</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
