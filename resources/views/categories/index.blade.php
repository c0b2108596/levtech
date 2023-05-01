<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
    </head>
    <body>
        <h1>"BLOG TITLE"</h1>
        <a href="/posts/create">create</a>
	<div class='posts'>
		@foreach ($posts as $post)
		    	<h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
		    	<p class "body">{{ $post->body }}</p>
		    	<a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
		    	<form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                </form>
		    </div>  
		@endforeach
	</div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
    <script>
    function deletePost(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
    </script>
    </body>
</html>
