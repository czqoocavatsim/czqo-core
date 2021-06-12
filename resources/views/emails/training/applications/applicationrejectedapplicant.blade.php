@extends('layouts.email')

@section('to-line', 'Hi '. $application->user->fname . ',')

@section('message-content')
<p>Your application for Gander Oceanic has been rejected. This may be because you do not meet the requirements as per our General Policy.</p>
<hr>
You can view your application and the exact reason for rejection <a href="{{route('training.applications.show', $application->reference_id)}}">here.</a>
@endsection

@section('from-line')
Sent by Gander Oceanic OCA
@endsection

@section('footer-to-line', $application->user->full_name_cid.' ('.$application->user->email.')')

@section('footer-reason-line')
there is an update on your application to become a Gander Oceanic Controller.
@endsection
