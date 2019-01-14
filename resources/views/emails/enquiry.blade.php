@component('mail::message')
@component('mail::panel')
Sender's detail: {!! $data['user_info'] !!}
@endcomponent
#We have new enquiry <br>
Full name: {{$data['name']}}<br>
Email    : <a href="mailto:{{$data['email'] }}">{{$data['email'] }}</a> <br>
Subject: {{$data['subject']}}<br>
Message	 :
@component('mail::panel')
{{$data['bodyMessage'] }}
@endcomponent
Good Day,<br>
{{ config('app.name') }}
@endcomponent
