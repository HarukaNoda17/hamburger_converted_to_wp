<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="./js/jquery-3.6.1.min.js"></script>
    <script src="./js/script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap" rel="stylesheet">
    <title>Hamburger Site</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <article class="wrapper u-background--overlay js-toggle">
        <header class="l-header c-background-color--base">
            <div class="l-header__top">
                <h1 class="l-header__top__logo c-font-color--base c-font-family--robot c-font-weight--bold">
                    Hamburger
                </h1>
                <h2 class="l-header__top__menu c-font-weight--bold c-font-family--robot">
                    <button class="c-button--menu js-button is-click">Menu</button> 
                    <!-- ハンバーガーボタン出現時のMenu -->
                </h2>
            </div>
            <div class="p-search--form">
                <form action="#" method="get" class="c-form-search">
                    <label for="#" class="screen-reader-text">検索</label>
                    <input type="search" class="c-form-search__keyword c-img--magnifying-glass" placeholder=" ">
                    <input type="submit" value="検索" class="c-form-search__submit c-font-family--mplus1 c-font-color--base c-font-weight--bold">
                </form>
            </div>
        </header>
        <article class="side-wrapper">
            <aside class="l-sidebar p-sideMenu">
                    <div class="l-sidebar__main p-sideMenu__main js-toggle">
                    <span class="menu-close js-button is-click"><i class="c-img--xmark"></i></span>
                    <h2 class="c-title--sidebar">Menu</h2>
                    <h3 class="c-title--sidebar__menu">バーガー</h3>
                    <ul class="c-text--sidebar">
                        <li>ハンバーガー</li>
                        <li>チーズバーガー</li>
                        <li>テリヤキバーガー</li>
                        <li>アボカドバーガー</li>
                        <li>フィッシュバーガー</li>
                        <li>ベーコンバーガー</li>
                        <li>チキンバーガー</li>
                    </ul>
                    <h3 class="c-title--sidebar__menu">サイド</h3>
                    <ul class="c-text--sidebar">
                        <li>ポテト</li>
                        <li>サラダ</li>
                        <li>ナゲット</li>
                        <li>コーン</li>
                    </ul>
                    <h3 class="c-title--sidebar__menu">ドリンク</h3>
                    <ul class="c-text--sidebar">
                        <li>コーラ</li>
                        <li>ファンタ</li>
                        <li>オレンジ</li>
                        <li>アップル</li>
                        <li>紅茶（Ice/Hot）</li>
                        <li>コーヒー（Ice/Hot）</li>
                    </ul>
                </div>
            </aside>
        </article>
        <main class="l-main">
            <article class="p-visual__archive">
                <section  class="p_visual__archive--main u-background--overlay--archive">
                    <h2 class="c-title--main c-title--under-text c-font-color--white c-font-family--robot c-font-weight--bold">Menu:</h2>
                </section>
                <section class="p-visual__archive--sentence">
                    <h2 class="c-title--archive">
                    小見出しが入ります
                    </h2>
                    <p class="c-text--archive c-font-family--mplus1">
                    テキストが入ります。
                    テキストが入ります。
                    テキストが入ります。
                    テキストが入ります。
                    テキストが入ります。
                    テキストが入ります。
                    テキストが入ります。
                    テキストが入ります。
                    テキストが入ります。
                    テキストが入ります。
                    テキストが入ります。
                    テキストが入ります。
                    テキストが入ります。
                    </p>
                </section>
                <section class="p-visual__archive--card">
                    <figure class="p-card__menu">
                        <img src="./images/archive/img_02.png" alt="チーズバーガーの画像" class="p-card__menu--image">
                            <figcaption class="p-card__menu--caption c-background-color--card">
                                <h2 class="c-title--card c-font-family--mplus1">チーズバーガー</h2>
                                <h3 class="c-title--subheading c-font-family--mplus1">小見出しが入ります</h3>
                                <p class="c-text--card c-font-family--mplus1">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        <button class="c-button--archive c-font-family--mplus1"><a href="#">詳しく見る</a></button>
                            </figcaption>
                    </figure>
                    <figure class="p-card__menu">
                        <img src="./images/archive/img_02.png" alt="ダブルチーズバーガーの画像" class="p-card__menu--image">
                            <figcaption class="p-card__menu--caption c-background-color--card">
                            <h2 class="c-title--card c-font-family--mplus1">ダブルチーズバーガー</h2>
                            <h3 class="c-title--subheading c-font-family--mplus1">小見出しが入ります</h3>
                            <p class="c-text--card c-font-family--mplus1">
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            <button class="c-button--archive c-font-family--mplus1"><a href="#">詳しく見る</a></button>
                            </figcaption>
                    </figure>
                    <figure class="p-card__menu">
                        <img src="./images/archive/img_02.png" alt="スペシャルチーズバーガーの画像" class="p-card__menu--image">
                        <figcaption class="p-card__menu--caption c-background-color--card">
                            <h2 class="c-title--card c-font-family--mplus1">スペシャルチーズバーガー</h2>
                            <h3 class="c-title--subheading c-font-family--mplus1">小見出しが入ります</h3>
                            <p class="c-text--card c-font-family--mplus1">
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            </p>
                            <button class="c-button--archive c-font-family--mplus1"><a href="#">詳しく見る</a></button>
                        </figcaption>
                    </figure>
                <section class="p-pagination">
                    <a class="prev-link" href="#">
                        <div class="c-img--current-page"></div>
                        <div class="c-img--prev"></div>
                        <div class="c-text--pagination">前へ</div>
                    </a>
                    <a class="pagination-link" href="#">
                        <ul class="number-list">
                            <li class="page-number c-border">1</li>
                            <li class="page-number c-border">2</li>
                            <li class="page-number c-border">3</li>
                            <li class="page-number c-border">4</li>
                            <li class="page-number c-border">5</li>
                            <li class="page-number c-border">6</li>
                            <li class="page-number c-border">7</li>
                            <li class="page-number c-border">8</li>
                            <li class="page-number c-border">9</li>
                        </ul>
                    </a>
                    <a class="next-link" href="#">
                        <div class="c-img--next"></div>
                        <div class="c-text--pagination">次へ</div>
                    </a>
                </section>
            </article>
        </main>
        <footer class="l-footer c-background--footer">
            <ul class="l-footer--menu c-title--footer c-font-family--mplus1">
                <li class="c-title--vertical-line">ショップ情報</li>
                <li>ヒストリー</li>
            </ul>
            <small class="c-text--copy-right c-font-family--mplus1 c-font-weight--normal">Copyright: RaiseTech</small>
        </footer>
        </main>
    </article>
</body>
</html>
