<?php /* Template Name: suosituimmat */ ?>

<?php get_header(); ?>

<div class="content-row">
    <main>
        <h1>suosituimmat &#127775;</h1>
        <h5>Ahdistaako? Tekeekö mieli avautua? Älä nolaa itseäsi facebookissa vaan avaudu täällä anonyymisti!</h5>
        
        <!--SUBMIT POST-->
        <?php include_once("submit-post-form.php");?>
        
        <?php if (have_posts()): ?>
            <?php while(have_posts()): ?>
        <h3 class="uudet-ja-suositut">
            <a href="<?php echo get_home_url(); ?>">&#9679; Uusimmat</a>
            <p>&#9733; Suosituimmat</p>
        </h3>
        <?php wpp_get_mostpopular('wpp_start=" "&wpp_end=" "&excerpt_length=125&stats_comments=1&post_type=post&range=all&stats_category=1&author=villa&post_html="<a class=\'article-link\' href=\'{url}\'><article><h2>{text_title}</h2><p>{summary}</p><img src=\'http://users.metropolia.fi/~villa/Avautujat/wp-content/themes/Avautuminen/img/kommentti.png\' height=\'16\' class=\'commenting\'/><a class=\'comment-counter\' href=\'{url}\'>{comments} Kommenttia</a><p class=\'article-category\'>{category}</p></article></a>"'); ?>
                <?php the_post(); ?>
                <?php the_content(); ?>
        </a>
            <?php endwhile; ?>
        <?php endif; ?>
    </main>
</div>

<?php get_footer(); ?>

