<?php /* Template Name: home */ ?>

<?php get_header(); ?>
<div class="content-row">
    <main>
        <h1>avaudu</h1>
        <h5>Ahdistaako? Tekeekö mieli avautua? Älä nolaa itseäsi facebookissa vaan avaudu täällä anonyymisti!</h5>
        
        <!--SUBMIT POST-->
        <?php include_once("submit-post-form.php");?>
        
        <?php if (have_posts()): ?>
            <?php while(have_posts()): ?>
        <h3 class="uudet-ja-suositut">
            <p>&#9679; Uusimmat</p>
            <a href="<?php echo get_home_url(); ?>/?page_id=187">	
&#9733; Suosituimmat</a>
        </h3>
                <?php the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php
            $uudet_artikkelit = wp_get_recent_posts(array('numberposts' => '100'));
            foreach($uudet_artikkelit as $artikkeli):
        ?>
        <a class="article-link" href="<?php echo get_home_url(); ?>/?p=<?php echo $artikkeli['ID']; ?>">
        <article>
            <h2><?php echo $artikkeli['post_title']; ?></h2>
            <p><?php echo $artikkeli['post_content']; ?></p>
            <?php echo get_the_post_thumbnail($artikkeli['ID'], 'thumbnail'); ?>
            <img class="commenting" src="<?php echo get_template_directory_uri(); ?>/img/kommentti.png" height="16"><a href="<?php echo get_home_url(); ?>/?p=<?php echo $artikkeli['ID']; ?>">Kommentoi</a>
        </article>
            </a>
        <?php endforeach; ?>
    </main>
</div>

<?php get_footer(); ?>