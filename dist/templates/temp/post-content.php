<?php
?>
<?php if(have_posts()): ?>
    <div class="gap-4 lg:gap-5 flex flex-wrap">
        <?php while(have_posts()): the_post(); ?>
            <div class="w-full md:w-[300px] shadow-sm rounded-sm border">
                <?php
                if(has_post_thumbnail()): ?>
                    <img class="h-40 w-full bg-[#e5e5e5] object-cover" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="post thumbnail">
                <?php endif; ?>
                <div class="p-2 text-[#007bff] text-xs text-end"><?php echo get_the_date(); ?></div>
                <a href="<?php the_permalink(); ?>">
                    <p class="text-sm px-2 mb-4 hover:text-[#007bff] w-fit transition-all duration-300 text-wrap text-black/80 font-semibold"><?php echo the_title(); ?></p>
                </a>
            </div>
        <?php endwhile; ?>
    </div>
<?php else: ?>
<?php echo wpautop('No posts found.') ?>
<?php endif; ?>
