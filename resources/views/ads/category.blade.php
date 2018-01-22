@extends ('layouts.master')

@section ('title')

    New ads

@endsection

@section('content')

    @foreach($ads as $ad)

        <li>

            <p>
                <a href="/ads/{{$ad->slug}}">{{$ad->title}}</a>
            </p>

            <p>
                By <a href="/users/{{$ad->user->url_name}}">{{$ad->user->first_name.' '.$ad->user->last_name}}</a>
            </p>

            <p>
                Posted {{$ad->created_at->diffForHumans()}}
            </p>

            <p>
                {{str_limit($ad->body,15)}}
            </p>

            <p>
                @if($ad->price)

                    {{$ad->price}}

                @else

                    Call for best price

                @endif
            </p>

            <p>
                Location: <a href="/location/{{$ad->user->city}}">{{$ad->user->city}}</a>
            </p>

            <p>
                <a href="/categories/{{$ad->category->slug}}">{{$ad->category->name}}</a>
            </p>

        </li>

    @endforeach

    {{$ads->links()}}

@endsection