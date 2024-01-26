@extends('dashboard.layout')

@section('title', 'create')

@section('content')
<div class="main-panel">
     <div class="content-wrapper">

<div class="row ">
    <div class="col-lg-8 m-auto p-5 grid-margin">
<form method="POST" action="{{ route('admin.store')}}" enctype="multipart/form-data">
    @csrf

    
    <div class="category">
                      <label for="exampleFormControlSelect3">Category</label>
                      
                      <select name="category" class="form-control form-control-sm" id="exampleFormControlSelect3">
                      @foreach ($category as $post)
                        <option value="{{$post->id}}"> {{ $post->title}}</option>
                        @endforeach
                      </select>
                      @error('category')
    <div class="error">
        {{ $message }}
    </div>
    @enderror
    </div>

   

<div class="mb-3">
        <label for="name ">Title:</label>
        <input type="text " class="form-control" name="title" value="{{ old('title') }}">
        @error('title')
    <div class="error">
        {{ $message }}
    </div>
    @enderror
    </div>

    <div class="mb-3">
        <label for="name">Subtitle:</label>
        <input type="text" class="form-control" name="subtitle" value="{{ old('subtitle') }}">
        @error('subtitle')
    <div class="error">
        {{ $message }}
    </div>
    @enderror
    </div>
    <div class="mb-3">
        <label for="name">Description:</label>
        <textarea  cols="30" id="tiny" rows="30" class="form-control" name="description"  value="{{ old('description') }}"></textarea>
        @error('description')
    <div class="error">
        {{ $message }}
    </div>
    @enderror

    </div>
    <div class="mb-3">
        <label for="name">Author:</label>
        <input type="text" class="form-control" name="author" value="{{ old('author') }}">
        @error('author')
    <div class="error">
        {{ $message }}
    </div>
    @enderror
    </div>
    <div class="mb-3">
        <label for="image">Image</label>
        <input type="file" name="image" placeholder="Choose file" id="image"
        class="form-control">
    </div>
    <div class="mb-3">
        <label for="name">Image Caption:</label>
        <input type="text" class="form-control" name="caption" value="{{ old('caption') }}">
        @error('caption')
    <div class="error">
        {{ $message }}
    </div>
    @enderror
    </div>

    <button class="register" type="submit" >Submit </button>

</form>

</div>

</div>


</div>
</div>


@endsection