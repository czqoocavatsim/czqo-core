@extends('layouts.primary')
@section('content')
<div x-data="{ changeProfileImageModal: false, changeDisplayNameModal: false }">
    <div style="background-image: url({{ $bannerImg }})" class="bg-center bg-cover">
        <div class="lg:mx-auto lg:max-w-6xl px-14 py-10">
            <div class="text-2xl text-white font-medium">myCZQO</div>
            <div class="flex flex-row items-center mt-8">
                <img class="rounded-full h-28 w-28 mr-8" src="{{ auth()->user()->profile_image }}" alt="">
                <div class="flex flex-col justify-start space-y-2">
                    <div class="text-white text-3xl font-bold">
                        {{ auth()->user()->full_name }}
                    </div>
                    <div class="text-white text-xl">
                        {{ auth()->user()->highest_role->name }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lg:mx-auto lg:max-w-6xl px-14 py-10 flex flex-col space-y-8">
        <div class="text-md text-gray-600 italic">
            "{{$quote->contents->quotes[0]->quote}}" ~ {{$quote->contents->quotes[0]->author}}
        </div>
        <div>
            <div class="flex flex-row space-x-4">
                <a class="p-4 border rounded-md text-sm flex flex-col space-y-3 cursor-pointer hover:bg-gray-100 transition">
                    <div class="flex flex-row space-x-2 items-center font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                        <span>Sample notification</span>
                    </div>
                    <p class="text-xs text-gray-700">
                        Notification content
                    </p>
                </a>
                <a class="p-4 border rounded-md text-sm flex flex-col space-y-3 cursor-pointer hover:bg-gray-100 transition">
                    <div class="flex flex-row space-x-2 items-center font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                        <span>Sample notification</span>
                    </div>
                    <p class="text-xs text-gray-700">
                        Notification content
                    </p>
                </a>
            </div>
        </div>
        <div>
            <div class="text-xl text-czqo-blue font-medium">
                Make it yours
            </div>
            <div class="mt-4 flex flex-row space-x-8">
                <a @click="changeProfileImageModal = true" class="flex flex-row space-x-2 group hover:underline cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-czqo-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="text-gray-700">Change profile image</span>
                </a>
                <a @click="changeDisplayNameModal = true" class="flex flex-row space-x-2 group hover:underline cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-czqo-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                    <span class="text-gray-700">Change display name</span>
                </a>
            </div>
        </div>
        <div>
            <div class="text-xl text-czqo-blue font-medium">
                Discord
            </div>
            <div class="mt-4 p-4 border rounded-md text-sm flex flex-col space-y-4">
                <div class="flex flex-row space-x-2 items-center">
                    @if (auth()->user()->discord_linked)
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-green-600 font-bold">
                            @if (auth()->user()->member_of_discord_guild)
                                Connected and in CZQO server
                            @else
                                Connected with Discord
                            @endif
                        </span>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-red-600 font-bold">
                            Not connected with Discord
                        </span>
                    @endif
                </div>
                @if (auth()->user()->discord_linked)
                    <div class="flex flex-row space-x-2 items-center">
                        <img src="{{ auth()->user()->discord_profile_image }}" alt="" class="h-10 w-10 rounded-full">
                        <span>
                            {{ auth()->user()->discord_user->username }}#{{ auth()->user()->discord_user->discriminator }}
                        </span>
                    </div>
                @else
                    <p>Connect your Discord account to join our community Discord server and use your profile image on CZQO.</p>
                    <a href="{{ route('me.discord.link') }}" class="text-sm border hover:bg-czqo-blue hover:text-white transition rounded-md px-4 py-2 w-28 text-center">Connect</a>
                @endif
                @if (auth()->user()->discord_linked)
                    <div class="mt-4 flex flex-row space-x-4 text-xs">
                        @if (! auth()->user()->member_of_discord_guild)
                            <a href="{{ route('me.discord.join') }}" class="flex flex-row space-x-2 group text-xs border hover:bg-czqo-blue hover:text-white transition rounded-md px-4 py-2 cursor-pointer items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                                <span>Join our Discord</span>
                            </a>
                        @endif
                        <a href="{{ route('me.discord.unlink') }}" class="flex flex-row space-x-2 group text-xs border hover:bg-gray-300 transition rounded-md px-4 py-2 cursor-pointer items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <span>Disconnect</span>
                        </a>
                    </div>
                @endif
            </div>
        </div>
        <div>
            <div class="text-xl text-czqo-blue font-medium">
                Management
            </div>
            <div class="mt-4 flex flex-row space-x-8">
                <a href="{{ route('me.data') }}" class="flex flex-row space-x-2 group hover:underline cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-czqo-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" />
                    </svg>
                    <span class="text-gray-700">Manage your data</span>
                </a>
            </div>
        </div>
    </div>

    <div @click.away="changeProfileImageModal = false" x-show.transition="changeProfileImageModal" class="fixed z-10 inset-0 overflow-y-auto" role="dialog">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-50 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <livewire:my.preferences.change-profile-image/>
            </div>
        </div>
    </div>

    <div @click.away="changeDisplayNameModal = false" x-show.transition="changeDisplayNameModal" class="fixed z-10 inset-0 overflow-y-auto" role="dialog">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-50 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <livewire:my.preferences.change-display-name/>
            </div>
        </div>
    </div>
</div>

@endsection
