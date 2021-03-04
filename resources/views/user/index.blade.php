@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users <a class="btn btn-success btn-sm float-right" href="{{ route('users.create') }}">Ajouter</a></div>

                <div class="card-body">
   
                 <table class="table">
                     <thead>
                         <tr>
                             <th></th>
                             <th>Nom et Prenom</th>
                             <th>Genre</th>
                             <th>Eamil</th>
                             <th>Role</th>
                             <th>Actions</th>
                         </tr>
                     </thead>
                     <tbody>
                        @foreach ($users as $user)
                         <tr>
                             <td >{{ $user->id }} </td>
                             <td >{{ $user->nom }} {{ $user->prenom }} </td>
                             <td>{{ $user->genre }}</td>
                             <td >{{ $user->email }} </td>
                             <td > {{ $user->role }}</td>

                            
                           
                            
                           
                             <td > 
                                 <a class="btn btn-sm btn-info" href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a>
                                
                                 
                                 <form style="display: inline"   method="POST"
                                 class="fm-inline"
                                 action="{{ route('users.destroy', ['user' => $user->id]) }}">
                                  @csrf
                                 @method('DELETE')
                         
                          <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                         </form>

                             </td>
                          
                            
                         </tr>
                         @endforeach
                     </tbody>
                 </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection