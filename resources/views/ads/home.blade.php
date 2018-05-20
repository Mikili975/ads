@extends ('layouts.master')

@section ('title')

    New ads

@endsection

@section('content')

    <p>
        Latest 10 ads
    </p>

    @foreach($ads as $ad)

        <li>

            <p>
                <a href="/ads/{{$ad->slug}}">{{$ad->title}}</a>
            </p>

            <p >
                By <a class="user" href="/users/{{$ad->user->url_name}}">{{$ad->user->first_name.' '.$ad->user->last_name}}</a>
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
                Location: {{$ad->user->city}}
            </p>

            <p>
                <a href="/categories/{{str_slug($ad->category->name)}}">{{$ad->category->name}}</a>
            </p>

        </li>

    @endforeach

    <script src="/js/proba.js"></script>


@endsection