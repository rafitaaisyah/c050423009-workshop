
@extends('layouts.app')
@section('title', 'Training Center Poliban')
@section('content')


<div class="h-[112px]">
    <nav class="fixed top-0 flex items-center w-full justify-between p-8 bg-white z-30">
        <a href="index.html">
            <img src="assets/images/logos/Logo.svg" class="flex shrink-0" alt="logo">
        </a>
        <ul class="flex items-center justify-center gap-8">
            <li class="font-medium text-aktiv-grey hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                <a href="view-booking.html">View My Booking</a>
            </li>
            <li class="font-medium text-aktiv-grey hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                <a href="">Workshop</a>
            </li>
            <li class="font-medium text-aktiv-grey hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                <a href="">Community</a>
            </li>
            <li class="font-medium text-aktiv-grey hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                <a href="">Testimony</a>
            </li>
        </ul>
        <a href="#" class="flex items-center rounded-full h-12 px-6 gap-[10px] w-fit shrink-0 bg-aktiv-green">
            <span class="font-semibold text-white">Contact CS</span>
            <img src="assets/images/icons/whatsapp.svg" class="w-6 h-6" alt="icon">
        </a>
    </nav>
</div>
<section id="Category" class="w-full max-w-[1280px] mx-auto px-[52px] mt-[52px] mb-[100px]">
    <div class="flex flex-col gap-9">
        <div class="flex flex-col items-center gap-1">
            <h1 class="font-Neue-Plak-bold text-[32px] leading-[44.54px] capitalize">
                {{$category->name}} ({{$category->workshops->count()}})
            </h1>
            <div class="flex items-center gap-2 ">
                <a class="font-medium text-aktiv-grey last:font-semibold last:text-aktiv-black">Homepage</a>
                <span>></span>
                <a class="font-medium text-aktiv-grey last:font-semibold last:text-aktiv-black">Category Workshop</a>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-6">
            @forelse ($category->workshops as $itemNewWorkshop )
    <a href="{{ route('front.details', $itemNewWorkshop->slug) }}" class="card">
        <div class="flex flex-col h-full justify-between rounded-3x1 p-6 gap-9 bg-white">
            <div class="flex flex-col gap-[18px]">
                <div class="flex items-center gap-3">
                    <div class="w-16 h-16 rounded-full flex shrink-0 overflow-hidden">
                        <img src="{{ Storage::url($itemNewWorkshop->instructor->avatar) }}" class="w-full h-full" alt="Instructor Avatar">
                    </div>
                    <div class="flex flex-col gap-[2px]">
                        <p class="font-semibold text-lg leading-[27px]">
                            {{ $itemNewWorkshop->instructor->name }}
                        </p>
                        <p class="font-medium text-aktiv-grey">
                            {{ $itemNewWorkshop->instructor->occupation }}
                        </p>
                    </div>
                </div>

                <div class="thumbnail-container relative h-[200px] rounded-xl bg-[#D9D9D9] overflow-hidden">
                    <img src="{{ Storage::url($itemNewWorkshop->thumbnail) }}" class="w-full h-full object-cover" alt="Workshop Thumbnail">
                </div>

                @if($itemNewWorkshop->is_open) 
                    @if($itemNewWorkshop->has_started)
        </div>
    </div>
</section>
<footer class="w-full p-[52px] bg-white">
    <div class="flex flex-col w-full max-w-[1176px] mx-auto gap-8">
        <div class="flex flex-col items-center gap-4">
            <img src="assets/images/logos/Logo-blue.svg" class="h-10" alt="logo">
            <p class="font-medium text-aktiv-grey">Ipsum is a company engaged in offline education.</p>
        </div>
        <hr class="border-[#E6E7EB]">
        <div class="grid grid-cols-3 items-center">
            <p class="flex font-medium text-aktiv-grey">© 2024 Workflow Copyright</p>
            <ul class="flex items-center justify-center gap-6">
                <li class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                    <a href="#">Workshop</a>
                </li>
                <li class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                    <a href="#">Community</a>
                </li>
                <li class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                    <a href="#">Testimony</a>
                </li>
                <li class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                    <a href="#">About Us</a>
                </li>
            </ul>
            <ul class="flex items-center justify-end gap-6">
                <li class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                    <a href="#">Instagram</a>
                </li>
                <li class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                    <a href="#">Twitter</a>
                </li>
            </ul>
        </div>
    </div>
</footer>

@endsection