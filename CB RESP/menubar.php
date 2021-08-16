<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">  
    <style>
        .nav-bar{
            background:#bcd9e3;
            display:flex;
            justify-content: space-between;
            align-items: center;
            height:fit-content;
            animation: nav-load 300ms;
        }
        .side-bar ul {
            display:flex;
            font-size:18px;
        }
        .side-bar ul li{
            display:flex;
            list-style-type:none;
            font-size:inherit;
            margin:0 5px;
            padding: 0 5px;
            animation: items-load 1000ms;

        }
   
        .side-bar ul li a {
            align-items: flex-end;
            display: flex;
            color:rgb(40, 93, 153);
        }
        .side-bar ul li a:hover{
              color:black; 
        }
        .side-bar ul li a strong{
            padding-left: 3px;
            font-size:inherit;
            text-shadow: 3px 3px 4px #b2b5b8;
        }
        /* mini icons in menu */
.icon {
    width:23px;
    height:auto;
}
a{
    text-decoration: none;
}
             /* the bank logo with name */
.logo {
    width : 23vw ;
    height : auto ;
    animation: from-right 1000ms;
}
/* keyframes and animations */
        @keyframes nav-load{
            0%{
                    transform:translateX(-100%);
            }
            100%{
                transform:translateX(0);
            }
        }
        @keyframes items-load {
            0%{
                transform:translateY(-100%);
            }
            100%{
                transform:translateY(0%);
            }
            
        }
        @keyframes from-right {
            0%{
                transform:translateX(100%);
            }
            100%{
                transform:translateX(0%);
            }
        }
        /* making menu responsive */
        @media (max-width: 1100px) {
  .nav-bar {
    display:flex;
    flex-direction:column;
    justify-content:center;
  } 
  .nav-bar a {
      width:85vw ;
  }
  .logo{
      width:100%;
  }
  .icon{
      width:18px;
  }
  .side-bar ul {
            display:flex;
            flex-wrap:wrap;
            justify-content: space-evenly;
            align-items:center;
            font-size:14px;
        }
        .side-bar ul li{
            width:47%;
            padding: 8px;
            margin:auto;
            justify-content:center;
        }
}

    </style>
</head>
<body>
    <!--logo or header-->
<nav class="nav-bar">
        <a href="index.php"><img src="images/logo.png" alt="bankImage" class="logo"></a>
    <!--side menu bar/ nav bar-->
    <div class="side-bar">
        <!-- <h5>MENU</h5> -->
        <ul>
            <li class="items"><a href="index.php"><img  class="icon"  src="images/homelogo.png"/><strong>Home</strong></a></li>
            <li class="items"><a href="viewcostumers.php"><img class="icon"  src="images/costumers.png"/><strong>Costumers</strong></a></li>
            <li class="items"><a href="transactions.php"><img class="icon"  src="images/transferlogo.png"/><strong>Transactions</strong></a></li>
            <li class="items"><a href="about.php"><img  class="icon" src="images/adminlogo.png"/><strong>About me</strong></a></li>
        </ul>
    </div> </nav><hr>
</body>
</html>