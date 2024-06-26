<pre>
<?php
/*PHPの学習を始める前に*/
//PHPは今日ではサーバーサイド言語として親しまれてますが、
//元々はリナックス系のプログラミング言語でした。それも初心者向け。
//かつて多くの日本人に好まれ、ガラケーなんかではメイン言語として君臨していました。
//そのため他言語と比べて公式リファレンスが日本人向けにわかりやすく作られています。
//https://www.php.net/manual/ja/getting-started.php
//困ったら読みましょう。

/*変数の基本*/
//phpで変数は以下のように書きます。($をつければ変数)
$Hensu = 1;
$Hensu2 = "2";//文字も
$Hensu3 = $Hensu + $Hensu2; //数字と文字の足し算もなんでも入る(エラーにならない)


echo "/*表示の基本*/<br>";
print("print:HelloPHP;");
print("<br>");
print("<br>");


echo "/*echoの表示*<br>/";
$a1 = "print";
$a2 = "Hello";
$a3 = "PHP!";
echo $a1 . ":" . $a2 . $a3 . "<br>";//文字列の連結
echo "{$a1}{$a2}{$a3}<br>";//文字列の連結

/*定数*/
$hensu = 800;
const TEISU = 800;//定数

/*マジック定数*/
echo "/*マジック定数*<br>/";
echo PHP_OS . "<br>";//実行しているOS
echo PHP_VERSION_ID . "<br>";//現在のPHPのバージョン
echo PHP_INT_MAX . "<br>";//整数の最大値
echo PHP_INT_MIN . "<br>";//整数の最小値
echo PHP_EOL;//改行コード
echo __LINE__ . "<br>";//現在の行番号
echo __FILE__ . "<br>";//ファイルのフルパスとファイル名 

/*配列*/
$arr = array(1,2,3);
$arr = ["one","two","three"];

/*デバッグ表示*/
echo "/*デバッグ用の表示*/<br>";
echo $arr[0] . $arr[1] . $arr[2] . "<br>";

print_r($arr);
echo "<br>";
var_dump($arr);
?>

</pre>