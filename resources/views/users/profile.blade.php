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

    <p>All ads</p>

    @foreach($userAds as $ad)

    <p>
        <a href="/ads/{{$ad->slug}}">{{$ad->title}}</a>
    </p>

    @endforeach

    <p></p>

@endsection