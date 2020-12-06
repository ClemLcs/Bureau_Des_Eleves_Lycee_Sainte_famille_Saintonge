<h1>Messages des responsables</h1>
@foreach($posts as $post)
    <h2>{{$post->name}}</h2>
    <p>
        @foreach($posts->tags as $tag)
            <span class="badge badge-info">{{$tag->name}}</span>
        @endforeach
    </p>
    <p>
        {{$post->content}}
    </p>
@endforeach