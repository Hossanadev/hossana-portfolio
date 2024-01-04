</main>
<div class="relative md:h-20 w-full bg-black/70 text-white max-md:flex-col flex items-center justify-between">
    <p class="pt-2 px-[4%] md:px-[8%] py-2 max-md:text-center text-[15px] text-yellow-500">Sign up to get my exclusive newsletters.</p>
    <label for="email" class="pb-2 px-[4%] max-sm:py-0 max-sm:mb-3.5 py-2 md:px-[8%] flex items-center max-md:justify-center">
        <input id="email" type="email" class="h-8 text-black/90 py-2 px-3.5 rounded-l-sm focus:outline-none focus:ring-0 focus:border-0" placeholder="Enter your email" />
        <button id="signup" type="button" class="bg-[#007bff] cursor-pointer transition-all duration-500 py-1 whitespace-nowrap px-3.5 rounded-r-sm text-white">Sign up</button>
    </label>
    <img src="<?php echo get_template_directory_uri(); ?>../assets/img/hero.jpg" class="absolute w-full h-full object-cover -z-10" alt="Hossana Chukwunyere" />
</div>
<div class="w-full lg:flex space-y-2 justify-between items-center bg-[#D9D9D9] mb-5 md:mb-10 px-[4%] md:px-[8%] text-white py-4">
    <div class="flex items-center space-x-2">
        <div class="w-10 h-10 flex justify-center items-center bg-[#007bff] rounded-xs">
            <ion-icon class="text-xl" color="white" name="call"></ion-icon>
        </div>
        <div class="text-[13px] text-black font-medium">
            <p class="text-sm font-semibold">Call</p>
            <p class="text-black/80">+234 9068142185</p>
        </div>
    </div>
    <div class="flex items-center space-x-2">
        <div class="w-10 h-10 flex justify-center items-center bg-[#007bff] rounded-xs">
            <ion-icon class="text-xl" color="white" name="location"></ion-icon>
        </div>
        <div class="text-[13px] text-black font-medium">
            <p class="text-sm font-semibold">Address</p>
            <p class="text-black/80">Lagos, Nigeria</p>
        </div>
    </div>
    <div class="flex items-center space-x-2">
        <div class="w-10 h-10 flex justify-center items-center bg-[#007bff] rounded-xs">
            <ion-icon class="text-xl" color="white" name="mail"></ion-icon>
        </div>
        <div class="text-[13px] text-black font-medium">
            <p class="text-sm font-semibold">Email</p>
            <p class="text-black/80">hossanadev@gmail.com</p>
        </div>
    </div>
</div>
<footer class="w-full px-[4%] md:px-[8%] mb-10 md:flex justify-between">
    <div>
        <div class="text-black/75 text-xl font-bold flex items-center">
            <div class="h-10 w-10 bg-[#e5e5e5] rounded-full mr-2">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } else {
                    bloginfo('name');
                };
                ?>
            </div>
            <a href="<?php echo home_url(); ?>"><?php
            bloginfo('name');
            ?>
            </a>
        </div>
        <p class="text-sm text-black/80">Excellence is the way of life.<br>
            Of course, I distinguish myself through innovation, <br> accountability,
            discipline and commitment.
        </p>
        <div class="flex space-x-3 items-center bg-white my-3">
            <a href="https://www.linkedin.com/in/hossanadev"><div class="text-[#0077b5] text-2xl cursor-pointer"><ion-icon name="logo-linkedin"></ion-icon></div></a>
            <a href="https://www.facebook.com/hossanadev"><div class="text-[#316FF6] text-2xl cursor-pointer"><ion-icon name="logo-facebook"></ion-icon></div></a>
            <a href="https://twitter.com/hossanadev"><div class="text-[#1DA1F2] text-2xl cursor-pointer"><ion-icon name="logo-twitter"></ion-icon></div></a>
            <a href="https://www.youtube.com/@hossanadev"><div class="text-[#FF0000] text-2xl cursor-pointer"><ion-icon name="logo-youtube"></ion-icon></div></a>
            <a href="https://www.instagram.com/hossanadev"><div class="text-[#E4405F] text-2xl cursor-pointer"><ion-icon name="logo-instagram"></ion-icon></div></a>
        </div>
        <p class="text-sm max-sm:mb-2 text-black/80">Copyright © Built by <a class="text-[#0077b5]" href="https://www.linkedin.com/in/hossanadev">Hossana</a> <?php echo date('Y'); ?>. All rights reserved.</p>
    </div>
    <div class="flex justify-between md:space-x-10 lg:space-x-20 items-center text-[#0077b5]">
        <div class="whitespace-nowrap">
            <p class="text-black/80 text-[15px] font-bold py-1">Quick Links</p>
            <ul class="text-sm font-normal space-y-1">
                <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_title('Portfolio')); ?>">Portfolio</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="whitespace-nowrap">
            <p class="text-black/80 text-[15px] font-bold py-1">My Services</p>
            <ul class="text-sm font-normal space-y-1">
                <li>Web Development</li>
                <li>Mobile App Dev.</li>
                <li>Blogging & SEO</li>
                <li>Technical Writing</li>
            </ul>
        </div>
    </div>
</footer>
<!--    icons-->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>