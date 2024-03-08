<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>

<body class="font-[Poppins]  h-screen">
    <header class="bg-[#87A77B]">
        <nav class="flex auto items-center w-[92%]  mx-auto">
            <div>
                <img class="w-1185.65 cursor-pointer"   srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/860f1e6178c02270ddb0f3bd325cd8ade9b1511dc3ff344d73b4660dacd3064e?apiKey=61c0f3e80dda4c65965a6acfb01a216a&width=100 100w,
                 https://cdn.builder.io/api/v1/image/assets/TEMP/860f1e6178c02270ddb0f3bd325cd8ade9b1511dc3ff344d73b4660dacd3064e?apiKey=61c0f3e80dda4c65965a6acfb01a216a&width=200 200w, 
                 https://cdn.builder.io/api/v1/image/assets/TEMP/860f1e6178c02270ddb0f3bd325cd8ade9b1511dc3ff344d73b4660dacd3064e?apiKey=61c0f3e80dda4c65965a6acfb01a216a&width=400 400w,
                  https://cdn.builder.io/api/v1/image/assets/TEMP/860f1e6178c02270ddb0f3bd325cd8ade9b1511dc3ff344d73b4660dacd3064e?apiKey=61c0f3e80dda4c65965a6acfb01a216a&width=800 800w,
                   https://cdn.builder.io/api/v1/image/assets/TEMP/860f1e6178c02270ddb0f3bd325cd8ade9b1511dc3ff344d73b4660dacd3064e?apiKey=61c0f3e80dda4c65965a6acfb01a216a&width=1200 1200w,
                    https://cdn.builder.io/api/v1/image/assets/TEMP/860f1e6178c02270ddb0f3bd325cd8ade9b1511dc3ff344d73b4660dacd3064e?apiKey=61c0f3e80dda4c65965a6acfb01a216a&width=1600 1600w,
                     https://cdn.builder.io/api/v1/image/assets/TEMP/860f1e6178c02270ddb0f3bd325cd8ade9b1511dc3ff344d73b4660dacd3064e?apiKey=61c0f3e80dda4c65965a6acfb01a216a&width=2000 2000w,
                      https://cdn.builder.io/api/v1/image/assets/TEMP/860f1e6178c02270ddb0f3bd325cd8ade9b1511dc3ff344d73b4660dacd3064e?apiKey=61c0f3e80dda4c65965a6acfb01a216a&"alt="...">
            </div>
            <div
                class="nav-links duration-500 md:static absolute  md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="text-[#EBEBEB]" href="#">Home</a>
                    </li>
                    <li>
                        <a class="text-[#EBEBEB]" href="#">About us</a>
                    </li>
                    <li>
                        <a class="text-[#EBEBEB]" href="#">Product</a>
                    </li>
                    <li>
                        <a class="text-[#EBEBEB]" href="#">Service</a>
                    </li>
                    <li>
                        <a class="text-[#EBEBEB]" href="#">Contact us</a>
                    </li>
                    <li>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3adb3daa1dbef5ac55d9a2d5e9650c9dc580f4398e7114a195c439300cfc5086?apiKey=61c0f3e80dda4c65965a6acfb01a216a&"
                            class="shrink-0 my-auto aspect-square w-[25px]"  href="#"></a>
                    </li>
                </ul>

                     <div class="flex flex-row-reverse" >    
                    <div class="pt-2 relative  text-gray-600">
                     <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                      type="search" name="search" placeholder="Search">
                     <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                     <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                       xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                         viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                        width="512px" height="512px">
                     <path
                         d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                         </svg>
                     </button>
                    </div>
                    </div> 
                   
            </div>

            

            <div class="absolute right-1 ">
                <button class="bg-[#87A77B] text-white px-2 py-2  hover:bg-[#87A77B]">Login</button>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
        
                <button class="bg-black text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Sign Up</button>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
        
    </header>



    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>
</body>

</html>
</body>
</html>