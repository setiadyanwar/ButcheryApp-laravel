@extends('templates.register-layout')
@section('content')

<!-- REGISTER -->
<div class="w-full">
    <div class="container mx-auto px-[53px] mt-14">
        <a href="/index"><img src="{{asset('assets/img_index/asset/loginPage/logo.svg')}}" alt=""></a>
        <div class="grid grid-cols-12">
            <div class="col-span-6 flex justify-center">
                <div class="flex-none text-center lg:block md:hidden sm:hidden max-sm:hidden">
                    <img src="{{asset('assets/img_index/asset/loginPage/hiro2.svg')}}" alt="" class="mt-12" />
                    <h1 class="font-semibold text-[28px] pt-9">
                        Belanja Daging Anti Ribet
                    </h1>
                    <p class="text-[#787878] pt-3">
                        Beli daging gapake keluar rumah? emang boleh sesimpel itu?
                    </p>
                </div>
            </div>
            <div class="lg:col-span-6 md:col-span-12 sm:col-span-12 lg:mt-0 md:mt-7">
                <div class="justify-center flex">
                    <div class="w-[65%] h-[80%] bg-white rounded-lg shadow-lg text-center">
                        <p class="font-semibold text-[24px] mt-14">
                            Hai! Daftar Dulu Ya
                        </p>
                        <p class="pt-3 text-[#787878]">
                            Udah punya akun?
                            <a href="/login" class="text-[#D10B05] font-medium hover:text-[#9F0804]">Masuk</a>
                            aja langsung
                        </p>
                        <form action="/save_register3" method = "POST" class="mt-9">
                            @csrf
                            <label for="username" class="flex justify-start ml-12 font-semibold">Masukan
                                Username</label>
                            <input
                                class="pl-5 py-3 mt-2 border-solid border-2 border-[#CCCCCC] rounded-lg w-[80%] focus:outline-[#D10B05]"
                                type="text" name="" id="username" placeholder="" required />
                            <p class="font-semibold mt-8 ml-12 text-start">
                                Masukan Alamat Toko
                            </p>
                            <p class="text-[#787878] text-start ml-12 mt-4">Provinsi</p>
                            <select required name="provinsi" id=""
                                class="pl-5 py-3 border-solid border-2 mt-2 border-[#CCCCCC] rounded-lg w-[80%] focus:outline-[#D10B05]">
                                @foreach ( $provinsiData as $pd )
                                    <option value="{{$pd['id']}}">{{$pd['name']}}</option>    
                                @endforeach
                            </select><br />
                            <div class="flex mt-4 justify-center gap-5 ml-10 mb-5">
                                <div class="flex-col text-start">
                                    <label for="kota" class="text-[#787878]">Kota</label>
                                    <select required name="kota" id="kota"
                                        class="pl-5 py-3 mt-3 border-solid border-2 border-[#CCCCCC] rounded-lg w-[100%] focus:outline-[#D10B05]">
                                        <option value=""></option>
                                        <option value="">Jawa Barat</option>
                                        <option value="">Jawa Tengah</option>
                                    </select>
                                </div>
                                <div class="flex-col text-start">
                                    <label for="kecamatan" class="text-[#787878]">Kecamatan</label>
                                    <select required name="kecamatan" id="kecamatan"
                                        class="pl-5 py-3 mt-3 border-solid border-2 border-[#CCCCCC] rounded-lg w-[80%] focus:outline-[#D10B05]">
                                        <option value=""></option>
                                        <option value="">Jawa Barat</option>
                                        <option value="">Jawa Tengah</option>
                                    </select>
                                </div>
                            </div>
                            <p class="text-[#787878] text-start ml-12">Alamat Detail</p>
                            <input
                                class="pl-5 py-3 mt-3 mb-5 border-solid border-2 border-[#CCCCCC] rounded-lg w-[80%] h-28 focus:outline-[#D10B05]"
                                type="text" name="alamat" id="alamat" placeholder="" required />
                            <p class="text-[#B3B3B3]">
                                Dengan mendaftar, saya menyetujui <br />
                                <a href="" class="font-medium text-[#D10B05] hover:text-[#9F0804]">
                                    Syarat dan Ketentuan</a>
                                serta
                                <a href="" class="font-medium text-[#D10B05] hover:text-[#9F0804]">
                                    Kebijakan Privasi</a>
                            </p>
                            <button
                                class="text-white bg-[#D10B05] py-3 lg:px-40 md:px-36 sm:px-28 rounded-lg font-semibold my-10 hover:bg-[#9F0804]">
                                Daftar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- REGISTER -->

@endsection