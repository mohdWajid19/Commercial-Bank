<?php 
include("connection.php");
include("menubar.php");
?>
<html>
    <head>
        <title>Transaction history | CB</title>
        <link rel="stylesheet" href="css/style.css">
        <style>
        /* animation keyframes */   
            .table{
                animation: drop-table 300ms; 
            }
            h3{
    
                animation: drop-table 700ms;
            }

            @keyframes drop-table {
               0%{
                    transform: translateY(-100%) ;
                }
                100%{
                    transform:translateY(0%);
                }
            }
        </style>
    </head>
    <body>
    <div class="main-content main">
        <br><br>
        <h3> Transactions History </h3>
        <br><br>  
        <div class="table-responsive">
        <table class="table ">
            <tr>
                <!-- <th>sno.</th> -->
                <th>sno</th>
                <th>username</th>
                <th>beneficiary</th>
                <th>date</th>
                <th>amount</th>
            </tr>
<?php 

$query = "SELECT * FROM transactions";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
// echo "$total";
if($total != 0)
while($result = mysqli_fetch_assoc($data))
{
    //echo $result['username']." ".$result['beneficiary']." ".$result['date']." ".$result['amount'];
    echo "<tr>
    <td>".$result['sno.']."</td> 
    <td>".$result['username']."</td> 
    <td>".$result['beneficiary']."</td>
    <td>".$result['date']."</td> 
    <td>".$result['amount']."</td> </tr>";
    //echo "success";
}
?>
   </table>
        </div>
        
</div>
<?php 
     include("footer.php");
?>
</body>
</html>
