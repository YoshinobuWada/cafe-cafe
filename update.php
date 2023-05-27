<?php
$referer = $_SERVER['HTTP_REFERER'];
$url = 'contact.php';
if (!strstr($referer, $url)) {
    header('Location: contact.php');
    exit;
}
try {
    $pdo = new PDO('mysql:dbname=cafe;host=mysql', 'root', 'root', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
} catch (PDOException $e) {
    exit($e->getMessage());
}
try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->beginTransaction();

    $stmt = $pdo->prepare('UPDATE contacts SET name = :name, kana = :kana, tel = :tel, email = :email, body = :body WHERE id = :id');

    $stmt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
    $stmt->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
    $stmt->bindValue(':kana', $_POST['hurigana'], PDO::PARAM_STR);
    $stmt->bindValue(':tel', $_POST['dial'], PDO::PARAM_STR);
    $stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $stmt->bindValue(':body', $_POST['naiyou'], PDO::PARAM_STR);

    $stmt->execute();

    $pdo->commit();
} catch (Exception $e) {
    $pdo->rollBack();
}
?>
<form action="" method="post">
    <div class="endtext info">
        <p>編集が無事完了しました。</p>
        <a href="contact.php">トップへ戻る</a>
    </div>
</form>