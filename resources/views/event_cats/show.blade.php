@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Event Cats
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('event_cats.show_fields')
                    <a href="{!! route('eventCats.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
