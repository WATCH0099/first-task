<?php //【応用】次のプログラムにはバグがあります。どこにバグが有るか調べて修正してみましょう。(バグは一つとは限りません。)
$array_calendar = [//変数名のはじめが数字,括弧の種類
  "January" => "1月",
  "February" => "2月",//,が全角入力になっている
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",//>の記入漏れ
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",//""の記入漏れ
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $array_calendar["December"];//呼び出しの際も""が必要