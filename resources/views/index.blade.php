@extends('layouts.primary')

@section('content')
    <script src="https://unpkg.com/jarallax@1/dist/jarallax.min.js"></script>
    <div style="height: calc(100vh - 96px); z-index: -1" class="z-depth-0 jarallax">
        <img src="https://media.discordapp.net/attachments/498332235154456579/695982036346994708/unknown.png" alt="" class="jarallax-img">

    </div>
    <div class="lg:mx-auto lg:max-w-6xl -mt-28 bg-czqo-blue">
        @if($nextEvent)
            <div class="bg-czqo-blue-600 px-14 py-8 text-white text-xl">
                <div class="flex flex row space-x-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <div>Upcoming Event: <span class="font-bold">{{ $nextEvent->name }}</span> in {{ $nextEvent->start_timestamp->diffForHumans() }}</div>
                </div>
            </div>
        @endif
        <div class="px-14 py-14">
            asd
        </div>
    </div>
    <script>
        jarallax(document.querySelectorAll('.jarallax'), {
            speed: 0.2
        });
    </script>
@endsection
