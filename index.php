<!DOCTYPE html>
<html>
<head>
    <title>Лаб10</title>
    <meta charset="utf-8">
    </head>
<body>
    <form id="frm" method="POST" action="">
        <p>Введите элементы массива через запятую:</p>
        <input type="text" name="n" value="1, 2, 3">
        <input type="submit" value="OK">
    </form>
    <?php
        $n=$_POST["n"];
        $myArray = explode(", ", $n);


    
        //Сумма элементов массива с нечетными номерами
        $sumOfEl=0;
        for($i=0; $i<count($myArray); $i++){
            if($i%2==1){
                $sumOfEl+=$myArray[$i];
            }
        }

        //Сумма элементов массива, располоенных между первым и последним отрицательными элементами
        $firstOtrEl;
        $lastOtrEl;
        $sumBetOtr=0;
        for($i=0; $i<count($myArray); $i++){
            if($myArray[$i]<0){
                $firstOtrEl=$i;
                break;
            }
        }
        for($i=count($myArray); $i>0; $i--){
            if($myArray[$i]<0){
                $lastOtrEl=$i;
                break;
            }
        }
        for($i=$firstOtrEl+1; $i<$lastOtrEl; $i++){
            $sumBetOtr+=$myArray[$i];
        }

        //Массив, где удалены все элементы, чей модуль не превышает 1
        $l=0;
        while($l<count($myArray)){
            if(abs($myArray[$l])<=1){
                array_splice($myArray, $l, 1);
            }
            else{
                $l++;
            }
        }

        echo "Сумма элементов массива с нечетными номерами: ".$sumOfEl."; Сумма элементов массива, располоенных между первым и последним отрицательными элементами: ".$sumBetOtr."; Массив, где удалены все элементы, чей модуль не превышает 1: </br>";
        for($m=0; $m<count($myArray); $m++){
            echo $myArray[$m]."; ";
        }
    ?>
</body>
</html>