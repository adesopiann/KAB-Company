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
            <div class=" text-center ">
                <h5 class=" font-poppins ">Tentang Kami</h5>
                <h2 class=" font-poppins font-semibold text-3xl mt-5">Agen Resmi Pelumas ENI</h2>
                <p class=" text-base mt-5 lg:mx-[350px] sm:mx-[20px] ">CV Karya Amanah Borneo bergerak dibidang penjualan pelumas / oli dan general supplier, Dimana kami sebagai Agen Resmi pelumas / oli ENI di Balikpapan yang melayani seluruh wilayah Indonesia</p>
                <p class=" text-base mt-5 lg:mx-[260px] sm:mx-[20px]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam quia sunt voluptatibus nesciunt quos assumenda, voluptatem consectetur repellendus fugiat repudiandae.</p>
            </div>
        </div>

        <div class=" mt-[100px] ">
            <div class="border-y-2 py-10 mx-[200px] border-black">
                <h5 class=" font-poppins font-semibold text-2xl text-center">Visi</h5>
                <div class=" max-w-[400px] border-2 border-black rounded-[10px] py-5 grid grid-cols-1 mx-auto mt-[30px] text-center">
                    <h4 class=" font-poppins font-semibold text-lg mb-2">Trusted</h4>
                    <p class="text-base ">Menjadi distributor utama yang professional & terpercaya</p>
                </div>
            </div>

            <div class="mx-[200px] mt-[70px] border-b-2 border-black pb-10">
                <h5 class=" font-poppins font-semibold text-2xl text-center">Misi</h5>
                <div class="grid grid-cols-3 gap-x-8 mt-[30px]">
                    <div class=" border-2 border-black rounded-[10px] text-center py-5 px-2">
                        <h5 class=" font-poppins font-semibold text-lg mb-2">Develop</h5>
                        <p class=" text-base ">Belajar keras dalam mengembangkan diri dan mengaplikasikan ilmu yang bermanfaat</p>
                    </div>
                    <div class="border-2 border-black rounded-[10px] text-center py-5 px-2">
                        <h5 class=" font-poppins font-semibold text-lg mb-2">Gain</h5>
                        <p  class=" text-base ">Bekerja keras dalam memperluas pasar, menjaga kualitas yang baik dan pelayanan yang prima</p>
                    </div>
                    <div class="border-2 border-black rounded-[10px] text-center py-5 px-2">
                        <h5 class=" font-poppins font-semibold text-lg mb-2">Dedicated</h5>
                        <p  class=" text-base ">Menjadi mitra kerja yang handal dan berdedikasi, solusi yang berkualitas, dan terpercaya</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-[200px]" id="product">
        <div class=" h-auto">
            <div class=" absolute h-[120vh]  text-white bg-gradient-to-t from-black/80 to-black/40">
                <div class=" mx-[50px] mt-[50px]">
                    <div class=" max-w-fit border-b-2 pb-4 ">
                        <h3 class=" font-poppins font-semibold text-3xl">Produk</h3>
                        <h5 class=" font-poppins font-semibold text-4xl mt-[20px]">Kami hadir dengan pelumas terbaik untuk
                            <br>    
                            memenuhi setiap kebutuhan anda
                        </h5>
                    </div>

                    <div class=" grid grid-cols-2 mt-[50px] gap-10">
                        <div class=" border-b-2 border-white pb-5">
                                <h3 class=" text-2xl font-poppins font-semibold">Hydraulic Oils</h3>
                                <p class=" text-base mt-2.5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus quo quasi non? Ipsam, quaerat aut.</p>
                        </div>
                        <div class="border-b-2 border-white pb-5">
                                <h3 class=" text-2xl font-poppins font-semibold">Circulating Oils</h3>
                                <p class=" text-base mt-2.5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus quo quasi non? Ipsam, quaerat aut.</p>
                        </div>
                        <div class="border-b-2 border-white pb-5">
                                <h3 class=" text-2xl font-poppins font-semibold">Turbine Oils</h3>
                                <p class=" text-base mt-2.5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus quo quasi non? Ipsam, quaerat aut.</p>
                        </div>
                        <div class="border-b-2 border-white pb-5">
                                <h3 class=" text-2xl font-poppins font-semibold">Industrial Gear Oils</h3>
                                <p class=" text-base mt-2.5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus quo quasi non? Ipsam, quaerat aut.</p>
                        </div>
                        <div class="border-b-2 border-white pb-5">
                                <h3 class=" text-2xl font-poppins font-semibold">Compressor Oils</h3>
                                <p class=" text-base mt-2.5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus quo quasi non? Ipsam, quaerat aut.</p>
                        </div>
                        <div class="border-b-2 border-white pb-5">
                                <h3 class=" text-2xl font-poppins font-semibold">Chain Oils</h3>
                                <p class=" text-base mt-2.5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus quo quasi non? Ipsam, quaerat aut.</p>
                        </div>

                    </div>

                       <div class=" mt-[30px] flex justify-center">
                            <a href="" class=" py-2 px-5 bg-white rounded-lg text-black  font-poppins font-semibold">
                                    Selengkapnya
                            </a>
                        </div>

                </div>
            </div>
            <div class="h-[120vh] w-full bg-cover bg-center" style="background-image: url('./images/landing4.png'); background-attachment: fixed;"></div>
        </div>    
    </section>
@endsection