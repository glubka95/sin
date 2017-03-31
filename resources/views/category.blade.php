@extends('welcome')

@section('content')

<h4>{{$category->name}}</h4>
<ul>
    @foreach ($category->articles as $article)
    <li>{{$article->title}}</li>
    @endforeach
</ul>
<form method="POST" action="/article">
    <span>Title</span>
    <input type="text" name="Title" placeholder="">
    <input type="hidden" name="category_id" value="{{$category->id}}">
    </br>
    <span>Content</span>
    <textarea name="content" rows="3"> </textarea>
    </br>
    <button type="submit">Add article</button>
    <button type="reset">Cancel</button>
</form>

@stop