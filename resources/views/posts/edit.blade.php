<x-layouts.app 
    :title="$post->title" 
    :meta-description="$post->body">

<h1>Edit form</h1>
<form action="{{route('posts.update', $post)}}" method="POST"> 
    @csrf @method('PATCH')

    @include('posts.form-fields')

    <div>
        <button type="submit">Enviar</button>
    </div>
</form>
<a href="{{ route('posts.index')}}">return</a>

</x-layouts.app>