<?php

use App\Models\KonsumensModel;
use App\Models\SuppliersModel;

$user = KonsumensModel::find(session('id_user'));
$supplier = SuppliersModel::where('user_id', session('id_user'))->first();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- tailwind -->
    @vite(['resources/css/app.css'])
    <!-- liblary splide -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />
    <!-- Library swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- AOS Animate -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

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

        :root {
            --swiper-navigation-color: #d10b05;
        }

        .splide__pagination__page.is-active {
            background-color: #d10b05;
        }


        @media (max-width: 640px) {
            #icon-bar svg {
                width: 20px;
                height: 20px;
            }

            #search-icon {
                width: 20px;
                height: 20px;
            }
        }

        @media (min-width: 1700px) and (max-width: 1920px) {
            #search input {
                width: 900px;
            }
        }
    </style>
</head>

<body>
    <!-- todo Preloader -->
    <!-- <div class="loader_bg">
        <div class="loader">
            <img src="" alt="loader" />
        </div>
    </div> -->
    <!-- todo Preloader -->

    <!-- NAVBAR -->
    <nav class="fixed top-0 w-full z-50">
        <div class="">
            <div class="bg-[#D10B05] py-4 lg:block hidden">
                <div class="mx-12 flex items-center justify-between">
                    <div class="flex">
                        <img src="{{asset('assets/img_index/asset/navbar/phone.svg')}}" alt="" class="pr-2 -mt-2" />
                        <p class="text-white mr-4">Butchery app is now available on</p>
                        <a href="" class="mr-1"><img src="{{asset('assets/img_index/asset/navbar/googleplay.svg')}}" alt="" /></a>
                        <a href=""><img src="{{asset('assets/img_index/asset/navbar/appstore.svg')}}" alt="" /></a>
                    </div>
                    <div class="flex gap-5 items-center">
                        <a href="" class="text-white flex"><img src="{{asset('assets/img_index/asset/navbar/office.svg')}}" alt="" class="pr-1" />Tentang Kami</a>
                        @if (session()->has('login') && $user->role == "supplier")
                        <a href="/register_mitra/{{session('id_user')}}" class="hidden text-white flex" id="register_mitra" data-id="{{session('id_user')}}">
                            <img src="{{asset('assets/img_index/asset/navbar/mitra.svg')}}" alt="" class="pr-1" />Daftar
                            Jadi Mitra
                        </a>
                        @else
                        <a href="/register_mitra/{{session('id_user')}}" class=" text-white flex" id="register_mitra" data-id="{{session('id_user')}}">
                            <img src="{{asset('assets/img_index/asset/navbar/mitra.svg')}}" alt="" class="pr-1" />Daftar
                            Jadi Mitra
                        </a>
                        @endif
                        <a href="mailto:servicebutchery@gmail.com?subject=Bantuan" class="text-white flex"><img src="{{asset('assets/img_index/asset/navbar/help.svg')}}" alt="" class="pr-1" />Bantuan
                        </a>
                        <div class="flex items-center"><img src="{{asset('assets/img_index/asset/navbar/globe.svg')}}" alt="" class="pr-1" />
                            <select name="Bahasa" id="" class="bg-[#d10b05] text-white">
                                <option value="" class="">Bahasa Indonesia</option>
                                <option value="" class="">English</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white drop-shadow-md">
            <div class="lg:pt-6 py-3 lg:pb-7 items-center justify-between flex lg:px-10 md:px-14 px-4">
                <a href="/index"><img src="{{asset('assets/img_index/asset/navbar/LogoButchery.svg')}}" alt="LogoButchery" class="mr-9 lg:block hidden" /></a>
                <div class="flex lg:mr-0 sm:mr-1">
                    <form action="/searchProduct" method="get" id="search">
                        <div class="relative flex items-center">
                            <input type="text" name="cari" id="cari" placeholder="Cari di Butchery" class="border-solid border-2 border-slate-300 rounded-md lg:w-[650px] md:w-[500px] w-60 lg:pl-5 pl-2 lg:py-4 py-2 sm:text-xs focus:outline-[#D10B05] " />
                            <button class="absolute lg:right-7 right-2">
                                <svg id="search-icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <path fill="#999" d="m18.031 16.617l4.283 4.282l-1.415 1.415l-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9s9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617Zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.867-3.133-7-7-7s-7 3.133-7 7s3.133 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15Z" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="lg:gap-3 md:gap-2 sm:gap-1 lg:ml-0 md:ml-10 sm:ml-2 lg:mt-0 mt-1 flex" id="icon-bar">
                    @if(session()->has('NewDataCart'))
                    <a href="/cart/{{session('id_user')}}" class="py-1 px-2 rounded-lg hover:bg-gray-200 transition-all duration-200 ease-in-out">
                        <div class="relative inline-flex">
                            <div class="absolute bottom-auto left-auto right-0 top-0 inline-block -translate-y-1/2 translate-x-2/4 rotate-0 rounded-full bg-red-600 p-1">
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path fill="#454545" d="M17 18a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2M1 2h3.27l.94 2H20a1 1 0 0 1 1 1c0 .17-.05.34-.12.5l-3.58 6.47c-.34.61-1 1.03-1.75 1.03H8.1l-.9 1.63l-.03.12a.25.25 0 0 0 .25.25H19v2H7a2 2 0 0 1-2-2c0-.35.09-.68.24-.96l1.36-2.45L3 4H1V2m6 16a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2m9-7l2.78-5H6.14l2.36 5H16Z" />
                            </svg>
                        </div>
                    </a>
                    @else
                    <a href="/cart/{{session('id_user')}}" class="py-1 px-2 rounded-lg hover:bg-gray-200 transition-all duration-200 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <path fill="#454545" d="M17 18a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2M1 2h3.27l.94 2H20a1 1 0 0 1 1 1c0 .17-.05.34-.12.5l-3.58 6.47c-.34.61-1 1.03-1.75 1.03H8.1l-.9 1.63l-.03.12a.25.25 0 0 0 .25.25H19v2H7a2 2 0 0 1-2-2c0-.35.09-.68.24-.96l1.36-2.45L3 4H1V2m6 16a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2m9-7l2.78-5H6.14l2.36 5H16Z" />
                        </svg>
                    </a>
                    @endif

                    @if(session()->has('NewDataPesanan'))
                    <a href="/notification/{{session('id_user')}}" class="py-1 px-2 rounded-lg hover:bg-gray-200 transition-all duration-200 ease-in-out">
                        <div class="relative inline-flex">
                            <div class="absolute bottom-auto left-auto right-0 top-0 inline-block -translate-y-1/2 translate-x-2/4 rotate-0 rounded-full bg-red-600 p-1">
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <g fill="none" stroke="#454545" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 19v-9a6 6 0 0 1 6-6v0a6 6 0 0 1 6 6v9M6 19h12M6 19H4m14 0h2m-9 3h2" />
                                    <circle cx="12" cy="3" r="1" />
                                </g>
                            </svg>
                        </div>
                    </a>
                    @else
                    <a href="/notification/{{session('id_user')}}" class="py-1 px-2 rounded-lg hover:bg-gray-200 transition-all duration-200 ease-in-out">
                        <div class="relative inline-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <g fill="none" stroke="#454545" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 19v-9a6 6 0 0 1 6-6v0a6 6 0 0 1 6 6v9M6 19h12M6 19H4m14 0h2m-9 3h2" />
                                    <circle cx="12" cy="3" r="1" />
                                </g>
                            </svg>
                        </div>
                    </a>
                    @endif
                </div>
                <img src="{{asset('assets/img_index/asset/navbar/pembatas.svg')}}" alt="" class="mx-4 lg:block hidden" />
                @if (session()->has('login') && $user->role == 'konsumen')
                <div class="lg:block hidden">
                    <div class="flex items-center gap-3">
                        <div class="dropdown dropdown-hover dropdown-bottom dropdown-end">
                            <label tabindex="0" class=" "><a class="flex items-center gap-2" id="profile" data-id="">
                                    <img src="{{asset('assets/img_mitra_center/asset/navbar/profile.svg')}}" alt="" class="border-2 border-[#D10B05] rounded-full" />
                                    <p class="font-medium text-lg mr-8">{{$user->username}}</p>
                                </a></label>
                            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a href="/profile/{{$user->_id}}/{{{$user['alamat'][0]['provinsi']}}}/{{{$user['alamat'][0]['kota/kab']}}}/{{{$user['alamat'][0]['kecamatan']}}}" class="text-[#d10b05] font-semibold hover:text-[#d10b05]">Lihat
                                        Profile</a></li>
                                <li><a href="/logout" class="font-semibold flex"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M5 5h7V3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h7v-2H5V5zm16 7l-4-4v3H9v2h8v3l4-4z" />
                                        </svg> Logout
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @elseif(session()->has('login') && $user->role == "supplier")
                <div class="lg:block hidden">
                    <div class="flex items-center gap-8">
                        <a href="/daftarProduk/{{$supplier->_id}}" class="flex items-center gap-2"><img src="{{asset('assets/img_index/asset/navbar/tokosaya.svg')}}" alt="" />
                            <p class="font-semibold text-lg">Toko Saya</p>
                        </a>
                        <div class="dropdown dropdown-hover dropdown-bottom dropdown-end">
                            <label tabindex="0" class=" "><a class="flex items-center gap-2" id="profile" data-id="">
                                    <img src="{{asset('assets/img_mitra_center/asset/navbar/profile.svg')}}" alt="" class="border-2 border-[#D10B05] rounded-full" />
                                    <p class="font-medium text-lg mr-8">{{substr($user->username,0,1)}}...</p>
                                </a></label>
                            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a href="/profile/{{$user->_id}}/{{{$user['alamat'][0]['provinsi']}}}/{{{$user['alamat'][0]['kota/kab']}}}/{{{$user['alamat'][0]['kecamatan']}}}" class="text-[#d10b05] font-semibold hover:text-[#d10b05]">Lihat Profile</a></li>
                                <li><a href="/logout" class="font-semibold flex"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M5 5h7V3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h7v-2H5V5zm16 7l-4-4v3H9v2h8v3l4-4z" />
                                        </svg> Logout
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @else
                <div class="lg:block hidden">
                    <div class="flex gap-3">
                        <a href="/login">
                            <button class="border-solid border-2 border-[#D10B05] font-semibold rounded-lg py-3 px-10 text-[#D10B05] hover:bg-[#D10B05] hover:text-white transition-all duration-200 ease-in-out">
                                Masuk
                            </button>
                        </a>
                        <a href="/register">
                            <button class="border-solid border-2 bg-[#D10B05] font-semibold rounded-lg py-3 px-10 border-[#D10B05] text-white mr-4 hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-in-out">
                                Daftar
                            </button>
                        </a>
                    </div>
                </div>
                @endif
                <div class="drawer drawer-end lg:hidden block md:ml-3">
                    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                    <div class="drawer-content">
                        <!-- Page content here -->
                        <label class="pt-2 ml-2 bg-white swap swap-rotate drawer-button" for="my-drawer">
                            <!-- this hidden checkbox controls the state -->
                            <input type="checkbox" />
                            <!-- hamburger icon -->
                            <svg class="swap-off fill-current" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 512 512">
                                <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
                            </svg>
                        </label>
                    </div>
                    <div class="drawer-side overflow-x-hidden">
                        <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                        <ul class="menu p-4 w-full min-h-full bg-white text-base-content">
                            <!-- Sidebar content here -->
                            <div class="flex justify-between">
                                <p class="text-lg font-semibold">Menu Utama</p>
                                <button class="pr-3"><svg id="close-sidebar" class="swap-on fill-current" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 512 512">
                                        <polygon points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49" />
                                    </svg>
                                </button>
                            </div>
                            <div class="block mt-4">

                                <!-- Tampilan mobile sudah login -->
                                @if (session()->has('login') && $user->role == "supplier")
                                <a href="/profile/{{$user->_id}}/{{{$user['alamat'][0]['provinsi']}}}/{{{$user['alamat'][0]['kota/kab']}}}/{{{$user['alamat'][0]['kecamatan']}}}" class="flex items-center gap-3">
                                    <img src="{{asset('assets/img_mitra_center/asset/navbar/profile.svg')}}" alt="" class="border-2 border-[#D10B05] rounded-full" />
                                    <p class="font-medium text-lg mr-8">{{$user->username}}</p>
                                </a>
                                <a href="/daftarProduk/{{$supplier->_id}}" class="flex items-center gap-5 mt-3 ml-1"><img src="{{asset('assets/img_index/asset/navbar/tokosaya.svg')}}" alt="" />
                                    <p class="font-semibold text-lg">Toko Saya</p>
                                </a>
                                <div class="border-t-2 border-[#e6e6e6] mt-4"></div>
                                <a href="/logout" class="font-semibold flex items-center text-lg gap-3 ml-2 mt-4"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M5 5h7V3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h7v-2H5V5zm16 7l-4-4v3H9v2h8v3l4-4z" />
                                    </svg> Logout
                                </a>

                                @elseif (session()->has('login') && $user->role == "konsumen")
                                <a href="/profile/{{$user->_id}}/{{{$user['alamat'][0]['provinsi']}}}/{{{$user['alamat'][0]['kota/kab']}}}/{{{$user['alamat'][0]['kecamatan']}}}" class="flex items-center gap-3">
                                    <img src="{{asset('assets/img_mitra_center/asset/navbar/profile.svg')}}" alt="" class="border-2 border-[#D10B05] rounded-full" />
                                    <p class="font-medium text-lg mr-8">{{$user->username}}</p>
                                </a>
                                <a href="" class="flex items-center gap-5 mt-3 ml-1"><img src="{{asset('assets/img_index/asset/navbar/tokosaya.svg')}}" alt="" />
                                    <p class="font-semibold text-lg">Daftar Jadi Mitra</p>
                                </a>
                                <div class="border-t-2 border-[#e6e6e6] mt-4"></div>
                                <a href="/logout" class="font-semibold flex items-center text-lg gap-3 ml-2 mt-4"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M5 5h7V3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h7v-2H5V5zm16 7l-4-4v3H9v2h8v3l4-4z" />
                                    </svg> Logout
                                </a>

                                @else
                                <div class="flex gap-6">
                                    <a href="/login">
                                        <button class="border-solid border-2 border-[#D10B05] font-semibold rounded-lg py-2 px-10 w-36 text-[#D10B05] hover:bg-[#D10B05] hover:text-white transition-all duration-200 ease-in-out">
                                            Masuk
                                        </button>
                                    </a>
                                    <a href="/register">
                                        <button class="border-solid border-2 bg-[#D10B05] font-semibold rounded-lg py-2 px-10 w-36 border-[#D10B05] text-white mr-4 hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-in-out">
                                            Daftar
                                        </button>
                                    </a>
                                </div>

                                @endif
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- NAVBAR -->

    @yield('content')

    <div class="border-t-2 border-solid border-[#E6E6E6]"></div>
    <!-- FOOTER -->
    <footer class="container mx-auto">
        <footer class="container mx-auto">
            <div class="w-full mt-12 mb-12 sm:text-sm md:text-sm">
                <div class="container lg:px-[53px] md:px-[53px] px-7">
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
                        <div class="lg:col-span-2 md:col-span-6 sm:col-span-6 sm:ml-3">
                            <h1 class="font-semibold">Layanan Pelanggan</h1>
                            <div class="mt-5 text-[#999999]">
                                <ul class="list-none">
                                    <li><a href="mailto:servicebutchery@gmail.com?subject=Bantuan" class="hover:text-[#D10B05]">Bantuan</a></li>
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
                                <ul class="ml-5 list-none -mt-4">
                                    <li>
                                        <a href="" class="ml-5"><img src="{{asset('assets/img_index/asset/footer/googleplay.svg')}}" alt="" /></a>
                                    </li>
                                    <li class="mt-3">
                                        <a href=""><img src="{{asset('assets/img_index/asset/footer/appstore.svg')}}" alt="" /></a>
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
                autoplay: "playing",
                speed: 1000
            });
            splide.mount();
        </script>
        <!-- AOS Animate -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>

        @vite(['resources/js/app.js'])

        <script src="{{asset('jquery/code.jquery.com_jquery-3.7.1.min.js')}}"></script>
        <script src="{{asset('js/loader.js')}}"></script>
        <script src="{{asset('js/time.js')}}"></script>
        <script src="{{asset('js/hamburgerToggle.js')}}"></script>
        <script src="{{asset('js/cart.js')}}"></script>
        <script src="{{asset('js/product.js')}}"></script>
        <script src="{{asset('js/selectIndonesia.js')}}"></script>
        <script src="{{asset('js/drawer.js')}}"></script>
        <script src="{{asset('js/changePassword.js')}}"></script>

</body>

</html>