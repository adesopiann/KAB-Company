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
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul class="mb-0 mt-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
               <form id="contactForm" method="post" action="{{ route('contact.send') }}">
                        @csrf
                        <div class="mb-3">
                            <input class="form-control placeholder:text-center shadow appearance-none border border-[#31384C] rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="name" placeholder="Name"/>
                        </div>
                        <div class="mb-3">
                            <input class="form-control placeholder:text-center shadow appearance-none border border-[#31384C] rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email"
                                   placeholder="Email Address"/>
                        </div>
                        <div class="mb-3">
                            <input class="form-control placeholder:text-center shadow appearance-none border border-[#31384C] rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="subject" type="text" name="subject"
                                   placeholder="Subject"/>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control placeholder:text-center shadow appearance-none border border-[#31384C] rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" type="text" name="message" placeholder="Message"
                                      style="height: 10rem;"></textarea>
                        </div>
                        <div class="">
                            <button class="g-recaptcha  bg-[#31384C] px-3 py-2 rounded-md text-white hover:bg-[#31384C]/80"
                                    data-sitekey="{{ config('services.recaptcha_v3.siteKey') }}"
                                    data-callback="onSubmit"
                                    data-action="submitContact">Kirim</button>
                        </div>
                </form>
            </div>
        </div>
    </section>

@endsection

                    