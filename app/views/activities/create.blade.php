@extends('template.base')

@section('jQuery')
$( "#slider" ).slider({
            range: true,
            values: [ 1, 5 ]
        });

$("#activityType_id").change(function() {
    $('#equipment').html('');
   $.get('/activitytype/'+$(this).val()+'/equipment', function(data) {
        $.each(data, function(k, v) {
            $('#equipment').append('<option value="'+v.id+'">'+v.equipName+'</option>')
        })
    });
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
            {{Former::select('equipment', 'Select Equipment', null, null, ['multiple'])}}
            {{Former::select('minSkillLevel_id', 'Type')->fromQuery(ActivityType::all(), 'type')->placeholder('Select')}}

             <td>
                                    
                                </td>


            {{Former::close()}}
        
        </div>
    </div>
</div>

@stop


