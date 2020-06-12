<?php
// sessionに保存されている変数を取り出し，計算して表示しよう

session_start();

$_session['number'] += 1;

echo $_SESSION['number'];
