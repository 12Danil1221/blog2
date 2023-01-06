@extends('layouts.dorogi')

@section('content')

<form class="" action="{{route('dorogi.store')}}" method="post">
@csrf
<label class="form-label" for="title"></label>
<input class="form-control" name="title" id="title" type="title" placeholder="title">
<label class="form-label" for="content"></label>
<textarea class="form-control" name="content" id="content" type="content" placeholder="content"></textarea>
<label class="form-label" for="price"></label>
<input class="form-control" name="price" id="price" type="float" placeholder="price">

<!-- <label class="form-label" for="category_id"></label>
<section name="category_id" id="category_id" type="category_id" placeholder="category_id">
    foreach($categories as $category)
    <option value=""></option>
</section>

<input name="category_id" id="category_id" type="category_id" placeholder="category_id"> -->

<input type="submit" value="create">
</form>


@endsection