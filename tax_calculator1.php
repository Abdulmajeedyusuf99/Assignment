<?php
function taxcalculator1() {
    $salary=readline("Enter salary: ");
    if($salary > 100000){
        $percentage=($salary/50)*100;
        echo $percentage;
    }
    elseif($salary >=80000 && $salary <=90000){
        $percentage=($salary/35)*100;
        echo $percentage;
    }
    elseif($salary < 80000){
        $percentage=($salary/20)*100; 
        echo $percentage;
    }
}
taxcalculator1();