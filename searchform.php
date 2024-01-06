<form class="form-group" action="<?php echo home_url('/'); ?>">
    <input class="form-control" type="search" name="s" placeholder="Search..." value="<?php echo get_search_query(); ?>">
    <button class="btn" type="submit">Search</button>
</form>