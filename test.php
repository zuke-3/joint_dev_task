<?php
print("#####q10#####".PHP_EOL);
$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼","高級なうに"];

  # 以下に回答を記載
foreach($foods as $food){
  if(preg_match('/うに/',$food)) {
    echo "好物です".PHP_EOL;
}else{
  echo "まぁまぁ好きです".PHP_EOL;
}
}
echo PHP_EOL;

print("#####q10#####".PHP_EOL);
//Q10. 次の配列の各要素について， うに という文字列が含まれていれば「好物です」と表示し，そうでなければ「まぁまぁ好きです」と出力するコードを書いて下さい。

$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼"];

foreach($foods as $food){
    if(preg_match('/うに/',$food)){
        print('好物です'.PHP_EOL);
    }else{
        print('まぁまぁ好きです'.PHP_EOL);
    }
}

echo PHP_EOL;


?>