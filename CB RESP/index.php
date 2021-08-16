<?php
include("menubar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Commercial Bank | the bank for Businessmen</title>
    <style>
        /* welcome text */
        h1{
            font-size:38px;
            text-shadow: 3px 3px 4px  #d5e1df;
        }
         /* boxes in homepage */
.home-boxes{
    position:relative;
    padding-top:120px;
    display:flex;
    justify-content: space-evenly;
    
}
.home-boxes .box a strong{
    font-size:18px;
    text-shadow: 3px 3px 4px #b9bdc0;
}

.box{
    display:flex;
    justify-content: center;
    border-radius:23px;
    height:250px ;
    width:250px ;
    background:#e2e6e9;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    text-align: center;
}
.box:hover{
    background:#fff;
    transition: width 3s height 3s;
    color:#000;
}
.box-img {
    
    height:150px ;
    width:auto ;
    align-content: center;
    text-align: center;
}
.box a{
    display:flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
/* responsive styling */
@media (max-width: 1100px) {
    h1{
        font-size:28px;
    }
    .home-boxes{
        display: flex;
        padding-top: 51px; 
            flex-wrap:wrap;
            justify-content: space-evenly;
            align-items: center;    
    }
    .box{
        height:150px ;
        width:170px ;
        margin : 20px 0;
    }
    .box-img {
        height:100px ;
        width:auto;
        align-items: center;
        text-align: center;
    }
    .home-boxes .box a strong{
        font-size:13px;
        text-shadow: 3px 3px 4px #b9bdc0;
    }

/* animations and keyframes */
}
        .welcome, .subheading, .home-hr{
    animation : drop 300ms;
   } 
  .box1{
      animation: load-left 300ms;
  }
  .box3, .box2{
      animation: rise 300ms;
  }
   .box4{
    animation: load-right 300ms;
}
  @keyframes drop{
    0%{
       transform: translateY(-1000%);
   }
   100%{
  transform: translateY(0%);
}
}
@keyframes load-left{
0%{
  transform: translateX(-1000%);
}
100%{
  transform: translateX(0%);
}
}
@keyframes rise{
    0%{
       transform: translateY(1000%);
   }
   100%{
  transform: translateY(0%);
}

}
@keyframes load-right{
    0%{
      transform: translateX(1000%);
    }
    100%{
      transform: translateX(0%);
    }
    }

    </style>
</head>
<body>
    <div class="main-content">
      <div class="welcome-box"><h1 class="welcome">Welcome to Commercial Bank,</h1>
        <hr class="home-hr">
        <p class="subheading">
            The Official Bank of & for Business 
        </p></div>
        
        <div class="home-boxes">
            <div class="box1 box"><a href="maketransaction.php"><img class="box-img"  src="images/transferlogo.png"/><strong>Transfer money</strong></a></div>
            <div class="box2 box"><a href="transhistory.php"><img class="box-img"  src="images/history.png"/><strong>transaction history</strong></a></div>
            <div class="box3 box"><a href="viewcostumers.php"><img class="box-img"  src="images/costumers.png"/><strong>costumers</strong></a></div>
            <div class="box4 box"><a href="about.php"><img  class="box-img" src="images/adminlogo.png"/><strong>Admin</strong></a></div>
        </div>
    </div>
    
    <?php 
    include("footer.php");
?>
</body>
</html>
