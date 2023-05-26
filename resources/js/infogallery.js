import gallery from "./gallery";

// let randomdata = [];

// while(gallery.length != 0){
//     let randomIndex = Math.floor(Math.random() * gallery.length);
//     randomdata.push(gallery[randomIndex]);
//     console.log(randomdata);
// }
let alldata = document.querySelector(".alldata");
let pop = document.querySelector('.pop');
let imgx = document.querySelector('.imgx');
let closex = document.querySelector('.closex');
let prev = document.querySelector(".prev");
let next = document.querySelector('.next')
let current = document.querySelector(".current");

let unqiue = [...new Set(gallery.map(item=>item.type))]
let unqiueten = gallery.sort(() => Math.random() - Math.random())
let numberOfRow = 10;
let currentPage = 1;

 let dogx = document.querySelector(".dogx");

 let ansunqiuexx = unqiue.map((item)=>{
    return ` <li class="active mainfilter" data-group="all"><a>${item}</a></li>`;
 })
 dogx.innerHTML = ansunqiuexx.join('')
  let mainfilter = document.querySelectorAll(".mainfilter");

  mainfilter.forEach((one)=>{
    one.addEventListener("click", function(e){
        e.preventDefault();
        console.log(e.target.innerText)
     let unqiuefilter =   unqiueten.filter((item)=>item.type.toLowerCase() == e.target.innerText.toLowerCase())
      let page = Math.ceil(unqiuefilter.length / numberOfRow);
      const indexofLastPost =  currentPage * numberOfRow;
      const indexofFirstPost = indexofLastPost - numberOfRow;
      const ansdata = unqiuefilter?.slice(indexofFirstPost, indexofLastPost);
      let ansinto = ansdata.map((item)=>{
        return `  <section class="w-96 h-75 rounded-sm shadow-md relative bg-black bg-opacity-20 picx">
        <img src="${item.picture}" class="w-full h-full object-cover picx"/>
        <div class="absolute top-0 left-0 bottom-0 right-0 grid place-content-center capitalize text-2xl font-semibold text-white picx"  data-id="${item.id}" >
          ${item.type}
        </div>
      </section>`;
    })
    alldata.innerHTML = ansinto.join('')
    console.log(unqiuefilter, page)

    next.addEventListener('click', function(e){
        e.preventDefault();
        if(currentPage < page ){
            currentPage =  currentPage += 1;
            current.innerText = currentPage;
    const indexofLastPost =  currentPage * numberOfRow;
    const indexofFirstPost = indexofLastPost - numberOfRow;
    const ansdata = unqiuefilter?.slice(indexofFirstPost, indexofLastPost);
    let ansinto = ansdata.map((item)=>{
        return `  <section class="w-96 h-75 rounded-sm shadow-md relative bg-black bg-opacity-20 picx">
        <img src="${item.picture}" class="w-full h-full object-cover picx"/>
        <div class="absolute top-0 left-0 bottom-0 right-0 grid place-content-center capitalize text-2xl font-semibold text-white picx"  data-id="${item.id}" >
          ${item.type}
        </div>
      </section>`;
    })

    alldata.innerHTML = ansinto.join('')
    let picx = document.querySelectorAll('.picx');
    picx.forEach((pic)=>{
        pic.addEventListener("click", function(e){
            e.preventDefault();
            let num = +e.target.dataset.id;
            let ansgallery =  gallery.find((item)=>item.id == num)
            imgx.src = ansgallery.picture
            pop.style.display = 'flex';

        })
    })

    closex.addEventListener('click', function(e){
        e.preventDefault();
        imgx.src = "";
        pop.style.display = 'none'
    })


        }else if(currentPage == page){
            currentPage = 1;
            current.innerText = currentPage;
    const indexofLastPost =  currentPage * numberOfRow;
    const indexofFirstPost = indexofLastPost - numberOfRow;
    const ansdata = unqiuefilter?.slice(indexofFirstPost, indexofLastPost);
    let ansinto = ansdata.map((item)=>{
        return `  <section class="w-96 h-75 rounded-sm shadow-md relative bg-black bg-opacity-20 picx">
        <img src="${item.picture}" class="w-full h-full object-cover picx"/>
        <div class="absolute top-0 left-0 bottom-0 right-0 grid place-content-center capitalize text-2xl font-semibold text-white picx"  data-id="${item.id}" >
          ${item.type}
        </div>
      </section>`;
    })
    alldata.innerHTML = ansinto.join('')
    let picx = document.querySelectorAll('.picx');
    picx.forEach((pic)=>{
        pic.addEventListener("click", function(e){
            e.preventDefault();
            let num = +e.target.dataset.id;
            let ansgallery =  unqiuefilter.find((item)=>item.id == num)
            imgx.src = ansgallery.picture
            pop.style.display = 'flex';

        })
    })

    closex.addEventListener('click', function(e){
        e.preventDefault();
        imgx.src = "";
        pop.style.display = 'none'
    })


        }

    })



    prev.addEventListener("click", function(e){
        e.preventDefault();
         if(currentPage > 1){
           let total = currentPage --;
           current.innerText = total;
           const indexofLastPost =  total * numberOfRow;
    const indexofFirstPost = indexofLastPost - numberOfRow;
    const ansdata = unqiuefilter?.slice(indexofFirstPost, indexofLastPost);
    let ansinto = ansdata.map((item)=>{
        return `  <section class="w-96 h-75 rounded-sm shadow-md relative bg-black bg-opacity-20 picx">
        <img src="${item.picture}" class="w-full h-full object-cover picx"/>
        <div class="absolute top-0 left-0 bottom-0 right-0 grid place-content-center capitalize text-2xl font-semibold text-white picx"  data-id="${item.id}" >
          ${item.type}
        </div>
      </section>`;
    })

    alldata.innerHTML = ansinto.join('')
    let picx = document.querySelectorAll('.picx');
    picx.forEach((pic)=>{
        pic.addEventListener("click", function(e){
            e.preventDefault();
            let num = +e.target.dataset.id;
            let ansgallery =  unqiuefilter.find((item)=>item.id == num)
            imgx.src = ansgallery.picture
            pop.style.display = 'flex';

        })
    })

    closex.addEventListener('click', function(e){
        e.preventDefault();
        imgx.src = "";
        pop.style.display = 'none'
    })

         }else if(currentPage <= 1){
            current.innerText = page
            const indexofLastPost =  page * numberOfRow;
            const indexofFirstPost = indexofLastPost - numberOfRow;
            const ansdata = unqiuefilter?.slice(indexofFirstPost, indexofLastPost);
            let ansinto = ansdata.map((item)=>{
                return `  <section class="w-96 h-75 rounded-sm shadow-md relative bg-black bg-opacity-20 picx">
                <img src="${item.picture}" class="w-full h-full object-cover picx"/>
                <div class="absolute top-0 left-0 bottom-0 right-0 grid place-content-center capitalize text-2xl font-semibold text-white picx"  data-id="${item.id}" >
                  ${item.type}
                </div>
              </section>`;
            })

            alldata.innerHTML = ansinto.join('')
            let picx = document.querySelectorAll('.picx');
    picx.forEach((pic)=>{
        pic.addEventListener("click", function(e){
            e.preventDefault();
            let num = +e.target.dataset.id;
            let ansgallery =  unqiuefilter.find((item)=>item.id == num)
            imgx.src = ansgallery.picture
            pop.style.display = 'flex';

        })
    })

    closex.addEventListener('click', function(e){
        e.preventDefault();
        imgx.src = "";
        pop.style.display = 'none'
    })

         }
        })










    })
  })



