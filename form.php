<?php

$error = array();

$data = array();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once "conform.php";
    $error = validateFormData();
    $data = $_POST;

    if (empty($error)) {
        session_start();
        $_SESSION["form_data"] = $data;
        header("Location: conform.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>フォーム入力</h1>
    <form method="post" action="https://www.youtube.com/">
        <div>
            <label for="name">名前:</label>
            <br>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="age">年齢:</label>
            <br>
            <input type="text" id="age" name="age">
        </div>
        <div>
            <label for="tel">電話番号:</label>
            <br>
            <input type="tel" id="tel" name="tel">
        </div>
        <div>
            <label for="email">メールアドレス:</label>
            <br>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="address">住所:</label>
            <br>
            <input type="text" id="address" name="address">
        </div>
        <div>
            <label for="question">質問:</label>
            <br>
            <input type="text" id="question" name="question">
        </div>
        <div>
            <label for="gender">性別:</label>
            <br>
            <select id="gender" name="gender">
                <option value="men">男性</option>
                <option value="women">女性</option>
            </select>
        </div>
        <button type="submit">送信</button>
        </form>
    </form>
    </div>
</body>
