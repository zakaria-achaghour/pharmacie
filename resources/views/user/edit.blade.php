@extends('layouts.app')

@section('content')

<div class="container  text-center  w-60">
    <h4 class=" text-muted">Modifier</h4>
    <hr>
</div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            

                <form  method="POST" action="{{ route('users.update',['user' => $user->id]) }}">
                    @csrf
                    @method('PUT')

                        <div class="card-body">
                            @include('user.form_edit')

                        </div>
                       
                   
                       
                       
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <button type="submit" class="btn btn-warning btn-sm mt-1" style="width: 100%">Mettre à jour</button>
                            </div>
                            <div class="col-md-6 col-sm-12 mt-1">
                                <a href="{{ route('users.index') }}" class="btn btn-danger btn-sm" style="width: 100%">Retour</a>
                            </div>
                           
                        </div>
                 
            </form>
            </div>
           
        </div>
   
</div>
@endsection
