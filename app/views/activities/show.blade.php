@extends('template.base')

@section('content')


<div class="page-heading blightblue">
    <div class="container">
      <div class="row">
        <div class="span12">
          <h2 class="pull-left"><i class="icon-arrow-right title-icon"></i> Activity Details</h2>
          <div class="pull-right heading-meta"><span class="lightblue">Join</span> this activity today!</div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page heading ends -->
    <!-- Content starts -->
  <div class="content">
 <div class="container">


<!-- Service and Social media starts -->

<div class="service-home">
  <div class="container">
    <!-- Title -->

      
        
     
    <div class="row">

      <!-- Service -->

      <div class="span12 service-list">

          <!--  Service #1 -->
          <!-- Service icon -->
          <div class="service-icon">
            <img src='/img/icons/{{ $activity->type->icon }}'/>
          </div>
          <div class="service-content search-results">
            <!-- Title -->
            <a class='link pull-right btn btn-primary' href='/activity/{{$activity->id}}/join'>Join</a>
            <div class="service-home-meta">{{ $activity->type->type }}</div>
            <div class="row-fluid">
              <div class="span4">
                <span class="activity-title">{{$activity->title}}</span>
              </div>
              <div class='offset1 span5'>
                <div class="row-fluid">
                  <div class="span8">
                     <div class="progress progress-info">
                      <div class="bar" style="width: {{ (((8 / 10) - 1) * 100) * -1 }}%"></div>
                    </div>
                  </div>
                  <div class="span4">
                    3 People to go!
                  </div>
                </div>
            
              </div>
            </div>
            
            <p>{{$activity->description}}</p>
            <div class="row">
              <div class="span3"><span class='venue'>Where</span> {{$activity->venue->name}}</div>
              <div class="span4"><span class='venue'>When</span> {{date('l jS \of F Y h:i:s A', strtotime($activity->activityDate));}} </div>
              <div class="span2"><span class='venue'>Age</span> {{ $activity->minAge }} to {{ $activity->maxAge }} Years </div>
              <div class="span2"><span class='venue'>Duration</span> {{$activity->activityDurationMins}} Minutes </div>
            </div>
          </div>

          <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<!-- Service and Social media ends -->


<div class="row-fluid">
	<div class="span12">
		<h3 class="title"><i class="icon-arrow-right title-icon"></i> Current Participants <span class='pull-right'><a>Invite your friends</a></span></h3>   <!-- Image -->

		<table class="table table-striped table-bordered bootstrap-datatable datatable dataTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Skill Level</th>
                    <th>Age</th>
                    <th width="30px"></th>
                </tr>
            </thead>
            <tbody>


		@foreach ($activity->participants()->get() as $participant) 
			<tr>
				<td>{{$participant->firstName}} {{$participant->surname}}</td>
				<td></td>
				<td></td>
				<td>
					@if (!Auth::guest())
						@if (Auth::user()->id == $participant->id)
							<a href='' class='btn btn-warning'>Leave Activity</a>
						@endif
					@endif
				</td>
			</tr>
			
		@endforeach
	</tbody>
</table>
	</div>
</div>


<div class="row-fluid">
	<div class="span12">
		<h3 class="title"><i class="icon-arrow-right title-icon"></i> Discussion <span class='pull-right'></span></h3>   <!-- Image -->

		

	</div>
</div>





 </div>
</div>
    


@stop
