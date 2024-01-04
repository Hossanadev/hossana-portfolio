<?php get_header(); ?>
        <div class="w-full h-[430px] md:h-[530px] bg-black/80 relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero.jpg"
                     class="w-full h-[430px] md:h-[530px] absolute object-cover -z-10"
                     alt="Hossanadev"
                />
                <div class="my-auto top-[25%] absolute max-md:mx-[4%] mx-[8%] space-y-5">
                    <p class="border-l-4 px-2 border-yellow-500 text-yellow-500 md:text-xl font-semibold">My Values
                        <span class="text-sm font-normal block">I strongly believe in doing business the right way all the time.</span>
                    </p>
                    <div class="block text-white max-md:mt-5 text-xl md:text-4xl font-bold">
                        <p class="pb-1.5 pt-2 text-white/90">Hossana Chukwunyere</p>
                        <span class="block text-white text-sm my-5 font-normal">
                    Experienced frontend engineer, demonstrating expertise in crafting <br class="hidden md:block"> engaging and visually appealing user interfaces.<br>
                    Currently, exploring Rust programming. #Hossanadev.
                </span>
                        <button id="download_cv" class="bg-[#007bff] flex items-center space-x-3 hover:bg-blue-800 text-[15px] my-3.5 font-semibold cursor-pointer transition-all duration-500 px-3.5 rounded-sm text-white">
                            <ion-icon class="text-xl" name="return-down-forward-outline"></ion-icon>
                            <span>Download CV</span>
                        </button>
                    </div>
                </div>
        </div>
        <section class="px-[4%] md:px-[8%] my-8 lg:my-16">
            <p class="text-center text-xl text-[#007bff] font-bold mt-5 mb-0.5">Services</p>
            <p class="text-center text-[15px] font-normal w-full lg:w-[30%] mx-auto">
                What I do for my clients
            </p>
            <div class="mt-5 flex items-center justify-between h-[300px]">
                <div class="xl:w-[500px] xl:h-[300px] max-sm:h-[150px] max-sm:w-[150px] h-[200px] w-[200px] md:border-l-[2px] border-dashed border-[#007bff] max-xl:rounded-full xl:rounded-tr-full relative">
                    <img class="w-full max-lg:rounded-full xl:rounded-tr-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/img/web_development.webp" alt="Hossanadev | Web development" />
                    <div class="absolute bg-blue-300/30 w-[200px] h-[200px] -top-5 -right-[5%] rounded-full -z-10"></div>
                    <div class="absolute bg-blue-300/30 w-[150px] h-[150px] top-16 right-[-5%] rounded-full -z-10"></div>
                </div>
                <div class="flex flex-col justify-center items-center h-full">
                    <div class="w-2 h-2 p-1.5 bg-[#007bff] rounded-full"></div>
                    <div class="h-full border-[#e5e5e5] border-r-2 border-dashed"></div>
                </div>
                <div class="xl:w-[500px] xl:h-[300px] max-sm:h-[150px] max-sm:w-[150px] h-[200px] w-[200px] flex justify-center items-center">
                    <div class="text-[15px]">
                        <p class="max-sm:text-[16px] text-xl text-black/70 font-bold mb-1.5">Web Development</p>
                        <p class="">
                            I develop websites, web apps
                            in a way that guarantees easy maintenance and scalability.
                            Smooth user experience, great performance
                            and stunning aesthetics are in my array of priorities.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between h-[300px]">
                <div class="xl:w-[500px] xl:h-[300px] max-sm:h-[150px] max-sm:w-[150px] h-[200px] w-[200px] flex justify-center items-center">
                    <div class="text-[15px]">
                        <p class="max-sm:text-[16px] text-xl text-black/70 font-bold mb-1.5">Mobile App Development</p>
                        <p>
                            I develop mobile apps that are user-friendly, interactive and easy to use.
                            The applications are optimized for both Android and iOS.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center h-full">
                    <div class="w-2 h-2 p-1.5 bg-[#007bff] rounded-full"></div>
                    <div class="h-full border-[#e5e5e5] border-r-2 border-dashed"></div>
                </div>
                <div class="xl:w-[500px] overflow-none xl:h-[300px] max-sm:h-[150px] max-sm:w-[150px] h-[200px] w-[200px] md:border-r-[2px] border-dashed border-[#007bff] max-xl:rounded-full xl:rounded-tl-full relative">
                    <img class="w-full max-xl:rounded-full xl:rounded-tl-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/img/mobile_development.svg" alt="Hossanadev | Mobile development" />
                    <div class="absolute bg-blue-300/30 w-[150px] h-[150px] top-[-15%] right-[-6%] rounded -z-10"></div>
                    <div class="absolute bg-blue-300/30 w-[150px] h-[150px] top-[-19%] right-[-10%] rounded -z-10"></div>
                </div>
            </div>
            <div class="flex items-center justify-between h-[300px]">
                <div class="xl:w-[500px] xl:h-[300px] max-sm:h-[150px] max-sm:w-[150px] h-[200px] w-[200px] md:border-l-[2px] border-dashed border-[#007bff] max-xl:rounded-full xl:rounded-tr-[100%] lg:rounded-br-[100%] relative">
                    <img class="w-full max-lg:rounded-full xl:rounded-tr-[100%] xl:rounded-br-[100%] h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/img/blogging.png" alt="Hossanadev | Blogging" />
                    <div class="absolute bg-blue-300/30 w-[150px] h-[150px] top-[-15%] max-sm:left-[-25%] left-[-10%] rounded -z-10 rotate-45"></div>
                    <div class="absolute bg-blue-300/30 max-sm:w-[150px] max-sm:h-[150px] w-[200px] h-[200px] top-[-25%] max-sm:top-[-15%] left-[5%] rounded-full -z-10"></div>
                </div>
                <div class="flex flex-col justify-center items-center h-full">
                    <div class="w-2 h-2 p-1.5 bg-[#007bff] rounded-full"></div>
                    <div class="h-full border-[#e5e5e5] border-r-2 border-dashed"></div>
                </div>
                <div class="xl:w-[500px] xl:h-[300px] max-sm:h-[150px] max-sm:w-[150px] h-[200px] w-[200px] flex justify-center items-center">
                    <div class="text-[15px]">
                        <p class="max-sm:text-[16px] text-xl text-black/70 font-bold">Blogging & SEO</p>
                        <p>
                            With over 6 years of experience, I enhance website domain visibility,
                            keywords ranking, authority,
                            and overall performance.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between h-[300px]">
                <div class="xl:w-[500px] xl:h-[300px] max-sm:h-[150px] max-sm:w-[150px] h-[200px] w-[200px] flex justify-center items-center">
                    <div class="text-[15px]">
                        <p class="max-sm:text-[16px] text-xl text-black/70 font-bold">Technical Writing</p>
                        <p>
                            I publish blog articles and handle knowledge sharing sections on topics relating
                            to frontend development, Rust programming.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center h-full">
                    <div class="w-2 h-2 p-1.5 bg-[#007bff] rounded-full"></div>
                    <div class="h-full border-[#e5e5e5] border-r-2 border-dashed"></div>
                    <div class="w-2 h-2 p-1.5 bg-[#007bff] rounded-full"></div>
                </div>
                <div class="xl:w-[500px] xl:h-[300px] max-sm:h-[150px] max-sm:w-[150px] h-[200px] w-[200px] md:border-r-[2px] border-dashed border-[#007bff] max-xl:rounded-full xl:rounded-tl-[100%] lg:rounded-bl-[100%] relative">
                    <img class="w-full max-lg:rounded-full xl:rounded-tl-[100%] xl:rounded-bl-[100%] h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/img/technical_writing.webp" alt="Hossanadev | Blogging" />
                    <div class="absolute bg-blue-300/30 w-[150px] h-[150px] bottom-[-15%] right-[-10%] rounded-full -z-10"></div>
                    <div class="absolute bg-blue-300/30 w-[150px] h-[150px] top-[-10%] left-[-4%] rotate-[5deg] rounded -z-10"></div>
                </div>
            </div>
        </section>
        <!-- Blog-->
        <section class="px-[4%] md:px-[8%] my-8 lg:mt-28">
            <p class="text-xl text-[#007bff] font-bold text-center mb-5">Blog</p>
            <?php get_template_part('templates/temp/post', 'content'); ?>
            <div class="mt-4 flex items-center w-fit px-3 py-1 rounded">
                    <?php echo
                    paginate_links(array(
                        'mid_size' => 2,
                        'prev_text' => _('<span class="text-[#007bff]"><ion-icon name="caret-forward-outline"></ion-icon></span>'),
                        'next_text' => _('<span class="text-[#007bff]"><ion-icon name="caret-forward-outline"></ion-icon></span>'),
                    )); ?>
            </div>
        </section>
<?php get_footer(); ?>