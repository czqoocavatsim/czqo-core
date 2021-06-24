@extends('layouts.primary')

@section('content')
    <script src="https://unpkg.com/jarallax@1/dist/jarallax.min.js"></script>
    <div style="height: calc(100vh - 96px); z-index: -1" class="z-depth-0 jarallax">
        <img src="https://ganderoceanicoca.ams3.digitaloceanspaces.com/resources/media/img/Prepar3D_4Bnh0Jn4aN.png" alt="" class="jarallax-img">
        <div class="backdrop-filter backdrop-blur-sm flex flex-col min-h-full justify-center">
            <div class="w-full lg:mx-auto lg:max-w-6xl text-left px-14">
                <div class="-mt-20 text-5xl text-white font-medium">
                    Cool. Calm. Collected.
                </div>
                <div class="mt-5 text-xl text-white font-medium">
                    Welcome to VATSIM's Gander Oceanic!
                </div>
            </div>
        </div>
    </div>
    <div class="lg:mx-auto lg:max-w-6xl -mt-28 bg-czqo-blue shadow-lg lg:rounded-lg mb-20">
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
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="flex flex-col space-y-4">
                    @if ($news)
                        <div class="h-72 w-full relative rounded-md">
                            <img class="h-full w-full rounded-md object-cover" src="{{ $news->image }}" alt="">
                            <div class="origin-top absolute top-0 px-10 pb-10 h-full w-full flex flex-col justify-end space-y-4 backdrop-filter backdrop-blur rounded-md">
                                <a href="{{route('news.articlepublic', $news->slug)}}" class="text-3xl text-white font-bold hover:underline">
                                    {{ $news->title }}
                                </a>
                                <div class="text-md text-white">
                                    {{ $news->summary }}
                                </div>
                                <a href="{{route('news')}}" class="text-md flex flex-row space-x-3 text-white hover:underline">
                                    <span>All articles</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="flex flex-col space-y-4 text-white">
                    <div class="text-3xl font-bold flex flex-row space-x-4 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.636 18.364a9 9 0 010-12.728m12.728 0a9 9 0 010 12.728m-9.9-2.829a5 5 0 010-7.07m7.072 0a5 5 0 010 7.07M13 12a1 1 0 11-2 0 1 1 0 012 0z" />
                        </svg>
                        <span>Online controllers</span>
                    </div>
                    <div class="mt-3">
                        @if (count($onlineControllers) == 0)
                            <div class="flex flex-row space-x-4 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>No-one online...</span>
                            </div>
                        @else
                            @foreach ($onlineControllers as $controller)
                                <div class="flex flex-row space-x-2 items-center mb-3">
                                    <span class="font-medium">
                                        {{ $controller['callsign'] }}
                                    </span>
                                    <span>-</span>
                                    @if ($rosterMember = App\Models\Roster\RosterMember::where('cid', $controller['cid'])->first())
                                        <div class="flex flex-row space-x-3 items-center">
                                            <img src="{{$rosterMember->user->profile_image}}" class="h-6 w-6 rounded-full">
                                            <span>
                                                {{$rosterMember->user->fullName('FLC')}}
                                            </span>
                                        </div>
                                    @else
                                        <span>
                                            {{$controller['realname']}} {{$controller['cid']}}
                                        </span>
                                    @endif
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lg:mx-auto lg:max-w-6xl my-12 px-14">
        <div class="text-czqo-blue font-bold text-3xl">
            We control the skies over the North Atlantic on VATSIM.
        </div>
        <p class="text-md text-gray-800 mt-4">
            Gander Oceanic is VATSIM's coolest, calmest and most collected provider of Oceanic control. With our worldwide team of skilled Oceanic controllers, we pride ourselves on our expert, high-quality service to pilots flying across the North Atlantic. Our incredible community of pilots and controllers extend their warmest welcome and wish you all the best for your oceanic crossings!
        </p>
        <div class="mt-8">
            <a href="{{ route('about.who-we-are') }}" class="block border hover:bg-czqo-blue hover:text-white transition rounded-md px-4 py-4 w-44 text-center">Learn more</a>
        </div>
    </div>
    <script>
        jarallax(document.querySelectorAll('.jarallax'), {
            speed: 0.2
        });
    </script>
@endsection
