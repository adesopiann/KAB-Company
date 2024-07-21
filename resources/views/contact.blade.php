@extends('components.main')

@section('main')
    <section class=" mb-[175px]">
        <div class=" h-auto">
            <div class=" absolute w-full h-[120vh] flex flex-col items-center justify-center bg-gradient-to-t from-black/80 to-black/40">
                <div class="">
                    <h1 class=" font-poppins font-semibold text-6xl text-white">Kontak</h1>
                </div>
            </div>
            <div class="h-[120vh] w-full bg-cover bg-center" style="background-image: url('./images/landing3.jpg'); background-attachment: fixed;"></div>
        </div>
    </section>

    <section class=" mx-[100px] mb-[200px]">
        <div class="grid grid-cols-2 gap-x-10 ">
            <div class="" data-aos="fade-right" data-aos-duration="3000">

                <div class="">
                    <h3 class=" font-poppins font-semibold text-3xl text-[#31384C]">Hubungi Kami</h3>
                    <p class=" text-base mt-4 font-poppins">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic, natus aspernatur magni libero expedita eveniet</p>
                </div>

                <div class=" mt-12">
                    <p class=" font-poppins  text-sm flex gap-x-2 "><i data-feather="map-pin"></i> Gading Mansion J2/7 Sepinggan Pratama, Balikpapan Selatan</p>
                    <p class=" font-poppins  text-sm flex gap-x-2 mt-5"><i data-feather="mail"></i>karyaamanahborneo@gmail.com</p>
                    <p class=" font-poppins text-sm flex gap-x-2 mt-5"><i data-feather="phone"></i>+62 982 9823 8445</p>
                </div>

            </div>

            <div class="" data-aos="fade-left" data-aos-duration="3000">
               <form class=" font-poppins" method="POST">
                    @csrf
                    <div class="px-8 pt-6 mb-4">
                        <input class=" placeholder:text-center shadow appearance-none border border-[#31384C] rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" name="nama" id="nama" placeholder="Nama">
                    </div>
                    <div class=" px-8  mb-4">
                        <input class=" placeholder:text-center shadow appearance-none border border-[#31384C] rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="px-8 mb-4">
                        <input class=" size-32 placeholder:text-center shadow appearance-none border border-[#31384C] rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" name="pesan" id="pesan" placeholder="Pesan">
                    </div>
                    <div class="px-8 mb-4">
                         {!! NoCaptcha::renderJs() !!}
                         {!! NoCaptcha::display() !!}
                    </div>
                        <input class="ms-8  text-white bg-[#31384C] hover:bg-[#31384C]/80 focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm max-w-fit  px-8 py-2 text-center dark:bg-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800" type="submit" name="submit" id="submit" value="Kirim">
                </form>
            </div>
        </div>
    </section>

@endsection