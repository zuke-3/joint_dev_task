<?php
print("#####q21#####".PHP_EOL);
foreach(range(1, 30) as $num) {
    if( $num % 105 == 0){
        echo 'FizzBuzzHoge'. PHP_EOL;
    }elseif($num % 35 == 0 ){
        echo 'BuzzHoge'. PHP_EOL;
    }elseif($num % 21 == 0){
        echo 'FizzHoge'. PHP_EOL;
    }elseif($num % 15 == 0){
        echo 'FizzBuzz'. PHP_EOL;
    }elseif($num % 3 == 0 ){
        echo 'Fizz'. PHP_EOL;
    }elseif($num % 5 == 0 ){
        echo 'Buzz'. PHP_EOL;
    }elseif($num % 7 == 0 ){
        echo 'Hoge'. PHP_EOL;
    }else{
        echo $num. PHP_EOL;
    }
}

?>