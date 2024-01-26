@extends('dashboard.layout')

@section('title', 'create')

@section('content')

<div class="main-panel">
     <div class="content-wrapper">

<div class="row">
    <div class="col-lg-8 m-auto p-5">
<form method="post" action="{{ route('admin.update', $post->id)}}" enctype="multipart/form-data">
    @csrf


    <div class="category">
                      <label for="exampleFormControlSelect3">Category</label>
                      <select name="category" class="form-control form-control-sm" id="exampleFormControlSelect3">
                      @foreach ($post->category as $categorypost)
                        <option value="{{$post->id}}"> {{ $categorypost->title}}</option>
                        @endforeach
                        @foreach ($categoryall as $allpost)
                        <option value="{{$post->id}}"> {{ $allpost->title}}</option>
                        @endforeach
                      </select>
                      </select>
           </div>

<div class="mb-3">
        <label for="name ">Title:</label>
        <input type="text " class="form-control" name="title" value="{{ ($post->title) }}">
    </div>

    <div class="mb-3">
        <label for="name">Subtitle:</label>
        <input type="text" class="form-control" name="subtitle" value="{{ ($post->subtitle) }}">
    </div>
    <div class="mb-3">
        <label for="name">Description:</label>
        <textarea cols="30" id="tiny" rows="30" class="form-control" name="description" value="">{{ ($post->description) }}</textarea>
    </div>
    <div class="mb-3">
        <label for="name">Author:</label>
        <input type="text" class="form-control" name="author" value="{{ ($post->author) }}">
    </div>
    <div class="mb-3">
        <label for="image">Image</label>
        <input type="file" name="image" placeholder="Choose file" id="image" class="form-control">
        <img class="w-25" src="{{ asset('images/'.$post->image) }}" alt="">
    </div>
    <div class="mb-3">
        <label for="name">Image Caption:</label>
        <input type="text" class="form-control" name="caption" value="{{ ($post->caption) }}">
       
    </div>

    <button class="register" type="submit" >Submit </button>

</form>

</div>
</div>

</div>
</div>




@endsection