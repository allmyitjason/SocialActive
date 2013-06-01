@extends('template.base')

@section('jQuery')

$( ".js-skill-level-slider" ).slider({
    range: true,
    min: 1,
    max: 5,
    values: [ 1, 5 ],
    slide: function( event, ui ) {

        //Update the hidden input values
        $("input[name=minSkillLevel_id]").val(ui.values[0]);
        $("input[name=maxSkillLevel_id]").val(ui.values[1]);
        $( ".js-skill-level-slider-label" ).html( ui.values[ 0 ] + " to " + ui.values[ 1 ] );
    }
});

$( ".js-participants-slider" ).slider({
    range: true,
    min: 1,
    max: 20,
    values: [ 4, 7 ],
    slide: function( event, ui ) {

        //Update the hidden input values
        $("input[name=minParticipants]").val(ui.values[0]);
        $("input[name=maxParticipants]").val(ui.values[1]);
        $( ".js-participants-slider-label" ).html( "Minimum of "+ui.values[0]+" People  |  Maximum of "+ui.values[1]+" People");
    }
});

$( ".js-age-slider" ).slider({
    range: true,
    min: 5,
    max: 90,
    values: [ 1, 90 ],
    slide: function( event, ui ) {

        //Update the hidden input values
        $("input[name=minAge]").val(ui.values[0]);
        $("input[name=maxAge]").val(ui.values[1]);
        $( ".js-age-slider-label" ).html( ui.values[0]+" Years to "+ui.values[1]+" Years");
    }
});

$( ".js-duration-slider" ).slider({
    range: "min",
    value: 100,
    min: 30,
    max: 200,
    step:30,
    slide: function( event, ui ) {

        //Update the hidden input values
        $("input[name=activityDurationMins]").val(ui.value);
        $( ".js-duration-slider-label" ).html( ui.value + " Minutes  (" + ui.value/60 + " Hours)");
    }
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
            {{Former::open()->id('create_activity')}}
            {{Former::select('activityType_id', 'Type')->fromQuery(ActivityType::all(), 'type')->placeholder('Select')}}
            {{Former::select('equipment', 'Select Equipment', null, null, ['multiple'])}}
            {{Former::select('gender_id', 'Gender', ['1' => 'Male', '2' => 'Female', '3' => 'Mixed'])->value(3)}}
            {{Former::select('venue_id', 'Venue', ['1' => 'Male', '2' => 'Female', '3' => 'Mixed'])->value(3)}}
            
            <div class="control-group">
                <label class="control-label">Skill Level</label>
                <div class="controls">
                    <div class='js-skill-level-slider form-slider'></div>
                    <div class='js-skill-level-slider-label'>1 to 5 (all)</div>
                </div>
            </div>

             <div class="control-group">
                <label class="control-label">Participants</label>
                <div class="controls">
                    <div class='js-participants-slider form-slider'></div>
                    <div class='js-participants-slider-label'>Minimum of 4 People  |  Maximum of 7 People</div>
                </div>
            </div>

             <div class="control-group">
                <label class="control-label">Age</label>
                <div class="controls">
                    <div class='js-age-slider form-slider'></div>
                    <div class='js-age-slider-label'>All Ages</div>
                </div>
            </div>
            
            {{Former::date('activityDate')}}

            <div class="control-group">
                <label class="control-label">Duration</label>
                <div class="controls">
                    <div class='js-duration-slider form-slider'></div>
                    <div class='js-duration-slider-label'>30 Minutes (0.5 Hours)</div>
                </div>
            </div>

            {{Former::hidden('minSkillLevel_id')->value(1)}}
            {{Former::hidden('maxSkillLevel_id')->value(5)}}
            {{Former::hidden('minParticipants')->value(4)}}
            {{Former::hidden('maxParticipants')->value(7)}}
            {{Former::hidden('minAge')->value(5)}}
            {{Former::hidden('maxAge')->value(90)}}
            {{Former::hidden('activityDurationMins')->value(30)}}
            {{Former::close()}}
        
        </div>
    </div>
</div>

@stop


