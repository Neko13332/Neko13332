<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // POSTで送られてきたデータを取得
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $blood_type = $_POST['blood_type'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];

    // メールの本文を作成
    $message = "以下はお客様がご記入いただいた情報です。\n\n";
    $message .= "お名前: $name\n";
    $message .= "お誕生日: $dob\n";
    $message .= "性別: $gender\n";
    $message .= "血液型: $blood_type\n";
    $message .= "メールアドレス: $email\n";
    $message .= "住所: $address\n";
    $message .= "質問項目1: $q1\n";
    $message .= "質問項目2: $q2\n";

    // ヘッダーを設定（送信者のメールアドレスと名前を指定）
    $headers = "From: your-email@example.com\r\n";
    $headers .= "Reply-To: your-email@example.com\r\n";

    // 購入者へのメール送信
    mail($email, "ご記入いただいた情報の確認", $message, $headers);

    // 販売元へのメール送信
    mail("your-store@example.com", "お客様からのアンケート情報", $message, $headers);

    echo "メールが送信されました";
}
?>
