<x-layouts.app 
    title="Blog" 
    meta-description="Blog meta description">

    @if (session('status'))
        <div>{{session('status')}}</div>
    @endif
 

    <h1>Blog</h1>  
    <a href="{{ route('posts.create')}}">New post</a>
    <ul>
        @foreach ($posts as $item)
            <div style="display: flex; aling-items: baseline">
                <li><a href="{{route('posts.show',$item)}}">{{$item->title}}</a></li>&nbsp;
                <a href="{{route('posts.edit',$item)}}">Edit</a>
            </div>
        @endforeach
    </ul>
    
</x-layout>

