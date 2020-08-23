@component('mail::message')
# Hey Admin

-{{ $msg->name }} <br>
-{{ $msg->email }} <br>

@component('mail::panel')   

    {{ $msg->message }}
    
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
