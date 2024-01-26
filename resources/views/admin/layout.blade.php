
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{session ('success') }}
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <b> There are some errors in your submission:
       
    </div>
    
    @endif
   
    <script>
  tinymce.init({
    selector: 'textarea#tiny'
  });
</script>