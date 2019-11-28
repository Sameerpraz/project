@component('mail::message')
# New Feedback Recieved.

** First Name:** {{$data['firstname']}}<br>

**LAst Name: **{{$data['lastname']}}<br>





Thanks,<br>
{{ config('app.name') }}
@endcomponent
