@extends('welcome')

@section('content')

<h4>{{$category->name}}</h4>
<ul>
    @foreach ($category->articles as $article)
    <li>{{$article->title}}</li>
    @endforeach
</ul>
<form method="POST" action="{{route("article.post")}}" class="category-form">
    <div class="form-group">
    
        <label>Title</label>
    
    
    <input type="text" name="title" class="form-control" placeholder="">
    </div>
    <input type="hidden" name="token" value="{{csrf_token()}}">
    <input type="hidden" name="category_id" value="{{$category->id}}">
    <br/>
    <label>Content</label>
    <br/>
    <textarea name="content" class="form-control" rows="3"> </textarea>
    <br/>
    <input type="hidden" name="token" value="{{csrf_token()}}">
    <br/>
    <button type="submit">Add article</button>
    <button type="reset">Cancel</button>
</form>

@stop