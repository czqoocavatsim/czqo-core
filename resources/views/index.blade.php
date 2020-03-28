@extends('layouts.master')
@section('description', 'Cool, calm and collected oceanic control services in the North Atlantic on VATSIM.')

@section('content')
    <div class="card card-image" style="height: 250px;">
        <div id="map" style="height: 100%; margin:0; background:#000; z-index: 0 !important; position: relative;">
            <div class="container flex-center">
                <h5 style="color:#fff;"><i class="fas fa-circle-notch fa-spin"></i>
                    &nbsp;
                    Loading map...
                </h5>
            </div>
        </div>
        <div class="mask flex-center rgba-black-light" style="position:absolute; top:0; left:0; z-index: 1; height: 100%; width: 100%;">
            <div class="container">
                <div class="py-5">
                    <h1 class="h1 my-4 py-2" style="font-size: 3em; color: #fff;">Cool, calm and collected oceanic control services in the North Atlantic.</h1>
                </div>
            </div>
        </div>
    </div>
    @if (!Auth::check())
    <div class="jumbotron blue text-white py-3 mb-0">
        <div class="container">
            <div class="d-flex flex-row justify-content-between align-items-center">
                <h3 class="m-0 py-0">Join our talented controller team today!</h3>
                <a href="{{route('application.start')}}" class="m-0 btn btn-light py-2 px-4 text-nowrap" style="background-color: #fff !important;">Login & Apply</a>
            </div>
        </div>
    </div>
    @elseif (Auth::check() && !Auth::user()->rosterProfile)
    <div class="jumbotron blue text-white py-3 mb-0">
        <div class="container">
            <div class="d-flex flex-row justify-content-between align-items-center">
                <h3 class="m-0 py-0">Join our talented controller team today!</h3>
                <a href="{{route('application.start')}}" class="m-0 btn btn-light py-2 px-4 text-nowrap" style="background-color: #fff !important;">Apply</a>
            </div>
        </div>
    </div>
    @else
    <div class="jumbotron blue text-white py-3 mb-0">
        <div class="container">
            <div class="d-flex flex-row justify-content-between align-items-center">
                <h3 class="m-0 py-0">Welcome back, {{Auth::user()->fullName('F')}}!</h3>
                <a href="{{route('dashboard.index')}}" class="m-0 btn btn-light py-2 px-4 text-nowrap" style="background-color: #fff !important;">Go To Dashboard</a>
            </div>
        </div>
    </div>
    @endif
    <div class="container py-4 pt-1">
        <div class="row">
            <div class="col-md-6">
                <h3>Welcome to Gander Oceanic!</h3>
                <p>With a diverse team of skilled and experienced controllers we operate the Gander Oceanic FIR in the North-Western Atlantic Ocean. We pride ourselves in providing the coolest, calmest and most collected Oceanic service on the VATSIM network to pilots traversing the North Atlantic Ocean. Our staff extends their warmest welcome to you and whether you are young, old, experienced or new, we are bound to have something for you available on our website. Please contact us if you have any questions, or even if you just want to say hi!</p>
                <h5><b>Andrew Ogden, FIR Chief</b></h5>
            </div>
            <div class="col-md-6">
                <h3>Online Controllers</h3>
                <ul class="list-unstyled ml-0 mt-3 p-0">
                    @if(count($ganderControllers) < 1 && count($shanwickControllers) < 1)
                    <li class="mb-2">
                        <div class="card shadow-none black-text blue-grey lighten-5 p-3">
                            <div class="d-flex flex-row justify-content-between align-items-center mb-1">
                                <h4 class="m-0">No controllers online</h4>
                            </div>
                        </div>
                    </li>
                    @endif
                    @foreach($ganderControllers as $controller)
                    <li class="mb-2">
                        <div class="card shadow-none black-text blue-grey lighten-5 p-3">
                            <div class="d-flex flex-row justify-content-between align-items-center mb-1">
                                <h4 class="m-0">{{$controller['callsign']}}</h4>
                                <span><i class="far fa-user-circle"></i>&nbsp;&nbsp;{{$controller['realname']}} {{$controller['cid']}}</span>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    @foreach($shanwickControllers as $controller)
                    <li class="mb-2">
                        <div class="card shadow-none black-text blue-grey lighten-5 p-3">
                            <div class="d-flex flex-row justify-content-between align-items-center mb-1">
                                <h4 class="m-0">{{$controller['callsign']}}</h4>
                                <span><i class="far fa-user-circle"></i>&nbsp;&nbsp;{{$controller['realname']}} {{$controller['cid']}}</span>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card py-3 mb-0">
            <div class="container py-2 px-4">
                <h3 class="blue-text">News</h3>
                <div class="card-deck">
                    @foreach($news as $n)
                    <div class="card homepage-news blue white-text darken-3 my-2">
                        <a href="{{route('news.articlepublic', $n->slug)}}">
                            @if ($n->image)
                            <div style="background-image:url({{$n->image}}); background-position: center; background-size:cover; height: 125px;" class="homepage-news-img waves-effect"></div>
                            @else
                            <div style="height: 125px;" class="homepage-news-img blue waves-effect"></div>
                            @endif
                        </a>
                        <div class="card-body pb-2  ">
                            <a class="card-title font-weight-bold white-text" href="{{route('news.articlepublic', $n->slug)}}"><h4>{{$n->title}}</h4></a>
                            <p>{{$n->summary}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="d-flex flex-row">
                    <a href="{{route('news')}}" class="float-right ml-auto mr-0 blue-text" style="font-size: 1.2em;">View all news <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4">
        <div class="row">
            <div class="col-md-6">
                <h3 class="blue-text">Quick Links</h3>
                <div class="d-flex flex-row">
                    <a data-toggle="modal" data-target="#discordTopModal" href="" class="blue-text mr-1" style="text-decoration:none">
                        <div class="blue-grey lighten-5" style="height: 80px; !important; width: 80px !important;">
                            <div class="d-flex flex-row justify-content-center align-items-center h-100">
                                <i class="fab fa-discord fa-3x" style="vertical-align:middle;"></i>
                            </div>
                        </div>
                    </a>
                    <a href="https://twitter.com/czqofirvatsim" class="blue-text mr-1" style="text-decoration:none">
                        <div class="blue-grey lighten-5" style="height: 80px; !important; width: 80px !important;">
                            <div class="d-flex flex-row justify-content-center align-items-center h-100">
                                <i class="fab fa-twitter fa-3x" style="vertical-align:middle;"></i>
                            </div>
                        </div>
                    </a>
                    <a href="https://www.facebook.com/czqofirvatsim" class="blue-text mr-1" style="text-decoration:none">
                        <div class="blue-grey lighten-5" style="height: 80px; !important; width: 80px !important;">
                            <div class="d-flex flex-row justify-content-center align-items-center h-100">
                                <i class="fab fa-facebook fa-3x" style="vertical-align:middle;"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            {{-- <div class="col-md-6">
                <h3 class="blue-text">New Controllers</h3>
                <div class="row">
                    @foreach ($promotions as $p)
                    <div class="col-md-6 d-flex flex-row justify-content-left py-2">
                        <img class="profile-img img-fluid" style="width: 50px; height: 50px;" src="{{$p->image}}" alt="">
                        <div style="margin-left: 10px;">
                            <h4>{{$p->title}}</h4>
                            <span>{{$p->summary}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div> --}}
        </div>
    </div>
    <script src="{{asset('js/homepagemap.js')}}"></script>
    <script>
        createHomePageMap(@php echo json_encode($planes); @endphp, @php echo json_encode($ganderControllers->toArray()); @endphp, @php echo json_encode($shanwickControllers->toArray()); @endphp);
    </script>
@endsection

