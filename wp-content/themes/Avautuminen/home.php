<?php /* Template Name: home */ ?>

<?php get_header(); ?>

<div class="content-row">
    <main>
        <h1>avaudu</h1>
        <h5>Ahdistaako? Tekeekö mieli avautua? Älä nolaa itseäsi facebookissa vaan avaudu täällä anonyymisti!</h5>
        <?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>
        <!--Avautumis formin textien vaihto suomeksi-->
        <script>
            document.getElementById("user-submitted-post").value = "Avaudu";
            document.getElementById("user-submitted-title").placeholder = "Otsikko";
            document.getElementById( 'user-submitted-category' ).getElementsByTagName('option')[0].innerHTML = "Valitse kategoria ↕";
            document.getElementById("user-submitted-content").placeholder = "Avautuminen";
            document.getElementById("usp-error-message").innerHTML = "<p style='color:#f66969'>Ole hyvä ja täytä otsikko sekä avautuminen</p>";

        </script>
        <?php if (have_posts()): ?>
            <?php while(have_posts()): ?>
        <div class="uudet-ja-suositut">
            <p>Uusimmat</p>
            <a href="<?php echo get_home_url(); ?>/?page_id=187">Suosituimmat</a>
        </div>
                <?php the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php
            $uudet_artikkelit = wp_get_recent_posts(array('numberposts' => '100'));
            foreach($uudet_artikkelit as $artikkeli):
        ?>
        <?php $comments_count = wp_count_comments($artikkeli['ID']); ?>
        <article>
            <h2><?php echo $artikkeli['post_title']; ?></h2>
            <p><?php echo $artikkeli['post_content']; ?></p>
            <?php echo get_the_post_thumbnail($artikkeli['ID'], 'thumbnail'); ?>
            <img class="commenting" src="<?php echo get_template_directory_uri(); ?>/img/kommentti.png" height="16"><a href="<?php echo get_home_url(); ?>/?p=<?php echo $artikkeli['ID']; ?>"><?php echo $comments_count->total_comments; ?> Kommenttia</a>
        </article>
        <?php endforeach; ?>
    </main>
</div>

<?php get_footer(); ?>