<?php get_header(); ?>
<?php get_sidebar(); ?>
<main class="l-main">
    <article class="p-visual__archive">
        <section class="p_visual__archive--main u-background--overlay--archive">
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
                <img src="<?php echo get_theme_file_uri('./images/archive/img_02.png'); ?>" alt="チーズバーガーの画像" class="p-card__menu--image">
                <figcaption class="p-card__menu--caption c-background-color--card">
                    <h2 class="c-title--card c-font-family--mplus1">チーズバーガー</h2>
                    <h3 class="c-title--subheading c-font-family--mplus1">小見出しが入ります</h3>
                    <p class="c-text--card c-font-family--mplus1">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <button class="c-button--archive c-font-family--mplus1"><a href="#">詳しく見る</a></button>
                </figcaption>
            </figure>
            <figure class="p-card__menu">
                <img src="<?php echo get_theme_file_uri('./images/archive/img_02.png'); ?>" alt="ダブルチーズバーガーの画像" class="p-card__menu--image">
                <figcaption class="p-card__menu--caption c-background-color--card">
                    <h2 class="c-title--card c-font-family--mplus1">ダブルチーズバーガー</h2>
                    <h3 class="c-title--subheading c-font-family--mplus1">小見出しが入ります</h3>
                    <p class="c-text--card c-font-family--mplus1">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <button class="c-button--archive c-font-family--mplus1"><a href="#">詳しく見る</a></button>
                </figcaption>
            </figure>
            <figure class="p-card__menu">
                <img src="<?php echo get_theme_file_uri('./images/archive/img_02.png'); ?>" alt="スペシャルチーズバーガーの画像" class="p-card__menu--image">
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
<?php get_footer(); ?>