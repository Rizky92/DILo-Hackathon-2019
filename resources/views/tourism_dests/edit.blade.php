@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tourism Dests
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tourismDests, ['route' => ['tourismDests.update', $tourismDests->id], 'method' => 'patch']) !!}

                        @include('tourism_dests.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection