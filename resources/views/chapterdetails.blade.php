@extends('layout.headtwo')
@section('content')
<div>
    <!-- Start Hero -->
    <section class="relative table w-full py-32 lg:py-36 bg-[url('https://res.cloudinary.com/okpeku/raw/upload/v1684832217/01_hbxvng.html')] bg-no-repeat bg-center bg-cover">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white"></h3>
                <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white housex"></h3>

            </div>
        </div>
    </section>
    <!--end section-->


    <!-- Start -->
    <section class="relative lg:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="md:col-span-5">
                    <div class="relative">
                        <img  src="assets/images/about.jpg" class="imgx rounded-xl shadow-md" alt="">
                        <div class="absolute bottom-2/4 translate-y-2/4 right-0 left-0 text-center">

                        </div>
                    </div>
                </div><!--end col-->

                <div class="md:col-span-7">
                    <div class="ltr:lg:ml-4 rtl:lg:mr-4">
                        <h4 class="mb-6 md:text-3xl text-2xl lg:leading-normal leading-normal font-semibold"> <br> </h4>
                        <p class="text-slate-400 max-w-xl body">Hously developed a platform for the Real Estate marketplace that allows buyers and sellers to easily execute a transaction on their own. The platform drives efficiency, cost transparency and control into the hands of the consumers. Hously is Real Estate Redefined.</p>

                        {{--  <div class="mt-4">
                            <a href="#" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md mt-3">Learn More </a>
                        </div>  --}}
                    </div>
                </div><!--end col-->
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container lg:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Contact</h3>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <!-- Content -->
                <div class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
                        <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                            <i class="fa fa-phone-square" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h5 class="text-xl font-medium">Phone</h5>
                        <p class="text-slate-400 mt-3 phone"> </p>
                    </div>
                </div>
                <!-- Content -->

                <!-- Content -->
                <div class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
                        <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                         </div>
                    </div>

                    <div class="mt-6">
                        <h5 class="text-xl font-medium">Web</h5>
                        <p class="text-slate-400 mt-3 web"></p>
                    </div>
                </div>
                <div class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
                        <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                            <i class="fa fa-share-square" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h5 class="text-xl font-medium">Social</h5>
                        <p class="text-slate-400 mt-3 social"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->



    <!-- Start -->
    <section class="relative lg:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Meet Our Leaders</h3>

                <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
            </div><!--end grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
                <div class="lg:col-span-3 md:col-span-6">
                    <div class="group text-center">
                        <div class="relative inline-block mx-auto h-52 w-52 rounded-full overflow-hidden">
                            <img src="assets/images/client/04.jpg" class="" alt="">
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black h-52 w-52 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out"></div>

                            <ul class="list-none absolute right-0 left-0 -bottom-20 group-hover:bottom-5 transition-all duration-500 ease-in-out">
                                <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                                <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                                <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
                            </ul><!--end icon-->
                        </div>

                        <div class="content mt-3">
                            <a href="#" class="text-xl font-medium hover:text-green-600 transition-all duration-500 ease-in-out">Jack John</a>
                            <p class="text-slate-400">Designer</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3 md:col-span-6">
                    <div class="group text-center">
                        <div class="relative inline-block mx-auto h-52 w-52 rounded-full overflow-hidden">
                            <img src="assets/images/client/05.jpg" class="" alt="">
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black h-52 w-52 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out"></div>

                            <ul class="list-none absolute right-0 left-0 -bottom-20 group-hover:bottom-5 transition-all duration-500 ease-in-out">
                                <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                                <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                                <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
                            </ul><!--end icon-->
                        </div>

                        <div class="content mt-3">
                            <a href="#" class="text-xl font-medium hover:text-green-600 transition-all duration-500 ease-in-out">Krista John</a>
                            <p class="text-slate-400">Designer</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3 md:col-span-6">
                    <div class="group text-center">
                        <div class="relative inline-block mx-auto h-52 w-52 rounded-full overflow-hidden">
                            <img src="assets/images/client/06.jpg" class="" alt="">
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black h-52 w-52 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out"></div>

                            <ul class="list-none absolute right-0 left-0 -bottom-20 group-hover:bottom-5 transition-all duration-500 ease-in-out">
                                <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                                <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                                <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
                            </ul><!--end icon-->
                        </div>

                        <div class="content mt-3">
                            <a href="#" class="text-xl font-medium hover:text-green-600 transition-all duration-500 ease-in-out">Roger Jackson</a>
                            <p class="text-slate-400">Designer</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3 md:col-span-6">
                    <div class="group text-center">
                        <div class="relative inline-block mx-auto h-52 w-52 rounded-full overflow-hidden">
                            <img src="assets/images/client/07.jpg" class="" alt="">
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black h-52 w-52 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out"></div>

                            <ul class="list-none absolute right-0 left-0 -bottom-20 group-hover:bottom-5 transition-all duration-500 ease-in-out">
                                <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                                <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                                <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
                            </ul><!--end icon-->
                        </div>

                        <div class="content mt-3">
                            <a href="#" class="text-xl font-medium hover:text-green-600 transition-all duration-500 ease-in-out">Johnny English</a>
                            <p class="text-slate-400">Designer</p>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->


        <div class="container lg:mt-24 mt-16">
            <div class="grid grid-cols-1 text-center">
                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">Have Question ? Get in touch!</h3>

                <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>


            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->


    <!-- Start Footer -->
    <footer class="relative bg-slate-900 dark:bg-slate-800 mt-24">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="relative py-16">
                    <!-- Subscribe -->
                    <div class="relative w-full">
                        <div class="relative -top-40 bg-white dark:bg-slate-900 lg:px-8 px-6 py-10 rounded-xl  overflow-hidden">




                            <div class="absolute -bottom-5 ltr:-right-5 rtl:-left-5">
                                <div class="uil uil-pen lg:text-[150px] text-7xl text-black/5 dark:text-white/5 rtl:-rotate-90"></div>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] -mt-24">
                            <div class="lg:col-span-4 md:col-span-12">
                                <a href="#" class="text-[22px] focus:outline-none">

                                </a>
                                <p class="mt-6 text-gray-300">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>

                            </div><!--end col-->

                            <div class="lg:col-span-2 md:col-span-4">
                                <h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>
                                <ul class="list-none footer-list mt-6">
                                    <li><a href="aboutus.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b ltr:mr-1 rtl:ml-1"></i> About us</a></li>
                                    <li class="mt-[10px]"><a href="features.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b ltr:mr-1 rtl:ml-1"></i> Services</a></li>
                                    <li class="mt-[10px]"><a href="pricing.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b ltr:mr-1 rtl:ml-1"></i> Pricing</a></li>
                                    <li class="mt-[10px]"><a href="blog.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b ltr:mr-1 rtl:ml-1"></i> Blog</a></li>
                                    <li class="mt-[10px]"><a href="auth-login.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b ltr:mr-1 rtl:ml-1"></i> Login</a></li>
                                </ul>
                            </div><!--end col-->

                            <div class="lg:col-span-3 md:col-span-4">
                                <h5 class="tracking-[1px] text-gray-100 font-semibold">Usefull Links</h5>
                                <ul class="list-none footer-list mt-6">
                                    <li><a href="terms.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b ltr:mr-1 rtl:ml-1"></i> Terms of Services</a></li>
                                    <li class="mt-[10px]"><a href="privacy.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b ltr:mr-1 rtl:ml-1"></i> Privacy Policy</a></li>
                                    <li class="mt-[10px]"><a href="listing-one.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b ltr:mr-1 rtl:ml-1"></i> Listing</a></li>
                                    <li class="mt-[10px]"><a href="contact.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b ltr:mr-1 rtl:ml-1"></i> Contact</a></li>
                                </ul>
                            </div><!--end col-->

                            <div class="lg:col-span-3 md:col-span-4">
                                <h5 class="tracking-[1px] text-gray-100 font-semibold">Contact Details</h5>


                                <div class="flex mt-6">
                                    <i data-feather="map-pin" class="w-5 h-5 text-green-600 ltr:mr-3 rtl:ml-3"></i>
                                    <div class="">
                                        <h6 class="text-gray-300 mb-2">C/54 Northwest Freeway, <br> Suite 558, <br> Houston, USA 485</h6>
                                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" data-type="iframe" class="text-green-600 hover:text-green-700 duration-500 ease-in-out lightbox">View on Google map</a>
                                    </div>
                                </div>

                                <div class="flex mt-6">
                                    <i data-feather="mail" class="w-5 h-5 text-green-600 ltr:mr-3 rtl:ml-3"></i>
                                    <div class="">
                                        <a href="mailto:contact@example.com" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">contact@example.com</a>
                                    </div>
                                </div>

                                <div class="flex mt-6">
                                    <i data-feather="phone" class="w-5 h-5 text-green-600 ltr:mr-3 rtl:ml-3"></i>
                                    <div class="">
                                        <a href="tel:+152534-468-854" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">+152 534-468-854</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end grid-->
                    </div>
                    <!-- Subscribe -->
                </div>
            </div>
        </div><!--end container-->

        <div class="py-[30px] px-0 border-t border-gray-800 dark:border-gray-700">
            <div class="container text-center">
                <div class="grid md:grid-cols-2 items-center gap-6">
                    <div class="ltr:md:text-left rtl:md:text-right text-center">
                        <p class="mb-0 text-gray-300">© <script>document.write(new Date().getFullYear())</script></p>
                    </div>

                    <ul class="list-none ltr:md:text-right rtl:md:text-left text-center">
                        <li class="inline"><a href="https://1.envato.market/hously" target="_blank" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="shopping-cart" class="h-4 w-4"></i></a></li>
                        <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="dribbble" class="h-4 w-4"></i></a></li>
                        <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i class="uil uil-behance align-baseline"></i></a></li>
                        <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
                        <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                        <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                        <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="twitter" class="h-4 w-4"></i></a></li>
                        <li class="inline"><a href="mailto:support@shreethemes.in" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="mail" class="h-4 w-4"></i></a></li>
                        <li class="inline"><a href="https://forms.gle/QkTueCikDGqJnbky9" target="_blank" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="file-text" class="h-4 w-4"></i></a></li>
                    </ul><!--end icon-->
                </div><!--end grid-->
            </div><!--end container-->
        </div>
    </footer><!--end footer-->





</div>
@endsection
