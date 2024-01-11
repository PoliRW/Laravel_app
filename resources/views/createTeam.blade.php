   @extends('layout.layout')
   @section('createTeam')

 
   <div class="row g-3">
     
     <form action="{{route('team.create')}}" method="post">
            @csrf
        
          <div class="col">
             <label for="formGroupExampleInput2" class="form-label">Nový tým</label>
             <input type="text"  id="formGroupExampleInput2" class="form-control" name="name_team" placeholder="Nový tým"  aria-label="First name">
          </div>
            
            @include('includ.types')
             @include('includ.list_name')  
    
            <div class="mt-3">
                <button type="submit" name="save" class="btn btn-dark">Uložit</button>
            </div>    
      </form>

    
      </div> 
      @endsection