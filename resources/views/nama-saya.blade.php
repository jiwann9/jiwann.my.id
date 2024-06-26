<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jiwann Portofolio</title>
    <style>
        .image-container {
            display: flex;
            justify-content: space-around;
            margin: 20px auto;
        }
        .image-container img {
            width: 30px%;
            height: auto;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 367px);
            grid-template-rows: 456px;
            gap: 50px;
        }
        .grid-item {
            padding: 20px;
            text-align: center;
        }
        .grid-services {
            display: grid;
            grid-template-columns: repeat(1, 658px);
            grid-template-rows: 329px;
            gap: 50px;
        }
        .grid-serpis {
            padding: 20px;
            text-align: center;
        }

    </style>
    {{-- @vite('resources/css/app.css') --}}
      <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#181616]">

    <nav class= "justify-between flex flex-wrap w-full py-5">

            <div class= "space-x-2 ml-9 mx-3 py-3">
                <h1 class="text-white text-5xl"><span class="text-orange-600">J</span>iwann.</h1>
            </div>

            <div class= "space-x-20 mr-20 mt-5 mx-3 py-3 text-white">
                <a href="#home">Home</a>
                <a href="#portofolio">Portofolio</a>
                <a href="#services">Services</a>
                <a href="#about">About</a>
            </div>

    </nav>

    <section id="home" class="justify-between flex flex-wrap  w-full">

        <div class="ml-28 mt-9">
            <h1 class="text-white text-9xl"><span class="text-orange-600">He</span>llo<span class="text-orange-600">,</span></h1>
            <h2 class="text-white text-7xl"><span class="text-orange-600">I</span>'<span class="text-orange-600">m  </span>Jiwann<span class="text-orange-600">.</h2>
            <p class="text-white mt-5 text-2xl">Profesional Gamer.</p>
            <p class="text-white mt-5 mb-9">Lorem Ipsum is simply dummy text <br>of the printing and typesetting industry.</p>
            <a href="" class="text-white text-3xl bg-orange-500 w-fit">Download CV</a>
        </div>

        <div>
            <img src="{{ asset('Rectangle2.png') }}" alt="" class="mr-20">
        </div>

    </section>

    <section id="portofolio" class="mt-14">

        <div>
            <h1 class="text-orange-600 ml-9 mt-20 text-center text-5xl">Recent Project</h1>
        </div>

        <div class="image-container mt-20">
        <img src="{{ asset('Rectangle6.png') }}" alt="Gambar 1">
        <img src="{{ asset('Rectangle5.png') }}" alt="Gambar 2">
        </div>

    </section>

    <section id="services">
        <div>
            <h1 class="text-orange-600 ml-9 mt-20 text-center text-5xl">My Services</h1>
        </div>

        
        <div class="grid-container mt-20 ml-11">
            <div class="grid-item border-blue-500 border-2 text-center text-white text-3xl">
                <img src="{{ asset('Rectangle8.png') }}" alt="" class="ml-32">
                <h1 class="text-white mt-9">Bawa <span class="text-blue-600">Evos</span> Juara</h1>
                <h1>MPL</h1>
                <p class="mt-32">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="grid-item border-orange-500 border-2 text-center text-white text-3xl">
                <img src="{{ asset('Rectangle8.png') }}" alt="" class="ml-32">
                <h1 class="text-white mt-9">Bawa <span class="text-orange-600">RRQ</span> Juara</h1>
                <h1>M-Series</h1>
                <p class="mt-32">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="grid-item border-red-600 border-2 text-center text-white text-3xl">
                <img src="{{ asset('Rectangle8.png') }}" alt="" class="ml-32">
                <h1 class="text-white mt-9">Bawa <span class="text-red-600">Timnas</span> Juara</h1>
                <h1>SeaGames</h1>
                <p class="mt-32">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </section>

    <section id="about">
        <div>
            <h1 class="text-orange-600 ml-9 mt-20 text-center text-5xl">About Me</h1>
        </div>
    </section>

    <section class="justify-between flex flex-wrap  w-full">
        <div class="grid-services mt-20 ml-11">
            <div class="grid-serpis border-orange-600 border-2 text-left text-white text-3xl">
                <p class="-mt-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="bg-white text-white w-[655px] h-[10px] rounded-sm text-center -ml-5 mt-36"></div>
                <h1 class="text-orange-600 text-left mt-9">089669598941</h1>
                <h1 class="text-orange-600 text-right -mt-9">jiwann_9</h1>
            </div>
	    </div>

        <div class="text-right mt-16">
            <img src="{{ asset('Rectangle2.png') }}" alt="" class="mr-20">
        </div>
    </section>

    <footer class="bg-orange-600 text-white py-11 mt-16">
        <div class="container mx-auto text-center">
            <p class="text-sm -mt-9">Contact Me</p>
            <div class="flex justify-center">
            <img src="{{ asset('Vector.png') }}" alt="" class=" ">
            <img src="{{ asset('skill-icons_instagram.png') }}" alt="" class="">
            <img src="{{ asset('logos_whatsapp-icon.png') }}" alt="" class="">
            </div>
        </div>
    </footer>
    <footer class="bg-blue-600 text-white py-4">
        <div class="container mx-auto text-center">
            <p class="text-sm">Created by Wiwit Agung Mulyawan.|&copy; 2024.</p>
        </div>
    </footer>
    <!-- <section>
        <footer class="bg-orange-600 mt-11 text-center">
            <div class="flex flex-wrap">
                <h1 class=" text-white py-10 mx-auto">Contact Me</h1>
            <div>
            <img src="https://i.ibb.co/89hf648/Vector.png" alt="" class="mr-96">
            </div>
        </footer>
        <footer class="bg-blue-600 mt-11 text-center">>

        </footer>
    </section> -->
    
</body>
</html>
