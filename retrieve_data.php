<!doctype html>
<html lang=""">
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
    <div class="col-md-10" style="margin: auto">
    <table class="table table-bordered">
        <thead>
            <tr style="text-align: center">
                <th scope="col">Slot</th>
                <th scope="col">Monday</th>
                <th scope="col">Tuesday</th>
                <th scope="col">Wednesday</th>
                <th scope="col">Thursday</th>
                <th scope="col">Friday</th>
                <th scope="col">Saturday</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include("db.php");
            for($i=1;$i<=6;$i++) {
                if ($i == 1) {
                    $ref = "contact_form_data/slot/one";
                } elseif ($i == 2) {
                    $ref = "contact_form_data/slot/two";
                } elseif ($i == 3) {
                    $ref = "contact_form_data/slot/three";
                } elseif ($i == 4) {
                    $ref = "contact_form_data/slot/four";
                } elseif ($i == 5) {
                    $ref = "contact_form_data/slot/five";
                } elseif ($i == 6) {
                    $ref = "contact_form_data/slot/six";
                }
                $data = $database->getReference($ref)->getValue();
                foreach ($data as $key => $data1) {
                    ?>
                    <tr style="text-align: center">
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $data['monday']; ?></td>
                        <td><?php echo $data['tuesday']; ?></td>
                        <td><?php echo $data['wednesday']; ?></td>
                        <td><?php echo $data['thursday']; ?></td>
                        <td><?php echo $data['friday']; ?></td>
                        <td><?php echo $data['saturday']; ?></td>
                        <!--<td>
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                    data-target="#modal">Launch demo modal
                            </button>
                            <div class="modal fade" id="modal" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                                <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="update_data.php" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="exampleForControlInput1">Name</label>
                                                    <input type="text" class="form-control" name="name"
                                                           value="<?php echo $data1['name']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail">Email</label>
                                                    <input type="email" class="form-control" name="email"
                                                           value="<?php echo $data1['email']; ?>">
                                                </div>
                                                <input type="hidden" name="ref"
                                                       value="contact_form_data/<?php echo $key; ?>">
                                                <button type="submit" name="update" class="btn btn-primary">Submit
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td> -->
                    </tr>
                    <?php
                    break;
                }
            }
        ?>
        </tbody>
    </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>