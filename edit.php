<?php
$referer = $_SERVER['HTTP_REFERER'];
$url = 'contact.php';
if (!strstr($referer, $url)) {
    header('Location: contact.php');
    exit;
}
?>
<form action="contact.php" method="post" id="vali">
    <div class="info">
        <h3>編集画面</h3>
        <input type="hidden" name="id" value="<?php echo $editid['id']; ?>" form="vali"/>
        <dl>
            <dt>
                <label for="name">氏名<span>*</span></label>
            </dt>
            <dd>
                <input type="text" name="name" id="name" placeholder="山田太郎" value="<?php echo $editid['name']; ?>"
                    form="vali">
            </dd>
            <dt>
                <label for="hurigana">フリガナ<span>*</span></label>
            </dt>
            <dd>
                <input type="text" name="hurigana" id="hurigana" placeholder="ヤマダタロウ"
                    value="<?php echo $editid['kana']; ?>" form="vali">
            </dd>
            <dt>
                <label for="dial">電話番号</label>
            </dt>
            <dd>
                <input type="text" name="dial" id="dial" placeholder="09012345678" value="<?php echo $editid['tel']; ?>"
                    form="vali">
            </dd>
            <dt>
                <label for="email">メールアドレス<span>*</span></label>
            </dt>
            <dd>
                <input type="text" name="email" id="email" placeholder="test@test.co.jp"
                    value="<?php echo $editid['email']; ?>" form="vali">
            </dd>
        </dl>
    </div>
    <div class="naiyo">
        <h3>お問い合わせ内容をご記入ください<span>*</span></h3>
        <dl class="naiyodl">
            <dd>
                <textarea name="naiyou" id="naiyou"><?php echo $editid['body']; ?></textarea>
            </dd>
        </dl>
        <div class="button">
            <input type="submit" id="sosin02" name="update" value="送 信" form="vali" />
            <input type="submit" id="sosin03" name="back" value="戻 る" form="vali" />
        </div>
    </div>
</form>