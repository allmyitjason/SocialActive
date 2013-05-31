@extends('template.base')

@section('content')
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header">
            <h2><i class="icon-list-alt"></i><span class="break"></span>Register</h2>
            <div class="box-icon">
            </div>
        </div>
        <div class="box-content">

            {{Former::open()}}
            {{Former::text('firstname')}}
            {{Former::text('surname')}}
            {{Former::email('email')}}
            {{Former::password('password')}}
            {{Former::password('password_confirmation')}}
            {{ link_to_route('index', 'Cancel',[],['class' => 'btn btn-primary']) }}
            @if (isset($facebookId))
                {{Former::hidden()}}
            @endif
            {{Former::close()}}
           
        </div>
    </div>
</div>

@stop