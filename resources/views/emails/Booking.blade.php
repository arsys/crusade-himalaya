@component('mail::message')
User Info: {!!$data['user_info']!!}<br>
@component('mail::table')
| ------------- |-----------------------------------------------------------------------:|
| Trip name     | {{ $data["trip_name"] }}                                               |
| Start Date    | {{ $data["start_date"] }}     										 |
| Name          | {{ $data["name"] }}                                                    |
| Gender        | {{$data["gender"]}}                                                    |
| Mobile        | {{$data["mobile"]}}                                                    |
| Address       | {{$data["address"]}}                                                   |
| Country       | {{$data["country"]}}                                                   |
| Passport no.  | {{$data["passport_no"]}}                                               |
| Passport exp. | {{$data["passport_exp"]}}                                              |
@empty($data['insurance'])
| Insurance | {{$data["insurance"]}}                                                     |
@endempty
@if ($data['otherName']->count() > 0)
Additional Travellers
@for($i=0;$i<$data['otherName'];$i++)
| Name | {{$data["otherName"]}}                                                          |
@endfor
@endif
@endcomponent
@endfor
<br>
{{ config('app.name') }}
@endcomponent
