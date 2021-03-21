<x-app-layout>
    <div class="container row" style="margin-top:10px;bg-color:#fff;">
        @foreach($posts as $post)
        <div class="col-md-4" style="margin-bottom:20px;">
			<a href="/post/{{ $post->slug }}">
				<img src="{{Voyager::image($post->image)}}" style="width:100%">
                <div class="card-img-overlay">
                    <h1 style="font-size:2em; text-align:center;float:bottom;">{{$post->title}}</h1>
                </div>
			</a>
		</div>
        @endforeach
    </div>
</x-app-layout>
