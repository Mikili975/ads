@extends ('layouts.master')

@section ('title')

    {{$ad->title}}

@endsection

@section('content')

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

        @if($ad->user->id == Auth::user()->id)
            <a href="/users/{{$ad->user->url_name}}">me</a>
        @else
            <a href="/users/{{$ad->user->url_name}}">{{$ad->user->first_name}}  {{$ad->user->last_name}}</a>
        @endif


    </p>

    <form action="/users/addToFavourite" method="post">
        <div>
            {{ csrf_field() }}
        </div>

        {{--<div>
            <input type="hidden" name="user" value={{$ad->user}}>
        </div>    --}}

        @if(Auth::user() && !(Auth::user()->id == $ad->user->id))

        <div>
            <button type="submit">Add to favourite</button>
        </div>

        @endif

    </form>

@endsection