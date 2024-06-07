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