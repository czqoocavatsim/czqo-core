@extends('layouts.email')

@section('to-line', 'Hi '. $user->full_name_cid . ',')

@section('message-content')
<h2>{{$news->title}}</h2>
{{$news->html()}}
@endsection

@section('from-line')
@if ($news->show_author)
Sent by <b>{{$news->user->full_name_cid}} ({{$news->user->staffProfile->position}})</b>
@else
Sent by the Gander Oceanic Staff Team
@endif
@endsection

@section('footer-to-line', $user->full_name_cid.' ('.$user->email.')')

@section('footer-reason-line')
@if ($news->email_level == 1)
you are an oceanic controller on the CZQO controller roster.
@elseif ($news->email_level == 2)
you hold an account on the CZQO website and have subscribed to emails.
@elseif ($news->email_level == 3)
you hold an account on the CZQO website.
@endif
@endsection
