<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <title>Bootstrap 4 template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="row">
        <div class="col-md-3" style="border-right: blue">
            <ul class="nav nav-pills flex-column">
                <a class="nav-link active" href="home.php">Push Data</a>
                <a class="nav-link" href="setData.php">Set Data</a>
                <a class="nav-link" href="retrieve_data.php">Retrieve Data</a>
                <a class="nav-link disabled" href="#">Disabled</a>
            </ul>
        </div>
        <div class="col-md-9">
            <form action="storing_data.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleForControlInput1">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="John Doe">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="JohnDoe@gmail.com">
                </div>
                <button type="submit" name="push" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>