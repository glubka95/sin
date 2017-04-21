
@extends('welcome')

@section('content')
<ul>
@foreach($categories as $category)

<li><a href="{{route("category.get", ["id"=>$category->id])}}">{{$category->name}}</a></li>
 @endforeach
</ul>

<form method="POST">
    <label>Category name </label>
    <input type="text" id="name" name="name" placeholder="" class="form-control" onkeyup="validInput()">
    <input type="hidden" name="token" value="{{csrf_token()}}">
    <button type="submit" disabled>Add category</button>
    <button type="reset">Cancel</button>
</form>
@stop