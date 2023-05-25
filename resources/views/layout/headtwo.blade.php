<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
<head>
        <meta charset="UTF-8" />
        <title>FGGC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico" />
        <script defer src="https://cdn.tailwindcss.com"></script>

        @viteReactRefresh
        @vite([
              //choices.js
           'resources/libs/tiny-slider/tiny-slider.css',
          'resources/libs/tobii/css/tobii.min.css',
          'resources/libs/choices.js/public/assets/styles/choices.min.css',
          'resources/libs/@iconscout/unicons/css/line.css',
          'resources/cssx/icons.css',
          'resources/cssx/soon.css',
            'resources/cssx/cox.css',
            'resources/cssx/tailwind.min.css',
            'resources/libs/particles.js/particles.js',
            'resources/libs/feather-icons/feather.min.js',
            'resources/js/plugins.init.js',
            'resources/js/appx.js',
            'resources/libs/tiny-slider/min/tiny-slider.js',
            'resources/libs/tobii/js/tobii.min.js',
            'resources/libs/choices.js/public/assets/scripts/choices.min.js',
            'resources/js/chapter.js',
            'resources/js/about.js'
            ])
        </head>
        <body class="dark:bg-slate-900">
            <nav id="topnav" class="defaultscroll is-sticky">
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
                            <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Mobile Toggle -->

                    <!--Login button Start-->
                    <ul class="buy-button list-none mb-0">
                        <li class="inline mb-0">
                            <a href="auth-login.html" class="btn btn-icon bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full"><i data-feather="user" class="h-4 w-4 stroke-[3]"></i></a>
                        </li>
                        <li class="sm:inline ltr:pl-1 rtl:pr-1 mb-0 hidden">
                            <a href="auth-signup.html" class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Signup</a>
                        </li>
                    </ul>
                    <!--Login button End-->

                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu justify-end nav-light">
                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)">Home</a><span class="menu-arrow"></span>

                            </li>

                            <li><a href="buy.html" class="sub-menu-item">Buy</a></li>

                            <li><a href="sell.html" class="sub-menu-item">Sell</a></li>

                            <li class="has-submenu parent-parent-menu-item">
                                <a href="javascript:void(0)">Listing</a><span class="menu-arrow"></span>
                            </li>

                            <li class="has-submenu parent-parent-menu-item">
                                <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="aboutus.html" class="sub-menu-item">About Us</a></li>
                                    <li><a href="features.html" class="sub-menu-item">Featues</a></li>
                                    <li><a href="pricing.html" class="sub-menu-item">Pricing</a></li>
                                    <li><a href="faqs.html" class="sub-menu-item">Faqs</a></li>
                                </ul>
                            </li>

                            <li><a href="contact.html" class="sub-menu-item">Contact</a></li>
                        </ul><!--end navigation menu-->
                    </div><!--end navigation-->
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
                                        <a href="" class="" style="">Home</a>

                                    </li>

                                    <li class="px-3 capitalize text-2xl py-2 text-green-700 hover:bg-green-500 hover:text-white">
                                        <a href="" >About</a>
                                    </li>

                                    <li class="px-3 capitalize text-2xl py-2 text-green-700 hover:bg-green-500 hover:text-white">
                                        <a href=""  >Contact</a></li>


                                        <li class="px-3 capitalize text-2xl py-2 text-green-700 hover:bg-green-500 hover:text-white">
                                            <a href=""  >More</a></li>

                                </ul>
                             </section>
                             </div>

                </div>
            </nav><!--end header-->



            @yield('content')




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
