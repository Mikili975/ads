<div class="sidebar-module" align="right">
    <h4>Ads from nearby</h4>
    <ol class="list-unstyled">
        @foreach ($nearbyAds as $nearbyAd)
        <li><a href="/ads/{{$nearbyAd->slug}}">{{$nearbyAd->title}}</a></li>
            <li>{{$nearbyAd->user->city}}</li>
        @endforeach
    </ol>
</div>