<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Add New Pharmacy Account</title>
    <link rel="stylesheet" href="adminAddPharmacy.css"/>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="rating-form">
    <div class="wrapper">
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Subscription ID">Subscription ID:</label>
                    <input type="text" class="form-control" id="SubscriptionID">
                </div>
                <div class="form-group col-md-6">
                    <label for="PharmacyName">Pharmacy Name:</label>
                    <input type="text" class="form-control" id="PharmacyName">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Username">Username:</label>
                    <input type="text" class="form-control" id="Username">
                </div>
                <div class="form-group col-md-6">
                    <label for="Password">Password:</label>
                    <input type="text" class="form-control" id="Password">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="Price">Email:</label>
                    <input type="text" class="form-control" id="Email">
                </div>
            </div>
            <div class="btn-group button">
                <button type="button" onclick="location.href='adminPharmacyAccounts.php'" style="cursor: pointer" class="btn submit">Submit</button>
                <button type="button" onclick="location.href='adminPharmacyAccounts.php'" style="cursor: pointer"class="btn cancel">Cancel</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
