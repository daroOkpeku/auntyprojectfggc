@extends('layout.headtwo')
@section('content')
<div>

    <!-- Start Hero -->
    <section class="relative table w-full py-32 lg:py-36 bg-[url('https://res.cloudinary.com/okpeku/raw/upload/v1684832217/01_hbxvng.html')] bg-no-repeat bg-center bg-cover">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
               <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white blogx">Blog</h3>
                <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white housex"></h3>
                <h2 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white author"></h2>

            </div>
        </div>
    </section>
    <!--end section-->


    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-8 md:order-1 order-2">
                    <div class="relative overflow-hidden rounded-xl shadow dark:shadow-gray-800">

                        <img src="" class="imgxx" alt="">

                        <div class="p-6">
                            <p class="text-slate-400 wordin">.</p>
                            {{--  <p class="text-slate-400 mt-3">The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewers attention from the layout.</p>  --}}
                        </div>
                    </div>
                </div><!--end col-->

     {{--           <div class="lg:col-span-4 md:order-2 order-1">
                    <div class="sticky top-20">
                        <form>
                            <div>
                                <label for="searchname" class="font-medium text-lg">Search Properties</label>
                                <div class="relative mt-2">
                                    <i class="uil uil-search text-lg absolute top-[8px] ltr:left-3 rtl:right-3"></i>
                                    <input name="search" id="searchname" type="text" class="form-input border border-slate-100 dark:border-slate-800 ltr:pl-10 rtl:pr-10" placeholder="Search">
                                </div>
                            </div>
                        </form>

                        <h5 class="font-medium text-lg mt-[30px]">Recent post</h5>
                        <div class="flex items-center mt-4">
                            <img src="assets/images/property/6.jpg" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">

                            <div class="ltr:ml-3 rtl:mr-3">
                                <a href="#" class="font-medium hover:text-green-600">10 Things You About Real Estate</a>
                                <p class="text-sm text-slate-400">2nd March 2023</p>
                            </div>
                        </div>

                        <div class="flex items-center mt-4">
                            <img src="assets/images/property/7.jpg" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">

                            <div class="ltr:ml-3 rtl:mr-3">
                                <a href="#" class="font-medium hover:text-green-600">Why We Love Real Estate</a>
                                <p class="text-sm text-slate-400">2nd March 2023</p>
                            </div>
                        </div>

                        <div class="flex items-center mt-4">
                            <img src="assets/images/property/8.jpg" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">

                            <div class="ltr:ml-3 rtl:mr-3">
                                <a href="#" class="font-medium hover:text-green-600">110 Quick Tips About Real Estate</a>
                                <p class="text-sm text-slate-400">2nd March 2023</p>
                            </div>
                        </div>

                        <h5 class="font-medium text-lg mt-[30px]">Social sites</h5>
                        <ul class="list-none mt-4">
                            <li class="inline"><a href="#" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href="#" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href="#" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="twitter" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href="#" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href="#" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="github" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href="#" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="youtube" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href="#" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="gitlab" class="h-4 w-4"></i></a></li>
                        </ul><!--end icon-->
                    </div>
                </div><!--end col-->  --}}


            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->





</div>
@endsection
