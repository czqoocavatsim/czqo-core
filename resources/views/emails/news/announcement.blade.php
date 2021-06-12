@extends('layouts.email')

@section('to-line', 'Hi '. $user->full_name_cid . ',')

@section('message-content')
<h2>{{$announcement->title}}</h2>
{{$announcement->html()}}
@endsection

@section('from-line')
Sent by <b>{{$announcement->user->full_name_cid}} ({{$announcement->user->staffProfile->position ?? 'No staff position found'}})</b>
@endsection

@section('footer-to-line', $user->full_name_cid.' ('.$user->email.')')

@section('footer-reason-line')
{{$announcement->reason_for_sending}}
@endsection
