<div class="blankslate">
    <div class="blankslate__images">
        <img src="{{$data['images']}}" alt="">
    </div>
    <h1 class="blankslate__headline--h1">{{$data['title']}}</h1>
    <p class="blankslate__text">{{$data['text']}}</p>

    @if($data['is_available'])
        <div class="alert alert__danger">Zur Zeit nicht vefügbar.</div>
    @endif

    <button class="btn btn--primary blankslate__btn">{{$data['btn_title']}}</button>
</div>