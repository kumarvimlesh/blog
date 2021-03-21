<title>{{ $post->title }}</title>

<x-app-layout>
    <div>
       <div class="col-md-8 offset-1" style="padding-top:10px;">
          <div class="title" style="font-size:2em">
             <h1>{{$post->title}}</h1>
          </div>
          <div class="author offset-2">
             {{$post->author_id}}
          </div>
          <div class="image col-sm-10 offset-1" style="padding-top:5px;">
             <img src="{{ Voyager::image( $post->image ) }}" alt="{{ $post->title }}"/>
          </div>
          <div class="body" style="padding-top:20px;">
             {!! $post->body !!}</p>
          </div>
       </div>	
	</div>
</x-app-layout>