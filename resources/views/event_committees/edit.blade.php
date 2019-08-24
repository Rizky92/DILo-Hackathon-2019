@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Event Committee
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($eventCommittee, ['route' => ['eventCommittees.update', $eventCommittee->id], 'method' => 'patch']) !!}

                        @include('event_committees.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection