import data from './data';
let prev = document.querySelector(".prev");
let next = document.querySelector('.next')
let current = document.querySelector(".current");
let cardx = document.querySelector(".cardx")
// console.log(data);
let original = window.location.origin
let numberOfRow = 10;
let currentPage = 1;
let recentnum ;
current.innerText = 1;
let page = Math.ceil(data.length / numberOfRow);
const indexofLastPost =  currentPage * numberOfRow;
const indexofFirstPost = indexofLastPost - numberOfRow;
const ansdata = data?.slice(indexofFirstPost, indexofLastPost);


let anscardx = ansdata.map((item)=>{
    return `
    <div data-chapter="${item.chapter}" class=" group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">

    <div class="relative" data-chapter="${item.chapter}">
    <img data-chapter="${item.chapter}" src="${item.picture?item.picture:""}" alt="">


</div>
<div data-chapter="${item.chapter}" class="p-6">
    <div data-chapter="${item.chapter}" class="pb-6">
        <a href="#" data-chapter="${item.chapter}" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">${item.name}</a>
    </div>

    <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
        <li data-chapter="${item.chapter}" class="flex items-center ltr:mr-4 rtl:ml-4">
            <span data-chapter="${item.chapter}" >${item.chapter}</span>
        </li>
    </ul>

    <ul data-chapter="${item.chapter}" class=" flex justify-between items-center list-none">
        <li data-chapter="${item.chapter}">
            <p data-chapter="${item.chapter}" class="text-lg font-medium">${item.house}</p>
        </li>
    </ul>
</div>
</div>
`;
})
cardx.innerHTML = anscardx.join('');
let group = document.querySelectorAll(".group");
group.forEach((one)=>{
    one.addEventListener("click", (e)=>{
      let chapter =  e.target.dataset.chapter
     window.location.href = `${original}/chapterdetails/?chapter=${chapter}`
    })
})

// console.log(ansdata, page);
next.addEventListener('click', function(e){
e.preventDefault();
if(currentPage < page ){
    recentnum =  currentPage += 1;

    current.innerText = recentnum;
    const LastPost =  recentnum * numberOfRow;
    const FirstPost = LastPost - numberOfRow;
    const ansdata = data?.slice(FirstPost, LastPost);

    let anscardx = ansdata.map((item)=>{
        return `
        <div data-chapter="${item.chapter}" class=" group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">

        <div class="relative" data-chapter="${item.chapter}">
        <img data-chapter="${item.chapter}" src="${item.picture?item.picture:""}" alt="">


    </div>
    <div data-chapter="${item.chapter}" class="p-6">
        <div data-chapter="${item.chapter}" class="pb-6">
            <a href="#" data-chapter="${item.chapter}" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">${item.name}</a>
        </div>

        <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
            <li data-chapter="${item.chapter}" class="flex items-center ltr:mr-4 rtl:ml-4">
                <span data-chapter="${item.chapter}" >${item.chapter}</span>
            </li>
        </ul>

        <ul data-chapter="${item.chapter}" class=" flex justify-between items-center list-none">
            <li data-chapter="${item.chapter}">
                <p data-chapter="${item.chapter}" class="text-lg font-medium">${item.house}</p>
            </li>
        </ul>
    </div>
    </div>
    `;
    })
    cardx.innerHTML = anscardx.join('');
cardx.innerHTML = anscardx.join('');
let group = document.querySelectorAll(".group");
group.forEach((one)=>{
    one.addEventListener("click", (e)=>{
        let chapter =  e.target.dataset.chapter
        window.location.href = `${original}/chapterdetails/?chapter=${chapter}`
    })
})
}else if(currentPage == page){
    recentnum = 1
    current.innerText = 1;
    const LastPost =  recentnum * numberOfRow;
    const FirstPost = LastPost - numberOfRow;
    const ansdata = data?.slice(FirstPost, LastPost);

    let anscardx = ansdata.map((item)=>{
        return `
        <div data-chapter="${item.chapter}" class=" group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">

        <div class="relative" data-chapter="${item.chapter}">
        <img data-chapter="${item.chapter}" src="${item.picture?item.picture:""}" alt="">


    </div>
    <div data-chapter="${item.chapter}" class="p-6">
        <div data-chapter="${item.chapter}" class="pb-6">
            <a href="#" data-chapter="${item.chapter}" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">${item.name}</a>
        </div>

        <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
            <li data-chapter="${item.chapter}" class="flex items-center ltr:mr-4 rtl:ml-4">
                <span data-chapter="${item.chapter}" >${item.chapter}</span>
            </li>
        </ul>

        <ul data-chapter="${item.chapter}" class=" flex justify-between items-center list-none">
            <li data-chapter="${item.chapter}">
                <p data-chapter="${item.chapter}" class="text-lg font-medium">${item.house}</p>
            </li>
        </ul>
    </div>
    </div>
    `;
    })
    cardx.innerHTML = anscardx.join('');

let group = document.querySelectorAll(".group");
group.forEach((one)=>{
    one.addEventListener("click", (e)=>{
        let chapter =  e.target.dataset.chapter
        window.location.href = `${original}/chapterdetails/?chapter=${chapter}`
    })
})

}

})


