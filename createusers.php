<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Create User</title>
</head>

<body>
    <?php
    include './partials/_dbconnect.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $balance = $_POST['balance'];
        $sql = "INSERT INTO `users` (`name`, `email`, `balance`) VALUES ( '$name', '$email', '$balance')";
        $result = mysqli_query($conn, $sql);
        $numExistRows = mysqli_num_rows($result);
        if($numExistRows>0){
            $showError = "Username Already exists";
        }
        else{
            echo "<script> alert('Hurray! User created');
                window.location='transfermoney.php';
                </script>";
        }
    }
    ?>



    <?php
    include './partials/_navbar.php'
    ?>
    <h2 class="text-center  fontlight pt-4 text-light">Create a User</h2>
    <br>

    <div class="container text-light custom">
        <form method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="balanace">Balance</label>
                <input type="number" class="form-control" name="balance" id="balanace">
            </div>
                <button type="submit" class="btn btn-light text-dark" name=
                "submit"><strong>Create</strong> </button>
                <button type="reset" class="btn btn-light text-dark" name="reset"><strong>Reset</strong></button>
        </form>
    </div>

    <!-- footer -->
    <!-- <footer class="text-center mt-5 py-2 text-light bg-dark">
        <p>&copy 2022. Made by <b>UPENDRA YADAV</b> <br> The Sparks Foundation</p>
    </footer> -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>