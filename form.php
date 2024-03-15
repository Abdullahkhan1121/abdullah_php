<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <h3 class="display-3">Form</h3>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="">
                    <div class="form-grp">
                        <label for="">Username</label>
                        <input type="text" class="form-control" placeholder="Enter Your Username" autocomplete="off" name="Username" >
                    </div>
                    <div class="form-grp">
                        <label for="">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Your Email" autocomplete="off" name="Email" >
                    </div>
                    <div class="form-grp">
                        <label for="">Password</label>
                        <input type="text" class="form-control" placeholder="Enter Your Password" autocomplete="off" name="Password" >
                    </div>
                    <div class="form-grp">
                        <label for=""><h3>Select your course</h3></label><BR>
                        <input type="radio" name="course" value="JAVA">JAVA<br>
                        <input type="radio" name="course" value="FLUTTER">FLUTTER<br>
                        <input type="radio" name="course" value="REACT">REACT<br>
                        <input type="radio" name="course" value="VUE">VUE<br>
                    </div>
                    <div class="form-grp">
                        <label for=""><h3>Select your Food</h3></label><BR>
                        <input type="checkbox" name="food[]" value="STEAK">Steak<br>
                        <input type="checkbox" name="food[]" value="FRIES">Fries<br>
                        <input type="checkbox" name="food[]" value="CHINESE">Chinese<br>
                        <input type="checkbox" name="food[]" value="TIKKA">Tikka<br>
                    </div>
                    <input type="submit" value="submit" name="Submit" class="btn btn-dark mt-3">
                </form>
            </div>
            <?php
            echo "<pre>";
            print_r($_POST);
            echo "</pre>"
            ?>
        </div>
    </div>
    
</body>
</html>