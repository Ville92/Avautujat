<?php get_header(); ?>

<div class="content-row">
    <main>
        <?php if (have_posts()): ?>
            <?php while(have_posts()): ?>
        
                <?php the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <?php the_post_thumbnail(); ?>
                <?php comments_template(); ?> 
                <?php echo the_category( $separator, $parents, $artikkeli['ID'] ); ?>
        
            <?php endwhile; ?>
        <?php endif; ?>
    </main>
</div>

<?php get_footer(); ?>