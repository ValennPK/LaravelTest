<x-layouts.app 
    :title="$post->title" 
    :meta-description="$post->body">

<h1>Edit form</h1>
<form action="{{route('posts.update', $post)}}" method="POST"> 
    @csrf @method('PATCH')
    <div>
        <label>
            Title <br>
            <input name="title" type="text" value="{{old('title', $post->title)}}">
        </label>
    </div>

    @error('title')
        <small style="color:red;">{{$message}}</small>
    @enderror

    <div>
        <label>
            Body <br>
            <textarea name="body">{{old('body', $post->body)}}</textarea>
        </label>
    </div>

    @error('body')
        <small style="color:red;">{{$message}}</small>
    @enderror

    <div>
        <button type="submit">Enviar</button>
    </div>
</form>
<a href="{{ route('posts.index')}}">return</a>

</x-layouts.app>