@extends ('layouts.master')

@section ('title')

    {{$ad->title}}

@endsection

@section('content')

@include('layouts.partials.sidebar')

    <p>
        {{$ad->title}}
    </p>

    <p>
        {{$ad->body}}
    </p>

    <p>
        {{$ad->user->city}}
    </p>

    <p>
        @if($ad->price)

            {{$ad->price}}

        @else

            Call for best price

        @endif
    </p>

    <p>
        Added by

        @if(Auth::user() && ($ad->user->id == Auth::user()->id))
            <a href="/users/{{$ad->user->url_name}}">me</a>
        @else
            <a href="/users/{{$ad->user->url_name}}">{{$ad->user->first_name}}  {{$ad->user->last_name}}</a>
        @endif


    </p>

    @if(Auth::user())

    <div>
        @if(!(Auth::user() == $ad->user))
            @if(!Auth::user()->hasFavoured($ad))
                <a href="/users/add-to-favourites/{{$ad->slug}}">Add to favourite</a>
            @else
                <a href="/users/remove-from-favourites/{{$ad->slug}}">Remove from favourite</a>
            @endif
        @endif
    </div>

    <div>
        <p>
            @if ((Auth::user()->id == $ad->user->id))
                <a href="/ads/{{$ad->slug}}/edit">Edit</a>
            @endif
        </p>
    </div>

    @endif


@endsection