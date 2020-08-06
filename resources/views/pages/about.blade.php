@extends('layouts.base',['title'=>'About'])

@section('content')

    <div class="text-center" id="description">
        <h2>What is {{ config('app.name') }} ?</h2>
        <p>
            {{ config('app.name') }} is a clone version of <a href="https://laravel.com">Laravel.com</a>
            Feel free to improve <a href="https://github.com/nxvv/{{ config('app.name') }}-tdn">the source code</a>.
        </p>
    </div>
    
@endsection
