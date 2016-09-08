@if( count($posts) == 0 )
    <div class="post-preview">
        <h2 class="post-title">
            No Post has been added yet!
        </h2>
    </div>
@endif
@foreach($posts as $post)
<div class="col-md-4">
    <div class="thumbnail" style="min-height: 450px">
      <img src="{{ $post->image_url }}" class="image-responsive" style="width: 100%">
      <div class="caption">
      <a href="{{route('web.post', $post->slug)}}">
        <h3>{{ str_limit($post->title, 20, $end = "...") }}</h3>
        </a>
        <p> {{ $post->description }}</p>
      </div>
    </div>
    
</div>
@endforeach
<div class="col-md-10 col-md-offset-1 text-center">
    
{{ $posts->render() }}
</div>