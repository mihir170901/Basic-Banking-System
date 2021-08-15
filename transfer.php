<?php
include 'config.php';    # including config

if(isset($_POST['submit']))
{
    $from = $_GET['Account_no'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customer where Account_no=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from customer where Account_no=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);
 
    if (($amount<0) || ($amount == 0) )
    {
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("","Invalid Amount","error");';
        echo '}, 100);</script>';
    }

    else if($amount > $sql1['Balance']) 
    {
        echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("","Insufficent Balance","error");';
            echo '}, 100);</script>';
    }

    else 
    {
            // deducting transferring amount from sender's account    
            $newbalance = $sql1['Balance'] - $amount;
            $sql = "UPDATE customer set Balance=$newbalance where Account_no=$from";
            mysqli_query($conn,$sql);

            // adding transferred money to receiver's account
            $newbalance = $sql2['Balance'] + $amount;
            $sql = "UPDATE customer set Balance=$newbalance where Account_no=$to";
            mysqli_query($conn,$sql);
                
            $sender = $sql1['Name'];
            $receiver = $sql2['Name'];
            $sql = "INSERT INTO transfer_history(`sender`, `receiver`, `amount`) VALUES ('$sender','$receiver','$amount')";
            $query=mysqli_query($conn,$sql);

            if($query)
            {
                echo '<script>
                    setTimeout(function () {
                        swal({
                            title: "Success!",
                            text: "Transfer Successful",
                            type: "success",
                        }, function () {
                            window.location.href = "customer.php";
                        });
                    }, 100);
                </script>';
    }

            $newbalance= 0;
            $amount =0;
        }   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- custom CSS here -->
    <link href="css/half-slider.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <style type="text/css">
        #back {
            background: url('image/mastercard.jpg');
            background-repeat: no-repeat;
            background-size: cover;

        }

        .nav {
            background-color: rgb(25, 27, 27);
        }

        .py-2 {
            text-align: center;
            font-weight: bolder;
            font-size: 15;
        }

        .button {
            background-color: #008CBA;
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            font-size: 16px;
            margin: 4px 2px;
            opacity: 0.6;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }

        .button:hover {
            opacity: 1
        }

        .col-lg-12 {
            font-weight: bold;
            color: white;
            margin-top: 10px;
        }

        .row {
            background-color: rgb(25, 27, 27);
        }

        .table {
            border: 1px solid black;
            background-color: white;
        }

        .label {
            color: black;
            font-weight: bold;
            font-size: 18px;
        }
    </style>
</head>

<body id="back">

    <nav class="navbar navbar-expand-lg navbar-dark nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bank of Sparks</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-mihir ">
                    <li class="nav-item  ">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link active" aria-current="page" href="#">View customers</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link " aria-current="page" href="history.php">Transaction History</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link " aria-current="page" href="#">Contact Us</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <div class="container">
        <br>
        <br>
        <br>
        <h2 style="color:#003F87" class="text-center pt-4" style="border:2px solid #003F87;"><b>CUSTOMER DETAILS</b>
        </h2>
        <?php
                include 'config.php';
                $sid=$_GET['Account_no'];
                $sql = "SELECT * FROM  customer where Account_no=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
        <form method="post" name="tcredit" class="tabletext"><br>
            <div>
                <table class="table table-striped table-condensed table-bordered">
                    <tr>
                        <th class="text-center py-2">Account_no</th>
                        <th class="text-center py-2">CUSTOMER NAME</th>
                        <th class="text-center py-2">CUSTOMER Phone</th>
                        <th class="text-center py-2">BALANCE (in Rs.)</th>
                    </tr>
                    <tr>
                        <td class="py-2">
                            <?php echo $rows['Account_no'] ?>
                        </td>
                        <td class="py-2">
                            <?php echo $rows['Name'] ?>
                        </td>
                        <td class="py-2">
                            <?php echo $rows['Phone_no'] ?>
                        </td>
                        <td class="py-2">
                            <?php echo $rows['Balance'] ?>
                        </td>
                    </tr>
                </table>
            </div>
            <br><br><br>
            <h2 style="color:#003F87" class="text-center pt-4" style="border:2px solid #003F87;"><b>TRANSFER MONEY</b>
            </h2>
            <label class="label">Transfer to:</label>
            <select name="to" class="form-control" required>
                <option value="" disabled selected>Select Customer from Drop-down List</option>
                <?php
                include 'config.php';
                $sid = $_GET['Account_no'];
                $sql = "SELECT * FROM customer where Account_no!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)                          
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['Account_no'];?>">

                    Customer ID:
                    <?php echo $rows['Account_no'] ;?>&nbsp;&nbsp;Customer Name:
                    <?php echo $rows['Name'] ;?>&nbsp;&nbsp; Balance: Rs.
                    <?php echo $rows['Balance'] ;?>

                </option>
                <?php 
                } 
            ?>
                <div>
            </select>
            <br>
            <br>
            <label class="label">Amount of Money(in Rs.):</label>
            <input type="number" class="form-control" name="amount" placeholder="Enter Amount to be transferred"
                required>
            <br><br>
            <div class="text-center">
                <button class="button" name="submit" type="submit" id="myBtn">Transfer Money</button>
            </div>
        </form>
    </div>
    <div><br></div>
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <center>
                    <p>Copyright &copy; Made Mihir Chheda</p>
                </center>
            </div>
        </div>
    </footer>

    </div><!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj "
        crossorigin="anonymous "></script>
</body>

</html>