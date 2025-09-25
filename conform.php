<!DOCTYPE html>
<html lang="ja">
<head>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>フォーム入力</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $tel = $_POST["tel"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $question = $_POST["question"];
        $gender = $_POST["gender"];
        
        echo "<p><strong>名前:</strong>" . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "</p>";
        echo "<p><strong>年齢:</strong>" . htmlspecialchars($age, ENT_QUOTES, 'UTF-8') . "</p>";
        echo "<p><strong>電話番号:</strong>" . htmlspecialchars($tel, ENT_QUOTES, 'UTF-8') . "</p>";
        echo "<p><strong>メールアドレス:</strong>" . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
        echo "<p><strong>住所:</strong>" . htmlspecialchars($address, ENT_QUOTES, 'UTF-8') . "</p>";
        echo "<p><strong>質問:</strong>" . htmlspecialchars($question, ENT_QUOTES, 'UTF-8') . "</p>";
        echo "<p><strong>性別:</strong>" . htmlspecialchars($gender, ENT_QUOTES, 'UTF-8') . "</p>";
    }
    ?>
</body>