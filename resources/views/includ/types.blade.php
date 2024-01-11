<div class="mb-3">
    <label for="formGroupExampleInput3" class="form-label">Typ</label>
          
       <select class="form-select" name="types" aria-label="Default select example" id="formGroupExampleInput3">
            @error('types') <span class="fs-6 text-danger">{{$message}}</span> @enderror       
            @foreach($types as $type)
        
            <option value="{{$type->id}}">{{$type->types}}</option>
          @endforeach                                             
       </select>  
     
        
</div>