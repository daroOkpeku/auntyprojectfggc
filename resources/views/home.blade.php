@extends('layout.head')
@section('content')
<div >
    <!-- Start -->
    <section class="relative lg:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="md:col-span-5">
                    <div class="relative">
                        <img src="assets/images/about.jpg" class="rounded-xl shadow-md" alt="">
                        <div class="absolute bottom-2/4 translate-y-2/4 right-0 left-0 text-center">
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk"
                                class="lightbox h-20 w-20 rounded-full shadow-md dark:shadow-gyay-700 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-green-600">
                                <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="md:col-span-7">
                    <div class="ltr:lg:ml-4 rtl:lg:mr-4">
                        <h4 class="mb-6 md:text-3xl text-2xl lg:leading-normal leading-normal font-semibold">Efficiency. Transparency. <br> Control.</h4>
                        <p class="text-slate-400 max-w-xl">Hously developed a platform for the Real Estate marketplace that allows buyers and sellers to easily execute a transaction on their own. The platform drives efficiency, cost transparency and control into the hands of the consumers. Hously is Real Estate Redefined.</p>

                        <div class="mt-4">
                            <a href="#" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md mt-3">Learn More </a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container lg:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">How It Works</h3>

                <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <!-- Content -->
                <div class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
                        <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                            <i class="uil uil-estate"></i>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h5 class="text-xl font-medium">Evaluate Property</h5>
                        <p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                    </div>
                </div>
                <!-- Content -->

                <!-- Content -->
                <div class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
                        <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                            <i class="uil uil-bag"></i>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h5 class="text-xl font-medium">Meeting with Agent</h5>
                        <p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                    </div>
                </div>
                <!-- Content -->

                <!-- Content -->
                <div class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
                        <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                            <i class="uil uil-key-skeleton"></i>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h5 class="text-xl font-medium">Close the Deal</h5>
                        <p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                    </div>
                </div>
                <!-- Content -->
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container lg:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Featured Properties</h3>

                <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
            </div><!--end grid-->

            <div class="grid grid-cols-1 mt-8 relative">
                <div class="tiny-home-slide-three">
                    <div class="tiny-slide">
                        <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
                            <div class="relative">
                                <img src="assets/images/property/1.jpg" alt="">

                                <div class="absolute top-4 ltr:right-4 rtl:left-4">
                                    <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="pb-6">
                                    <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">10765 Hillshire Ave, Baton Rouge, LA 70810, USA</a>
                                </div>

                                <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                    <li class="flex items-center mr-4">
                                        <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                                        <span>8000sqf</span>
                                    </li>

                                    <li class="flex items-center mr-4">
                                        <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                                        <span>4 Beds</span>
                                    </li>

                                    <li class="flex items-center">
                                        <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                                        <span>4 Baths</span>
                                    </li>
                                </ul>

                                <ul class="pt-6 flex justify-between items-center list-none">
                                    <li>
                                        <span class="text-slate-400">Price</span>
                                        <p class="text-lg font-medium">$5000</p>
                                    </li>

                                    <li>
                                        <span class="text-slate-400">Rating</span>
                                        <ul class="text-lg font-medium text-amber-400 list-none">
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline text-black dark:text-white">5.0(30)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end property content-->
                    </div>

                    <div class="tiny-slide">
                        <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
                            <div class="relative">
                                <img src="assets/images/property/2.jpg" alt="">

                                <div class="absolute top-4 ltr:right-4 rtl:left-4">
                                    <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="pb-6">
                                    <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">59345 STONEWALL DR, Plaquemine, LA 70764, USA</a>
                                </div>

                                <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                    <li class="flex items-center mr-4">
                                        <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                                        <span>8000sqf</span>
                                    </li>

                                    <li class="flex items-center mr-4">
                                        <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                                        <span>4 Beds</span>
                                    </li>

                                    <li class="flex items-center">
                                        <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                                        <span>4 Baths</span>
                                    </li>
                                </ul>

                                <ul class="pt-6 flex justify-between items-center list-none">
                                    <li>
                                        <span class="text-slate-400">Price</span>
                                        <p class="text-lg font-medium">$5000</p>
                                    </li>

                                    <li>
                                        <span class="text-slate-400">Rating</span>
                                        <ul class="text-lg font-medium text-amber-400 list-none">
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline text-black dark:text-white">5.0(30)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end property content-->
                    </div>

                    <div class="tiny-slide">
                        <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
                            <div class="relative">
                                <img src="assets/images/property/3.jpg" alt="">

                                <div class="absolute top-4 ltr:right-4 rtl:left-4">
                                    <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="pb-6">
                                    <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">3723 SANDBAR DR, Addis, LA 70710, USA</a>
                                </div>

                                <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                    <li class="flex items-center mr-4">
                                        <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                                        <span>8000sqf</span>
                                    </li>

                                    <li class="flex items-center mr-4">
                                        <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                                        <span>4 Beds</span>
                                    </li>

                                    <li class="flex items-center">
                                        <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                                        <span>4 Baths</span>
                                    </li>
                                </ul>

                                <ul class="pt-6 flex justify-between items-center list-none">
                                    <li>
                                        <span class="text-slate-400">Price</span>
                                        <p class="text-lg font-medium">$5000</p>
                                    </li>

                                    <li>
                                        <span class="text-slate-400">Rating</span>
                                        <ul class="text-lg font-medium text-amber-400 list-none">
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline text-black dark:text-white">5.0(30)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end property content-->
                    </div>

                    <div class="tiny-slide">
                        <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
                            <div class="relative">
                                <img src="assets/images/property/4.jpg" alt="">

                                <div class="absolute top-4 ltr:right-4 rtl:left-4">
                                    <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="pb-6">
                                    <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">Lot 21 ROYAL OAK DR, Prairieville, LA 70769, USA</a>
                                </div>

                                <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                    <li class="flex items-center mr-4">
                                        <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                                        <span>8000sqf</span>
                                    </li>

                                    <li class="flex items-center mr-4">
                                        <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                                        <span>4 Beds</span>
                                    </li>

                                    <li class="flex items-center">
                                        <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                                        <span>4 Baths</span>
                                    </li>
                                </ul>

                                <ul class="pt-6 flex justify-between items-center list-none">
                                    <li>
                                        <span class="text-slate-400">Price</span>
                                        <p class="text-lg font-medium">$5000</p>
                                    </li>

                                    <li>
                                        <span class="text-slate-400">Rating</span>
                                        <ul class="text-lg font-medium text-amber-400 list-none">
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline text-black dark:text-white">5.0(30)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end property content-->
                    </div>

                    <div class="tiny-slide">
                        <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
                            <div class="relative">
                                <img src="assets/images/property/5.jpg" alt="">

                                <div class="absolute top-4 ltr:right-4 rtl:left-4">
                                    <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="pb-6">
                                    <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">710 BOYD DR, Unit #1102, Baton Rouge, LA 70808, USA</a>
                                </div>

                                <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                    <li class="flex items-center mr-4">
                                        <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                                        <span>8000sqf</span>
                                    </li>

                                    <li class="flex items-center mr-4">
                                        <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                                        <span>4 Beds</span>
                                    </li>

                                    <li class="flex items-center">
                                        <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                                        <span>4 Baths</span>
                                    </li>
                                </ul>

                                <ul class="pt-6 flex justify-between items-center list-none">
                                    <li>
                                        <span class="text-slate-400">Price</span>
                                        <p class="text-lg font-medium">$5000</p>
                                    </li>

                                    <li>
                                        <span class="text-slate-400">Rating</span>
                                        <ul class="text-lg font-medium text-amber-400 list-none">
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline text-black dark:text-white">5.0(30)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end property content-->
                    </div>

                    <div class="tiny-slide">
                        <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
                            <div class="relative">
                                <img src="assets/images/property/6.jpg" alt="">

                                <div class="absolute top-4 ltr:right-4 rtl:left-4">
                                    <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="pb-6">
                                    <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">5133 MCLAIN WAY, Baton Rouge, LA 70809, USA</a>
                                </div>

                                <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                    <li class="flex items-center mr-4">
                                        <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                                        <span>8000sqf</span>
                                    </li>

                                    <li class="flex items-center mr-4">
                                        <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                                        <span>4 Beds</span>
                                    </li>

                                    <li class="flex items-center">
                                        <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                                        <span>4 Baths</span>
                                    </li>
                                </ul>

                                <ul class="pt-6 flex justify-between items-center list-none">
                                    <li>
                                        <span class="text-slate-400">Price</span>
                                        <p class="text-lg font-medium">$5000</p>
                                    </li>

                                    <li>
                                        <span class="text-slate-400">Rating</span>
                                        <ul class="text-lg font-medium text-amber-400 list-none">
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline text-black dark:text-white">5.0(30)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end property content-->
                    </div>
                </div>
            </div><!--en grid-->
        </div><!--end container-->
    </section><!--end section-->

    <!-- Start CTA -->
    <section class="relative py-24 bg-[url('../../assets/images/bg/01.html')] bg-no-repeat bg-center bg-fixed bg-cover">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="container">
            <div class="grid lg:grid-cols-12 grid-cols-1 md:text-left text-center justify-center">
                <div class="lg:col-start-2 lg:col-span-10">
                    <div class="grid md:grid-cols-3 grid-cols-1 items-center">

                        <div class="counter-box text-center">
                            <h1 class="text-white lg:text-5xl text-4xl font-semibold mb-2"><span class="counter-value" data-target="1548">1010</span>+</h1>
                            <h5 class="counter-head text-white text-lg font-medium">Properties Sell</h5>
                        </div><!--end counter box-->


                        <div class="counter-box text-center">
                            <h1 class="text-white lg:text-5xl text-4xl font-semibold mb-2"><span class="counter-value" data-target="25">2</span>+</h1>
                            <h5 class="counter-head text-white text-lg font-medium">Award Gained</h5>
                        </div><!--end counter box-->


                        <div class="counter-box text-center">
                            <h1 class="text-white lg:text-5xl text-4xl font-semibold mb-2"><span class="counter-value" data-target="9">0</span>+</h1>
                            <h5 class="counter-head text-white text-lg font-medium">Years Experience</h5>
                        </div><!--end counter box-->
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End CTA -->

    <!-- Business Partner -->
    <section class="pt-10">
        <div class="container">
            <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
                <div class="mx-auto py-4">
                    <img src="assets/images/client/amazon.svg" class="h-6" alt="">
                </div>

                <div class="mx-auto py-4">
                    <img src="assets/images/client/google.svg" class="h-6" alt="">
                </div>

                <div class="mx-auto py-4">
                    <img src="assets/images/client/lenovo.svg" class="h-6" alt="">
                </div>

                <div class="mx-auto py-4">
                    <img src="assets/images/client/paypal.svg" class="h-6" alt="">
                </div>

                <div class="mx-auto py-4">
                    <img src="assets/images/client/shopify.svg" class="h-6" alt="">
                </div>

                <div class="mx-auto py-4">
                    <img src="assets/images/client/spotify.svg" class="h-6" alt="">
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Business Partner -->

    <!-- End -->

    <!-- Start Footer -->
    <footer class="relative bg-slate-900 dark:bg-slate-800 mt-24">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="relative py-16">
                    <!-- Subscribe -->
                    <div class="relative w-full">
                        <div class="relative -top-40 bg-white dark:bg-slate-900 lg:px-8 px-6 py-10 rounded-xl shadow-lg dark:shadow-gray-700 overflow-hidden">
                            <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                                <div class="ltr:md:text-left rtl:md:text-right text-center z-1">
                                    <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">Subscribe to Newsletter!</h3>
                                    <p class="text-slate-400 max-w-xl mx-auto">Subscribe to get latest updates and information.</p>
                                </div>

                                <div class="subcribe-form z-1">
                                    <form class="relative max-w-lg ltr:md:ml-auto rtl:md:mr-auto">
                                        <input type="email" id="subcribe" name="email" class="rounded-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-700" placeholder="Enter your email :">
                                        <button type="submit" class="btn bg-green-600 hover:bg-green-700 text-white rounded-full">Subscribe</button>
                                    </form><!--end form-->
                                </div>
                            </div>

                            <div class="absolute -top-5 ltr:-left-5 rtl:-right-5">
                                <div class="uil uil-envelope lg:text-[150px] text-7xl text-black/5 dark:text-white/5 ltr:-rotate-45 rtl:rotate-45"></div>
                            </div>

                            <div class="absolute -bottom-5 ltr:-right-5 rtl:-left-5">
                                <div class="uil uil-pen lg:text-[150px] text-7xl text-black/5 dark:text-white/5 rtl:-rotate-90"></div>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] -mt-24">
                            <div class="lg:col-span-4 md:col-span-12">
                                <a href="#" class="text-[22px] focus:outline-none">
                                    <img src="assets/images/logo-light.png" alt="">
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
                        <p class="mb-0 text-gray-300">© <script>document.write(new Date().getFullYear())</script> Hously. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
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