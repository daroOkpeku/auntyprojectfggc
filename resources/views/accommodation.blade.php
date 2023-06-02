<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
        <meta charset="UTF-8" />
        <title>FGGC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="assets/images/favicon.ico" />




        <link href="{{ asset('asset/cssx/icons.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/cssx/tailwind.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/libs/@iconscout/unicons/css/line.css') }}" rel="stylesheet">
        <script defer src="{{ asset('asset/libs/particles.js/particles.js') }}" ></script>
        <script defer src="{{ asset('asset/libs/feather-icons/feather.min.js') }}" ></script>
        <script defer src="{{ asset('asset/js/appx.js') }}" ></script>
        <script defer src="{{ asset('asset/js/plugins.init.js') }}" ></script>



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
                        <h5 class="my-6 text-xl font-semibold">Hotel Accommodation</h5>
                        <form class="ltr:text-left rtl:text-right">
                            <div class="grid grid-cols-1">
                                <div class="mb-4">
                                    <label class="font-semibold" for="RegisterName">Hotel/Room spec :</label>
                                    <select id="tell" type="text" class="form-input mt-3" >
                                    </select>
                                </div>

                                <div class="mb-2 inside">
                                    <label class="font-semibold" for="LoginEmail">Pay / Upload your receipt of payment:</label>
                                    <input type="file" id="filedoc" class="form-input mt-3" >
                                </div>

                                <div class="mb-2 side" style="display:none;">

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
// 'Standard room', 'Deluxe room', 'Joint room', 'Connecting room', 'Suite', 'Apartment style', 'Accessibleroom'
   let rooms = ['Select Room', 'Standard Room', 'Deluxe Room', 'Joint Room', 'Connecting Room', 'Suite', 'Apartment Style', 'Accessibleroom'];
  let tell = document.getElementById('tell')
   let send = false;
   let filedoc = document.getElementById('filedoc');
   var  token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
   let original = window.location.origin
   let btn = document.querySelector('.btn');
   let inside = document.querySelector('.inside')
   let side = document.querySelector('.side');
   let message = document.querySelector(".message")

  rooms.map((item)=>{
    tell.innerHTML +=`<option>${item}</option>`;
  })
  let id ;
  let local = localStorage.getItem('userdetails')?localStorage.getItem('userdetails'):''
  if(local){
    var bytes  = CryptoJS.AES.decrypt(local, 'FGGC');
    var decryptedData = JSON.parse(bytes.toString(CryptoJS.enc.Utf8));
    if(Object.keys(decryptedData).length > 0){
        console.log(decryptedData)
      id = decryptedData.id;
     let headers = new Headers();
     let url = `${original}/checkaccommodation/${id}`;
     axios.get(url,  headers).then(res=>{
        if(res.data.success){
            send = true;
            //http://127.0.0.1:8000/storage/images/Screenshot%20(766).png
            var ciphertext = CryptoJS.AES.encrypt(JSON.stringify(res.data.success), 'FGGC').toString();
            localStorage.setItem("Accommodation", ciphertext)
            tell.innerHTML =  `<option> ${res.data.success.hostel}</option>`
            inside.style.display = 'none';
            side.style.display = 'block';
            side.innerHTML = `<img src="${`${original}/storage/images/${res.data.success.picture}`}" class='w-32 h-24 rounded-md ' />`;
            btn.style.backGroundColor = "red"
            btn.style.color = "red"
            btn.innerText = 'Next'
        }
     })


    }
   }



   btn.addEventListener('click', function(e){
    e.preventDefault();
    if(e.target.innerText == 'Next'){
        window.location.href = `${original}/traveldetails`;
    }
    else{
        let headers = new Headers();
        headers.append('Content-Type', 'application/json')
        let formData = new FormData();
        formData.append('hostel', tell.value)
        formData.append('file', filedoc.files[0])
        formData.append('user_id', id)
        formData.append('_token', token)
        let url = `${original}/accommdate`;
        axios.post(url, formData, headers).then(res=>{
              console.log(res)
             if(res.data.success){
               var ciphertext = CryptoJS.AES.encrypt(JSON.stringify(res.data.data), 'FGGC').toString();
               localStorage.setItem("Accommodation", ciphertext)
                 message.innerText = 'we have seen your information';
                message.style.color = "green"
              window.scrollBy(0, 0)
              window.location.href = `${original}/traveldetails`;
             }else if(res.data.error){
                message.innerText = res.data.error;
                message.style.color = "red"
              window.scrollBy(0, 0)
              window.location.href = `${original}/traveldetails`;

             }
          }).catch(err=>{
            //console.log(err.response)
           // let error = err.response.data.errors
           // if(error.name){
            //    message.innerText =  error.name[0]
            //    message.style.color = "red"
           //     window.scrollBy(0, 0)

           // }
          })
    }



   });

  </script>
</html>
