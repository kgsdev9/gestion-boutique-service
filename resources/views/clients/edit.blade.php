@extends('layout.app')

@section('content')


        <div class="main main-app p-3 p-lg-4">
    <div>
      <div class="container">
        <div id="wizard1">
          <h3>Edition du  client </h3>
            <form method="{{$method}}" action="{{$action}}">
                @csrf
                @method('PATCH')
          <div>
            <div class="row g-3 align-items-center">
 
</div>
     <br>

                <div  class="row">
                <div class="col-md-2">
            <label  >Nom du client  </label>

                    </div>


                       <div class="col-md-6">
        <input type="text" class="form-control"  name="nom" value="{{$ressource->nom}}">

                    </div>


                        </div>

                     <br>
                         <div  class="row">
                <div class="col-sm-2">
            <label >Prenom du client  </label>
                    </div>
                       <div class="col-sm-6">
        <input type="text" class="form-control"  name="prenom"  value="{{$ressource->prenom}}">

                    </div>


                        </div>
        
                        <br>

                   
                    <div  class="row">
                <div class="col-md-2">
            <label  >Email   du client  </label>

                    </div>


                       <div class="col-md-6">
        <input type="email" class="form-control"  name="email"   value="{{$ressource->email}}">

                    </div>


                        </div>
              
                             <br>

               <div  class="row">
                <div class="col-md-2">
            <label  >Adresse  du client  </label>

                    </div>


                       <div class="col-md-6">
                        <textarea id="story" name="adresse" class="form-control" 
          rows="2" cols="33">  {{$ressource->adresse}}
</textarea>
      
                    </div>


                        </div>


             </div>

          </div>
                <br>
          <div>

            <br>


                
                  
              
          
          
        </div><!-- #wizard1 -->
        <br>
        <button class="btn btn-dark"
        type="submit">
   Enregistrer les modifications 
</button>
       </div>
       </form>


</div>
  
	
@endsection