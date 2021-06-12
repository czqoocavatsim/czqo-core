@extends('layouts.email')
@section('to-line', 'Hi '.$user->full_name)
@section('message-content')
Listed below is the data that you requested from Gander Oceanic. If you have any questions, please reply to this email.
<hr>
<p style="padding: 10px; border: 1px solid #000;">
{{$json}}
</p>
<p>To view this data easily, search for a JSON formatter online.</p>
@endsection
@section('from-line')
Kind regards,<br/>
<b>Gander Oceanic OCA</b><br>
@endsection
@section('footer-to-line', $user->full_name_cid.' ('.$user->email.')')
@section('footer-reason-line', 'you requested a data export.')
