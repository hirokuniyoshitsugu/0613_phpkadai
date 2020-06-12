<?php
session_start(); // セッションの開始
include('functions.php'); // 関数ファイル読み込み
check_session_id();
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB連携型todoリスト（入力画面）</title>
</head>

<body>
    <form action="cakutel_read.php" action="cakutel_hosetread" method="POST">
        <fieldset>
            <legend>入力画面</legend>
            <a href="cakutel_read.php">検索結果画面</a>
            <!-- <div>
                ID: <input type="number" name="number">
            </div> -->
            <div>
                名前:<input type="text" name="n" size="30" maxlength="20">
            </div>
            <div>
                ベース: <input type="text" name="b" list="base">
                <datalist id="base">
                    <option value="ジン">ジン</option>
                    <option value="ウォッカ">ウォッカ</option>
                    <option value="テキーラ">テキーラ</option>
                    <option value="ラム">ラム</option>
                    <option value="ビール">ビール</option>
                    <option value="ワイン">ワイン</option>
                    <option value="ウイスキー">ウイスキー</option>
                    <option value="ラム">ラム</option>
                    <option value="ニホンシュ">日本酒</option>
                    <option value="ショウチュウ">焼酎</option>
                </datalist>
            </div>
            <div>
                割りもの: <input type="text" name="w" list="warimono">
                <datalist id="warimono">
                    <option value="ソーダ">ソーダ</option>
                    <option value="トニックウォーター">トニックウォーター</option>
                    <option value="ジンジャエール">ジンジャエール</option>
                    <option value="オレンジジュース">オレンジジュース</option>
                    <option value="グレープフルーツジュース">グレープフルーツジュース</option>
                    <option value="パイナップルジュース">パイナップルジュース</option>
                    <option value="トマトジュース">トマトジュース</option>
                    <option value="ギュウニュウ">牛乳</option>
                </datalist>
            </div>
            <div>
                テイスト: <input type="text" name="t" list="taest">
                <datalist id="taest">
                    <option value="辛口">辛口</option>
                    <option value="甘辛">中辛甘口</option>
                    <option value="甘口">甘口</option>
                </datalist>
            </div>


            <div>
                <input type="submit" value="登録">
            </div>
        </fieldset>
    </form>

</body>

</html>