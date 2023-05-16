<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script defer src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <div  class="w-full flex flex-col items-center gap-2">
     <section style="font-size: 30px;" class="w-10/12 text-center  capitalize font-bold mt-10">You Account is Been verified Please Wait...</section>
     @if ($success == true)
     <button class="text-center px-2 py-4  rounded-md bg-green-400 text-white xox">Login</button>
    @else 
    <button class="text-center px-2 py-4 rounded-md bg-green-400 text-white xox">Go Back</button>
     @endif
    </div>
    
</body>
<script type="text/javascript">
 let original = window.location.origin

let xox = document.querySelector('.xox');
let ror = document.querySelector('.ror');
xox.addEventListener('click', function(e){
    e.preventDefault();
    if(e.target.innerText == 'Login'){
        window.location.href = `${original}/login`;
    }else{
        window.location.href = `${original}/signup`;
    }
})


</script>
</html>