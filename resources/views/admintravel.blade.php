@extends('layout.adminhead')
@section('content')
<div class=" table w-full   mt-20">
   <article class="w-11/12 m-auto flex flex-col item-center mt-2">
    <div class="text-center text-4xl font-bold text underline capitalize">Travel Details</div>
   <table class="w-full rounded-md border mt-2">
    <thead>
   <tr>
    <th class="capitalize text-2xl text-center border ">Firstname</th>
    <th class="capitalize text-2xl text-center border">Lastname</th>
    <th class="capitalize text-2xl text-center border">date arrival</th>
    <th class="capitalize text-2xl text-center border">pickup</th>
    <th class="capitalize text-2xl text-center border">port part</th>
    <th class="capitalize text-2xl text-center border">time arrival</th>

   </tr>
    </thead>
    <tbody class="sux">
        {{--  <tr>
            <td class="text-center text-lg font-medium border">dghgd</td>
            <td class="text-center text-lg font-medium border">sghghs</td>
            <td class="text-center text-lg font-medium border">shghgs</td>
            <td class="text-center text-lg font-medium border">fydydt</td>
            <td class="text-center text-lg font-medium border">ghhghg</td>
            <td class="text-center text-lg font-medium border">hgdytdy</td>
            <td class="text-center text-lg font-medium border">uyfufytdtr</td>
            <td class="text-center text-lg font-medium border">gfuyfyt</td>
            <td class="text-center text-lg font-medium border">hguyfuyfyu</td>
            <td class="text-center text-lg font-medium border">kkjgjgjh</td>
        </tr>  --}}
    </tbody>
   </table>
   <div class="w-full flex flex-row items-center justify-center mt-2">
     <section class="w-1/12">
       <div class="w-full flex flex-row items-center justify-between">
        <button class="h-full w-1/3 text-white text-lg bg-green-500 prev "> < </button>
        <article class="h-full w-1/3 text-black text-lg bg-white text-center num">1</article>
        <button class="h-full w-1/3 text-white text-lg bg-green-500 next"> > </button>

       </div>
    </section>
   </div>
</article>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js" integrity="sha512-E8QSvWZ0eCLGk4km3hxSsNmGWbLtSCSUcewDQPQWZF6pEU8GlT8a5fF32wOl1i8ftdMhssTrF/OhyGWwonTcXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="text/javascript">
    let data = @json($data??"");
    console.log(data);
    let original = window.location.origin
    let prev = document.querySelector('.prev')
    let num = document.querySelector('.num')
    let next = document.querySelector('.next')
    let sux = document.querySelector('.sux');
    let lastnum ;
    let headers = new Headers();
let url = `${original}/admintravel/?page=`+1;
axios.get(url,  headers).then(res=>{
 console.log(res)
 if(res.data.success){
    lastnum = res.data.success.last_page
    let reg = res.data.success.data
    reg.map((item)=>{
        sux.innerHTML += `   <tr>
            <td class="text-center text-lg font-medium border py-2">${item.firstname}</td>
            <td class="text-center text-lg font-medium border py-2">${item.lastname}</td>
            <td class="text-center text-lg font-medium border py-2">${item.date_arrival}</td>
            <td class="text-center text-lg font-medium border py-2">${item.pickup}</td>
            <td class="text-center text-lg font-medium border py-2">${item.port_part}</td>
            <td class="text-center text-lg font-medium border py-2">${item.time_arrival}</td>

        </tr>`;
    })
 }
})

    prev.addEventListener('click', function(e){
    e.preventDefault();
     let currentnum = +e.target.nextElementSibling.innerText;
       if(currentnum > 1){
        let ans =  lastnum--;
        //console.log(ans)
        num.innerText = ans;

        let headers = new Headers();
        let url = `${original}/admintravel/?page=`+ans;
        axios.get(url,  headers).then(res=>{
         console.log(res)
         if(res.data.success){
            lastnum = res.data.success.last_page
            let reg = res.data.success.data
            reg.map((item)=>{
                sux.innerHTML += `   <tr>
                    <td class="text-center text-lg font-medium border py-2">${item.firstname}</td>
                    <td class="text-center text-lg font-medium border py-2">${item.lastname}</td>
                    <td class="text-center text-lg font-medium border py-2">${item.date_arrival}</td>
                    <td class="text-center text-lg font-medium border py-2">${item.pickup}</td>
                    <td class="text-center text-lg font-medium border py-2">${item.port_part}</td>
                    <td class="text-center text-lg font-medium border py-2">${item.time_arrival}</td>
                </tr>`;
            })
         }
        })

      }else if(currentnum < 1){
        num.innerText = lastnum;

        let headers = new Headers();
        let url = `${original}/registrants/?page=`+lastnum;
        axios.get(url,  headers).then(res=>{
         console.log(res)
         if(res.data.success){
            lastnum = res.data.success.last_page
            let reg = res.data.success.data
            reg.map((item)=>{
                sux.innerHTML += `   <tr>
                    <td class="text-center text-lg font-medium border py-2">${item.firstname}</td>
                    <td class="text-center text-lg font-medium border py-2">${item.lastname}</td>
                    <td class="text-center text-lg font-medium border py-2">${item.date_arrival}</td>
                    <td class="text-center text-lg font-medium border py-2">${item.pickup}</td>
                    <td class="text-center text-lg font-medium border py-2">${item.port_part}</td>
                    <td class="text-center text-lg font-medium border py-2">${item.time_arrival}</td>
                </tr>`;
            })
         }
        })

       }

    })

    next.addEventListener('click', function(e){
        e.preventDefault();
        let currentnum = +e.target.previousElementSibling.innerText;
         if(currentnum < lastnum ){
            let ans =  currentnum += 1;
            num.innerText = ans;

            let headers = new Headers();
            let url = `${original}/admintravel/?page=`+ans;
            axios.get(url,  headers).then(res=>{
             console.log(res)
             if(res.data.success){
                lastnum = res.data.success.last_page
                let reg = res.data.success.data
                reg.map((item)=>{
                    sux.innerHTML += `   <tr>
                        <td class="text-center text-lg font-medium border py-2">${item.firstname}</td>
                        <td class="text-center text-lg font-medium border py-2">${item.lastname}</td>
                        <td class="text-center text-lg font-medium border py-2">${item.date_arrival}</td>
                        <td class="text-center text-lg font-medium border py-2">${item.pickup}</td>
                        <td class="text-center text-lg font-medium border py-2">${item.port_part}</td>
                        <td class="text-center text-lg font-medium border py-2">${item.time_arrival}</td>
                    </tr>`;
                })
             }
            })


          }else if(currentnum == lastnum){
            num.innerText = 1;

            let headers = new Headers();
            let url = `${original}/admintravel/?page=`+1;
            axios.get(url,  headers).then(res=>{
             console.log(res)
             if(res.data.success){
                lastnum = res.data.success.last_page
                let reg = res.data.success.data
                reg.map((item)=>{
                    sux.innerHTML += `   <tr>
                        <td class="text-center text-lg font-medium border py-2">${item.firstname}</td>
                        <td class="text-center text-lg font-medium border py-2">${item.lastname}</td>
                        <td class="text-center text-lg font-medium border py-2">${item.date_arrival}</td>
                        <td class="text-center text-lg font-medium border py-2">${item.pickup}</td>
                        <td class="text-center text-lg font-medium border py-2">${item.port_part}</td>
                        <td class="text-center text-lg font-medium border py-2">${item.time_arrival}</td>
                    </tr>`;
                })
             }
            })

          }
    })
//registrants


</script>
@endsection
