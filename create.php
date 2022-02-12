<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>
<body>
<?php
  include 'navbar.php';
?>
<br>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h3>Insert Details</h2>
                    </div>
                    <p>Please fill this form</p>
                    <form action="insert.php" method="post">
                    <div class="form-group">
                            <label>Id</label>
                            <input type="number" name="id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Balance</label>
                            <input type="number" name="balance" class="form-control" required> 
                        </div>
                        <a href="main.php?id= <?php echo $rows['id'] ;?>"><button><input type="submit" class="btn btn-primary" name="submit" value="Submit"></button></a>
                    </form>
                </div>
            </div>        
        </div>
    </div>


</body>
</html>
