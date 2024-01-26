@extends('dashboard.layout')

@section('title', 'create')

@section('content')
<div class="main-panel">
     <div class="content-wrapper">

<div class="row dash">
    <div class="col-lg-6 m-auto p-5">
<form method="POST" action="{{ route('category.store')}}" enctype="multipart/form-data">
    @csrf
<div class="mb-3">
        <label for="name ">Title:</label>
        <input type="text " class="form-control" name="title" value="{{ old('title') }}">
        @error('title')
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