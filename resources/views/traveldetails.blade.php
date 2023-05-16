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
        <section class=" flex items-center relative overflow-hidden zoom-image">
            <div class=" inset-0 image-wrap z-1 bg-no-repeat bg-center bg-cover"></div>
            <div class="absolute inset-0 bg-white from-transparent to-black z-2" id="particles-snow"></div>
            <div class="container z-3">
                <div class="flex justify-center">
                    <div class="max-w-[450px] w-full m-auto p-3 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md">
                        {{--  <a href="index.html"><img src="assets/images/logo-icon-64.png" class="mx-auto" alt=""></a>  --}}

                         <div class="w-full text-center text-lg font-semibold message"> </div>
                        <h5 class="my-6 text-xl font-semibold">Travel Details</h5>
                        <form class="ltr:text-left rtl:text-right">
                            <div class="grid grid-cols-1">
                                <div class="mb-2">
                                    <label class="font-semibold" for="RegisterName">Date of Arrival  :</label>
                                    <input id="date_arrival" type="date" class="form-input mt-3" />
                                </div>

                                <div class="mb-2">
                                    <div class="flex items-center w-full mb-0">
                                        <input class="form-checkbox text-green-600 rounded w-4 h-4 ltr:mr-2 rtl:ml-2 border border-inherit" type="checkbox" value="" id="pickup">
                                        <label class="form-check-label text-slate-400" >Would you require pick up and drop off? Yes/No </label>
                                    </div>
                                </div>

                                <div class="mb-2 inside">
                                    <label class="font-semibold" for="LoginEmail">Port/Park of arrival:</label>
                                    <input type="text" id="port_part" class="form-input mt-3" >
                                </div>


                                <div class="mb-2">
                                    <label class="font-semibold" for="RegisterName">Estimated time of arrival:</label>
                                    <input id="time_arrival" type="date" class="form-input mt-3" />
                                </div>

                                <div class="mb-2">
                                    <a  class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Submit</a>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js" integrity="sha512-E8QSvWZ0eCLGk4km3hxSsNmGWbLtSCSUcewDQPQWZF6pEU8GlT8a5fF32wOl1i8ftdMhssTrF/OhyGWwonTcXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script type="text/javascript">

    let date_arrival = document.getElementById("date_arrival")
    let pickup = document.getElementById("pickup")
    let port_part = document.getElementById("port_part")
    let time_arrival = document.getElementById("time_arrival")
    let btn = document.querySelector(".btn")
    var  token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    let original = window.location.origin
    let message = document.querySelector(".message")

    let id;
    let local = localStorage.getItem('Accommodation')?localStorage.getItem('Accommodation'):''
    if(local){
        var bytes  = CryptoJS.AES.decrypt(local, 'FGGC');
        var decryptedData = JSON.parse(bytes.toString(CryptoJS.enc.Utf8));
        console.log(decryptedData);
        id = decryptedData.user_id;

    }



    btn.addEventListener("click", function(e) {
        e.preventDefault();

        let headers = new Headers();
        headers.append('Content-Type', 'application/json')
        let formData = new FormData();
        formData.append('date_arrival', date_arrival.value)
        formData.append('pickup', pickup.checked)
        formData.append('port_part', port_part.value)
        formData.append('time_arrival', time_arrival.value)
        formData.append('user_id', id)
        formData.append('_token', token)
        let url = `${original}/travelin`;
        axios.post(url, formData, headers).then(res=>{
              console.log(res)
             if(res.data.success){
              var ciphertext = CryptoJS.AES.encrypt(JSON.stringify(res.data.data), 'FGGC').toString();
              localStorage.setItem("travel_detail", ciphertext)
               message.innerText =  res.data.success
               message.style.color = "green"
               btn.innerText = 'Complete'
               window.scrollBy(0, 0)
               window.location.href = `${original}`;
             }
          }).catch(err=>{
            //console.log(err.response)
            let error = err.response.data.errors
            if(error.date_arrival){
                message.innerText =  error.date_arrival[0]
             message.style.color = "red"
             window.scrollBy(0, 0)
            }else if(error.pickup){
                message.innerText =  error.pickup[0]
                message.style.color = "red"
                window.scrollBy(0, 0)
            }else if(error.port_part){
                message.innerText =  error.port_part[0]
                message.style.color = "red"
                window.scrollBy(0, 0)

            }else if(error.time_arrival){
                message.innerText =  error.time_arrival[0]
                message.style.color = "red"
                window.scrollBy(0, 0)

            }else if(error.user_id){
                message.innerText =  error.user_id[0]
                message.style.color = "red"
                window.scrollBy(0, 0)

            }

          })


    })
  </script>
</html>
