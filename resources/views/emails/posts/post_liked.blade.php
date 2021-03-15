@component('mail::message')
# your post was liked

{{$liker -> username }} liked one of your posts 

@component('mail::button', ['url' => route('posts.show',$post)])
view post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
