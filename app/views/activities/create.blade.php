@extends('template.base')

@section('jQuery')
$( "#slider" ).slider({
            range: true,
            values: [ 1, 5 ]
        });

@stop

@section('content')
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header">
            <h2><i class="icon-list-alt"></i><span class="break"></span>Create Activity</h2>
        </div>
        <div class="box-content">
            {{Former::open()}}
            {{Former::select('activityType_id', 'Type')->fromQuery(ActivityType::all(), 'type')->placeholder('Select')}}
            {{Former::select('minSkillLevel_id', 'Type')->fromQuery(ActivityType::all(), 'type')->placeholder('Select')}}

             <td>
                                    
                                </td>


            {{Former::close()}}
        
        </div>
    </div>
</div>

@stop


