<!-- ヘッダー作る -->
<!-- カフェカフェ　はじめに　体験　お問い合わせ　サインイン　897pxブレイクポイント-->
<!-- 外部ファイルにして共通化 -->
<link rel="stylesheet" href="header.css">
<header>
    <h1 class="tema">
        あなたの<br>好きな空間を作る。
    </h1>
    <nav class="gnav">
        <a href="toiawase.php"><img src="cafe/img/logo.png" alt="カフェロゴ"></a>
        <ul id="page-link01">
            <li><a href="toiawase.php#area-1" class="hoverlink">はじめに</a></li>
            <li><a href="toiawase.php#area-2" class="hoverlink">体験</a></li>
            <li><a href="contact.php">お問い合わせ</a></li>
        </ul>
        <a href="#modal01" class="hoverlink modalon">サインイン</a>
    </nav>
    <nav class="gnav2">
        <a href="toiawase.php"><img src="cafe/img/logo.png" alt="カフェロゴ"></a>
        <a href="#menu" class="btn" id="toggle"><img src="cafe/img/menu.png" alt="ハンバーガーメニューもどき"></a>
    </nav>
    <div class="hide" id="menu">
        <ul id="page-link02">
            <li><a href="#modal01" class="hoverlink modalon">サインイン</a></li>
            <li><a href="#area-1" class="hoverlink">はじめに</a></li>
            <li><a href="#area-2" class="hoverlink">体験</a></li>
            <li><a href="contact.php">お問い合わせ</a></li>
        </ul>
    </div>
    <div id="modal01">
        <?php include("modal.php"); ?>
    </div>
</header>