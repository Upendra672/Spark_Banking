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
    <!-- <style rel="text/css">
        body{
            background: linear-gradient(180deg,orange, white, green);
        }
    </style> -->

    <title>Basic Banking System</title>
</head>

<body>
    <?php
    include './partials/_navbar.php'
    ?>

    <!-- caurousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/cau-0.png" class="d-block w-100" alt="bannnerimg">
            </div>
            <div class="carousel-item">
                <img src="./img/cau-1.png" class="d-block w-100" alt="bannnerimg">
            </div>
            <div class="carousel-item">
                <img src="./img/cau-2.png" class="d-block w-100" alt="bannnerimg">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- cards -->
    <div class="container d-flex justify-content-around py-3">
        <div class="card" style="width: 18rem;">
            <img src="./img/users.png" class="card-img-top" alt="img">
            <div class="card-body">
                <h5 class="card-title">Create a User</h5>
                <a href="createusers.php" class="btn btn-primary">Click Me</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="./img/money transfer.png" class="card-img-top" alt="img">
            <div class="card-body">
                <h5 class="card-title">Make a Transaction</h5>
                <a href="transfermoney.php" class="btn btn-primary">Click Me</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="./img/transaction.png" class="card-img-top" alt="img">
            <div class="card-body">
                <h5 class="card-title">Transaction History</h5>
                <a href="transactionhistory.php" class="btn btn-primary">Click Me</a>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="text-center mt-5 py-2 text-light bg-dark">
        <p>&copy 2022. Made by <b>UPENDRA YADAV</b> <br> The Sparks Foundation</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>