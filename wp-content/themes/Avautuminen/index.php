<?php get_header(); ?>


<div class="content-row">
    <main>
        <h1><?php the_category(); ?></h1>
        <h5>Ahdistaako? Tekeekö mieli avautua? Älä nolaa itseäsi facebookissa vaan avaudu täällä anonyymisti!</h5>
        
        <!--SUBMIT POST-->
        <?php include_once("submit-post-form.php");?>
        
        <h3 class="uudet-ja-suositut">
            <a href="<?php echo get_home_url(); ?>">&#9679; Uusimmat</a>
            <a href="<?php echo get_home_url(); ?>/?page_id=187">	
&#9733; Suosituimmat</a>
        </h3>
        
        <?php if (have_posts()): ?>
            <?php while(have_posts()): ?>
                <?php the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <?php the_post_thumbnail(); ?>
                <?php comments_template(); ?> 
                <img class="commenting" src="<?php echo get_template_directory_uri(); ?>/img/kommentti.png" height="16"><a href="<?php echo get_post_permalink( $id, $leavename, $sample ); ?>"><?php comments_number( "0 kommenttia", "1 kommentti"); ?></a>
            
            <?php endwhile; ?>
        <?php endif; ?>
        
    </main>
</div>

<?php get_footer(); ?>