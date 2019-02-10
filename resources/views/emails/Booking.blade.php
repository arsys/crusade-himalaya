@component('mail::message')
User Info: {!!$data['user_info']!!}<br>
@component('mail::table')
| ------------- |-----------------------------------------------------------------------:|
| Start Date    | {{ $data["start_date"] }}     										 |
| Name          | {{ $data["name"] }}                                                    |
| Gender        | {{$data["gender"]}}                                                    |
| Mobile        | {{$data["mobile"]}}                                                    |
| Address       | {{$data["address"]}}                                                   |
| Country       | {{$data["country"]}}                                                   |
| Passport no.  | {{$data["passport_no"]}}                                               |
| Passport exp. | {{$data["passport_exp"]}}                                              |
@isset($data['insurance'])
| Insurance | {{$data["insurance"]}}                                                     |
@endempty
@isset($data['otherName'])
Additional Travellers
@for($i=0;$i<$data['otherName'];$i++)
| Name | {{$data["otherName"]. $i}}                                                          |
@endfor
@endif
@endcomponent
<br>
{{ config('app.name') }}
@endcomponent
