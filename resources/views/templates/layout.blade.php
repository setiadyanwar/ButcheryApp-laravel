<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- tailwind -->
    @vite(['resources/css/app.css', 'resources/css/ouput.css'])
    <!-- liblary splide -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />
    <!-- Library swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <title>Butchery | Beli Daging Segar Dengan Kualitas Terbaik Disini</title>
    <link rel="shortcut icon" href="{{asset('assets/img_index/asset/navbar/logoTitle.svg')}}" type="image/x-icon" />
    <style>
    #fitur button:hover svg path {
        fill: white;
    }

    .splide__track ul li img {
        width: 99.5%;
    }

    .loader_bg {
        position: fixed;
        z-index: 9999999;
        background: #fff;
        width: 100%;
        height: 100%;
    }

    .loader {
        height: 100%;
        width: 100%;
        position: absolute;
        left: 0;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .loader img {
        width: 500px;
    }
    </style>
</head>

<body>
    <!-- todo Preloader -->
    <!-- <div class="loader_bg">
        <div class="loader">
            <img src="{{asset('assets/img_index/asset/loader/loader-animasi.gif')}}" alt="loader" />
        </div>
    </div> -->
    <!-- todo Preloader -->

    <!-- NAVBAR -->
    <nav class="fixed top-0 w-full z-50">
        <div class="">
            <div class="bg-[#D10B05] py-4">
                <div class="mx-12 flex items-center justify-between">
                    <div class="flex">
                        <img src="{{asset('assets/img_index/asset/navbar/phone.svg')}}" alt="" class="pr-2 -mt-2" />
                        <p class="text-white mr-4">Butchery app is now available on</p>
                        <a href="" class="mr-1"><img src="{{asset('assets/img_index/asset/navbar/googleplay.svg')}}"
                                alt="" /></a>
                        <a href=""><img src="{{asset('assets/img_index/asset/navbar/appstore.svg')}}" alt="" /></a>
                    </div>
                    <div class="flex gap-5 items-center">
                        <a href="" class="text-white flex"><img
                                src="{{asset('assets/img_index/asset/navbar/office.svg')}}" alt=""
                                class="pr-1" />Tentang Kami</a>
                        <a href="/register_mitra" class="text-white flex"><img
                                src="{{asset('assets/img_index/asset/navbar/mitra.svg')}}" alt="" class="pr-1" />Daftar
                            Jadi Mitra
                        </a>
                        <a href="" class="text-white flex"><img
                                src="{{asset('assets/img_index/asset/navbar/help.svg')}}" alt="" class="pr-1" />Bantuan
                        </a>
                        <a href="" class="text-white flex"><img
                                src="{{asset('assets/img_index/asset/navbar/globe.svg')}}" alt="" class="pr-1" />Bahasa
                            Indonesia<img src="{{asset('asset/navbar/arrowUp.svg')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white drop-shadow-md">
            <div class="pt-6 pb-7 items-center justify-between flex px-10">
                <a href="/index"><img src="{{asset('assets/img_index/asset/navbar/LogoButchery.svg')}}"
                        alt="LogoButchery" class="mr-9" /></a>
                <div class="flex mr-8">
                    <form action="/searchProduct">
                        <div class="relative flex items-center">
                            <input type="text" name="" id=""
                                placeholder="Beli Daging Segar Dengan Kualitas Terbaik Disini"
                                class="border-solid border-2 border-slate-300 rounded-md w-[650px] pl-5 py-4 focus:outline-[#D10B05]" />
                            <button class="absolute right-7">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <path fill="#999"
                                        d="m18.031 16.617l4.283 4.282l-1.415 1.415l-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9s9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617Zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.867-3.133-7-7-7s-7 3.133-7 7s3.133 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15Z" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="gap-3 flex" id="icon-bar">
                    <a href="/cart" class="p-1 rounded-lg hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <path fill="#454545"
                                d="M17 18a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2M1 2h3.27l.94 2H20a1 1 0 0 1 1 1c0 .17-.05.34-.12.5l-3.58 6.47c-.34.61-1 1.03-1.75 1.03H8.1l-.9 1.63l-.03.12a.25.25 0 0 0 .25.25H19v2H7a2 2 0 0 1-2-2c0-.35.09-.68.24-.96l1.36-2.45L3 4H1V2m6 16a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2m9-7l2.78-5H6.14l2.36 5H16Z" />
                        </svg>
                    </a>
                    <a href="" class="p-1 rounded-lg hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <g fill="none" stroke="#454545" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 19v-9a6 6 0 0 1 6-6v0a6 6 0 0 1 6 6v9M6 19h12M6 19H4m14 0h2m-9 3h2" />
                                <circle cx="12" cy="3" r="1" />
                            </g>
                        </svg>
                    </a>
                </div>
                <img src="{{asset('assets/img_index/asset/navbar/pembatas.svg')}}" alt="" class="mx-4" />
                <div class="block">
                    <div class="flex gap-3">
                        <form action="/login">
                            <button
                                class="border-solid border-2 border-[#D10B05] font-semibold rounded-lg py-3 px-10 text-[#D10B05] hover:bg-[#D10B05] hover:text-white">
                                Masuk
                            </button>
                        </form>
                        <form action="/register">
                            <button
                                class="border-solid border-2 bg-[#D10B05] font-semibold rounded-lg py-3 px-10 border-[#D10B05] text-white mr-4 hover:bg-[#9F0804] hover:border-[#9F0804]">
                                Daftar
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Jika sudah login -->
                <div class="hidden">
                    <div class="flex items-center gap-3">
                        <a href="" class="flex items-center gap-2"><img
                                src="{{asset('assets/img_index/asset/navbar/profile.svg')}}" alt="" />
                            <p class="font-medium text-lg mr-8">Rahmat Messi Tahalu</p>
                        </a>
                    </div>
                </div>
                <!-- Jika sudah login -->

                <!-- Sudah login customer dan memiliki akun mitra -->
                <div class="hidden">
                    <div class="flex items-center gap-8">
                        <a href="" class="flex items-center gap-2"><img
                                src="{{asset('assets/img_index/asset/navbar/tokosaya.svg')}}" alt="" />
                            <p class="font-semibold text-lg">Toko Saya</p>
                        </a>
                        <a href="profile/profile.html" class="flex items-center gap-2"><img
                                src="{{asset('assets/img_index/asset/navbar/profile.svg')}}" alt="" />
                            <p class="font-medium text-lg mr-8">R...</p>
                        </a>
                    </div>
                </div>
                <!-- Sudah login customer dan memiliki akun mitra -->
            </div>
        </div>
    </nav>
    <!-- NAVBAR -->

    @yield('content')

    <div class="border-t-2 border-solid border-[#E6E6E6]"></div>
    <!-- FOOTER -->
    <footer>
        <div class="w-full mt-12 mb-12">
            <div class="container px-[53px]">
                <div class="grid grid-cols-12">
                    <div class="lg:col-span-2 md:col-span-6 sm:col-span-6">
                        <h1 class="font-semibold">Jelajahi Butchery</h1>
                        <div class="mt-5 text-[#999999]">
                            <ul class="list-none">
                                <li>
                                    <a href="" class="hover:text-[#D10B05]">Tentang Butchery</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Blog</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Kebijakan Butchery</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Kebijakan Privasi</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Mitra Centre</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Karir</a>
                                </li>
                            </ul>
                        </div>
                        <p class="font-semibold mt-9">Ikuti Kami</p>
                        <div class="flex gap-2 mt-4">
                            <a href=""><img src="{{asset('assets/img_index/asset/footer/facebook.svg')}}" alt="" /></a>
                            <a href=""><img src="{{asset('assets/img_index/asset/footer/x.svg')}}" alt="" /></a>
                            <a href=""><img src="{{asset('assets/img_index/asset/footer/youtube.svg')}}" alt="" /></a>
                            <a href=""><img src="{{asset('assets/img_index/asset/footer/instagram.svg')}}" alt="" /></a>
                        </div>
                    </div>
                    <div class="lg:col-span-2 md:col-span-6 sm:col-span-6 lg:mt-0 md:mt-0 sm:mt-0">
                        <h1 class="font-semibold">Layanan Pelanggan</h1>
                        <div class="mt-5 text-[#999999]">
                            <ul class="list-none">
                                <li><a href="" class="hover:text-[#D10B05]">Bantuan</a></li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Butchery Care</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Hubungi Kami</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Kritik dan Saran</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Gratis Ongkir</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Pengembalian Barang</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Syarat dan Ketentuan</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Daftar Mitra</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 lg:mt-0 md:mt-10 sm:col-span-12 sm:mt-10">
                        <h1 class="font-semibold">Pembayaran</h1>
                        <div class="flex mt-5 gap-2">
                            <button class="bg-white px-3 py-2 shadow-md rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/BCA.svg')}}" alt="" />
                            </button>
                            <button class="bg-white px-3 py-2 shadow-md rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/BNI.svg')}}" alt="" />
                            </button>
                            <button class="bg-white px-3 py-2 shadow-md rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/BRI.svg')}}" alt="" />
                            </button>
                            <button class="bg-white px-3 py-2 shadow-md rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/Mandiri.svg')}}" alt="" />
                            </button>
                        </div>
                        <div class="flex mt-5 gap-2">
                            <button class="bg-white px-2 py-2 shadow-md rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/BSI.svg')}}" alt="" />
                            </button>
                            <button class="bg-white px-3 py-2 shadow-md rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/Permata.svg')}}" alt="" />
                            </button>
                            <button class="bg-white px-3 py-3 shadow-md rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/CimbNiaga.svg')}}" alt="" />
                            </button>
                            <button class="bg-white px-4 py-2 shadow-md rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/SeaBank.svg')}}" alt="" />
                            </button>
                        </div>
                        <div class="flex mt-5 gap-2">
                            <button class="bg-white px-4 py-2 shadow-lg rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/ovo.svg')}}" alt="" />
                            </button>
                            <button class="bg-white px-3 py-2 shadow-lg rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/dana.svg')}}" alt="" />
                            </button>
                            <button class="bg-white px-4 py-2 shadow-lg rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/gopay.svg')}}" alt="" />
                            </button>
                            <button class="bg-white px-5 py-2 shadow-lg rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/spay.svg')}}" alt="" />
                            </button>
                        </div>
                        <h1 class="font-semibold mt-10">Pengiriman</h1>
                        <div class="flex mt-5 gap-2">
                            <button class="bg-white px-2 py-2 shadow-md rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/butchery.svg')}}" alt="" />
                            </button>
                            <!-- <button
                  class="bg-white px-3 py-2 shadow-md rounded-lg"
                  disabled
                >
                  <img src="asset/footer/gojek.svg" alt="" />
                </button>
                <button
                  class="bg-white px-3 py-3 shadow-md rounded-lg"
                  disabled
                >
                  <img src="asset/footer/grab.svg" alt="" />
                </button> -->
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 lg:mt-0 md:mt-10 sm:col-span-12 sm:mt-10 md:ml-10">
                        <h1 class="font-semibold">Get Butchery App</h1>
                        <div class="flex mt-5 items-center">
                            <button class="p-2 shadow-md rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/qr.svg')}}" alt="" />
                            </button>
                            <ul class="ml-5 list-none">
                                <li>
                                    <a href="" class="ml-5"><img
                                            src="{{asset('assets/img_index/asset/footer/googleplay.svg')}}"
                                            alt="" /></a>
                                </li>
                                <li class="mt-3">
                                    <a href=""><img src="{{asset('assets/img_index/asset/footer/appstore.svg')}}"
                                            alt="" /></a>
                                </li>
                            </ul>
                        </div>
                        <p class="text-[#B3B3B3] mt-20">
                            © Butchery 2023. Hak Cipta Dilindungi
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER -->

    <script>
    var splide = new Splide(".splide", {
        type: "loop",
    });
    splide.mount();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    @vite(['resources/js/app.js','resources/jquery/code.jquery.com_jquery-3.7.1.min.js', 'resources/js/loader.js',
    'resources/js/time.js', 'resources/js/hamburgerToggle.js', 'resources/js/cart.js',
    'resources/js/product.js','resources/js/password.js, resources/js/app.js'])
</body>

</html>