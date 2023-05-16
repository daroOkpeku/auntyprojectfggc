<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
<head>
        <meta charset="UTF-8" />
        <title>FGGC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="assets/images/favicon.ico" />

        @viteReactRefresh
        @vite([
            'resources/cssx/icons.css',
            'resources/cssx/tailwind.min.css',
            'resources/libs/@iconscout/unicons/css/line.css',
            'resources/libs/particles.js/particles.js',
            'resources/libs/feather-icons/feather.min.js',
            'resources/js/appx.js',
            'resources/js/plugins.init.js'
            ])

    </head>
    <body class="dark:bg-slate-900">
        <section class="md:h-screen py-36 flex items-center relative overflow-hidden zoom-image">
            <div class="absolute inset-0 image-wrap z-1 bg-no-repeat bg-center bg-cover"></div>
            <div class="absolute inset-0 bg-white from-transparent to-black z-2" id="particles-snow"></div>
            <div class="container z-3">
                <div class="flex justify-center">
                    <div class="max-w-[400px] w-full m-auto p-3 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md">
                        {{--  <a href="index.html"><img src="assets/images/logo-icon-64.png" class="mx-auto" alt=""></a>  --}}

                         <div class="w-full text-center text-lg font-semibold message"> </div>
                        <h5 class="my-6 text-xl font-semibold"> Admin Login</h5>
                        <form class="ltr:text-left rtl:text-right">
                            <div class="grid grid-cols-1">

                                <div class="mb-2">
                                    <label class="font-semibold" for="LoginEmail">Email Address:</label>
                                    <input id="LoginEmail" type="email" class="form-input mt-3" placeholder="name@example.com">
                                </div>

                                <div class="mb-2">
                                    <label class="font-semibold" for="LoginPassword">Password:</label>
                                    <input id="LoginPassword" type="password" class="form-input mt-3" placeholder="Password:">
                                </div>




                                <div class="mb-2">
                                    <a  class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Login</a>
                                </div>

                                <div class="text-center">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
 <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="text/javascript">
{{--  login  --}}
let original = window.location.origin
let btn = document.querySelector(".btn");
let message = document.querySelector(".message")
let email = document.getElementById("LoginEmail");
let password = document.getElementById("LoginPassword");
var  token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
btn.addEventListener("click", function(e){
    e.preventDefault();
    let headers = new Headers();
    headers.append('Content-Type', 'application/json')
    let formData = new FormData();
    formData.append('email', email.value)
    formData.append('password', password.value)
    formData.append('_token', token)
    let url = `${original}/adminlogin`;
    axios.post(url, formData, headers).then(res=>{
        console.log(res)
        if(res.data.success){
           message.innerText = res.data.success;
           message.style.color = "green"
         window.location.href = `${original}/admindashboard`;
        }else if(res.data.error){
            message.innerText = res.data.success;
            message.style.color = "red"
        }
     }).catch(err=>{
        let error = err.response.data.errors
        if(error.email){
            message.innerText =  error.email[0]
            message.style.color = "red"
        }else if(error.password){
            message.innerText =  error.password[0]
            message.style.color = "red"
        }
     })
})
</script>
</html>
