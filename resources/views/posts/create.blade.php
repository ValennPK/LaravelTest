<x-layouts.app 
    title="Blog Create" 
    meta-description="Blog meta description">

    <h1>Blog</h1>  

    <form action="{{route('posts.store')}}" method="POST"> @csrf
 
        @include('posts.form-fields')

        <div><button type="submit">Enviar</button></div>
    </form>
    <a href="{{ route('posts.index')}}">return</a>

</x-layout>

