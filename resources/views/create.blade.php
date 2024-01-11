   @extends('layout.layout')
   @section('create')
    <div class="container">
            {{-- @if (session()->has('success'))
        <div class="mb-3 alert">{{session('success')}}</div>
    @endif  --}}
     <h3> Nový člen týmu</h3>
    </div> 
     <form action="{{route('name.store')}}" method="POST">
        @csrf
         <div class="mb-3">
            
              <label for="formGroupExampleInput" class="form-label">Jméno</label>
              <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Jméno">
                  @error('name') <span class="fs-6 text-danger">{{$message}}</span> @enderror
         </div>
         <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Příjmení</label>
              <input type="text" name="last_name" class="form-control" id="formGroupExampleInput2" placeholder="Příjmení">
                @error('last_name') <span class="fs-6 text-danger">{{$message}}</span> @enderror
         </div>
         <div class="mb-3">
           <label for="formGroupExampleInput3" class="form-label">Typ</label>
           <select class="form-select" name="types" aria-label="Default select example" id="formGroupExampleInput3">
            @error('types') <span class="fs-6 text-danger">{{$message}}</span> @enderror          
            @foreach($types as $type)
              <option value="{{$type->id}}"> {{$type->types}}</option>
             @endforeach                                           
         </select>   
      </div>
           
            <div class="mb-3 mt-3">
                <button type="submit" name="save" class="btn btn-dark">Uložit</button>
            </div>
    </form>
    @endsection
    

