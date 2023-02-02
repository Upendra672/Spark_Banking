<?php
include './partials/_dbconnect.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='transactionhistory.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>





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
    <title>Users Details</title>
</head>

<body>
    <?php
    include './partials/_navbar.php'
    ?>
    <div class="container">
        <h2 class="text-center text-light pt-4 fontlight">Transaction</h2>
        <?php
        include './partials/_dbconnect.php';
        $Tid = $_GET['id'];
        $sql = "SELECT * FROM  users where id=$Tid";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo "Error : " . $sql . "<br>" . mysqli_error($conn);
        }
        $rows = mysqli_fetch_assoc($result);
        ?>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center text-light">Id</th>
                    <th class="text-center text-light">Name</th>
                    <th class="text-center text-light">Email</th>
                    <th class="text-center text-light">Balance</th>
                </tr>
                <tr>
                    <td class="py-2 text-light"><?php echo $rows['id'] ?></td>
                    <td class="py-2 text-light"><?php echo $rows['name'] ?></td>
                    <td class="py-2 text-light"><?php echo $rows['email'] ?></td>
                    <td class="py-2 text-light"><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div>
        <form method="post" name="tcredit" class="tabletext"><br>
            <br><br><br>
            <label class="text-light">Transfer To:</label>
            <select name="to" class="form-control" required>
                <option value="" disabled selected>Choose</option>
                <?php
                $Tid = $_GET['id'];
                $sql = "SELECT * FROM users where id!=$Tid";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    echo "Error " . $sql . "<br>" . mysqli_error($conn);
                }
                while ($rows = mysqli_fetch_assoc($result)) {
                ?>
                    <option class="table" value="<?php echo $rows['id']; ?>">

                        <?php echo $rows['name']; ?> (Balance:
                        <?php echo $rows['balance']; ?> )

                    </option>
                <?php
                }
                ?>
                <div>
            </select>
            <br>
            <br>
            <label class="text-light">Amount:</label>
            <input type="number" class="form-control" name="amount" required>
            <br><br>
            <div class="text-center">
                <button class="btn mt-3 btn-light text-dark" name="submit" type="submit" id="myBtn">Transfer</button>
            </div>
        </form>
    </div>
    <!-- footer -->
    <footer class="text-center mt-5 py-2 text-light bg-dark">
        <p>&copy 2022. Made by <b>UPENDRA YADAV</b> <br> The Sparks Foundation</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>