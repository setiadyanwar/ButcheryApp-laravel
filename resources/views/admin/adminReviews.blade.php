@extends('../templates/adminLayout')
@section('content')

<!-- Navbar kiri -->
<aside class="relative pt-28 h-screen w-64 hidden lg:block md:block shadow-xl bg-white">
    <nav class="">
        <a href="/adminProduk" class="flex items-center active-nav-link mt-4 cta-btn pl-6">
            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                <path fill="#000"
                    d="m17.275 20.25l3.475-3.45l-1.05-1.05l-2.425 2.375l-.975-.975l-1.05 1.075l2.025 2.025ZM6 9h12V7H6v2Zm12 14q-2.075 0-3.538-1.463T13 18q0-2.075 1.463-3.538T18 13q2.075 0 3.538 1.463T23 18q0 2.075-1.463 3.538T18 23ZM3 22V5q0-.825.588-1.413T5 3h14q.825 0 1.413.588T21 5v6.675q-.475-.225-.975-.375T19 11.075V5H5v14.05h6.075q.125.775.388 1.475t.687 1.325L12 22l-1.5-1.5L9 22l-1.5-1.5L6 22l-1.5-1.5L3 22Zm3-5h5.075q.075-.525.225-1.025t.375-.975H6v2Zm0-4h7.1q.95-.925 2.213-1.463T18 11H6v2Zm-1 6.05V5v14.05Z" />
            </svg>
            <p class="font-semibold text-[18px]">Daftar Reviews</p>
        </a>

        <a href="/adminReviews"
            class="flex items-center active-nav-link cta-btn nav-item py-2 my-2 pl-5 nav-item border-l-4 border-[#d10b05]">
            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                <path fill="#d10b05"
                    d="M4 13v2h16v-2H4ZM4 2h16q.825 0 1.413.588T22 4v11q0 .825-.588 1.413T20 17h-4v5l-4-2l-4 2v-5H4q-.825 0-1.413-.588T2 15V4q0-.825.588-1.413T4 2Zm0 8h16V4H4v6Zm0 5V4v11Z" />
            </svg>
            <p class="font-semibold text-[18px] text-[#d10b05]">Reviews</p>
        </a>
    </nav>
</aside>
<!-- Navbar kiri -->

<div class="w-full h-screen bg-[#f3f3f3] overflow-x-hidden border-t flex flex-col">
    <div class="mt-32 bg-white rounded-2xl w-[97%] ml-4 shadow-md">
        <p class="mt-7">
            <a class="text-[#D10B05] text-[20px] pb-4 px-11 border-b-4 border-[#D10B05] font-medium cursor-default">Daftar
                Reviews</a>
        </p>
        <div class="ml-12 border-t-2 border-solid border-[#E6E6E6] mt-4"></div>
        <!-- SEARCH BAR -->
        <div class="flex mx-11 mt-5">
            <div class="flex gap-5">
                <form action="/adminReviews" method="GET">
                    <div class="relative flex items-center">
                        <input type="text" name="cari_kata" id="cari_kata" placeholder="Cari Kata"
                            class="border-solid border-2 border-slate-300 rounded-md w-64 py-2 pl-3 pr-9 focus:outline-[#D10B05]" />
                        <button class="absolute right-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                <path fill="#999"
                                    d="m18.031 16.617l4.283 4.282l-1.415 1.415l-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9s9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617Zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.867-3.133-7-7-7s-7 3.133-7 7s3.133 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15Z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- SEARCH BAR -->
        <!-- TABLE -->
        <table id="rreviews-table" class="w-full mt-5 mb-5">
            <thead>
                <tr class="text-[#787878] font-semibold border-2 border-[#e6e6e6] w-full text-center  ">
                    <th class="py-4">Nama</th>
                    <th class="py-4">Komentar</th>
                    <th class="py-4">Penilaian</th>
                    <th class="py-4">Aksi</th>
                </tr>
            </thead>
            <tbody data-aos="fade-right" data-aos-duration="400" data-aos-easing="ease-in-out">
                @foreach ($reviews as $r)
                @php
                $ds = null;
                foreach($data_user as $data){
                    if($data['id_user'] === $r->id_user ){
                     $ds = $data;
                     break;
                    }
                }
                @endphp
                <tr class="border-b-2 border-[#E6E6E6]">
                    <td class=" font-semibold text-center py-5">
                        {{$ds['nama_reviews']}}
                    </td>
                    <td class="">{{$r->reviews}}</td>
                    <td class="text-center">
                        <div class="rating rating-sm">
                            @for ($i = 1; $i <= 5; $i++)
                                <input type="radio" name="rating-{{$r->_id}}" class="mask mask-star-2 bg-orange-400"
                                    {{ $r->ratings == $i ? 'checked' : '' }} />
                            @endfor
                        </div>
                    </td>
                    <td class="text-center">
                        <!-- The button to open modal -->
                        <label for="my_modal_6"
                            class="btn-hapus bg-[#D10B05] py-2 px-8 rounded-md font-semibold text-white hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-linear"
                            data-id="{{$r->_id}}">Hapus</label>

                        <!-- Put this part before </body> tag -->
                        <input type="checkbox" id="my_modal_6" class="modal-toggle" />
                        <div class="modal">
                            <div class="modal-box">
                                <div class="flex justify-center items-center">
                                    <div class="text-center">
                                        <svg class="mt-3 mx-auto my-auto" xmlns="http://www.w3.org/2000/svg" width="100"
                                            height="100" viewBox="0 0 40 40">
                                            <path fill="#d10b05"
                                                d="M35.765 35.729H4.24a2.101 2.101 0 0 1-1.806-1.039a2.07 2.07 0 0 1-.006-2.085L18.2 5.312a2.074 2.074 0 0 1 1.801-1.041c.743 0 1.435.399 1.805 1.042l15.729 27.224a2.087 2.087 0 0 1-1.77 3.192zM19.948 6.312h-.017L4.162 33.601l.078.129h31.525c.044 0 .087-.043.087-.086c-.007-.011-.042-.096-.049-.107L20.073 6.312h-.125z" />
                                            <path fill="#d10b05"
                                                d="M19.029 15.549v8.701a1.136 1.136 0 0 0 2.27 0v-8.701a1.14 1.14 0 0 0-1.135-1.139c-.623 0-1.135.513-1.135 1.139zm1.136 11.35c-.624 0-1.135.506-1.135 1.132v.761a1.14 1.14 0 0 0 1.135 1.132c.626 0 1.135-.513 1.135-1.132v-.761c0-.626-.51-1.132-1.135-1.132zm0 0" />
                                        </svg>
                                        <p class="font-semibold text-[20px] mt-2">Apakah anda yakin
                                            ingin menghapus data ini?</p>
                                        <div class="flex justify-center gap-10">
                                            <div class="modal-action">
                                                <label for="my_modal_6"
                                                    class="border-2 border-[#d10b05] rounded-md px-8 py-2 font-semibold text-[#d10b05] hover:bg-[#D10B05] hover:text-white transition-all duration-200 ease-linear">Batal</label>
                                            </div>
                                            <form action="/hapusRReviews" method="POST">
                                                @csrf
                                                <input type="hidden" name="id_rreviews" id="id_rreviews" value="">
                                                <button
                                                    class="border-2 border-[#d10b05] bg-[#d10b05] text-white px-8 py-2 mt-6 rounded-md font-semibold hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-linear">Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- TABLE -->
    </div>

    @endsection