let page = Math.ceil(gallery.length / numberOfRow);
const indexofLastPost =  currentPage * numberOfRow;
const indexofFirstPost = indexofLastPost - numberOfRow;
const ansdata = gallery?.slice(indexofFirstPost, indexofLastPost);



let ansinto = ansdata.map((item)=>{
    return `  <section class="w-96 h-75 rounded-sm shadow-md relative bg-black bg-opacity-20 picx">
    <img src="${item.picture}" class="w-full h-full object-cover picx"/>
    <div class="absolute top-0 left-0 bottom-0 right-0 grid place-content-center capitalize text-2xl font-semibold text-white picx"  data-id="${item.id}" >
      ${item.type}
    </div>
  </section>`;
})

alldata.innerHTML = ansinto.join('')
let picx = document.querySelectorAll('.picx');
picx.forEach((pic)=>{
    pic.addEventListener("click", function(e){
        e.preventDefault();
        let num = +e.target.dataset.id;
        let ansgallery =  gallery.find((item)=>item.id == num)
        imgx.src = ansgallery.picture
        pop.style.display = 'flex';

    })
})

closex.addEventListener('click', function(e){
    e.preventDefault();
    imgx.src = "";
    pop.style.display = 'none'
})


next.addEventListener('click', function(e){
    e.preventDefault();
    if(currentPage < page ){
        currentPage =  currentPage += 1;
        current.innerText = currentPage;
const indexofLastPost =  currentPage * numberOfRow;
const indexofFirstPost = indexofLastPost - numberOfRow;
const ansdata = gallery?.slice(indexofFirstPost, indexofLastPost);
let ansinto = ansdata.map((item)=>{
    return `  <section class="w-96 h-75 rounded-sm shadow-md relative bg-black bg-opacity-20 picx">
    <img src="${item.picture}" class="w-full h-full object-cover picx"/>
    <div class="absolute top-0 left-0 bottom-0 right-0 grid place-content-center capitalize text-2xl font-semibold text-white picx"  data-id="${item.id}" >
      ${item.type}
    </div>
  </section>`;
})

alldata.innerHTML = ansinto.join('')
let picx = document.querySelectorAll('.picx');
picx.forEach((pic)=>{
    pic.addEventListener("click", function(e){
        e.preventDefault();
        let num = +e.target.dataset.id;
        let ansgallery =  gallery.find((item)=>item.id == num)
        imgx.src = ansgallery.picture
        pop.style.display = 'flex';

    })
})

closex.addEventListener('click', function(e){
    e.preventDefault();
    imgx.src = "";
    pop.style.display = 'none'
})


    }else if(currentPage == page){
        currentPage = 1;
        current.innerText = currentPage;
const indexofLastPost =  currentPage * numberOfRow;
const indexofFirstPost = indexofLastPost - numberOfRow;
const ansdata = gallery?.slice(indexofFirstPost, indexofLastPost);
let ansinto = ansdata.map((item)=>{
    return `  <section class="w-96 h-75 rounded-sm shadow-md relative bg-black bg-opacity-20 picx">
    <img src="${item.picture}" class="w-full h-full object-cover picx"/>
    <div class="absolute top-0 left-0 bottom-0 right-0 grid place-content-center capitalize text-2xl font-semibold text-white picx"  data-id="${item.id}" >
      ${item.type}
    </div>
  </section>`;
})
alldata.innerHTML = ansinto.join('')
let picx = document.querySelectorAll('.picx');
picx.forEach((pic)=>{
    pic.addEventListener("click", function(e){
        e.preventDefault();
        let num = +e.target.dataset.id;
        let ansgallery =  gallery.find((item)=>item.id == num)
        imgx.src = ansgallery.picture
        pop.style.display = 'flex';

    })
})

closex.addEventListener('click', function(e){
    e.preventDefault();
    imgx.src = "";
    pop.style.display = 'none'
})


    }

})


