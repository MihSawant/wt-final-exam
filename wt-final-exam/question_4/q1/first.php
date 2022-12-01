<?php
    if(isset($_GET['base'])){
        $hra = 0;
        $da = 0;
        $gross = 0;
        $baseSalary = $_GET['base'];
        if($baseSalary < 1500){
            $hra = $baseSalary + ($baseSalary * 0.1);
            $da = $baseSalary + ($baseSalary * 0.9);
        } else{
            $hra = $baseSalary + 500;
            $da = $baseSalary + ($baseSalary * 0.98);
        }
        $gross = $baseSalary + $hra + $da;
        echo "Gross Salary = " . $gross;
    } else{
        echo "No Data";
    }
    

?>