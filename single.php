<?php get_header(); ?>
    <div class="w-full h-[430px] md:h-[530px] bg-black/80 relative">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>"
             class="w-full h-[430px] md:h-[530px] absolute object-cover -z-10"
             alt="Hossanadev"
        />
        <div class="my-auto left-0 right-0 top-[40%] absolute max-md:mx-[4%] mx-[8%] space-y-5">
            <div class="flex items-center justify-center text-white/90 max-md:mt-5 text-xl md:text-4xl font-bold">
                <p class="text-white/90 text-center"><?php echo the_title(); ?></p>
            </div>
        </div>
    </div>
    <section class="px-[4%] md:px-[8%] my-8">
        <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                        <p class="font-bold text-lg md:text-xl text-black/70 mb-0.5""><?php echo the_title(); ?></p>
                        <div class="flex items-center space-x-3">
                            <div class="text-[15px] font-normal text-[#6e6e6e]">
                                <div class="flex items-center space-x-2">
                                    <ion-icon name="person"></ion-icon>
                                    <span class="text-[#007bff]">
                                    <a href="https://www.linkedin.com/in/hossanadev"><?php echo get_the_author(); ?></a>
                                </span>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <ion-icon name="calendar-outline"></ion-icon>
                                <div class="text-[15px] font-normal text-[#6e6e6e]"><?php echo get_the_date(); ?></div>
                            </div>
                        </div>
                <div class="text-[15px] text-[#6e6e6e] mt-4">
                    <?php
                    $post_content = get_the_content();
                    $formatted_content = preg_replace('/<p(.*?)>(.*?)<\/p>/', '<p class="pb-5">$2</p>', $post_content);
                    echo $formatted_content;
                    ?>
                </div>

            <?php endwhile; ?>
        <?php else: ?>
            <?php echo wpautop('No posts found.') ?>
        <?php endif; ?>
    </section>
<?php get_footer(); ?>