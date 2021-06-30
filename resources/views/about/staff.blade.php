@extends('layouts.primary')

@section('content')
@include('layouts.large-page-header-blue', ['title' => 'Staff'])
<div class="lg:mx-auto lg:max-w-6xl px-14 py-6">
    <div class="grid grid-cols-4 gap-6">
        <div class="">
            <div class="flex flex-col space-y-2" style="position: sticky; top: 20px">
                @foreach($groups as $g)
                <a href="#{{$g->slug}}" class="hover:bg-czqo-blue hover:text-white transition px-4 py-3 rounded-md border">
                    {{$g->name}}
                </a>
                @endforeach
                <a href="#instructors" class="hover:bg-czqo-blue hover:text-white transition px-4 py-3 rounded-md border">Instructors</a>
            </div>
        </div>
        <div class="col-span-3">
            @foreach($groups as $g)
            <a id="{{$g->slug}}"><h3 class="mb-3 text-czqo-blue text-2xl">{{$g->name}}</h3></a>
            <p class="text-gray-600 text-sm">{{$g->description}}</p>
            @if ($g->slug == 'seniorstaff')
                <div class="grid grid-cols-2 gap-4 mt-4">
                    @foreach($g->members as $member)
                        <div class="@if($member->shortform == 'ocachief') col-span-2 @else col-span-1 @endif">
                            <div class="p-4 bg-gray-100 h-full rounded-md">
                                <div class="flex flex-row">
                                    @if(!$member->vacant())
                                    <img src="{{$member->user->profile_image}}" class="h-20 w-20 mr-6 rounded-full">
                                    @else
                                    <img src="https://ganderoceanicoca.ams3.cdn.digitaloceanspaces.com/resources/user.png" class="h-20 w-20 mr-6 rounded-full">
                                    @endif
                                    <div class="flex flex-col space-y-2">
                                        <h4 class="text-xl font-bold">
                                            @if($member->vacant())
                                            Vacant
                                            @else
                                            {{$member->user->full_name}}
                                            @endif
                                        </h4>
                                        <h5>{{$member->position}}</h5>
                                        <p class="text-sm text-gray-600">{{$member->description}}</p>
                                        <p class="mt-3 text-sm">
                                            <a class="hover:underline text-blue-500" href="mailto:{{$member->email}}">Email</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
            <div class="row">
                @foreach($g->members as $member)
                    <div class="@if($member->shortform == 'ocachief') col-span-2 @else col-span-1 @endif">
                        <div class="p-4 bg-gray-100 h-full rounded-md">
                            <div class="flex flex-row">
                                @if(!$member->vacant())
                                    <img src="{{$member->user->profile_image}}" class="h-20 w-20 mr-6 rounded-full">
                                @else
                                    <img src="https://ganderoceanicoca.ams3.cdn.digitaloceanspaces.com/resources/user.png" class="h-20 w-20 mr-6 rounded-full">
                                @endif
                                <div class="flex flex-col space-y-2">
                                    <h4 class="text-xl font-bold">
                                        @if($member->vacant())
                                            Vacant
                                        @else
                                            {{$member->user->full_name}}
                                        @endif
                                    </h4>
                                    <h5>{{$member->position}}</h5>
                                    <p class="text-sm text-gray-600">{{$member->description}}</p>
                                    <p class="mt-3 text-sm">
                                        <a class="hover:underline text-blue-500" href="mailto:{{$member->email}}">Email</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
            <hr>
            @endforeach
            <a id="instructors"><h3 class="mb-3 blue-text font-weight-bold">Instructors</h3></a>
            <div class="row">
                @foreach ($instructors as $instructor)
                    <div class="col-md-6 mb-3">
                        <div class="card shadow-none grey lighten-4 p-4" style="height: 100%;">
                            <div class="d-flex flex-row">
                                <img src="{{$instructor->user->profile_image}}" style="height: 80px; width:80px;margin-right: 15px; border-radius: 50%;">
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold">
                                        {{$instructor->user->full_name}}
                                    </h4>
                                    <p>{{$instructor->staffPageTagline()}}</p>
                                    <p class="mb-0">
                                        <a href="mailto:{{$instructor->email()}}"><i class="fa fa-envelope"></i>&nbsp;Email</a>&nbsp;&nbsp;•&nbsp;&nbsp;<a href=""  data-toggle="modal" data-target="#viewInstructorBio{{$instructor->id}}"><i class="fas fa-user"></i>&nbsp;Biography</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <p class="text-muted mt-3">
        Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
    </p>
</div>

@foreach ($staff as $member)
    <div class="modal fade" id="viewStaffBio{{$member->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{$member->user->fname}}'s biography</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if ($member->user->bio)
                        {{$member->user->bio}}
                    @else
                        This person has no biography :(
                    @endif
                </div>
            </div>
        </div>
    </div>
@endforeach
@foreach ($instructors as $member)
    <div class="modal fade" id="viewInstructorBio{{$member->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{$member->user->fname}}'s biography</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if ($member->user->bio)
                        {{$member->user->bio}}
                    @else
                        This person has no biography :(
                    @endif
                </div>
            </div>
        </div>
    </div>
@endforeach
@stop
