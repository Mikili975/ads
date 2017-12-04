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


        </li>

    @endforeach

@endsection