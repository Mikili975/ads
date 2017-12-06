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
        Added by <a href="/users/{{$ad->user->url_name}}">{{$ad->user->first_name}}  {{$ad->user->last_name}}</a>
    </p>

    <form action="/users/favourite" method="post">
        <div>
            {{ csrf_field() }}
        </div>

        <div>
            <button type="submit">Add to favourite</button>
        </div>
    </form>

@endsection