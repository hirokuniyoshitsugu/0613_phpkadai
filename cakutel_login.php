<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カクテル検索ベースログイン画面</title>
</head>

<body>
    <form action="cakutel_login_act.php" method="POST">
        <fieldset>
            <legend>カクテル検索ベースホストユーザーログイン</legend>
            <div>
                user_id: <input type="text" name="user_id">
            </div>
            <div>
                password: <input type="text" name="password">
            </div>
            <div>
                <button>HOST Login</button>
            </div>
            <a href="cakutel_register.php">or register</a>
            <a href="cakutel_input.php">GESTUSER</a>
        </fieldset>
    </form>

</body>

</html>