<?php
function taxcalculator2() {
    do{

    $salary=readline("Enter salary: ");
    if($salary > 100000){
        $percentage=($salary/50)*100;
        echo "tax = ". $percentage;
        echo "\n";
    }
    if($salary >=80000 && $salary <=90000){
        $percentage=($salary/35)*100;
        echo"tax = ". $percentage;
        echo "\n";
    }
    if($salary < 80000){
        $percentage=($salary/20)*100; 
        echo "tax = ".  $percentage;
        echo "\n";
    }
    
    }while($salary!=="0");
}
taxcalculator2();