prev.addEventListener("click", function(e){
    e.preventDefault();
     if(currentPage > 1){
       let total = currentPage --;
       current.innerText = total;
       const indexofLastPost =  total * numberOfRow;
const indexofFirstPost = indexofLastPost - numberOfRow;
const ansdata = gallery?.slice(indexofFirstPost, indexofLastPost);
let ansinto = ansdata.map((item)=>{
    return `  <section class="w-96 h-75 rounded-sm shadow-md relative bg-black bg-opacity-20 picx">
    <img src="${item.picture}" class="w-full h-full object-cover picx"/>
    <div class="absolute top-0 left-0 bottom-0 right-0 grid place-content-center capitalize text-2xl font-semibold text-white picx"  data-id="${item.id}" >
      ${item.type}
    </div>
  </section>`;
})

alldata.innerHTML = ansinto.join('')
let picx = document.querySelectorAll('.picx');
picx.forEach((pic)=>{
    pic.addEventListener("click", function(e){
        e.preventDefault();
        let num = +e.target.dataset.id;
        let ansgallery =  gallery.find((item)=>item.id == num)
        imgx.src = ansgallery.picture
        pop.style.display = 'flex';

    })
})

closex.addEventListener('click', function(e){
    e.preventDefault();
    imgx.src = "";
    pop.style.display = 'none'
})

     }else if(currentPage <= 1){
        current.innerText = page
        const indexofLastPost =  page * numberOfRow;
        const indexofFirstPost = indexofLastPost - numberOfRow;
        const ansdata = gallery?.slice(indexofFirstPost, indexofLastPost);
        let ansinto = ansdata.map((item)=>{
            return `  <section class="w-96 h-75 rounded-sm shadow-md relative bg-black bg-opacity-20 picx">
            <img src="${item.picture}" class="w-full h-full object-cover picx"/>
            <div class="absolute top-0 left-0 bottom-0 right-0 grid place-content-center capitalize text-2xl font-semibold text-white picx"  data-id="${item.id}" >
              ${item.type}
            </div>
          </section>`;
        })

        alldata.innerHTML = ansinto.join('')
        let picx = document.querySelectorAll('.picx');
picx.forEach((pic)=>{
    pic.addEventListener("click", function(e){
        e.preventDefault();
        let num = +e.target.dataset.id;
        let ansgallery =  gallery.find((item)=>item.id == num)
        imgx.src = ansgallery.picture
        pop.style.display = 'flex';

    })
})

closex.addEventListener('click', function(e){
    e.preventDefault();
    imgx.src = "";
    pop.style.display = 'none'
})

     }
    })
