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
    <title>transactions</title> 
    <style>
        a button{
            cursor: pointer;
            display:flex;
            justify-content:center;
            align-items:center;
            font-size:16px;
            height:50px;
            padding:5px 20px;
            color:white;
            background:#5ed684;
            box-shadow: 0 0 0 1px #5ed684;
            border:none;
            border-radius:5px;
            text-shadow: 3px 3px 4px #000000;
            animation: load-right 400ms;
        }
        button:hover {
             
            text-align: center;
            border: 4px solid #dd;
            border-radius: 3px;
            background:#c2d4dd;
            color:#000;
            text-shadow:3px 3px 3px #fff;
            box-shadow: 0 0 0 1px #4db8ff;
            transition: all 300ms ease-out;
        }
        a button p{
            padding-left:7px;
            
        }
        .big-icon{
            width:30px;
            height:auto;
            
        }
        .center{
            justify-content:center;  
                 
        }
        /* website resppnsive styling  */
        @media (max-width: 1100px) {
            .big-icon{
                width:20px;
            }
            a button{
            font-size:14px;  
            height:35px; 
            padding:5px 15px;
        }
        }

/* animation keyframes */
        @keyframes load-right {
            0%{
                transform:translateX(1000%);
            }
            100%{
                transform:translateX(0%);
            }
            
        }
        
    </style>
</head>
<body>
    <div class="main-content main center">
        <a  href="transhistory.php"><button class="btn-1 showtransactions">
            <img class="big-icon" src="images/history.png" alt="history logo"> <p>Transaction History</p>
        </button></a><br><br>
        <a  href="maketransaction.php"><button class="btn-2 showtransactions">
        <img class="big-icon" src="images/maketransact.png" alt="logo img"> <p>make a transaction</p>       
        </button></a>
    <!-- <a href="success.php">success</a> -->
    <br><br>
    </div>
    
</body>
</html>
<?php 
include("footer.php");
?>