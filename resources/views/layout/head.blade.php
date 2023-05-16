<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<!-- Mirrored from shreethemes.in/hously/layouts/index-two.html by HTTrack Website Copier/3.x [XR&CO2014], Fri, 12 May 2023 08:00:54 GMT -->
<head>
        <meta charset="UTF-8" />
        <title>FGGC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico" />
        <script defer src="https://cdn.tailwindcss.com"></script>

        @viteReactRefresh
        @vite([
              //choices.js
           'resources/libs/tiny-slider/tiny-slider.css',
           'resources/tobii/css/tobii.min.css',
           'resources/libs/choices.js/public/assets/styles/choices.min.css',
            'resources/cssx/icons.css',
            'resources/cssx/tailwind.min.css',
            'resources/libs/@iconscout/unicons/css/line.css',
            'resources/libs/particles.js/particles.js',
            'resources/libs/feather-icons/feather.min.js',
            'resources/js/appx.js',
            'resources/js/plugins.init.js',
            'resources/libs/tiny-slider/min/tiny-slider.js',
            'resources/libs/tobii/js/tobii.min.js',
            'resources/libs/choices.js/public/assets/scripts/choices.min.js',

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
        </nav><!--end header-->



        <section class="relative table w-full py-36 lg:py-44 overflow-hidden zoom-image">
            <div class="absolute inset-0 image-wrap z-1 bg-[url('https://res.cloudinary.com/okpeku/image/upload/v1682330129/dinu-j-nair-fzFZCJTyoTo-unsplash_wldjgc.jpg')] bg-no-repeat bg-center bg-cover"></div>
            <div class="absolute inset-0 bg-black/70 z-2"></div>
            <div class="container z-3">
                <div class="grid grid-cols-1 mt-10">
                    <div class="text-center">
                        <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">Easy way to find your <br> dream property</h1>
                        <p class="text-white/70 text-xl max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                    </div>



                    <div id="StarterContent" class="p-6 bg-white dark:bg-slate-900 rounded-tl-none rounded-tr-none md:rounded-tr-xl rounded-xl shadow-md dark:shadow-gray-700">
                      <div class="w-full flex flex-col items-center">
                        <span class="w-full text-center font-semibold  message "></span>
                        <span class="font-medium text-center text-lg sm:text-lg  md:text-2xl lg:text-2xl  w-1/2  ">Please Enter Your Email or Phone Number</span>
                        <input type="text" placeholder="Enter Your Email or Phone..." class="w-full rouded-md p-3 email outline-none border border-green-400" />
                      </div>
                      <section class="w-1/3 m-auto mt-2 ">
                        <button  class="w-full bg-green-400 text-white rounded-sm capitalize py-2 text-center fineme">Find Me</button>
                    </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero End -->


            @yield('content')




    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js" integrity="sha512-E8QSvWZ0eCLGk4km3hxSsNmGWbLtSCSUcewDQPQWZF6pEU8GlT8a5fF32wOl1i8ftdMhssTrF/OhyGWwonTcXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script type="text/javascript">
     let original = window.location.origin
     let email = document.querySelector(".email");
     let fineme = document.querySelector(".fineme");
     let message = document.querySelector(".message");
     var  token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    console.log(email, fineme)
     fineme.addEventListener("click", function(e){
        e.preventDefault();
        let headers = new Headers();
        headers.append('Content-Type', 'application/json')
        let formData = new FormData();
        formData.append('user', email.value)
        formData.append('_token', token)
        let url = `${original}/check`;
        axios.post(url, formData, headers).then(res=>{
            console.log(res);
            if(res.data.success){
                var ciphertext = CryptoJS.AES.encrypt(JSON.stringify(res.data.success), 'FGGC').toString();
                localStorage.setItem("userdetails", ciphertext)
               message.innerText ='we have seen your information';
               message.style.color = "green";
                window.location.href=`${original}/firststep`;
            }else if(res.data.error){
                window.location.href=`${original}/firststep`;
            }
         }).catch(err=>{
          //  let error = err.response.data.errors
           // if(error.email){
            //    message.innerText =  error.email[0]
            //    message.style.color = "red"
          //  }else if(error.password){
            //    message.innerText =  error.password[0]
             //   message.style.color = "red"
          //  }
         })

     })
    </script>
</html>
