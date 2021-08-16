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
    <link rel="stylesheet" media="screen and (max-width:1200px)" href="css/phone.css">

    <style>
        
        a{
            text-decoration:none;
        }
        .container {
            width: 60% ;
            background:#000;
            color:#FFFFFF;
            border-radius:30px;
            border: dashed 3px white;
        }
        .container:hover {
        
            background:#bcd9e3;
            border-radius:30px;
            color:#000;
            border: dashed 3px black;
        }
        .container .inner{
            margin: 30px;
            display:flex;
            justify-content:space-around;
            align-items:center;
            
        }
        .right{
            margin:20px;
        
        }
        .container img{
            width:230px;
            margin:3px;
            padding:1px;
            border-radius:50%;
            border:solid 2px #000;
            background:white;
        }
        .techbox .iconlogo{
            width:28px;
            height:auto;
        }
        .tech-stacks {
            display: flex;
            flex-direction:column;
            text-align:left;
            /* font-style:bold; */
            padding-left:45px;
        }
        .tech-stacks .fe, .be, .tech-stacks ul{
            padding-left:50px;
            
        }
        .tech-stacks ul li{
            text-decoration: none;
        }
        .techbox{
            display: flex;
            justify-content: left;
            align-items: center;
            padding: 2px 55px;
            width:fit-content;
            border:solid 2px #000;
            border-radius: 5px;
            margin-left: 60px;
            font-size:22px;
        }
        .techbox h4{
            font-size:inherit;
        }
        .links{
            padding-left:20px;
        }

        @media (max-width:1100px) { 
            .container{
                width: 90%;
                margin: 30px 0px;
                overflow:hidden;
            }
            .container .inner{
                flex-direction: column;
            }
            .container img{
                width:120px;
            }
            .techbox .iconlogo{
                width:25px;
            }
            .techbox{
                flex-direction: column;
                padding: 2px ;
                font-size:16px;
                margin:10px;
            }
            .right{
                margin:0;
            }
            .tech-stacks {
                margin-top: 10px;
                padding-left:5px;
            }
            .tech-stacks .fe, .be, .tech-stacks ul{
            padding-left:35px;
            
            }
            p{
                font-size: 14px;
            }
            h2{
                font-size:20px;
            }
            
        }

    </style>
    <title>About me | CB</title>
</head>
<body>
    <div class="main main-content">
        <div class="container">
            <div class="inner">
                <img calss="devpic" src="images/devpic.png" alt="developers image goes here">
                <div class="right">
                    <div class="data">
                        <h2>Hello There, </h2>
                        <p>its a Web-Dev intern. And this website was developed by me under the internship of The Sparks Foundation</p>
                    </div>
                    <div class="tech-stacks">
                        <strong>TECH STACK</strong>
                        <div class="fe">
                            frontend:
                            <ul>
                                <li >Html,  Css, Js</li>
                            </ul>
                        </div>
                        <div class="be">
                            backend:
                            <ul>
                                <li>php, mySql</li>                           
                            </ul>
                        </div>
                    </div>
                    <div class="techbox">
                        <h4>Connect with me</h4>
                        <div class="links" >
                            <a href="https://www.facebook.com/mohd.jalal.98434" target="_blank"><img class="iconlogo" src="images/fblogo.png" alt="fblogo"></a>
                            <a href="https://www.linkedin.com/in/mohd-wajid-681495214/" target="_blank"><img class="iconlogo" src="images/linkedinlogo.png" alt="linkedin logo"></a>
                            <a href="mailto:mohdwajeed1919@gmail.com" target="_blank"><img class="iconlogo" src="images/maillogo.png" alt="mail logo"></a>
                            <a href="https://www.instagram.com/lakhonmein_1/" target="_blank"><img class="iconlogo" src="images/iglogo.png" alt="ig logo"></a>
                    
                        </div>
                    </div>
        
                </div>

            </div>
            
        
        </div>
        
    </div>
    
</body>
</html>
<?php 
    include("footer.php");
?>