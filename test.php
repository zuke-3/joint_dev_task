<?php
foreach(range(1, 30) as $num) {
    if($num % 21 == 0) {
        echo 'FizzBuzz'. PHP_EOL;
    }elseif($num % 15 == 0) {
        echo 'FizzBuzz'. PHP_EOL;
    }elseif($num % 3 == 0 ){
        echo 'Fizz'. PHP_EOL;
    }elseif($num % 5 == 0 ){
        echo 'Buzz'. PHP_EOL;
    }elseif($num % 7 == 0 ){
        continue;
    }else{
        echo $num. PHP_EOL;
    }
}

for($i = 1; $i <= 30; $i++){
    if( $i % 105 == 0) {
        echo 'FizzBuzzHoge'. PHP_EOL;
    }elseif($i % 35 == 0 ){
        echo 'BuzzHoge'. PHP_EOL;
    }elseif($i % 21 == 0 ){
        echo 'FizzHoge'. PHP_EOL;
    }elseif($i % 15 == 0 ){
        echo 'FizzBuzz'. PHP_EOL;
    }elseif($i % 7 == 0 ){
        echo 'Hoge'. PHP_EOL;
    } elseif($i % 5 == 0){
        echo 'Buzz'. PHP_EOL;
    }elseif($i % 3 == 0){
        echo 'Fizz'. PHP_EOL;
    }else{
        echo $i. PHP_EOL;
    }
}
?>