<?php 
include("connection.php");
include("menubar.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Send Money | CB</title>
    <style>
        .center{
            justify-content:center;
            /* align-items:center; */
            
        }
        h2{
                color:#667292;
                text-shadow: 3px 3px 4px  #c0c3c5;
                padding:29px;
        }
        form{
            display:flex;
            width:30vw;
            flex-direction:column;
            margin-top:50px;
            color:#fff;
            text-align:left;
            font-size: 18px;
        }
        form label{
            color: rgb(40, 93, 153);
            text-shadow: 3px 3px 4px #b2b5b8;
            font-style:bold;
            margin:5px;
            padding:5px;
            font-size:inherit;
        }
        form select,input{
            color:#000;
            background-color: rgb(238, 247, 255); 
            font-size:inherit;
            height:38px;
            text-align:center;

        }
        form input{
            margin:5px;
        }
        form .btn{
            background:#69fa9e;
        }
        @media (max-width: 1100px) {
            form{
                width:90%;
                font-size: 14px;
            }
            
        }
        
    </style>
</head>
<body>
   
    <div class="main-content main "> 
       <h2>MONEY TRANSFER</h2>
        <form  action="" method="post" >
            <label for="username">select the sender </label> 
            <?php
            $sql = "Select * from users";
            $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
             if(mysqli_num_rows($result)>0){
            ?>
            <select name="sender" id="sender-name" required >
                <option name="0" value="0" select disabled>Select sender</option>
                <?php
                 while($rows = mysqli_fetch_assoc($result)){
                ?>
                <option  value="<?php echo $rows['sno']; ?>"><?php echo $rows['username']; ?></option>
                <?php } }
                    else {
                        echo "No data found";
                    }                
                ?>
            </select> <br>
            <label for="username">select the beneficiary </label> 
            <?php
            $sql = "Select * from users";
            $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
             if(mysqli_num_rows($result)>0){
            ?>
            <select name="receiver" id="receiver-name" required >
                <option name="0" value="0" select disabled>Select Beneficiary</option>
                <?php
                 while($rows = mysqli_fetch_assoc($result)){
                ?>
                <option  value="<?php echo $rows['sno']; ?>"><?php echo $rows['username']; ?></option>
                <?php } }
                    else {
                        echo "No data found";
                    }                
                ?>
            </select>
             <br>
            <label for="amount">Enter the amount to Transfer</label>
            <input  type="number" name="amount" value="<?php echo $amount; ?> " placeholder="Enter the amount"required>
            <input class="btn" type="submit" value="submit">
        </form>
</div>
<?php 
include("footer.php");
?>
</body>
</html>


<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$amount = $_POST["amount"];
$sender = $_POST["sender"];
$receiver = $_POST["receiver"];
   // echo"$amount <br> $sender <br> $receiver <br> ";
        $query1 = "SELECT bankBalance FROM users where sno=$sender";
        $query2 = "SELECT bankBalance FROM users where sno=$receiver";
        $data = mysqli_query($conn,$query1);
        $result = mysqli_fetch_assoc($data);
        $senderbalance = (float)$result["bankBalance"];
    //    echo "$senderbalance";
        $data = mysqli_query($conn,$query2);
        $result = mysqli_fetch_assoc($data);
        $receiverbalance =(float)$result["bankBalance"];
      //  echo "<br>$receiverbalance";
        $updatesendervalue = $senderbalance - (float)$amount;
        $updatereceivervalue = $receiverbalance + (float)$amount;
    if($updatesendervalue < 0) {
        echo "<script>
            window.location='fail.php';
            </script>";
        
        //echo "<br><h2 style='color:red;'>unable to transfer money due to low balance in sender's account</h2>";
    }
    else {
        $query1 = "UPDATE `users` SET `bankBalance`=$updatesendervalue WHERE sno=$sender";
        $query2 = "UPDATE `users` SET `bankBalance`=$updatereceivervalue WHERE sno=$receiver";
        $query = "SELECT * FROM transactions";
  
        $data = mysqli_query($conn,$query1);
        $data = mysqli_query($conn,$query2);
        $data = mysqli_query($conn,$query);
        $total = mysqli_num_rows($data)+1;
       // echo"<br> $total";
        $query1 = "SELECT username FROM users where sno=$sender";
        $query2 = "SELECT username FROM users where sno=$receiver";
        $data = mysqli_query($conn,$query1);
        $result = mysqli_fetch_assoc($data);
        $user1 = $result["username"];
       // echo"<br> $user1";
        $data = mysqli_query($conn,$query2);
        $result = mysqli_fetch_assoc($data);
        $user2 = $result["username"];
       // echo"<br> $user2 <br> $amount";
         $query3 = "INSERT INTO `transactions`(`sno.`, `username`, `beneficiary`, `date`, `amount`) VALUES ('$total','$user1','$user2',current_timestamp(),'$amount')";
         //INSERT INTO `transactions` (`sno.`, `username`, `beneficiary`, `date`, `amount`) VALUES ('2', 'Mohd Wajid', 'Abhinavan', current_timestamp(), '10000');
         $data = mysqli_query($conn,$query3);
        echo"<br> success";
        if($query3) {
            echo "<script>
            window.location='success.php';
            </script>";
        }
        
        }
    }
?>