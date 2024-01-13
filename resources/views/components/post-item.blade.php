<li>
    <div class="space-y-5 prose text-justify">
        <h2 class="not-prose"><a class="hover:text-indigo-700 transition-colors duration-100" href="/posts/{{$post->slug}}">{{ $post->slug }}</a></h2>
        <div>{{ $post->excerpt }}</div>
        <x-post-meta :post="$post"/>
    </div>
    <a href="/posts/{{$post->slug}}">{{ $post->slug }}</a>

</li>