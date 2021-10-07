<?php

$ename=$_POST ['ename'];
$ecode=$_POST ['ecode'];
$loc=$_POST ['loc'];
$dep=$_POST ['dep'];
$rh=$_POST ['rh'];
$hd=$_POST ['hd'];
$nd=$_POST ['nd'];
$ph=$_POST ['ph'];
$gs=$rh*$hd*$nd;
$tax=$gs*0.1;
$healthIns=$gs*0.05;
$EPF=1800;
$Total_Deduction=$tax+$healthIns+$EPF;
$ns=$gs-$Total_Deduction;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-image: url(1.jpg);
    }

    .footer {
        position: fixed;
        text-align: center;
        bottom: 0px;
        width: 100%;
    }

    table input[type="submit"] {
        display: block;
        margin: 0 auto;
    }
    label {
   
    color: black;
    
}
</style>

<body text="white">

 <h2 ALIGN="CENTER"><?php echo $ename; ?>'s Slary Receipt</h2>

<div align="center">
        
            <fieldset>
                <table align="center" cellpadding="5">
                    <tr>
                         <td>
                            <label> <b>Employee ID:</b> </label>
                            <?php echo $ecode; ?>
                        </td>
                        <td>
                            <label color="black"> <b>Tax@10 percent:</b> </label>
                            <?php echo $tax; ?>
                        </td>
                        
                    </tr>
                    <p></p>
                    <tr>
                        <td>
                            <label><b>Gross Salary: </b></label>
                            <?php echo $gs; ?>
                        </td>

                        <td>
                            <label><b>Health Insurance@ 5%: </b></label>
                            <?php echo $healthIns; ?>
                        </td>

                        

                    </tr>

                    <tr>
                         <td>
                            <label><b>Deduction: </b></label>
                            <?php echo $Total_Deduction; ?>
                        </td>

                         <td>
                            <label><b>EPF in Rs: </b></label>
                           <?php echo $EPF; ?>
                        </td>
                        

                    </tr>
                    <tr>
                        <td>
                            <label><b>Net Salary: </b></label>
                           <?php echo $ns; ?>
                        </td>
                        <td>
                            <label><b>Total Deduction: </b></label>
                           <?php echo $Total_Deduction; ?>
                        </td>
                       
                    </tr>


                </table>
            </fieldset>
    </div>
    <div class="footer">Designed By Edula Vinay Kumar Reddy</div>
    <br>
</body>

</html>
