@extends('template.base')

@section('content')


          <!-- Slider (Parallax Slider) -->            
            <div class="da-slider" style='position:relative;'>
              <!-- Each slide should be enclosed inside "da-slide" class -->
              <!-- Slide starts -->
              <div class="row">
                <div class="offset3 span10 blightblue" style='padding:5px;margin-top:20px' >

                   <h3>Find an activity</h3><hr />
                {{Former::open()}}
                {{Former::small_text('postcode')->id('suburbs')}}
                <div class="row">
                  <div class="span5">
                    
                    {{Former::large_select('type', 'Type')->fromQuery(ActivityType::all(), 'type', 'id')->placeholder('Select')}}
                    {{Former::large_select('venue', 'Venue')->fromQuery(Venue::all(), 'name', 'id')->placeholder('Select')}}
                  </div>

                  <div class="span5">
                    {{Former::mini_select('age', 'Age')->options(['10-20', '20-30', '30-40'])->placeholder('Select')}}
                    {{Former::large_select('gender', 'Gender')->fromQuery(Gender::all(), 'gender', 'id')->default(3)}}
                  </div>
                </div>
                

                {{Former::submit('Search')->class('btn btn-primary pull-right')}}
                {{Former::close()}}

                </div>
              </div>
            </div>







<!-- Service and Social media starts -->

<div class="service-home">
  <div class="container">
    <!-- Title -->
    <h3 class="title"><i class="icon-arrow-right title-icon"></i> Search Results </h3>   <!-- Image -->
      
        
     
    <div class="row">

      <!-- Service -->

      <div class="span12 service-list">

        @foreach ($activities as $activity)
          <!--  Service #1 -->
          <!-- Service icon -->
          <div class="service-icon">
            <img src='/img/icons/{{ $activity->type->icon }}'/>
          </div>
          <div class="service-content search-results">
            <!-- Title -->
            <a class='link pull-right btn btn-primary' href='/activity/{{$activity->id}}'>Join</a>
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

          <hr />

          @endforeach
          <br />


          <div class="clearfix"></div>

      </div>

   

    </div>

    <hr />
    
  </div>
</div>

<!-- Service and Social media ends -->

            
<!-- Clients starts -->
  
  <div class="clients">
    <div class="container">
            <div class="row">
               <div class="span12">
                     <h3 class="title">We're helping create a vibrant city!</h3>
                     <p><i class="icon-quote-left lightblue"></i>Adelaide is rated one of the world’s most liveable cities. Yet it has a reputation for being boring and many of our young people leave the State.<i class="icon-quote-right lightblue"></i></p>
                     <img src="img/salogo.jpg" alt="" />
                     <img src="img/beactive.jpg" alt="" />
               </div>
            </div>
    </div>
  </div>
            
<!-- Clients ends -->

@stop




		


