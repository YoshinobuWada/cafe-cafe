<?php 
$referer = $_SERVER['HTTP_REFERER'];
$url     = 'contact.php';
if(!strstr($referer, $url)){
    header('Location: contact.php');
    exit;
}
?>
<form action="contact.php" method="post">
    <div class="info">
        <p>下記の内容をご確認の上送信ボタンを押してください</p>
        <p>内容を訂正する場合は戻るを押してください</p>
        <dl id="checkdl">
            <dt>
                <label for="name">氏名</label>
            </dt>
            <dd>
                <?php echo $_SESSION['name'] ?>
            </dd>
            <dt>
                <label for="hurigana">フリガナ</label>
            </dt>
            <dd>
                <?php echo $_SESSION['hurigana'] ?>
            </dd>
            <dt>
                <label for="dial">電話番号</label>
            </dt>
            <dd>
                <?php echo $_SESSION['dial'] ?>
            </dd>
            <dt>
                <label for="email">メールアドレス</label>
            </dt>
            <dd>
                <?php echo $_SESSION['email'] ?>
            </dd>
            <dt>
                <label for="naiyou">お問い合わせ内容</label>
            </dt>
            <dd>
                <?php echo nl2br($_SESSION['naiyou']) ?>
            </dd>
        </dl>
        <div class="button">
            <input type="submit" id="sosin02" name="send" value="送 信" />
            <input type="submit" id="sosin03" name="back" value="戻 る" />
        </div>
    </div>
</form>