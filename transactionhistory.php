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
    <title>Transaction History</title>
</head>

<body>
    <?php
    include './partials/_navbar.php'
    ?>
    <div class="container con">
        <h2 class="text-center fontlight text-light pt-4">Transaction History</h2>

        <br>
        <div class="table-responsive-sm col">
            <table class="table table-hover table-striped table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center text-light">S.No.</th>
                        <th class="text-center text-light">Sender</th>
                        <th class="text-center text-light">Receiver</th>
                        <th class="text-center text-light">Amount</th>
                        <th class="text-center text-light">Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include './partials/_dbconnect.php';

                    $sql = "select * from transaction";

                    $query = mysqli_query($conn, $sql);

                    while ($rows = mysqli_fetch_assoc($query)) {
                    ?>

                        <tr>
                            <td class="py-2 text-light"><?php echo $rows['sno']; ?></td>
                            <td class="py-2 text-light"><?php echo $rows['sender']; ?></td>
                            <td class="py-2 text-light"><?php echo $rows['receiver']; ?></td>
                            <td class="py-2 text-light"><?php echo $rows['balance']; ?> </td>
                            <td class="py-2 text-light"><?php echo $rows['datetime']; ?> </td>
                        <?php
                    }
                        ?>
                </tbody>
            </table>

        </div>
    </div>
    <!-- footer -->
    <footer class="text-center mt-5 py-2 text-light bg-dark mt-50px">
        <p>&copy 2022. Made by <b>UPENDRA YADAV</b> <br> The Sparks Foundation</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>