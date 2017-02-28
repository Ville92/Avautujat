<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Haku" class="search-field">
    <button type="submit" id="searchsubmit" value="Hae"><i class="fi-magnifying-glass large"></i></button>
</form>