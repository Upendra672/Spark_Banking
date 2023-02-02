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
    <title>Transfer Money</title>
</head>

<body>

    <?php
    include './partials/_dbconnect.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    ?>
    <?php
    include './partials/_navbar.php'
    ?>
    <div class="container text-light con">
        <h2 class="text-center text-light pt-4 fontlight">Transfer Money</h2>
        <br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center text-light py-2">Id</th>
                                <th scope="col" class="text-center text-light py-2">Name</th>
                                <th scope="col" class="text-center  text-light py-2">E-Mail</th>
                                <th scope="col" class="text-center text-light py-2">Balance</th>
                                <th scope="col" class="text-center text-light py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td class="text-light py-2"><?php echo $rows['id'] ?></td>
                                    <td class="text-light py-2"><?php echo $rows['name'] ?></td>
                                    <td class="text-light py-2"><?php echo $rows['email'] ?></td>
                                    <td class="text-light py-2"><?php echo $rows['balance'] ?></td>
                                    <td><a href="userdetails.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="btn btn-light">Tranfer</button></a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
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