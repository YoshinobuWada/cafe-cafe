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
        <input type="hidden" name="id" value="<?php echo $editid['id']; ?>" form="vali" />
        <dl>
            <dt>
                <label for="name">氏名<span>*</span></label>
                <p class="error">
                    <?php if ($a == 1) {
                        echo "名前は必須入力です。名前は10文字以内でご入力ください。";
                    } ?>
                </p>
            </dt>
            <dd>
                <input type="text" name="name" id="name" placeholder="山田太郎" value="<?php echo $_SESSION['name1']; ?>"
                    form="vali">
            </dd>
            <dt>
                <label for="hurigana">フリガナ<span>*</span></label>
                <p class="error">
                    <?php if ($b == 2) {
                        echo "フリガナは必須入力です。フリガナは10文字以内でご入力ください。";
                    } ?>
                </p>
            </dt>
            <dd>
                <input type="text" name="hurigana" id="hurigana" placeholder="ヤマダタロウ"
                    value="<?php echo $_SESSION['hurigana1']; ?>" form="vali">
            </dd>
            <dt>
                <label for="dial">電話番号</label>
                <p class="error">
                    <?php if ($c == 3) {
                        echo "電話番号は11字以内の0-9の数字のみでご入力ください";
                    } ?>
            </dt>
            <dd>
                <input type="text" name="dial" id="dial" placeholder="09012345678"
                    value="<?php echo $_SESSION['dial1']; ?>" form="vali">
            </dd>
            <dt>
                <label for="email">メールアドレス<span>*</span></label>
                <p class="error">
                    <?php if ($d == 4) {
                        echo "メールアドレスは正しくご入力ください";
                    } ?>
                </p>
            </dt>
            <dd>
                <input type="text" name="email" id="email" placeholder="test@test.co.jp"
                    value="<?php echo $_SESSION['email1']; ?>" form="vali">
            </dd>
        </dl>
    </div>
    <div class="naiyo">
        <h3>お問い合わせ内容をご記入ください<span>*</span></h3>
        <dl class="naiyodl">
            <dd>
                <p class="error">
                    <?php if ($e == 5) {
                        echo "お問い合わせ内容は必須入力です。";
                    } ?>
                </p>
                <textarea name="naiyou" id="naiyou"><?php echo $_SESSION['naiyou1']; ?></textarea>
            </dd>
        </dl>
        <div class="button">
            <input type="submit" id="sosin02" name="update" value="送 信" form="vali" />
            <input type="submit" id="sosin03" name="back" value="戻 る" form="vali" />
        </div>
    </div>
</form>