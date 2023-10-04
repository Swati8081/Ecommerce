@props(['type'=>'text','name','placeholder'=>'','value'=>'','label','isRequired'=>0,'isMultiple'=>0])

<div class="col-xl-6 mb-3">
    <label for="{{$name}}" class="form-label"> {{$label}}
        @if ($isRequired==1)
        <span class="text-danger">*</span>
        @endif
       
    </label>

    @if ($type=='text' OR $type=='file')
        @php $multiple=''; @endphp 
        @if ($isMultiple==1)
           @php $multiple='multiple'; @endphp 
        @endif
    <input type="{{$type}}" class="form-control" id="{{$name}}" name="{{$name}}@if($isMultiple==1)[]@endif" value="{{$value}}" placeholder="{{$placeholder}}" {{$multiple}} @if ($isRequired==1) required @endif  >
    @endif
    @if ($type=='select')
        <select type="{{$type}}" class="form-control" id="{{$name}}" name="{{$name}}" >
            <option value="" >Please Select</option>
            @foreach ($value as $item)
                    <option value="{{$item->value}}">{{$item->name}}</option>
                    @endforeach
        </select>
    @endif
   
    @if ($type=='editor')
        <textarea name="{{$name}}" id="{{$name}}" cols="30" rows="10">{{$value}}</textarea>
         <script>
            CKEDITOR.replace('{{$name}}', {
              toolbar: 'Basic'
              // Other configuration options here
            });
          </script>
    @endif

   @error($name)
    <span class="text-danger"> {{$message}}</span>
   @enderror

   
</div>
