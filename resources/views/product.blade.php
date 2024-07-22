@extends("components.main")

@section("main")
<section class=" mx-[100px] my-[100px]">
    <div class=" flex gap-x-8 justify-center font-poppins ">
        <div class="grid" data-aos="fade-in" data-aos-duration="3000">
           <a href="" class="relative bg-dark rounded-[10px] group overflow-hidden"">
                    <img src="./images/automotive2.jpg" alt="" class="object-cover object-center w-full h-full rounded-[5px] aspect-video scale-150 group-hover:scale-100 transition-all duration-300 ease-in-out" loading="lazy">
            </a>
            <div class="mt-2">
                <a href="" class="font-extrabold text-xl hover:text-black/70">Automotive </a>
                <p class="text-sm ">129 Produk</p>
            </div>
        </div>
        <div class="grid" data-aos="fade-in" data-aos-duration="3000">
           <a href="" class="relative bg-dark rounded-[10px] group overflow-hidden"">
                    <img src="./images/industrial.jpg" alt="" class="object-cover object-center w-full h-full rounded-[5px] aspect-video scale-150 group-hover:scale-100 transition-all duration-300 ease-in-out" loading="lazy">
            </a>
            <div class="mt-2">
                <a href="" class="font-extrabold text-xl hover:text-black/70">Industrial </a>
                <p class="text-sm ">129 Produk</p>
            </div>
        </div>
        <div class="grid" data-aos="fade-in" data-aos-duration="3000">
           <a href="" class="relative bg-dark rounded-[10px] group overflow-hidden"">
                    <img src="./images/automotive2.jpg" alt="" class="object-cover object-center w-full h-full rounded-[5px] aspect-video scale-150 group-hover:scale-100 transition-all duration-300 ease-in-out" loading="lazy">
            </a>
            <div class="mt-2">
                <a href="" class="font-extrabold text-xl hover:text-black/70">Greases </a>
                <p class="text-sm ">129 Produk</p>
            </div>
        </div>
        
    </div>
</section>

<section class=" mx-[100px] mb-[75px] font-poppins">
    <div class="">
        <h1 class=" text-3xl font-bold text-center">AUTOMOTIVE</h1>
        <P class=" text-center mt-2">Oli mesin, Diesel, Mobil, Motor, Transmisi dan Differential</P>
    </div>
    <div class="flex justify-center gap-x-3 mt-4 text-white">
        <a href="" class=" py-2 px-3 bg-[#31384C] rounded-md shadow-md hover:scale-105 transition-all duration-200 ease-in">Passenger Car</a>
        <a href="" class=" py-2 px-3 bg-[#31384C] rounded-md shadow-md hover:scale-105 transition-all duration-200 ease-in">Motorcycle</a>
        <a href="" class=" py-2 px-3 bg-[#31384C] rounded-md shadow-md hover:scale-105 transition-all duration-200 ease-in">Marine Oils</a>
        <a href="" class=" py-2 px-3 bg-[#31384C] rounded-md shadow-md hover:scale-105 transition-all duration-200 ease-in">Transmission & Gear Oils</a>
        <a href="" class=" py-2 px-3 bg-[#31384C] rounded-md shadow-md hover:scale-105 transition-all duration-200 ease-in">Gas Engine Oils</a>
    </div>



    </div>
</section>

<section class=" mx-[100px] mb-[75px] font-poppins"> 
    <div class="flex flex-wrap gap-10 justify-center">
        @for ($i = 0; $i < 8; $i++)
        <div class="max-w-[250px] border-2 border-gray-300/40 rounded-md pb-5 px-4 hover:scale-110 transition-all duration-200 shadow-md" loading="lazy">
                <img src="{{ asset('/images/product/i-Sint.png') }}" alt="Eni-i" class="hover:scale-105 transition-all duration-300 ease-in">
                <p class="text-center mt-2 font-bold text-lg hover:scale-110 transition-all duration-200">i-Sint Formula 3000 ID</p>
                <input 
                    type="button" 
                    value="Selengkapnya"
                    data-modal-target="default-modal" data-modal-toggle="default-modal"
                    class="w-fit bg-[#31384C] py-2 px-3 text-[12px] text-white rounded grid mx-auto mt-2 hover:cursor-pointer hover:bg-[#31384C]/80">
        </div>
        @endfor
    </div>

        <!-- Main modal -->
            <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 -left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class=" bg-white rounded-md shadow-md flex py-5 px-8 mx-[200px]">
                    <img  src="{{ asset('/images/product/i-Sint.png') }}" alt=""  >
                    <div class=" mt-[100px]">
                        <h1 class=" font-bold text-2xl">i-Sint Formula 3000 ID</h1>

                        <div class=" mt-3">
                            <h3 class=" font-semibold text-xl pb-1 border-gray-300/50 w-fit mb-1">Spesifikasi</h3>
                            <p class="">API SM</p>
                        </div>

                        <div class=" mt-3">
                            <h3 class=" font-semibold text-xl pb-1 border-gray-300/50 w-fit mb-1">Deskripsi</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique inventore ex veritatis ipsum fugiat ratione alias eos excepturi, molestias nobis necessitatibus dolore consectetur, commodi labore.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal End -->
        

            <!-- Pagination -->
             <div class="flex justify-center gap-4 mt-[50px]">
                <button
                    class="flex items-center gap-2 px-6 py-3 font-sans text-xs font-bold text-center text-gray-900 uppercase align-middle transition-all rounded-full select-none hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    aria-hidden="true" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                    </svg>
                </button>
                <div class="flex items-center gap-2">
                    <button
                    class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-full text-center align-middle font-sans text-xs font-medium uppercase text-gray-900 transition-all hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button">
                    <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        1
                    </span>
                    </button>
                    <button
                    class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-full text-center align-middle font-sans text-xs font-medium uppercase text-gray-900 transition-all hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button">
                    <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        2
                    </span>
                    </button>
                    <button
                    class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-full bg-gray-900 text-center align-middle font-sans text-xs font-medium uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button">
                    <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        3
                    </span>
                    </button>
                    <button
                    class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-full text-center align-middle font-sans text-xs font-medium uppercase text-gray-900 transition-all hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button">
                    <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        4
                    </span>
                    </button>
                    <button
                    class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-full text-center align-middle font-sans text-xs font-medium uppercase text-gray-900 transition-all hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button">
                    <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        5
                    </span>
                    </button>
                </div>
                <button
                    class="flex items-center gap-2 px-6 py-3 font-sans text-xs font-bold text-center text-gray-900 uppercase align-middle transition-all rounded-full select-none hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    aria-hidden="true" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                    </svg>
                </button>
            </div> 
            <!-- Pagination End -->
</section>

@endsection