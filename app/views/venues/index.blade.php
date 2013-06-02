@extends('template.base')

@section('jQuery')



$( "#suburbs" ).autocomplete({
      source: function( request, response ) {
        $.ajax({
          url: "/suburb/auto-complete",
          dataType: "json",
          data: {
            featureClass: "P",
            style: "full",
            maxRows: 12,
            term: request.term
          },
          success: function( data ) {
            response($.map( data.postcodes, function( item ) {
              return {
                label: item.postcode + (item.name ? ", " + item.name : ""),
                value: item.name + ", " + item.postcode +", " + item.state,
                Pcode: item.postcode
              }
            }));
          }
        });
      },
      minLength: 2,
      select: function( event, ui ) {
       


      },
      open: function() {
        $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
      },
      close: function() {
        $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
      }
    });



@stop

@section('content')


          <!-- Slider (Parallax Slider) -->            
            <div class="da-slider" style='position:relative;'>
              <!-- Each slide should be enclosed inside "da-slide" class -->
              <!-- Slide starts -->
              <div class="row">
                <div class="offset3 span6 blightblue" style='padding:5px;margin-top:20px' >

                   <h3>Find a venue</h3><hr />
                {{Former::open()}}
                {{Former::large_text('postcode')->id('suburbs')}}
                <div class="row">
                  <div class="span5">
                    {{Former::large_select('type', 'Type')->fromQuery(ActivityType::all(), 'type', 'id')->placeholder('All')}}
                  </div>

                </div>
                
                <a href='/venue' class='btn pull-right'>Reset</a>
                {{Former::submit('Search')->class('btn btn-primary pull-right')}}

                {{Former::close()}}

                </div>
              </div>
            </div>







<!-- Service and Social media starts -->

<div class="service-home">
  <div class="container">

    <div class='info'>Select the you would like to host you activity at.</div>
    <!-- Title -->
    <h3 class="title"><i class="icon-arrow-right title-icon"></i> Search Results ({{count($venues)." Venues)"}} </h3>   <!-- Image -->
      
        
     
    <div class="row">

      <!-- Service -->

      <div class="span12 service-list">

        @foreach ($venues as $venue)
          <!--  Service #1 -->
          <!-- Service icon -->
          <div class="service-icon">
           
          </div>
          <div class="service-content search-results">
            <!-- Title -->
            <a class='link pull-right btn btn-primary' href='/venue/set-venue/{{$venue->id}}'>Host Activity Here</a>
            <div class="service-home-meta">{{ $venue->name }}</div>
            <div class="row-fluid">
              <div class="span6">
                <span class="activity-title">{{$venue->address}}</span>
              </div>
              <div class='offset1 span5'>

            
              </div>
            </div>
            
            <p></p>
            <div class="row">
             
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




		


