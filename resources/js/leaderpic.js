const leaders = [
{
name:'Reama George',
picture:'https://res.cloudinary.com/dao2m5pub/image/upload/v1684938785/photo%20of%20blog%20writers/Reama_George_2_redacp.jpg',
position:'National Public Relations Officer'
},
{
    name:'Nkiru Nwachukwu',
    picture:'https://res.cloudinary.com/dao2m5pub/image/upload/v1684938784/photo%20of%20blog%20writers/Nkiruka_Nwachukwu_President_weqfhg.jpg',
    position:'Ex-Officio',
},
{
    name:'Carol Asikpo-Edet',
    picture:'https://res.cloudinary.com/dao2m5pub/image/upload/v1684948587/photo%20of%20excos/Carol_Asikpo-Edet_bwwaeb.jpg',
    position:'Vice President South-South'
},
{
    name:'Francisca Opara',
    picture:'https://res.cloudinary.com/dao2m5pub/image/upload/v1684948593/photo%20of%20excos/Francisca_Mbanaja-Opara_pjqnhy.jpg',
    position:'Vice President USA'
},
{
    name:'Adaeze Ononye-Nwosu',
    picture:'https://res.cloudinary.com/dao2m5pub/image/upload/v1684948582/photo%20of%20excos/Adaeze_Angelique_Nwosu_tzcigl.jpg',
    position:'Vice President Canada'
},
{
    name:'Ada Kadiri',
    picture:'https://res.cloudinary.com/dao2m5pub/image/upload/v1684948587/photo%20of%20excos/Ada_kadiri_yivi3g.jpg',
    position:'National Secretary',
},
{
    name:'Akwaugo Nsofor',
    picture:'https://res.cloudinary.com/dao2m5pub/image/upload/v1684948585/photo%20of%20excos/Akwaugo_Nsofor_iqep1g.jpg',
    position:'National Welfare Officer'
},
{
    name:' Nnenna Amechi',
    picture:'https://res.cloudinary.com/dao2m5pub/image/upload/v1684948611/photo%20of%20excos/Nnenna_Eje_Nwachukwu_w7zj9t.jpg',
    position:'National Financial Secretary'
}

];


let wholex = document.getElementById("slider");


{/* <div class="slide rounded-md shadow-md flex flex-col items-center py-1 px-1 ">
<div class="w-full h-50">
    <img src="https://res.cloudinary.com/okpeku/image/upload/v1682019361/roman-skrypnyk-gjA24divsqw-unsplash_zsi259.jpg" class="w-full h-full object-cover" />
</div>
<section class="w-full flex flex-col px-2">
    <div class="w-1/2 float-left text-base text-left capitalize">Stephen Okpeku</div>
    <section class="w-full text-left font-semibold">
        In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to
        demonstrate the visual form of a document or a typeface without relying on meaningful content.
        Lorem ipsum may be used as a placeholder before final copy is available
    </section>
</section>
</div> */}

let soon = leaders.map((item)=>{
   return `
    <div class="slide rounded-md shadow-md flex flex-col items-center py-1 px-1 ">
<div class="w-full h-50" style="height:400px;">
    <img src="${item.picture}" class="w-full h-full object-cover" />
</div>
<section class="w-full flex flex-col px-2">
    <div class="w-1/2 float-left text-base text-left capitalize">${item.name}</div>
    <section class="w-full text-left font-semibold">
     ${item.position}
    </section>
</section>
</div>`;
})


