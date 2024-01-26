<div class="">
            @if (session('success'))
        <div class=" alert alert-success" role="alert">
            {{session('success')}}
</div>
@endif 


@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <b>
        There are some errors in your submission:

</div>
</div>
@endif