<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="toiawase.css">
    <title>Cafe-Cafe</title>
</head>

<body>
    <div class="alert">
        <a href="#">新型コロナウイルスに対する取り組みの最新情報をご案内</a>
    </div>
    <?php include("header.php"); ?>
    <!-- メイン作る -->
    <main>
        <div class="wrap">
            <section class="acsess" id="area-1">
                <div class="acsessbox1">
                    <img src="cafe/img/cafe1.jpg" alt="東京">
                    <div class="acsessbox2">
                        <p class="area">東京</p>
                        <p class="distance">車で15分</p>
                    </div>
                </div>
                <div class="acsessbox1">
                    <img src="cafe/img/cafe2.jpg" alt="神奈川">
                    <div class="acsessbox2">
                        <p class="area">神奈川</p>
                        <p class="distance">車で30分</p>
                    </div>
                </div>
                <div class="acsessbox1">
                    <img src="cafe/img/cafe3.jpg" alt="愛知">
                    <div class="acsessbox2">
                        <p class="area">愛知</p>
                        <p class="distance">車で1時間</p>
                    </div>
                </div>
                <div class="acsessbox1">
                    <img src="cafe/img/cafe4.jpg" alt="京都">
                    <div class="acsessbox2">
                        <p class="area">京都</p>
                        <p class="distance">車で40分</p>
                    </div>
                </div>
                <div class="acsessbox1">
                    <img src="cafe/img/cafe5.jpg" alt="岡山">
                    <div class="acsessbox2">
                        <p class="area">岡山</p>
                        <p class="distance">車で1.5時間</p>
                    </div>
                </div>
                <div class="acsessbox1">
                    <img src="cafe/img/cafe6.jpg" alt="鹿児島">
                    <div class="acsessbox2">
                        <p class="area">鹿児島</p>
                        <p class="distance">車で50分</p>
                    </div>
                </div>
                <div class="acsessbox1">
                    <img src="cafe/img/cafe7.jpg" alt="東京">
                    <div class="acsessbox2">
                        <p class="area">沖縄</p>
                        <p class="distance">車で2時間</p>
                    </div>
                </div>
            </section>
            <section class="location">
                <h1>好きなロケーションを選ぼう</h1>
                <div class="locationbox1">
                    <div class="locationbox2">
                        <img src="cafe/img/intro1.jpg" alt="クラシック">
                        <h2>クラシック</h2>
                    </div>
                    <div class="locationbox2">
                        <img src="cafe/img/intro2.jpg" alt="バー">
                        <h2>バー</h2>
                    </div>
                    <div class="locationbox2">
                        <img src="cafe/img/intro3.jpg" alt="キャンプ">
                        <h2>キャンプ</v>
                    </div>
                    <div class="locationbox2">
                        <img src="cafe/img/intro4.jpg" alt="リゾート">
                        <h2>リゾート</h2>
                    </div>
                </div>
            </section>
            <!-- go to eat -->
            <section class="GoToEats">
                <div class="goto">
                    <h1>Go To Eats</h1>
                    <p>キャンペーンを利用して、全国で食事しよう。</p>
                    <p>いつもと違う景色に囲まれてカラダもココロもリフレッシュ。</p>
                </div>
                <img src="cafe/img/goto.jpg" alt="gotoeat">
            </section>
        </div>
        <!-- カフェつくりを体験しよう -->
        <section class="makecaffe" id="area-2">
            <div class="wrap">
                <h1>カフェ作りを体験しよう</h1>
                <p>お店のエキスパートが案内するユニークな体験(直接対面型またはオンライン)</p>
                <div class="makecaffebox1">
                    <div class="makecaffebox2">
                        <img src="cafe/img/exp1.jpg" alt="カフェ作りの様子">
                        <p class="makecaffemidasi">ジョブ体験</p>
                        <p>カフェカウンターを体験しよう。</p>
                    </div>
                    <div class="makecaffebox2">
                        <img src="cafe/img/exp2.jpg" alt="カフェ作りの様子">
                        <p class="makecaffemidasi">レシピ体験</p>
                        <p>美味しいレシピを考えてみよう。</p>
                    </div>
                    <div class="makecaffebox2">
                        <img src="cafe/img/exp3.jpg" alt="カフェ作りの様子">
                        <p class="makecaffemidasi">プロモーション体験</p>
                        <p>お店の宣伝を手伝ってみよう。</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- 全国のホストに仲間入りをしよう -->
        <div class="wrap">
            <section class="host">
                <h1>全国のホストに仲間入りをしよう</h1>
                <div class="hostbox1">
                    <div class="hostbox2">
                        <img src="cafe/img/host1.jpg" alt="ホスト画像">
                        <p class="hostmidasi">ビジネス</p>
                    </div>
                    <div class="hostbox2">
                        <img src="cafe/img/host2.jpg" alt="ホスト画像">
                        <p class="hostmidasi">コミュティ</p>
                    </div>
                    <div class="hostbox2">
                        <img src="cafe/img/host3.jpg" alt="ホスト画像">
                        <p class="hostmidasi">食べ歩き</p>
                    </div>
                </div>
            </section>
        </div>
        <div class="pagetop">
            <p>Jump To Top</p>
        </div>
    </main>
    <?php include("footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        $(function () {
            $(window).scroll(function () {
                const scroll = $(window).scrollTop();
                $('.gnav, .gnav2').each(function () {
                    if (scroll > 57) {
                        $(this).addClass("fixed");
                    } else if (scroll <= 57) {
                        $(this).removeClass("fixed");
                    }
                });
                $('#menu').each(function () {
                    if (scroll > 57) {
                        $(this).css('top', '90px');
                    } else if (scroll <= 57) {
                        $(this).css('top', '140px');
                    }
                });
                $('.pagetop').each(function () {
                    if (scroll > 740) {
                        $(this).addClass('is-fadein');
                    } else if (scroll <= 740) {
                        $(this).removeClass('is-fadein');
                    }
                });
                $('.pagetop').click(function () {
                    window.scroll({
                        top: 0,
                        behavior: "smooth",
                    });
                });
            });
            $('#page-link a[href*="#"]').click(function () {
                var elmHash = $(this).attr('href');
                var pos = $(elmHash).offset().top;
                $('body,html').animate({ scrollTop: pos }, 500);
                return false;
            });
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
        });
    </script>
</body>

</html>