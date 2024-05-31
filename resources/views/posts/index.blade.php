<x-layouts.app 
    title="Blog" 
    meta-description="Blog meta description">

    <h1>Blog</h1>  
    {{--@dump($posts)--}}
    <ul>
        @foreach ($posts as $item)
            <li><a href="{{route('posts.show',$item)}}">{{$item->title}}</a></li>
        @endforeach
    </ul>

</x-layout>

