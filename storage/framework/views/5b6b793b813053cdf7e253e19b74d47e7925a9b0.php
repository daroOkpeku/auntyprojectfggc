<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<!-- Mirrored from shreethemes.in/hously/layouts/index-two.html by HTTrack Website Copier/3.x [XR&CO2014], Fri, 12 May 2023 08:00:54 GMT -->
<head>
        <meta charset="UTF-8" />
        <title>FGGC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico" />
        <script defer src="https://cdn.tailwindcss.com"></script>

        <link href="<?php echo e(asset('asset/libs/tiny-slider/tiny-slider.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('asset/libs/tobii/css/tobii.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('asset/libs/choices.js/public/assets/styles/choices.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('asset/libs/@iconscout/unicons/css/line.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('asset/cssx/icons.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('asset/cssx/soon.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('asset/cssx/tailwind.min.css')); ?>" rel="stylesheet">
        <script defer src="<?php echo e(asset('asset/libs/particles.js/particles.js')); ?>" ></script>
        <script defer src="<?php echo e(asset('asset/libs/feather-icons/feather.min.js')); ?>" ></script>
        <script defer src="<?php echo e(asset('asset/js/plugins.init.js')); ?>" ></script>
        <script defer src="<?php echo e(asset('asset/js/appx.js')); ?>" ></script>
        <script defer src="<?php echo e(asset('asset/libs/tiny-slider/min/tiny-slider.js')); ?>" ></script>
        <script defer src="<?php echo e(asset('asset/libs/tobii/js/tobii.min.js')); ?>"></script>
        <script defer src="<?php echo e(asset('asset/libs/choices.js/public/assets/scripts/choices.min.js')); ?>" ></script>

        
    </head>
    <body class="dark:bg-slate-900">
        <nav id="topnav" class="defaultscroll is-sticky  shadow-sm">
            <div class="container">
                <!-- Start Logo container-->
                <a class="logo" href="index.html">
                    <span class="inline-block dark:hidden">
                        <img src="assets/images/logo-dark.png" class="l-dark" height="24" alt="">
                        <img src="assets/images/logo-light.png" class="l-light" height="24" alt="">
                    </span>
                    <img src="assets/images/logo-light.png" height="24" class="hidden dark:inline-block" alt="">
                </a>
                <!-- End Logo container-->

                <!-- Start Mobile Toggle -->
                <div class="menu-extras">
                    <div class="menu-item">
                        <a class="navbar-toggle" id="isToggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Mobile Toggle -->



                <div id="navigation " class="flex flex-row items-center justify-center">
                    <!-- Navigation Menu-->
                    <ul class="  navigation-menu justify-end nav-light m-auto hidden sm:hidden  md:block lg:block">
                        <li class="has-submenu parent-menu-item">
                            <a href="<?php echo e(route('admindashboard')); ?>" class="text-green-500" style="color:green;">Registrants</a><span class="menu-arrow"></span>

                        </li>

                        <li><a href="<?php echo e(route('adminhotel')); ?>" class="text-green-500" style="color:green;" class="sub-menu-item">Accommodation</a></li>

                        <li><a href="<?php echo e(route('admintravels')); ?>" class="text-green-500" style="color:green;" class="sub-menu-item">Travel Details</a></li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a  href="<?php echo e(route('logout')); ?>" class="text-green-500" style="color:green;" >Logout</a><span class="menu-arrow"></span>
                        </li>
                        
                    </ul>
                </div>
            </div>

            <div class="google sm:google md:hidden lg:hidden goxx" style="display:none;">
                <article class="w-10/12 h-full bg-white  float-right " >
                    <div class="w-full m-auto flex flex-col ">
                        <aside class=' float-right flex flex-row items-center justify-center py-4 '>
                             <button class='w-6 h-6  rounded-full bg-white text-green-700 text-center text-2xl font-extrabold m-auto mr-4 btnx' >x</button>
                         </aside>

                         <section class="w-full">
                            <ul class="w-full gap-3 flex flex-col ">
                                <li class="px-3 capitalize text-2xl py-2 text-green-700 hover:bg-green-500 hover:text-white">
                                    <a href="<?php echo e(route('admindashboard')); ?>" class="" style="">Registrants</a>

                                </li>

                                <li class="px-3 capitalize text-2xl py-2 text-green-700 hover:bg-green-500 hover:text-white">
                                    <a href="<?php echo e(route('adminhotel')); ?>" >Accommodation</a>
                                </li>

                                <li class="px-3 capitalize text-2xl py-2 text-green-700 hover:bg-green-500 hover:text-white">
                                    <a href="<?php echo e(route('admintravels')); ?>"  >Travel Details</a></li>


                                    <li class="px-3 capitalize text-2xl py-2 text-green-700 hover:bg-green-500 hover:text-white">
                                        <a href="<?php echo e(route('logout')); ?>"  >Logout</a></li>

                            </ul>
                         </section>
                         </div>

            </div>
        </nav>




            <?php echo $__env->yieldContent('content'); ?>




    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js" integrity="sha512-E8QSvWZ0eCLGk4km3hxSsNmGWbLtSCSUcewDQPQWZF6pEU8GlT8a5fF32wOl1i8ftdMhssTrF/OhyGWwonTcXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script type="text/javascript">
     let btnx = document.querySelector(".btnx")
     let goxx = document.querySelector(".goxx")
    let isToggle = document.getElementById("isToggle")
     btnx.addEventListener("click", function(e) {
        e.preventDefault();
        goxx.style.display = "none";

     })

     isToggle.addEventListener("click", function(e) {
        e.preventDefault();
        goxx.style.display = "block";

     })
    </script>
</html>
<?php /**PATH C:\xampp\htdocs\dashboard\project\FGGC\resources\views\layout\adminhead.blade.php ENDPATH**/ ?>