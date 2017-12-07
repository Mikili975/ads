@extends ('layouts.master')

@section ('title')

    Favourite ads

@endsection

@section('content')

    <h6>Favourite ads by  <a href="/users/{{$userWithFavouriteAds->url_name}}">{{$userWithFavouriteAds->first_name.'  '.$userWithFavouriteAds->last_name}}</a></h6>

    @foreach($userWithFavouriteAds->addToFavourite as $ad)

        <li>

            <p>
                <a href="/ads/{{$ad->slug}}">{{$ad->title}}</a>
            </p>


        </li>

    @endforeach

@endsection