@extends('layouts.main')
@section('content')
    {{-- gambar slid --}}
    <div id="carouselExampleCrossfade" class="relative px-36 py-5 fixed" data-te-carousel-init data-te-carousel-slide>
        <!--Carousel indicators-->
        <div class="absolute inset-x-0 bottom-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
            data-te-carousel-indicators>
            <button type="button" data-te-target="#carouselExampleCrossfade" data-te-slide-to="0" data-te-carousel-active
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-te-target="#carouselExampleCrossfade" data-te-slide-to="1"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-label="Slide 2"></button>
            <button type="button" data-te-target="#carouselExampleCrossfade" data-te-slide-to="2"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-label="Slide 3"></button>
        </div>

        <!--Carousel items-->
        <div class="relative w-full z-0 overflow-hidden after:clear-both after:block after:content-['']">
            <!--First item-->
            <div class="relative float-left -mr-[100%] w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-fade data-te-carousel-item data-te-carousel-active>
                <img src="aseets/300ppi/bn1.png" class="block w-full" alt="Wild Landscape" />
            </div>
            <!--Second item-->
            <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-fade data-te-carousel-item>
                <img src="aseets/300ppi/bn2.jpeg" class="block w-full" alt="Camera" />
            </div>
            <!--Third item-->
            <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-fade data-te-carousel-item>
                <img src="aseets/300ppi/bn3.jpeg" class="block w-full" alt="Exotic Fruits" />
            </div>
        </div>

        <!--Carousel controls - prev item-->
        <button
            class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button" data-te-target="#carouselExampleCrossfade" data-te-slide="prev">
            <span class="inline-block h-8 w-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </span>
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
        </button>
        <!--Carousel controls - next item-->
        <button
            class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button" data-te-target="#carouselExampleCrossfade" data-te-slide="next">
            <span class="inline-block h-8 w-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </span>
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
        </button>
    </div>

    <div class="mb-3">
        <div class="relative mb-4 px-36 flex w-3/6 flex-wrap items-stretch">
            <input type="search"
                class="relative m-0 -mr-0.5 block w-[1px] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                placeholder="Search" aria-label="Search" aria-describedby="button-addon3" />

            <!--Search button-->
            <button
                class="relative z-[2] rounded-r border-2 border-primary px-6 py-2 text-xs font-medium uppercase text-primary transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                type="button" id="button-addon3" data-te-ripple-init>
                Search
            </button>
        </div>
    </div>
    <div class="px-36 py-2">
        <button type="button"
            class="inline-block rounded bg-indigo-300 px-8 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-Gray-400 shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
            Game populer
        </button>
    </div>

    <div class="px-36 py-2 pb-10 flex justify-between">
        <a href="mobile-lagends" class="px-4 py-4 rounded-lg w-2/12 text-center border-indigo-300 bg-indigo-300">
            <img src="aseets/gambar/ml.png" class=" mb-4 w-32 rounded-lg" alt="Avatar" />
            <h5 class="mb-2 text-lg font-medium leading-tight">Mobile legend</h5>
        </a>

        <a href="free-fire" class="px-4 py-4 rounded-lg w-2/12 text-center  border-indigo-300 bg-indigo-300">
            <img src="aseets/gambar/ff.png" class=" mb-4 w-32 rounded-lg" alt="Avatar" />
            <h5 class="mb-2 text-lg font-medium leading-tight">Free Fire</h5>
        </a>
        <a href="pubg" class="px-4 py-4 rounded-lg w-2/12 text-center  border-indigo-300 bg-indigo-300">
            <img src="aseets/gambar/pubg.png" class=" mb-4 w-32 rounded-lg" alt="Avatar" />
            <h5 class="mb-2 text-lg font-medium leading-tight">PUBG Mobile</h5>
        </a>
        <a href="genshin-impact" class="px-4 py-4 rounded-lg w-2/12 text-center  border-indigo-300 bg-indigo-300">
            <img src="aseets/gambar/gi.png" class=" mb-4 w-32 rounded-lg" alt="Avatar" />
            <h5 class="mb-2 text-lg font-medium leading-tight">Genshin Impact</h5>
        </a>

    </div>
@endsection
