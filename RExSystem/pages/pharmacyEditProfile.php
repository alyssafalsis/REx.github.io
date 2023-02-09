<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pharmacy Edit Profile</title>
    <link rel="stylesheet" href="pharmacyEditProfile.css" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="crud-form">
    <div class="wrapper">
        <form>
            <div class="form-group">
                <label for="pharmacy">Pharmacy Name:</label>
                <input type="text" class="form-control" id="pharmacy" placeholder="Pharmacy1" disabled>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group col-md-6">
                    <label for="contactNumber">Contact Number:</label>
                    <input type="text" class="form-control" id="contactNumber">
                </div>
            </div>
            <div class="form-group">
                <label for="contactNumber">Address:</label>
                <input type="text" class="form-control" id="contactNumber">
            </div>
            <div class="form-group">
                <label for="subscription">Subscription:</label>
                <input type="text" class="form-control" id="subscription" placeholder="Active" disabled>
            </div>
            <div class="btn-group button">
                <button type="button" onclick="location.href='pharmacyAccountOverview.php'" style="cursor: pointer" class="btn submit">Submit</button>
                <button type="button" onclick="location.href='pharmacyAccountOverview.php'" style="cursor: pointer"class="btn cancel">Cancel</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
