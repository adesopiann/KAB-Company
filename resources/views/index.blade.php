@extends('components.main')

@section('main')
<section>
    <div class=" h-auto">
        <div class=" absolute w-full h-[120vh] flex flex-col items-start justify-center">
            <div class=" lg:ms-48 -mt-24">
                <h3 class="text-5xl text-white font-poppins font-semibold">
                    MITRA PENDUKUNG 
                    <br>
                   YANG DAPAT DIPERCAYA
                </h3>
                <p class="font-poppins text-sm mt-2 text-white">BELAJAR BERKESINAMBUNGAN UNTUK BERKARYA DENGAN JUJUR DAN 
                <br>    
                DAPAT DIPERCAYA DALAM MENGEMBAN AMANAH</p>
            </div>
        </div>
        <div class="h-[120vh] w-full bg-cover bg-center" style="background-image: url('./images/landing2.jpeg'); background-attachment: fixed;"></div>
    </div>
</section>


    <section class=" w-full mt-[175px] mb-[175px]" id="about">
        <div class="">
            <div class=" text-center grid gap-y-4 ">
                <h5 class=" font-poppins ">Tentang Kami</h5>
                <h2 class=" font-poppins font-semibold text-3xl text-[#31384C]">Agen Resmi Pelumas ENI</h2>
                <p class=" text-lg lg:mx-[350px] sm:mx-[20px] ">CV Karya Amanah Borneo bergerak dibidang penjualan pelumas / oli dan general supplier, Dimana kami sebagai Agen Resmi pelumas / oli ENI di Balikpapan yang melayani seluruh wilayah Indonesia</p>
                <p class=" text-lg lg:mx-[260px] sm:mx-[20px]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam quia sunt voluptatibus nesciunt quos assumenda, voluptatem consectetur repellendus fugiat repudiandae.</p>
            </div>
        </div>

        <div class=" mt-[100px] ">
            <div class=" py-10 mx-[200px] ">
                <h5 class=" font-poppins font-semibold text-2xl text-center">Visi</h5>
                <div class=" max-w-[400px] bg-[#31384C] text-white rounded-[10px] py-5 grid grid-cols-1 mx-auto mt-[30px] text-center" data-aos="fade-up" data-aos-duration="2000">
                    <h4 class=" font-poppins font-semibold text-lg mb-2">Trusted</h4>
                    <p class="text-base ">Menjadi distributor utama yang professional & terpercaya</p>
                </div>
            </div>

            <div class="mx-[200px] mt-[70px]  pb-10 font-poppins">
                <h5 class=" font-poppins font-semibold text-2xl text-center">Misi</h5>
                <div class="grid grid-cols-3 gap-x-8 mt-[30px]">
                    <div class=" bg-[#31384C] rounded-[10px] text-center py-5 px-2 text-white" data-aos="fade-up" data-aos-duration="2000">
                        <h5 class=" font-poppins font-semibold text-lg mb-2">Develop</h5>
                        <p class=" text-base ">Belajar keras dalam mengembangkan diri dan mengaplikasikan ilmu yang bermanfaat</p>
                    </div>
                    <div class="border-2 border-gray-300/30 rounded-[10px] text-center py-5 px-2" data-aos="fade-up" data-aos-duration="2000">
                        <h5 class=" font-poppins font-semibold text-lg mb-2">Gain</h5>
                        <p  class=" text-base ">Bekerja keras dalam memperluas pasar, menjaga kualitas yang baik dan pelayanan yang prima</p>
                    </div>
                    <div class="bg-[#31384C] rounded-[10px] text-center py-5 px-2 text-white" data-aos="fade-up" data-aos-duration="2000">
                        <h5 class=" font-poppins font-semibold text-lg mb-2">Dedicated</h5>
                        <p  class=" text-base ">Menjadi mitra kerja yang handal dan berdedikasi, solusi yang berkualitas, dan terpercaya</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="product" class="my-[175px] mx-[100px]">
            <div class=" mx-[200px] mb-[100px] text-center font-poppins grid gap-y-4">
                <p class="">Produk</p>
                <h1 class=" text-3xl font-bold">Menjual Produk Terbaik di Bidangnya</h1>
                <p class=" text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae distinctio inventore officia aliquid fugiat eaque debitis rerum non, fugit fuga.</p>
            </div>

        <div class="mx-[100px] space-y-24">
            <div class=" flex  gap-x-10 " data-aos="fade-right" data-aos-duration="3000">
                <a href="{{ route('produk') }}" class="relative bg-dark rounded-[10px] group overflow-hidden"">
                    <img src="./images/automotive2.jpg" alt="" class="object-cover object-center w-full h-full rounded-[5px] aspect-video scale-150 group-hover:scale-100 transition-all duration-300 ease-in-out" loading="lazy">
                </a>
                <div class=" max-w-[700px] mt-[20px]  font-poppins">
                    <a href="{{ route('produk') }}" class="mb-2 text-[28px] text-[#31384C] font-bold">
                        AUTOMOTIVE
                    </a>
                    <p class=" mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime, ducimus impedit asperiores eveniet perferendis odit eum vel, quo saepe incidunt minima esse tenetur. Eaque, temporibus.</p>
                    <a href="{{ route('produk') }}" class="mt-4 px-3 py-2 bg-[#31384C] hover:bg-[#31384C]/80 transition-all duration-200 ease-in text-white rounded-md ">
                        Selengkapnya
                    </a>
                </div>
            </div>

            <div class=" flex  gap-x-10" data-aos="fade-left" data-aos-duration="3000">
                <div class=" max-w-[700px] mt-[20px]  font-poppins text-end">
                    <a href="" class="mb-2 text-[28px] text-[#31384C] font-bold">
                        INDUSTRIAL
                    </a>
                    <p class=" mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime, ducimus impedit asperiores eveniet perferendis odit eum vel, quo saepe incidunt minima esse tenetur. Eaque, temporibus.</p>
                    <a href="" class="mt-4 px-3 py-2 bg-[#31384C] hover:bg-[#31384C]/80 transition-all duration-200 ease-in text-white rounded-md ">
                        Selengkapnya
                    </a>
                </div>
                <a href="" class="relative bg-dark rounded-[10px] group overflow-hidden"">
                    <img src="./images/industrial.jpg" alt="" class="object-cover object-center w-full h-full rounded-[5px] aspect-video scale-150 group-hover:scale-100 transition-all duration-300 ease-in-out" loading="lazy">
                </a>
            </div>

            <div class=" flex  gap-x-10" data-aos="fade-right" data-aos-duration="3000">
                <a href="" class="relative bg-dark rounded-[10px] group overflow-hidden"">
                    <img src="./images/industrial.jpg" alt="" class="object-cover object-center w-full h-full rounded-[5px] aspect-video scale-150 group-hover:scale-100 transition-all duration-300 ease-in-out" loading="lazy">
                </a>
                <div class=" max-w-[700px] mt-[30px]  font-poppinS">
                    <a href="" class="mb-2 text-[28px] text-[#31384C] font-bold">
                        GREASES
                    </a>
                    <p class=" mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime, ducimus impedit asperiores eveniet perferendis odit eum vel, quo saepe incidunt minima esse tenetur. Eaque, temporibus.</p>
                    <a href="" class="mt-4 px-3 py-2 bg-[#31384C] hover:bg-[#31384C]/80 transition-all duration-200 ease-in text-white rounded-md ">
                        Selengkapnya
                    </a>
                </div>
            </div>
            
        </div>
    </section>
   
@endsection