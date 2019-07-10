<?php
printf("SpecialSum: ");

function isPositive( $num ){

    if($num < 0)
    {
        return FALSE;
    }else{
        return TRUE;
    }
}

function SpecialSum($k, $n){
   
    if(isPositive($k) && isPositive($n))
    {
        if($k == 0)
        {
            return $n;
        }
        $acum = 0;
        for($i = 1; $i <= $n ; $i++)
        {
            $acum = $acum + SpecialSum($k-1, $i);
        }
       
        return $acum;
    }
}

// echo(" k = 1, n = 3 -> 6: ");
// echo(SpecialSum(1,3) . "</br>");
// echo(" --------- </br>");
// echo(" k = 2, n = 3 -> 10: ");
// echo(SpecialSum(2,3) . "</br>");
// echo(" --------- </br>");
// echo(" k = 4, n = 10 -> 2002: ");
// echo(SpecialSum(4,10) . "</br>");
// echo(" --------- </br>");
// echo(" k = 10, n = 10 -> 167960: ");
// echo(SpecialSum(10,10) . "</br>");
// echo(" --------- </br>");

echo(" EJERCICIO:  </br>");
echo(" k = 20, n = 20: ");
echo(SpecialSum(20,20) . "</br>");
echo(" --------- </br>");

// echo(" k = 30, n = 30: ");
// echo(SpecialSum(30,30) . "</br>");
// echo(" --------- </br>");

// echo(" k = 10, n = 10: ");
// echo(SpecialSum(100,100) . "</br>");
// echo(" --------- </br>");
