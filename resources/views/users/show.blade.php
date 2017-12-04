@extends ('layouts.master')

@section ('title')

    User profile

@endsection

@section('content')

    {{--@php--}}
    {{--dd($user,$userAds);--}}
    {{--@endphp--}}


    <p>
        User profile
    </p>

    <p>
        First name: {{$user->first_name}}
    </p>

    <p>
        Last name: {{$user->last_name}}
    </p>

    <p>
        Phone number: {{$user->phone}}
    </p>

    <p>
        City: {{$user->city}}
    </p>

    <a href="/users/{{$user->url_name}}/all"><p>All ads posted by user</p></a>


    <p></p>

@endsection