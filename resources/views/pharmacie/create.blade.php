@extends('layouts.app')

@section('content')
    

<div class="container  text-center  w-60">
    <h4 class=" text-muted">Créer </h4>
    <hr>
</div>
    <div class="justify-content-center">
        
            

                <form  method="POST" action="{{ route('pharmacies.store') }}" >
                    @csrf
               
                       
                            @include('pharmacie.form')

                       
                   
                       
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <button type="submit" class="btn btn-success btn-sm mt-1" style="width: 100%">valide</button>
                            </div>
                            <div class="col-md-6 col-sm-12 mt-1">
                                <a href="{{ route('pharmacies.index') }}" class="btn btn-warning btn-sm" style="width: 100%">Retour </a>
                            </div>
                           
                        </div>
                 
            </form>
            </div>
            
        
        
   

@endsection