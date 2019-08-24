@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Clients Scores
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($clientsScores, ['route' => ['clientsScores.update', $clientsScores->id], 'method' => 'patch']) !!}

                        @include('clients_scores.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection