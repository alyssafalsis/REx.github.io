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
<div class="account-form">
    <div class="wrapper">
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="pharmacyId">Pharmacy ID:</label>
                    <input type="text" class="form-control" id="pharmacyId" placeholder="213456" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="username">Username:</label>
                    <input type="email" class="form-control" id="username" placeholder="Pharmacy1" disabled>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password">New Password:</label>
                    <input type="text" class="form-control" id="password">
                </div>
                <div class="form-group col-md-6">
                    <label for="password2">Confirm Password:</label>
                    <input type="text" class="form-control" id="password2">
                </div>
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
