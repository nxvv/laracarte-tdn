@component('mail::message')
# Hey Admin

-{{ $msg->name }} <br>
-{{ $email->email }} <br>

@component('mail::panel')   

    {{ $msg->message }}
    
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
