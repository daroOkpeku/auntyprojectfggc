@extends('layout.headtwo')
@section('content')
<div>
    <!-- Start Hero -->
    <section class="relative table w-full py-32 lg:py-36 bg-[url('https://res.cloudinary.com/okpeku/raw/upload/v1684832217/01_hbxvng.html')] bg-no-repeat bg-center bg-cover">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Chapters</h3>
            </div>
        </div>
    </section>
    <!--end section-->




    <section class="relative lg:py-24 py-16">
        <div class="container">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px] cardx">
   {{-- <div class=" group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                    <div class="relative">
                        <img src="assets/images/property/12.jpg" alt="">

                        <div class="absolute top-4 ltr:right-4 rtl:left-4">
                            <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"></a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="pb-6">
                            <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">10765 Hillshire Ave, Baton Rouge, LA 70810, USA</a>
                        </div>

                        <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                            <li class="flex items-center ltr:mr-4 rtl:ml-4">
                                <span>8000sqf</span>
                            </li>
                        </ul>

                        <ul class=" flex justify-between items-center list-none">
                            <li>
                                <p class="text-lg font-medium">$5000</p>
                            </li>
                        </ul>
                    </div>
                </div>  --}}





            </div><!--en grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
                <div class="md:col-span-12 text-center">
                    <nav>
                        <ul class="inline-flex items-center -space-x-px">
                            <li>
                                <a  class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 bg-white dark:bg-slate-900 hover:text-white shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600 prev">
                                    <i class="uil uil-angle-left text-[20px]"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-current="page" class="z-10 w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-white bg-green-600 shadow-sm dark:shadow-gray-700 current" >3</a>
                            </li>

                            <li>
                                <a  class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 bg-white dark:bg-slate-900 hover:text-white shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600 next">
                                    <i class="uil uil-angle-right text-[20px]"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->




</div>
@endsection
