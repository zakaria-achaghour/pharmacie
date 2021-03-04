@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">pharmacies <a class="btn btn-success btn-sm float-right" href="{{ route('pharmacies.create') }}">Ajouter</a></div>

                <div class="card-body">
   
                 <table class="table">
                     <thead>
                         <tr>
                             <th></th>
                             
                             <th>Actions</th>
                         </tr>
                     </thead>
                     <tbody>
                        
                     </tbody>
                 </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection