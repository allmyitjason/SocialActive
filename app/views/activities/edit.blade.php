@extends('template.base')

@section('content')
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header">
            <h2><i class="icon-list-alt"></i><span class="break"></span>Edit Trial</h2>
            <div class="box-icon">
            </div>
        </div>
        <div class="box-content">

            {{Former::open(URL::route('trials.update', $trial->id))->method('PUT')}}
            {{Former::populate($trial)}}
            @include('trials._form')
            {{ link_to_route('trials.index', 'Cancel',[],['class' => 'btn btn-primary']) }}
            {{Former::close()}}
           
        </div>
    </div>
</div>

@stop