<?php

use BcMath\Number;

function taxcalculator1() {
    do{

    $salary=readline("Enter salary: ");
    if($salary > 100000){
        $percentage=(50/100)*$salary;
        echo "tax = ". $percentage;
        echo "\n";
    }
    elseif($salary >=80000 && $salary <=90000){
        $percentage=(35/100)*$salary;
        echo "tax = ". $percentage;
        echo "\n";
    }
    elseif($salary < 80000){
        $percentage=(20/100)*$salary; 
        echo "tax = ". $percentage;
        echo "\n";
    }

    }while($salary!=="0");
}
taxcalculator1();