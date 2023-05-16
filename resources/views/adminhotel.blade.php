@extends('layout.adminhead')
@section('content')
<div class=" table w-full   mt-20">
   <article class="w-11/12 m-auto flex flex-col item-center mt-2">
    <div class="text-center text-4xl font-bold text underline capitalize">Hotel Accommdation</div>
   <table class="w-full rounded-md border mt-2 checkin">
    <thead>
   <tr>

    <th class="capitalize text-2xl text-center border ">Firstname</th>
    <th class="capitalize text-2xl text-center border">Lastname</th>
    <th class="capitalize text-2xl text-center border">hostel</th>
    <th class="capitalize text-2xl text-center border">picture</th>
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
{{--  "bg-cover top-0 left-0 right-0 bottom-0 bg-black bg-opacity-10 bg-op fixed z-10 flex flex-row items-center  justify-center  overflow-y-scroll py-4 pop"  --}}
<article class="showxy pop  " style="display:none;" >

<section class="bg-white w-11/12 sm:w-11/12  md:w-10/12 lg:w-10/12 flex flex-col item-center  justify-center rounded-md"  >
    <div class="w-full m-auto ">
        <aside class=' float-right flex flex-row items-center justify-center py-4 '>
             <button class='w-6 h-6  rounded-full bg-white text-blue-500 text-center text-lg font-extrabold m-auto mr-4 closex' >x</button>
         </aside>
         </div>
         <div class="w-full m-auto">

            <img src="" class="w-full h-[36rem] imgx "/>

         </div>

</section>


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
    let pop = document.querySelector('.pop');
    let closex = document.querySelector('.closex');
    let imgx = document.querySelector('.imgx');
    let checkin = document.querySelector('.checkin');

    let lastnum ;

    let headers = new Headers();
let url = `${original}/hotel/?page=`+1;
axios.get(url,  headers).then(res=>{
 console.log(res)
 if(res.data.success){
    lastnum = res.data.success.last_page
    let reg = res.data.success.data
    reg.map((item)=>{
        sux.innerHTML += `   <tr>
            <td class="text-center text-lg font-medium border py-2">${item.firstname}</td>
            <td class="text-center text-lg font-medium border py-2">${item.lastname}</td>
            <td class="text-center text-lg font-medium border py-2">${item.hostel}</td>
            <td class="text-center text-lg font-medium border py-2 flex items-center justify-center">
              <button data-url="${original}/storage/images/${item.picture}" class='bg-blue-500 text-white py-2 text-center rounded px-2 picx'>view</button>
            </td>
        </tr>`;
    })
 }
})

checkin.addEventListener('click', function(e){
    e.preventDefault();
    if(e.target.dataset.url){
       console.log(e.target.dataset.url)
        imgx.src = `${e.target.dataset.url}`;
        pop.style.display = 'flex';
    }
})

closex.addEventListener('click', function(e){
    e.preventDefault();
    imgx.src = "";
    pop.style.display = 'none'
})


    prev.addEventListener('click', function(e){
    e.preventDefault();
     let currentnum = +e.target.nextElementSibling.innerText;
       if(currentnum > 1){
        let ans =  lastnum--;
        //console.log(ans)
        num.innerText = ans;

        let headers = new Headers();
        let url = `${original}/hotel/?page=`+ans;
        axios.get(url,  headers).then(res=>{
         console.log(res)
         if(res.data.success){
            lastnum = res.data.success.last_page
            let reg = res.data.success.data
            reg.map((item)=>{
                sux.innerHTML += `   <tr>
                    <td class="text-center text-lg font-medium border py-2">${item.firstname}</td>
                    <td class="text-center text-lg font-medium border py-2">${item.lastname}</td>
                    <td class="text-center text-lg font-medium border py-2">${item.hostel}</td>
                    <td class="text-center text-lg font-medium border py-2 flex items-center justify-center">
                      <button data-url=${item.picture} class='bg-blue-500 text-white py-2 text-center rounded px-2 picx'>view</button>
                    </td>
                </tr>`;
            })
         }
        })

      }else if(currentnum < 1){
        num.innerText = lastnum;

        let headers = new Headers();
        let url = `${original}/hotel/?page=`+lastnum;
        axios.get(url,  headers).then(res=>{
         console.log(res)
         if(res.data.success){
            lastnum = res.data.success.last_page
            let reg = res.data.success.data
           let song = reg.map((item)=>{
                return`<tr>
                    <td class="text-center text-lg font-medium border py-2">${item.firstname}</td>
                    <td class="text-center text-lg font-medium border py-2">${item.lastname}</td>
                    <td class="text-center text-lg font-medium border py-2">${item.hostel}</td>
                    <td class="text-center text-lg font-medium border py-2 flex items-center justify-center">
                      <button data-url=${item.picture}' class='bg-blue-500 text-white py-2 text-center rounded px-2 picx'>view</button>
                    </td>
                </tr>`;

            }).join("")
            sux.innerHTML = song

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
            let url = `${original}/hotel/?page=`+ans;
            axios.get(url,  headers).then(res=>{
             console.log(res)
             if(res.data.success){
                lastnum = res.data.success.last_page
                let reg = res.data.success.data
                reg.map((item)=>{
                    sux.innerHTML += `   <tr>
                        <td class="text-center text-lg font-medium border py-2">${item.firstname}</td>
                        <td class="text-center text-lg font-medium border py-2">${item.lastname}</td>
                        <td class="text-center text-lg font-medium border py-2">${item.hostel}</td>
                        <td class="text-center text-lg font-medium border py-2 flex items-center justify-center">
                          <button data-url=${item.picture} class='bg-blue-500 text-white py-2 text-center rounded px-2 picx'>view</button>
                        </td>
                    </tr>`;
                })
             }
            })


          }else if(currentnum == lastnum){
            num.innerText = 1;

            let headers = new Headers();
            let url = `${original}/hotel/?page=`+1;
            axios.get(url,  headers).then(res=>{
             console.log(res)
             if(res.data.success){
                lastnum = res.data.success.last_page
                let reg = res.data.success.data
                reg.map((item)=>{
                    sux.innerHTML += `   <tr>
                        <td class="text-center text-lg font-medium border py-2">${item.firstname}</td>
                        <td class="text-center text-lg font-medium border py-2">${item.lastname}</td>
                        <td class="text-center text-lg font-medium border py-2">${item.hostel}</td>
                        <td class="text-center text-lg font-medium border py-2 flex items-center justify-center">
                          <button data-url=${item.picture} class='bg-blue-500 text-white py-2 text-center rounded px-2 picx'>view</button>
                        </td>
                    </tr>`;
                })
             }
            })

          }
    })
//registrants


</script>
@endsection
