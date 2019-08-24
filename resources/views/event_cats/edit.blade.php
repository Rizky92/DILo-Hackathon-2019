@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Event Cats
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($eventCats, ['route' => ['eventCats.update', $eventCats->id], 'method' => 'patch']) !!}

                        @include('event_cats.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection