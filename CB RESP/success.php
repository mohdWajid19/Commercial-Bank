<?php 
include("menubar.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>success!! || CB</title>
    <style>
        img{
            height:100px;
            width:auto;
        }
        p{
            padding: 30px 0px;
            font-size:24px;
        }
        a button{
            cursor:pointer;
            font-size:16px;
            height:30px;
            padding:5px 20px;
            color:white;
            background:#5ed684;
            border:none;
            border-radius:5px;
        }
        .center{
            justify-content:center;       
        }
        @media (max-width: 1100px) {
            p{  
            font-size:16px;
        }
        img{
            height:70px;
        }
        a button{
             height:auto;
             width:90%;
        }
        }
    </style>
</head>
<body>
    <div class="main-content main center">
    <img  src="images/tick.png" alt="rightmark">
    <p>Transaction was successful!!</p>
    <a href="transhistory.php">
    <button>click here to see transaction history</button></a></div>
</body>
</html>
<?php 
include("footer.php");
?>