@extends('template.base')

@section('jQuery')


$( ".js-skill-level-slider" ).slider({
    range: true,
    min: 1,
    max: 5,
    values: [ $("input[name=minSkillLevel_id]").val(), $("input[name=maxSkillLevel_id]").val()],
    slide: function( event, ui ) {
        //Update the hidden input values
        $("input[name=minSkillLevel_id]").val(ui.values[0]);
        $("input[name=maxSkillLevel_id]").val(ui.values[1]);
        $( ".js-skill-level-slider-label" ).html( ui.values[ 0 ] + " to " + ui.values[ 1 ] );
    }
});
$( ".js-skill-level-slider-label" ).html( $("input[name=minSkillLevel_id]").val() + " to " + $("input[name=maxSkillLevel_id]").val() );


$( ".js-participants-slider" ).slider({
    range: true,
    min: 1,
    max: 20,
    values: [ $("input[name=minParticipants]").val(), $("input[name=maxParticipants]").val() ],
    slide: function( event, ui ) {

        //Update the hidden input values
        $("input[name=minParticipants]").val(ui.values[0]);
        $("input[name=maxParticipants]").val(ui.values[1]);
        $( ".js-participants-slider-label" ).html( "Minimum of "+ui.values[0]+" People  |  Maximum of "+$("input[name=maxParticipants]").val()+" People");
    }
});
$( ".js-participants-slider-label" ).html( "Minimum of "+$("input[name=minParticipants]").val()+" People  |  Maximum of "+$("input[name=maxParticipants]").val()+" People");


$( ".js-age-slider" ).slider({
    range: true,
    min: 5,
    max: 90,
    values: [ $("input[name=minAge]").val(), $("input[name=maxAge]").val() ],
    slide: function( event, ui ) {

        //Update the hidden input values
        $("input[name=minAge]").val(ui.values[0]);
        $("input[name=maxAge]").val(ui.values[1]);
        $( ".js-age-slider-label" ).html( ui.values[0]+" Years to "+ui.values[1]+" Years");
    }
});
$( ".js-age-slider-label" ).html( $("input[name=minAge]").val()+" Years to "+$("input[name=maxAge]").val()+" Years");



$( ".js-duration-slider" ).slider({
    range: "min",
    value: $("input[name=activityDurationMins]").val(),
    min: 30,
    max: 200,
    step:30,
    slide: function( event, ui ) {

        //Update the hidden input values
        $("input[name=activityDurationMins]").val(ui.value);
        $( ".js-duration-slider-label" ).html( ui.value + " Minutes  (" + ui.value/60 + " Hours)");
    }
});
$( ".js-duration-slider-label" ).html( $("input[name=activityDurationMins]").val() + " Minutes  (" + $("input[name=activityDurationMins]").val()/60 + " Hours)");



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
<div class="page-heading blightblue">
    <div class="container">
      <div class="row">
        <div class="span12">
          <h2 class="pull-left"><i class="icon-arrow-right title-icon"></i> Host an Activity</h2>
          <div class="pull-right heading-meta"><span class="lightblue">Anyone</span> can host an activity!</div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page heading ends -->
    <!-- Content starts -->
  <div class="content">
 <div class="container">


<div class="row-fluid" id='create-activity'>
    {{Former::open('/activity')->id('create_activity')}}

    <div class="row-fluid">
        <div class="span12" style='text-align:center;'>
            <h3>Fill out the form below to host a new activity in your area.</h3>
        </div>
    </div>
<br />
    <div class="row-fluid">


        <div class="box offset2 span4">
            
                
                {{Former::select('activityType_id', 'Type')->fromQuery(ActivityType::all(), 'type')->placeholder('Select')}}
                {{Former::select('equipment[]', 'Select Equipment', null, null, ['multiple'])->id('equipment')}}
                {{Former::select('gender_id', 'Gender')->fromQuery(Gender::all(), 'gender', 'id')->value(3)}}
                {{Former::select('venue_id', 'Venue')->fromQuery(Venue::all(), 'name', 'id')->selected(Session::get('venueId', 0))->prepend('<a href="/venue">Search</a>')}}
                   
        </div>

            <div class="span6">
                <div class="control-group">
                    <label class="control-label">Skill Level</label>
                    <div class="controls">
                        <div class='js-skill-level-slider form-slider'></div>
                        <div class='js-skill-level-slider-label'></div>
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

            </div>

            <div class="buttons">
                 {{Former::submit('Create')->class('btn btn-primary')}}
                 <a href='/' class='btn'>Cancel</a>
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
</div>

@stop


