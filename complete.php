<?php
$referer = $_SERVER['HTTP_REFERER'];
$url = 'contact.php';
if (!strstr($referer, $url)) {
    header('Location: contact.php');
    exit;
}
try {
    $pdo = new PDO('mysql:dbname=cafe;host=mysql', 'root', 'root');
} catch (PDOException $eroor) {
    echo "接続失敗：" . $eroor->getMessage();
    die();
}
$count = $pdo->prepare('INSERT INTO contacts (name, kana, tel, email, body) VALUES (:name, :kana, :tel, :email, :body)');
$count->bindValue(':name', $_SESSION['name'], PDO::PARAM_STR);
$count->bindValue(':kana', $_SESSION['hurigana'], PDO::PARAM_STR);
$count->bindValue(':tel', $_SESSION['dial'], PDO::PARAM_STR);
$count->bindValue(':email', $_SESSION['email'], PDO::PARAM_STR);
$count->bindValue(':body', $_SESSION['naiyou'], PDO::PARAM_STR);
try{
$count->execute();
} catch (PDOException $eroor) {
    echo "実行失敗：" . $eroor->getMessage();
}
unset($pdo);
?>
<form action="contact.php" method="post">
    <div class="endtext">
        <p>件名：【
            <?php echo $_SESSION['name']; ?>】お問い合わせありがとうございます。
        </p>

        <p>※このメールはシステムからの自動返信です。</p>

        <p>
            <?php echo $_SESSION['name']; ?>様
        </p>

        <p>お世話になっております。</p>
        <p>JOBPOPへのお問い合わせありがとうございました。</p>

        <p>以下の内容でお問い合わせを受け付けいたしました。</p>
        <p>1営業日以内に、担当者 山田 よりご連絡いたしますので</p>
        <p>今しばらくお待ちくださいませ。

        <p>━━━━━━***　お問い合わせ内容　***━━━━━━</p>
        <p>お名前：
            <?php echo $_SESSION['name']; ?>
        </p>
        <p>フリガナ：
            <?php echo $_SESSION['hurigana']; ?>
        </p>
        <p>E-Mail：
            <?php echo $_SESSION['email']; ?>
        </p>
        <p>電話番号：
            <?php echo $_SESSION['dial']; ?>
        </p>

        <p>お問い合せ日時：
            <?php date_default_timezone_set('Asia/Tokyo');
            echo date('Y年m月d日 H時i分') ?>;
        </p>
        <p>お問い合わせ内容：</p>
        <p>
            <?php echo nl2br($_SESSION['naiyou']) ?>
        </p>
        <p>━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━</p>

        <a href="index.php">トップへ戻る</a>
    </div>
</form>