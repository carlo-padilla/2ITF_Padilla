<!DOCTYPE html>
<head>
    <meta charset = "UTF-8">
    <title> Most Prestigious Tax Calculator!
</title>
<style type = "text/css">
h1 {
    font-family: Calibri;
    text-align: center;
    font-size: 42px;
    color: #ffffff;
}
body{
    font-family: Arial;
    background-color: #32A9DF;
    font-size: 16px;
    text-align: center;
    color: #ffffff;
}
    </style>
</head>

<body>
<h1>The Most Prestigious Tax Calculator!</h1>
<form method = "post">
    <input type = "text" name = "salary" id="salary">
</br>
    <input type="radio" id="bimonthly" value="bimonthly" name="type" >Bi-Monthly</br>
    <input type="radio" id="monthly" value="monthly" name="type" >Monthly</br>
</br>
<button type ="submit" name = "submit" value = "submit">Compute</button>

</form>

<?php
if(isset($_POST['submit'])){
    $salary = $_POST['salary'];
    $type = $_POST['type'];

        if($_POST['type']=="bimonthly"){
            $bisalary = $salary*2;
            $biannual = $bisalary*12;
            
            if($biannual  <= 250000){
                $biannualtax = 0;
                $bimonthlytax = 0;
            } 
            else if($biannual >250000 && $biannual<=400000){
                $biannualtax = ($biannual-250000)*.2;
                $bimonthlytax = $biannualtax/12;
            }
            else if($biannual >400000 && $biannual<=800000){
                $biannualtax = 30000+($biannual-400000)*.25;
                $bimonthlytax = $biannualtax/12;
            }
            else if($biannual >800000 && $biannual<=2000000){
                $biannualtax = 130000+($biannual-800000)*.3;
                $bimonthlytax = $biannualtax/12;
            }
            else if($biannual >2000000 && $biannual<=8000000){
                $biannualtax = 490000+($biannual-2000000)*.32;
                $bimonthlytax = $biannualtax/12;
            }
            else if($biannual >8000000){
                $biannualtax = 2410000+($biannual-8000000)*.35;
                $bimonthlytax = $biannualtax/12;
            }
            echo "Annual Salary: " . $biannual;
            echo "</br>";
            echo "Est. Annual Tax: " . $biannualtax;
            echo "</br>";
            echo "Est. Monthly Tax: " . $bimonthlytax;
            echo "</br>";

        }
        else if($_POST['type']=="monthly"){
            $annual = $salary*12;
            
            if($annual  <= 250000){
                $annualtax = 0;
                $monthlytax = 0;
            } 
            else if($annual >250000 && $annual<=400000){
                $annualtax = ($annual-250000)*.2;
                $monthlytax = $annualtax/12;
            }
            else if($annual >400000 && $annual<=800000){
                $annualtax = 30000+($annual-400000)*.25;
                $monthlytax = $annualtax/12;
            }
            else if($annual >800000 && $annual<=2000000){
                $annualtax = 130000+($annual-800000)*.3;
                $monthlytax = $annualtax/12;
            }
            else if($annual >2000000 && $annual<=8000000){
                $annualtax = 490000+($annual-2000000)*.32;
                $monthlytax = $annualtax/12;
            }
            else if($annual >8000000){
                $annualtax = 2410000+($annual-8000000)*.35;
                $monthlytax = $annualtax/12;
            }
            echo "Annual Salary: " . $annual;
            echo "</br>";
            echo "Est. Annual Tax: " . $annualtax;
            echo "</br>";
            echo "Est. Monthly Tax: " . $monthlytax;
            echo "</br>";

        }
    
}
?>


</body>
</html>

