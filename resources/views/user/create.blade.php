@extends('layouts.app')

@section('content')
    

<div class="container  text-center  w-60">
    <h4 class=" text-muted">Créer </h4>
    <hr>
</div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            

                <form  method="POST" action="{{ route('users.store') }}" >
                    @csrf
               
                        <div class="card-body">
                            @include('user.form')

                        </div>
                       
                   
                       
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <button type="submit" class="btn btn-success btn-sm mt-1" style="width: 100%">valide</button>
                            </div>
                            <div class="col-md-6 col-sm-12 mt-1">
                                <a href="{{ route('users.index') }}" class="btn btn-warning btn-sm" style="width: 100%">Retour </a>
                            </div>
                           
                        </div>
                 
            </form>
            </div>
            
        
        </div>
   
</div>
@endsection