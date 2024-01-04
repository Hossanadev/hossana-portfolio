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
                    <div class="text-[15px] font-normal text-[#6e6e6e]">
                        <div class="flex items-center space-x-2">
                            <ion-icon name="person"></ion-icon>
                            <span class="text-[#007bff]">
                                    <a href="https://www.linkedin.com/in/hossanadev"><?php echo get_the_author(); ?></a>
                                </span>
                        </div>
                    </div>
                <div class="text-[15px] text-[#6e6e6e] mt-4">
                    <?php echo the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <?php echo wpautop('No posts found.') ?>
        <?php endif; ?>
    </section>
    <section class="px-[4%] md:px-[8%] my-8 relative">
        <?php
        if (is_page('Services')) {
            echo ' 
         <section class="my-8 lg:my-16">
            <div class="mt-5 flex items-center justify-between h-[300px]">
                <div class="xl:w-[500px] xl:h-[300px] max-sm:h-[150px] max-sm:w-[150px] h-[200px] w-[200px] md:border-l-[2px] border-dashed border-[#007bff] max-xl:rounded-full xl:rounded-tr-full relative">
                     <img class="w-full max-lg:rounded-full xl:rounded-tr-full h-full object-cover" src="' . get_template_directory_uri() . '/assets/img/web_development.webp" alt="Hossanadev | Web development" />
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
                        <img class="w-full max-lg:rounded-full xl:rounded-tr-full h-full object-cover" src="' . get_template_directory_uri() . '/assets/img/mobile_development.svg" alt="Hossanadev | Mobile app development" />
                    <div class="absolute bg-blue-300/30 w-[150px] h-[150px] top-[-15%] right-[-6%] rounded -z-10"></div>
                    <div class="absolute bg-blue-300/30 w-[150px] h-[150px] top-[-19%] right-[-10%] rounded -z-10"></div>
                </div>
            </div>
            <div class="flex items-center justify-between h-[300px]">
                <div class="xl:w-[500px] xl:h-[300px] max-sm:h-[150px] max-sm:w-[150px] h-[200px] w-[200px] md:border-l-[2px] border-dashed border-[#007bff] max-xl:rounded-full xl:rounded-tr-[100%] lg:rounded-br-[100%] relative">
                        <img class="w-full max-lg:rounded-full xl:rounded-tr-full h-full object-cover" src="' . get_template_directory_uri() . '/assets/img/blogging.png" alt="Hossanadev | Blogging and SEO" />
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
                           <img class="w-full max-lg:rounded-full xl:rounded-tr-full h-full object-cover" src="' . get_template_directory_uri() . '/assets/img/technical_writing.webp" alt="Hossanadev | Technical Writing" />
                    <div class="absolute bg-blue-300/30 w-[150px] h-[150px] bottom-[-15%] right-[-10%] rounded-full -z-10"></div>
                    <div class="absolute bg-blue-300/30 w-[150px] h-[150px] top-[-10%] left-[-4%] rotate-[5deg] rounded -z-10"></div>
                </div>
            </div>
         </section>
            ';
        }
        ?>

        <?php
        if (is_page('Portfolio')) {
            echo '
                  <div>
                   <p class="text-black/70 font-bold">Education</p>
                   <div class="flex space-x-4 mt-4">
                    <div class="h-32 md:h-24 flex flex-col items-center">
                        <div class="w-2 h-2 p-1.5 bg-[#007bff] rounded-full"></div>
                        <div class="h-full border-[#e5e5e5] border-r-2 border-dashed"></div>
                    </div>
                    <div>
                        <p class="font-medium text-black/80 -mt-2">2015 - 2021</p>
                        <span class="text-black/60 font-semibold">Federal University of Technology, Owerri</span>
                        <p class="text-black/70 text-lg font-bold">Materials and Metallurgical Engineering</p>
                        <span class="block text-black/60 font-normal text-sm">Grade: 4.06</span>
                        <span class="block text-black/60 font-normal text-sm pb-10">Bachelor of Engineering (Honours)</span>
                    </div>
                </div>
                
                <p class="text-black/70 font-bold">Experience</p>
                   <div class="flex space-x-4 mt-4">
                    <div class="h-20 flex flex-col items-center">
                        <div class="w-2 h-2 p-1.5 bg-[#007bff] rounded-full"></div>
                        <div class="h-full border-[#e5e5e5] border-r-2 border-dashed"></div>
                    </div>
                    <div>
                        <p class="font-medium text-black/80 -mt-2">2022 - Present</p>
                        <span class="text-black/60 font-semibold">Doftwerks West Africa Limited</span>
                        <p class="text-black/70 text-lg font-bold">Frontend Engineer</p>
                        <span class="block text-black/60 font-normal text-sm">Type: Hybrid</span>
                    </div>
                </div>
               <div class="flex space-x-4 mt-4 pb-10">
                <div class="h-20 flex flex-col items-center">
                    <div class="w-2 h-2 p-1.5 bg-[#007bff] rounded-full"></div>
                    <div class="h-full border-[#e5e5e5] border-r-2 border-dashed"></div>
                </div>
                <div>
                    <p class="font-medium text-black/80 -mt-2">2023 - Present</p>
                    <span class="text-black/60 font-semibold">Rust Codebase</span>
                    <p class="text-black/70 text-lg font-bold">Technical Writer</p>
                    <span class="block text-black/60 font-normal text-sm">Type: Remote</span>
                </div>
                </div>
                
                <p class="text-black/70 font-bold">Projects</p>
                  <div class="flex space-x-4 mt-4">
                <div class="h-16 md:h-9 flex flex-col items-center">
                    <div class="w-2 h-2 p-1.5 bg-[#007bff] rounded-full"></div>
                    <div class="h-full border-[#e5e5e5] border-r-2 border-dashed"></div>
                </div>
                <div>
                    <p class="font-medium text-black/80 -mt-2">Personal</p>
                    <span class="text-black/60 font-semibold">
                    <a class="text-[#007bff]" href="https://github.com/hossanadev/guess-right">guess-right</a>,
                    <a class="text-[#007bff]" href="https://github.com/Hossanadev/url-shortener">url shortener</a>,
                    <a class="text-[#007bff]" href="https://github.com/Hossanadev/job-portal">jobs portal</a>,
                    <a class="text-[#007bff]" href="https://hossanadev.com">Hossana portfolio</a>,
                    <a class="text-[#007bff]" href="https://github.com/Hossanadev">others.</a>
                    </span>
                </div>
                </div>
                
                <div class="flex space-x-4 mt-4 pb-10">
                <div class="h-9 flex flex-col items-center">
                    <div class="w-2 h-2 p-1.5 bg-[#007bff] rounded-full"></div>
                    <div class="h-full border-[#e5e5e5] border-r-2 border-dashed"></div>
                </div>
                <div>
                    <p class="font-medium text-black/80 -mt-2">Official</p>
                    <span class="text-black/60 font-semibold">
                      Private projects.
                    </span>
                </div>
                </div>
                
                <p class="text-black/70 font-bold">Technologies</p>
                   <div class="flex space-x-4 mt-4">
                <div class="h-20 md:h-9 flex flex-col items-center">
                    <div class="w-2 h-2 p-1.5 bg-[#007bff] rounded-full"></div>
                    <div class="h-full border-[#e5e5e5] border-r-2 border-dashed"></div>
                </div>
                <div>
                    <p class="font-medium text-black/80 -mt-2">Frontend</p>
                    <span class="text-black/60 font-semibold">HTML5, CSS3, Javascript, Tailwind, TypeScript,
                        ReactJS, Next.js, React Native, Redux Toolkit.
                    </span>
                </div>
                </div>
                
                <div class="flex space-x-4 mt-4">
                <div class="h-9 flex flex-col items-center">
                    <div class="w-2 h-2 p-1.5 bg-[#007bff] rounded-full"></div>
                    <div class="h-full border-[#e5e5e5] border-r-2 border-dashed"></div>
                </div>
                <div>
                    <p class="font-medium text-black/80 -mt-2">Backend</p>
                    <span class="text-black/60 font-semibold">Rust, Actix Web, SQL, Diesel ORM.
                    </span>
                </div>
                </div>  
                
                <div class="flex space-x-4 mt-4">
                <div class="h-14 md:h-10 flex flex-col items-center">
                    <div class="w-2 h-2 p-1.5 bg-[#007bff] rounded-full"></div>
                    <div class="h-full border-[#e5e5e5] border-r-2 border-dashed"></div>
                </div>
                <div>
                    <p class="font-medium text-black/80 -mt-2">Tools</p>
                    <span class="text-black/60 font-semibold">IntelliJ, VS Code, Git, GitHub, Postman, Laragon, Xampp, WordPress (PHP).
                    </span>
                </div>
                </div>                
            </div>
            <button id="download_cv" class="mt-4 py-1.5 bg-[#007bff] flex items-center space-x-3 hover:bg-blue-800 text-[15px] font-semibold cursor-pointer transition-all duration-500 px-3.5 rounded-sm text-white">
                 <ion-icon class="text-xl" name="return-down-forward-outline"></ion-icon>
                 <span>Download CV</span>
            </button>                
            </div>
            ';
        }
        ?>

        <?php
          if (is_page('Contact')) {
            echo 'I am open to work. If you need my service, please <a href="mailto:hossanadev@gmail.com" class="text-[#007bff]">contact me</a>.';
          }
        ?>

        <?php
        if (is_page('About')) {
            echo '
              Hi there, I am <a href="https://www.linkedin.com/in/hossanadev/" class="text-[#007bff]">Hossana Chukwunyere</a>, Hossanadev, a Frontend Engineer at Doftwerks. 
              I specialize in crafting user-friendly and visually appealing interfaces to enhance the overall user experience. 
              Outside of coding, I love reading, playing football, and I am always excited to connect with fellow professionals in the industry.
            ';}
        ?>

       <?php
         if (is_page('Portfolio')) {
             echo '
                <div class="absolute bg-blue-300/30 w-[200px] h-[200px] top-[-9%] right-[10%] rounded-full -z-10"></div>
        <div class="absolute bg-blue-300/30 w-[150px] h-[150px] top-[-5%] right-[10%] rounded-full -z-10"></div>

        <div class="absolute bg-blue-300/30 w-[150px] h-[150px] top-[45%] right-[6%] rounded -z-10"></div>
        <div class="absolute bg-blue-300/30 w-[150px] h-[150px] top-[49%] right-[10%] rounded -z-10"></div>

        <div class="absolute bg-blue-300/30 w-[150px] h-[150px] top-[25%] max-sm:left-[15%] left-[30%] rounded -z-10 rotate-45"></div>
        <div class="absolute bg-blue-300/30 max-sm:w-[150px] max-sm:h-[150px] w-[200px] h-[200px] top-[25%] max-sm:top-[25%] left-[32%] rounded-full -z-10"></div>

        <div class="absolute bg-blue-300/30 w-[150px] h-[150px] top-[79%] right-[33%] rounded-full -z-10"></div>
        <div class="absolute bg-blue-300/30 w-[150px] h-[150px] top-[75%] right-[30%] rotate-[5deg] rounded -z-10"></div>
             ';
          }
        ?>
    </section>
<?php get_footer(); ?>