@component('mail::message')
User Info: {!!$data['user_info']!!}<br>
@component('mail::table')
|                   	|                        	|
|-------------------	|------------------------	|
| Trip              	| {{ $data["trip"] }}    	|
| Start Date        	| {{ $data["date"] }}    	|
| Name              	| {{ $data["name"] }}    	|
| Email             	| {{ $data["email"] }}   	|
| Contact           	| {{ $data["contact"] }} 	|
| Country           	| {{ $data["country"] }} 	|
| No. of Travellers 	| {{ $data["pax"] }}     	|
@isset($data['bodyMessage'])
| Message           	| {{ $data["a"] }}       	|  
@endempty 
@endcomponent
<br>
{{ config('app.name') }}
@endcomponent
