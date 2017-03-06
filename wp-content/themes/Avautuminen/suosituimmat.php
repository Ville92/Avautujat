<?php /* Template Name: suosituimmat */ ?>

<?php get_header(); ?>

<div class="content-row">
    <main>
        <h1>avaudu</h1>
        <h5>Ahdistaako? Tekeekö mieli avautua? Älä nolaa itseäsi facebookissa vaan avaudu täällä anonyymisti!</h5>
        
        <!--SUBMIT POST-->
        <?php include_once("submit-post-form.php");?>
        
        <?php if (have_posts()): ?>
            <?php while(have_posts()): ?>
        <div class="uudet-ja-suositut">
            <a href="<?php echo get_home_url(); ?>">Uusimmat</a>
            <p>Suosituimmat</p>
        </div>
        <?php wpp_get_mostpopular('wpp_start=" "&wpp_end=" "&excerpt_length=100&stats_comments=1&post_type=post&post_html="<article><h2>{text_title}</h2><p>{summary}</p><img src=\'http://users.metropolia.fi/~villa/Avautujat/wp-content/themes/Avautuminen/img/kommentti.png\' height=\'16\' class=\'commenting\'/><a href=\'{url}\'>{comments} Kommenttia</a></article>"'); ?>
                <?php the_post(); ?>
                <?php the_content(); ?>
        
        
            <?php endwhile; ?>
        <?php endif; ?>
    </main>
</div>

<?php get_footer(); ?>