<script src="//cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<form action="{{$action}}" method="{{$method}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        {{$slot}}

    </div>
    <div>
      
        <input type="submit" class="btn btn-primary me-1" value="{{$submit_name}}">
        
    </div>
</form>