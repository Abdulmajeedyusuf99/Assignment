<?php
function taxcalculator3() {
    $salary=readline("Enter salary: ");
   switch($salary){
    case $salary > 100000:
     $percentage=($salary/50)*100;
     echo $percentage;

     break;

    case $salary >=80000 && $salary <=90000:
     $percentage=($salary/35)*100;
     echo $percentage;

     break;

    case $salary < 80000:
    $percentage=($salary/20)*100;
    echo $percentage;

    default:
    echo "invalid";

   }
}
taxcalculator3();
