<x-layouts.app 
    title="Blog" 
    meta-description="Blog meta description">

    @if (session('status'))
        <div>{{session('status')}}</div>
    @endif
 

    <h1>Blog</h1>  
    @auth
        <a href="{{ route('posts.create')}}">New post</a>    
    @endauth
    
    <ul>
        @foreach ($posts as $post)
            <div style="display: flex; aling-posts: baseline">
                <li><a href="{{route('posts.show',$post)}}">{{$post->title}}</a></li>&nbsp;
                @auth
                    <a href="{{route('posts.edit',$post)}}">Edit</a> &nbsp;
                    <form action="{{route('posts.destroy', $post)}}" method="POST">
                    @csrf @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>                    
                @endauth

            </div>
        @endforeach
    </ul>
    
</x-layout>

