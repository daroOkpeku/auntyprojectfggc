<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
        <meta charset="UTF-8" />
        <title>FGGC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="shortcut icon" href="assets/images/favicon.ico" />


        <link href="<?php echo e(asset('asset/cssx/icons.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('asset/cssx/tailwind.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('asset/libs/@iconscout/unicons/css/line.css')); ?>" rel="stylesheet">
        <script defer src="<?php echo e(asset('asset/libs/particles.js/particles.js')); ?>" ></script>
        <script defer src="<?php echo e(asset('asset/libs/feather-icons/feather.min.js')); ?>" ></script>
        <script defer src="<?php echo e(asset('asset/js/appx.js')); ?>" ></script>
        <script defer src="<?php echo e(asset('asset/js/plugins.init.js')); ?>" ></script>

        

    </head>

    <body class="dark:bg-slate-900">
        <section class=" flex items-center relative overflow-hidden zoom-image">
            <div class=" inset-0 image-wrap z-1 bg-no-repeat bg-center bg-cover"></div>
            <div class="absolute inset-0 bg-white from-transparent to-black z-2" id="particles-snow"></div>
            <div class="container z-3">
                <div class="flex justify-center">
                    <div class="max-w-[450px] w-full m-auto p-3 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md">
                        

                         <div class="w-full text-center text-lg font-semibold message"> </div>
                        <h5 class="my-6 text-xl font-semibold">Travel Details</h5>
                        <form class="ltr:text-left rtl:text-right">
                            <div class="grid grid-cols-1">
                                <div class="mb-2">
                                    <label class="font-semibold" for="RegisterName">Date of Arrival  :</label>
                                    <input id="date_arrival" type="date" class="form-input mt-3" style="display:block;" />
                                    <label class="font-semibold date_arrivalx" style="display:none;" ></label>

                                </div>

                                <div class="mb-2">
                                    <div class="flex items-center w-full mb-0">
                                        <input class="form-checkbox text-green-600 rounded w-4 h-4 ltr:mr-2 rtl:ml-2 border border-inherit" type="checkbox" value="" id="pickup">
                                        <label class="form-check-label text-slate-400" >Would you require pick up and drop off? Yes/No </label>
                                        <label class="font-semibold" id="pickupx" style="display:none;" ></label>

                                    </div>
                                </div>

                                <div class="mb-2 inside">
                                    <label class="font-semibold" for="LoginEmail">Port/Park of arrival:</label>
                                    <input type="text" id="port_part" class="form-input mt-3" >
                                </div>


                                <div class="mb-2">
                                    <label class="font-semibold" for="RegisterName">Estimated time of arrival:</label>
                                    <input id="time_arrival" type="date" class="form-input mt-3" />
                                    <label class="font-semibold" id="time_arrivalx" style="display:none;"></label>

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
    let date_arrivalx = document.querySelector(".date_arrivalx")
    let pickup = document.getElementById("pickup")
    let pickupx = document.getElementById("pickup")
    let port_part = document.getElementById("port_part")
    let time_arrival = document.getElementById("time_arrival")
    let time_arrivalx = document.getElementById("time_arrivalx")
    let btn = document.querySelector(".btn")
    var  token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    let original = window.location.origin
    let message = document.querySelector(".message")
    let sendme = false;
    let id;
    let local = localStorage.getItem('Accommodation')?localStorage.getItem('Accommodation'):''
    if(local){
        var bytes  = CryptoJS.AES.decrypt(local, 'FGGC');
        var decryptedData = JSON.parse(bytes.toString(CryptoJS.enc.Utf8));
        console.log(decryptedData);
        id = decryptedData.user_id;

        let headers = new Headers();
        let url = `${original}/checktravelin/${id}`;
        axios.get(url,  headers).then(res=>{
           if(res.data.success){
              console.log(res.data.success);
               //http://127.0.0.1:8000/storage/images/Screenshot%20(766).png
                 let datearrival = res.data.success.date_arrival
                 let pickupz   = res.data.success.pickup
               let bool = new Date(datearrival)
               var dd = String(bool.getDate()).padStart(2, '0');
               var mm = String(bool.getMonth() + 1).padStart(2, '0');
               var yyyy = bool.getFullYear();
               let bday = dd+'-'+mm+'-'+yyyy

               //time_arrival
               let timearrival = res.data.success.time_arrival
               let boolx = new Date(timearrival)
               var ddx = String(boolx.getDate()).padStart(2, '0');
               var mmx = String(bool.getMonth() + 1).padStart(2, '0');
               var yyyyx = bool.getFullYear();
               let bdayx = ddx+'-'+mmx+'-'+yyyyx

              //port_part
              let portpart = res.data.success.port_part

               date_arrival.style.display = "none";
               date_arrivalx.innerText = bday
               date_arrivalx.style.display = 'block'
               pickup.checked = pickupz == 1?true:false;

               sendme = true;

               port_part.value = portpart
               time_arrival.style.display = "none";
               time_arrivalx.style.display = 'block';
               time_arrivalx.innerText = timearrival
               btn.innerText = 'Back Home';

           }
        })



    }






    btn.addEventListener("click", function(e) {
        e.preventDefault();

        if(sendme){
          window.location.href = `${original}`;
        }else{
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


        }



    })
  </script>
</html>
<?php /**PATH C:\xampp\htdocs\dashboard\project\FGGC\resources\views\traveldetails.blade.php ENDPATH**/ ?>