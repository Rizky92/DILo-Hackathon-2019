@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Inv Profiles
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($invProfiles, ['route' => ['invProfiles.update', $invProfiles->id], 'method' => 'patch']) !!}

                        @include('inv_profiles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection