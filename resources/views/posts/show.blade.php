<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
    </head>
   	<div class='posts'>
		@foreach ($posts as $post)
		    <div class='post'>
		    	<h2 class = "title">{{$post->title }}</h2>
		    	<p class "body">{{$post->body}}</p>
		    </div>
		@endforeach
	</div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
    </body>
</html>