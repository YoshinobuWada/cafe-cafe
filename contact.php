<?php
session_start();
$mode = 'input';
$errmessage = array();
$a = null;
$b = null;
$c = null;
$d = null;
$e = null;
$message = '送信待機中';
if (isset($_POST['back']) && $_POST['back']) {

} else if (isset($_POST['confirm']) && $_POST['confirm']) {
    if (!$_POST['name']) {
        $errmessage[] = "名前を入力してください";
        $a = 1;

    } else if (mb_strlen($_POST['name']) >= 10) {
        $errmessage[] = "名前は10文字以内にしてください";
        $a = 1;
    }
    $_SESSION['name'] = htmlspecialchars($_POST['name'], ENT_QUOTES);

    if (!$_POST['hurigana']) {
        $errmessage[] = "フリガナを入力してください";
        $b = 2;
    } else if (mb_strlen($_POST['name']) >= 10) {
        $errmessage[] = "フリガナは10文字以内にしてください";
        $b = 2;
    }
    $_SESSION['hurigana'] = htmlspecialchars($_POST['hurigana'], ENT_QUOTES);

    if (!ctype_digit($_POST['dial']) && !($_POST['dial']) == '') {
        $errmessage[] = "電話番号が不正です";
        $c = 3;
    }
    $_SESSION['dial'] = htmlspecialchars($_POST['dial'], ENT_QUOTES);

    if (!$_POST['email']) {
        $errmessage[] = "メールアドレスを入力してください";
        $d = 4;
    } else if (!preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/i', $_POST['email'])) {
        $errmessage[] = "メールアドレスが不正です";
        $d = 4;
    }
    $_SESSION['email'] = htmlspecialchars($_POST['email'], ENT_QUOTES);

    if (!$_POST['naiyou']) {
        $errmessage[] = "お問い合わせ内容を入力してください";
        $e = 5;
    }
    $_SESSION['naiyou'] = htmlspecialchars($_POST['naiyou'], ENT_QUOTES);

    if ($errmessage) {
        $mode = 'input';
        $x = implode('\n', $errmessage);
    } else {
        $mode = 'confirm';
    }
} else if (isset($_POST['send']) && $_POST['send']) {
    $mode = 'send';
} else {
    $_SESSION['name'] = "";
    $_SESSION['hurigana'] = "";
    $_SESSION['dial'] = "";
    $_SESSION['email'] = "";
    $_SESSION['naiyou'] = "";
    $pdo = new PDO('mysql:dbname=cafe; host=mysql;', 'root', 'root');
    $pdo->query('SET NAMES utf8;');
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="toiawaseform.css">
    <title>お問い合わせフォーム</title>
    <script>
        ask = () => {
            return confirm('本当に削除して宜しいですか？');
        }
    </script>
</head>

<body>
    <?php include("header.php"); ?>
    <div id="otoi01">
        <div class="otoi02">
            <h2>お問い合わせ</h2>
            <?php if ($mode == 'input') { ?>
                <!-- 入力画面 -->
                <form action="contact.php" method="post" id="vali">
                    <div class="info">
                        <h3>下記の項目をご記入の上送信ボタンを押してください</h3>
                        <p>送信頂いた件につきましては、当社より折り返しご連絡差し上げます。</p>
                        <p>なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。</p>
                        <p><span>*</span>は必須項目となります。</p>
                        <div>
                        </div>

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
                                <input type="text" name="name" id="name" placeholder="山田太郎"
                                    value="<?php echo $_SESSION['name'] ?>">
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
                                    value="<?php echo $_SESSION['hurigana'] ?>">
                            </dd>
                            <dt>
                                <label for="dial">電話番号</label>
                                <p class="error">
                                    <?php if ($c == 3) {
                                        echo "電話番号は0-9の数字のみでご入力ください";
                                    } ?>
                                </p>
                            </dt>
                            <dd>
                                <input type="number" name="dial" id="dial" placeholder="09012345678"
                                    value="<?php echo $_SESSION['dial'] ?>">
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
                                    value="<?php echo $_SESSION['email'] ?>">
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
                                <textarea name="naiyou" id="naiyou"><?php echo $_SESSION['naiyou'] ?></textarea>
                            </dd>
                            <dd>
                                <input type="submit" id="sosin01" name="confirm" value="送 信" />
                            </dd>
                        </dl>
                    </div>
                </form>
            <?php } else if ($mode == 'confirm') { ?>
                    <!-- 確認画面 -->
                <?php include("confirm.php"); ?>
            <?php } else { ?>
                    <!-- 完了画面 -->
                <?php include("complete.php"); ?>
            <?php } ?>
        </div>
    </div>
    <?php include("footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script>
        $(function () {
            $('#toggle').on('click', function () {
                $($(this).attr('href')).toggleClass('hide');
            });
            $(document).on('click', function (i) {
                if (!$(i.target).closest('#menu').length && !$(i.target).closest('#toggle').length) {
                    $('#menu').addClass('hide');
                }
            });
            $('.modalon').on('click', function () {
                $($(this).attr('href')).addClass('modal02');
                $('.signinbox01').addClass('signinbox02');
            });
            $('#signin').on('click', function (e) {
                if (!$(e.target).closest('.signinbox01').length && !$(e.target).closest('.modalon').length) {
                    $('#modal01').removeClass('modal02');
                    $('.signinbox01').removeClass('signinbox02');
                }
            });
            $('#sosin01').click(function () {
                var error;
                var error_result = new Array();

                if ($('#name').val() === '' || $('#name').val().length >= 10) {
                    var error = 1;
                    error_result.push('氏名は必須入力です。10文字以内でご入力ください。');
                }
                if ($('#hurigana').val() === '' || $('#hurigana').val().length >= 10) {
                    var error = 1;
                    error_result.push('フリガナは必須入力です。10文字以内でご入力ください。');
                }
                if ($('#dial').val() == [0 - 9]) {
                    var error = 1;
                    error_result.push('電話番号は0-9の数字のみでご入力ください');
                }
                if ($('#email').val() == '' || !$('#email').val().match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)) {
                    var error = 1;
                    error_result.push('メールアドレスは正しくご入力ください');
                }
                if ($('#naiyou').val() === '') {
                    var error = 1;
                    error_result.push('お問い合わせ内容は必須入力です。');
                }

                if (error) {
                    var error_result = error_result.join('\n');
                    alert(error_result);
                }
            });
        });
    </script>
</body>

</html>