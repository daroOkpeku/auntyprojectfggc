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

        {{--  @viteReactRefresh
        @vite([
            'resources/cssx/icons.css',
            'resources/cssx/tailwind.min.css',
            'resources/libs/@iconscout/unicons/css/line.css',
            'resources/libs/particles.js/particles.js',
            'resources/libs/feather-icons/feather.min.js',
            'resources/js/appx.js',
            'resources/js/plugins.init.js'
            ])  --}}

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
                        <h5 class="my-6 text-xl font-semibold">REGISTRANTS</h5>
                        <form class="ltr:text-left rtl:text-right">
                            <div class="grid grid-cols-1">
                                <div class="mb-4">
                                    <label class="font-semibold" for="RegisterName">First Name:</label>
                                    <input id="firstname" type="text" class="form-input mt-3" placeholder="Harry">
                                </div>

                                <div class="mb-2">
                                    <label class="font-semibold" for="LoginEmail">Last Name:</label>
                                    <input id="lastname" type="lastname" class="form-input mt-3" placeholder="Potter">
                                </div>

                                <div class="mb-2">
                                    <label class="font-semibold" for="LoginEmail">Email Address:</label>
                                    <input id="LoginEmail" type="email" class="form-input mt-3" placeholder="name@example.com">
                                </div>

                                <div class="mb-2">
                                    <label class="font-semibold" for="LoginPassword">Phone Number:</label>
                                    <input id="phone" type="tel" class="form-input mt-3" placeholder="08153672527">
                                </div>


                                <div class="mb-2">
                                    <label class="font-semibold" for="LoginPassword">Chapter:</label>
                                    <input id="chapter" type="text" class="form-input mt-3" placeholder="city and country you are based at">
                                </div>

                                <div class="mb-2">
                                    <label class="font-semibold" for="LoginPassword">Set:</label>
                                    <input id="set" type="text" class="form-input mt-3" placeholder="Year Of Graduation">
                                </div>

                                <div class="mb-2">
                                    <label class="font-semibold" for="LoginPassword">House:</label>
                                    <input id="house" type="text" class="form-input mt-3" placeholder="house">
                                </div>

                                <div class="mb-2">
                                    <label class="font-semibold" for="LoginPassword">T-shirt and Top:</label>
                                    <select id="t_shirttop" type="text" class="form-input mt-3" >

                                    </select>
                                </div>

                                <div class="mb-2">
                                    <label class="font-semibold" for="LoginPassword">Do You hav any food allergies:</label>
                                    <textarea id="food_allergies" type="text" class="form-input mt-3" placeholder="Please state your food allergies">
                                    </textarea>
                                </div>

                                <div class="mb-2">
                                    <label class="font-semibold" for="LoginPassword">Do You hav any medical conditions:</label>
                                    <textarea id="medical_conditions" type="text" class="form-input mt-3" placeholder="Please state your medical conditions">
                                    </textarea>
                                </div>

                                <div class="mb-2">
                                    <a href="#" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Submit</a>
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
    let ischecked = false;
    let firstname = document.getElementById("firstname");
    let lastname = document.getElementById("lastname")
    let email = document.getElementById("LoginEmail");
    let phone = document.getElementById("phone");
    let chapter = document.getElementById("chapter");
    let set = document.getElementById("set");
    let house = document.getElementById("house");
    let t_shirttop = document.getElementById("t_shirttop");
    let food_allergies = document.getElementById("food_allergies");
    let medical_conditions = document.getElementById("medical_conditions");
    let local = localStorage.getItem('userdetails')?localStorage.getItem('userdetails'):''
    let btn = document.querySelector(".btn");
    let message = document.querySelector(".message")
    var  token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    let original = window.location.origin
    if(local){
        var bytes  = CryptoJS.AES.decrypt(local, 'FGGC');
        var decryptedData = JSON.parse(bytes.toString(CryptoJS.enc.Utf8));
        if(Object.keys(decryptedData).length > 0){
         firstname.value = decryptedData.name
         lastname.value = decryptedData.lastname
         email.value = decryptedData.email
         phone.value = decryptedData.phone
         chapter.value = decryptedData.chapter
         set.value = decryptedData.set
         house.value = decryptedData.house
         t_shirttop.innerHTML =  `<option>${decryptedData.t_shirttop}</option>`
         food_allergies.innerText = decryptedData.food_allergies
         medical_conditions.innerText = decryptedData.medical_conditions
         btn.style.backGroundColor = "red"
         btn.style.color = "red"
         btn.innerText = 'Next'
        }
    }




     let size =['Select Size', 'XL', 's', '1', '10', '2xl', '3', '0', 'xs', 'm', '3T', 'xxl', 'xxs', 'one size'];
     size.map((item)=>{
        t_shirttop.innerHTML += `<option>${item}</option>`;
     })

      btn.addEventListener("click", function(e){
        e.preventDefault();
        if( local ){
           window.location.href = `${original}/accommodation`;
        }else{
            if(t_shirttop.value != 'Select Size' || t_shirttop.value != '' ){
                let headers = new Headers();
                headers.append('Content-Type', 'application/json')
                let formData = new FormData();
                formData.append('name', firstname.value)
                formData.append('lastname', lastname.value)
                formData.append('email', email.value)
                formData.append('phone', phone.value)
                formData.append('chapter', chapter.value)
                formData.append('set', set.value)
                formData.append('house', house.value)
                formData.append('t_shirttop', t_shirttop.value)
                formData.append('food_allergies', food_allergies.value)
                formData.append('medical_conditions', medical_conditions.value)
                formData.append('_token', token)
                let url = `${original}/createprofile`;
                axios.post(url, formData, headers).then(res=>{
                     if(res.data.success){
                        var ciphertext = CryptoJS.AES.encrypt(JSON.stringify(res.data.success), 'FGGC').toString();
                        localStorage.setItem("userdetails", ciphertext)
                        message.innerText = 'we have seen your information';
                        message.style.color = "green"
                       window.scrollBy(0, 0)
                        window.location.href = `${original}/accommodation`;
                     }
                  }).catch(err=>{
                    //console.log(err.response)
                    let error = err.response.data.errors
                    if(error.name){
                        message.innerText =  error.name[0]
                        message.style.color = "red"
                        window.scrollBy(0, 0)

                    }else if(error.email){
                        message.innerText =  error.email[0]
                        message.style.color = "red"
                        window.scrollBy(0, 0)

                    }else if(error.lastname){
                        message.innerText =  error.lastname[0]
                        message.style.color = "red"
                        window.scrollBy(0, 0)

                    }else if(error.phone){
                        message.innerText =  error.phone[0]
                        message.style.color = "red"
                        window.scrollBy(0, 0)

                    }
                  })
              }else{
               message.innerText = 'Please fill the Correct input';
              message.style.color = "red"
              window.scrollBy(0, 0)

             }
        }


      })

  //  console.log(name, email, password, conpassword, check)

</script>
</html>
