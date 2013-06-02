@section('javascriptFiles')
{{$mapjs}}
@stop

@section('javascript')
function showActivityDetails(id) {
  

   $.get('/activity/'+id+'/json', function(data) {
        console.log(data);

        $('#activity-details .title').html(data.title);
        $('#activity-details .host').html(data.host.firstName);
        $('#activity-details .age').html(data.minAge+ " to "+ data.maxAge);
        $('#activity-details .address').html(data.venue.name+ "<br />" + data.venue.address);
        $('#activity-details .more').css('display', 'block');
        $('#activity-details .more').attr('href', '/activity/'+id);
  });

}


function PlotMarker(id, lat, lon){
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(lat, lon),
        map: {{$mapName}},
        draggable: false,
        clickable: true,
        animation: google.maps.Animation.DROP,
        icon: '/img/icons/cricket.png',
    });

    google.maps.event.addDomListener(marker,'click', function() {
       showActivityDetails(id);
    });
}

function geocodeResult(results, status) {
    if (status == 'OK' && results.length > 0) {
      {{$mapName}}.fitBounds(results[0].geometry.viewport);
    } else {
      alert("Geocode was not successful for the following reason: " + status);
    }
  }



@stop

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
                value: item.name + ", " + item.state,
                Pcode: item.postcode
              }
            }));
          }
        });
      },
      minLength: 2,
      select: function( event, ui ) {
        //$("#locality").val(ui.item.value);return false;

        $.get('/activity/markers/'+ui.item.Pcode, function(data) {

        console.log(data);
          $.each(data, function(k, v) {
          console.log(v);
             PlotMarker(v.id, v.venue.latitude, v.venue.longitude);
          });

           var address = '5051, Blackwood, SA';
           var geocoder = new google.maps.Geocoder();
            geocoder.geocode({
              'address': address,
              'partialmatch': true}, geocodeResult);
      });


      },
      open: function() {
        $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
      },
      close: function() {
        $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
      }
    });


@stop
<!-- Big box starts -->

  <div class="big-box">
    <div class="container">
      <div class="row">
        <div class="span12">

          <!-- Left box -->
          <div class="big-box-left blightblue">
            <!-- Box content -->
            <div class="box-content">
              <!-- title -->
              <div class="box-title">Search your local area for an activity now!</div>
              <!-- Para --><br>

            

                <input type='text' name="suburbs" id="suburbs"/>
             
              <!-- Button -->
              <a href="#" class="btn btn-inverse">Search</a><br /><br />
              <!-- Links -->
              <div class="box-links">
                <a href="/find">Advanced Search <i class="icon-double-angle-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Center box -->
          <div class="big-box-mid blightblue">
            <!-- Image -->
           {{$map}}
          </div>

          <!-- Right box -->
          <div class="big-box-right bblack">
             <div id="activity-details" class="box-content">
                <div class="box-title title"><span class="lightblue">&nbsp;</span></div>

                <h4>Host</h4>
                <span class='host'>&nbsp;</span>
                <h4>Age Group</h4>
                <span class='age'>&nbsp;</span>
                <h4>Activity Address</h4>
                <span class='address'>&nbsp;</span>
                <a href='' class='btn btn-primary more'>More Info</a>
              </div>
          </div>

          <div class="clearfix"></div>

        </div>
      </div>
    </div>  
  </div>
  <div class="clearfix"></div>

<!-- Big box ends -->