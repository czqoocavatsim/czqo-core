@extends('layouts.primary')
@section('content')
<div class="lg:mx-auto lg:max-w-6xl px-14 py-10 flex flex-col space-y-8">
    <a href="{{route('my.index')}}" class="text-gray-700 font-medium flex flex-row space-x-1 items-center hover:underline">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
        </svg>
        <span class="text-sm">myCZQO</span>
    </a>
    <h1 class="text-2xl font-bold text-czqo-blue mt-2">Manage your data</h1>
    <p class="text-gray-800 text-sm">
        Gander Oceanic takes your privacy seriously. To request removal or alteration of your data, please contact us via the methods provided on this page. To learn more, read our <a href="{{route('privacy')}}">Privacy Policy.</a>
    </p>
    <div class="mt-4 grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <div class="border p-3 px-4 rounded-md">
                <h4 class="font-bold">Account Information</h4>
                <ul class="list-unstyled">
                    <li>
                        <span class="font-weight-bold">First Name: </span> {{Auth::user()->fname}}
                    </li>
                    <li>
                        <span class="font-weight-bold">Last Name: </span> {{Auth::user()->lname}}
                    </li>
                    <li>
                        <span class="font-weight-bold">CID: </span> {{Auth::user()->id}}
                    </li>
                    <li class="mt-3">
                        <span class="font-weight-bold">Email: </span> {{Auth::user()->email}}
                    </li>
                    <li>
                        <span class="text-muted">To change your email, go to myVATSIM</span>
                    </li>
                    <li class="mt-3">
                        <span class="font-weight-bold">Rating: </span> {{Auth::user()->rating_GRP}} ({{Auth::user()->rating_short}})
                    </li>
                    <li>
                        <span class="font-weight-bold">Region: </span> {{ Auth::user()->region_name }}
                    </li>
                    <li>
                        <span class="font-weight-bold">Division: </span> {{ Auth::user()->division_name }}
                    </li>
                    @if (Auth::user()->subdivision_name)
                    <li>
                        <span class="font-weight-bold">vACC/ARTCC: </span> {{ Auth::user()->subdivision_name }}
                    </li>
                    @endif
                    <li class="mt-3">
                        <span class="font-weight-bold">Role: </span> {{Auth::user()->highest_role->name}}
                    </li>
                    @if(Auth::user()->staffProfile)
                    <li>
                        <span class="font-weight-bold">Staff Role: </span> {{Auth::user()->staffProfile->position}}
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
