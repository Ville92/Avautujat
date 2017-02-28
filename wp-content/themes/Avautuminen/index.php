<?php get_header(); ?>
<div class="content-row">
    <main>
        <h1><?php the_category(); ?></h1>
        <h5>Ahdistaako? Tekeekö mieli avautua? Älä nolaa itseäsi facebookissa vaan avaudu täällä anonyymisti!</h5>
        <?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>
        <?php if (have_posts()): ?>
            <?php while(have_posts()): ?>
        
                <?php the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <?php comments_template(); ?> 
                <img class="commenting" src="<?php echo get_template_directory_uri(); ?>/img/kommentti.png" height="16"><a href="<?php echo get_post_permalink( $id, $leavename, $sample ); ?>">Kommentoi</a>
            <?php endwhile; ?>
        <?php endif; ?>
    </main>
</div>

<?php get_footer(); ?>