<x-layouts.app 
    title="Blog Create" 
    meta-description="Blog meta description">

    <h1>Blog</h1>  


    <form action="{{route('posts.store')}}" method="POST"> @csrf
        <div><label>Title <input name="title" type="text" value="{{old('title')}}"></label></div>
        @error('title')
            <small style="color:red;">{{$message}}</small>
        @enderror
        <div><label>Body <textarea name="body">{{old('body')}}</textarea></label></div>
        @error('body')
            <small style="color:red;">{{$message}}</small>
        @enderror
        <div><button type="submit">Enviar</button></div>
    </form>
    <a href="{{ route('posts.index')}}">return</a>

</x-layout>

