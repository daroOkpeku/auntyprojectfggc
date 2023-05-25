import data from './data';



const urlSearchParams = new URLSearchParams(window.location.search);
const params = Object.fromEntries(urlSearchParams.entries());

console.log(params.chapter)

let ansdata = data.find((item)=>item.chapter == params.chapter)
 console.log(ansdata)
let body = document.querySelector(".body");
let imgx = document.querySelector(".imgx");
let housex = document.querySelector(".housex");
let phone = document.querySelector(".phone")
let web = document.querySelector(".web")
let social = document.querySelector(".social")
if(Object.keys(ansdata).length > 0){
 body.innerText = ansdata?ansdata.about:""
 imgx.src = ansdata?ansdata.picture:""
 housex.innerText = ansdata?ansdata.chapter:""
 phone.innerText = ansdata?ansdata.phone:'none'
 web.innerText = ansdata?ansdata.website:'none'
 social.innerText = ansdata?ansdata.social:'none'
}else{

}
