@extends('template.base')

@section('content')

<!-- Page heading -->
  <!-- Give background color class on below line (bred, bgreen, borange, bviolet, blightblue, bblue) -->
  <div class="page-heading blightblue">
    <div class="container">
      <div class="row">
        <div class="span12">
          <h2 class="pull-left"><i class="icon-arrow-right title-icon"></i> Contact</h2>
          <div class="pull-right heading-meta">Have <span class="lightblue">feedback</span> or any <span class="lightblue">questions</span>?</div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page heading ends -->
    <!-- Content starts -->
  <div class="content">
 <div class="container">
        <div class="register">
              <div class="row-fluid">
                <div class="span4">
                  <h2>Contact Us</h2>
                  <p class="big grey">Fill out the form to get in contact with us.</p>

                </div>

                <div class="span8">
                  <div id="login-box">

          <!-- start: Row -->
          <div class="row-fluid">

            <div id="login-form" class="span12">

              <div class="page-title-small">

                <h3>Send us an Email!</h3>
                {{Former::open()}}

                {{Former::xlarge_input('email')}}
                {{Former::xlarge_input('subject')}}
                {{Former::xlarge_textarea('message')->rows(10)}}
                {{Former::submit('Send')->class('btn btn-primary')}}
                {{Former::close()}}

              </div>

              

              

            </div>

          </div>
          <!-- end: Row --> 

        </div>

                </div>
              </div>
            </div> 
</div>
</div>
@stop