prev.addEventListener("click", function(e){
    e.preventDefault();
     if(currentPage > 1){
       let total = currentPage --;
       current.innerText = total
       const LastPost =  total * numberOfRow;
       const FirstPost = LastPost - numberOfRow;
       const ansdata = data?.slice(FirstPost, LastPost);

       let anscardx = ansdata.map((item)=>{
        return `
        <div data-chapter="${item.chapter}" class=" group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">

        <div class="relative" data-chapter="${item.chapter}">
        <img data-chapter="${item.chapter}" src="${item.picture?item.picture:""}" alt="">


    </div>
    <div data-chapter="${item.chapter}" class="p-6">
        <div data-chapter="${item.chapter}" class="pb-6">
            <a href="#" data-chapter="${item.chapter}" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">${item.name}</a>
        </div>

        <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
            <li data-chapter="${item.chapter}" class="flex items-center ltr:mr-4 rtl:ml-4">
                <span data-chapter="${item.chapter}" >${item.chapter}</span>
            </li>
        </ul>

        <ul data-chapter="${item.chapter}" class=" flex justify-between items-center list-none">
            <li data-chapter="${item.chapter}">
                <p data-chapter="${item.chapter}" class="text-lg font-medium">${item.house}</p>
            </li>
        </ul>
    </div>
    </div>
    `;
    })
    cardx.innerHTML = anscardx.join('');
let group = document.querySelectorAll(".group");
group.forEach((one)=>{
    one.addEventListener("click", (e)=>{
        let chapter =  e.target.dataset.chapter
        window.location.href = `${original}/chapterdetails/?chapter=${chapter}`
    })
})
     }else if(currentPage <= 1){
        current.innerText = page
        const LastPost =  page * numberOfRow;
        const FirstPost = LastPost - numberOfRow;
        const ansdata = data?.slice(FirstPost, LastPost);

        let anscardx = ansdata.map((item)=>{
            return `
            <div data-chapter="${item.chapter}" class=" group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">

            <div class="relative" data-chapter="${item.chapter}">
            <img data-chapter="${item.chapter}" src="${item.picture?item.picture:""}" alt="">


        </div>
        <div data-chapter="${item.chapter}" class="p-6">
            <div data-chapter="${item.chapter}" class="pb-6">
                <a href="#" data-chapter="${item.chapter}" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">${item.name}</a>
            </div>

            <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                <li data-chapter="${item.chapter}" class="flex items-center ltr:mr-4 rtl:ml-4">
                    <span data-chapter="${item.chapter}" >${item.chapter}</span>
                </li>
            </ul>

            <ul data-chapter="${item.chapter}" class=" flex justify-between items-center list-none">
                <li data-chapter="${item.chapter}">
                    <p data-chapter="${item.chapter}" class="text-lg font-medium">${item.house}</p>
                </li>
            </ul>
        </div>
        </div>
        `;
        })
        cardx.innerHTML = anscardx.join('');
        let group = document.querySelectorAll(".group");
        group.forEach((one)=>{
            one.addEventListener("click", (e)=>{
                let chapter =  e.target.dataset.chapter
                window.location.href = `${original}/chapterdetails/?chapter=${chapter}`
            })
        })
     }
})
