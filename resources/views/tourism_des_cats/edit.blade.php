@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tourism Des Cats
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tourismDesCats, ['route' => ['tourismDesCats.update', $tourismDesCats->id], 'method' => 'patch']) !!}

                        @include('tourism_des_cats.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection