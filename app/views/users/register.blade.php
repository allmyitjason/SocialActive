@extends('template.base')

@section('content')
<!-- Page heading -->
  <!-- Give background color class on below line (bred, bgreen, borange, bviolet, blightblue, bblue) -->
  <div class="page-heading blightblue">
    <div class="container">
      <div class="row">
        <div class="span12">
          <h2 class="pull-left"><i class="icon-arrow-right title-icon"></i> Register</h2>
          <div class="pull-right heading-meta">This Is <span class="lightblue">Meta</span>. Write <span class="lightblue">Something</span> Here</div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page heading ends -->
    <!-- Content starts -->
  <div class="content">
 <div class="container">

<div class="row-fluid">
    <div class="box span12">
        <div id='register'>
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
                {{Former::password('password_confirmation', 'Confirm Password')}}
               
               <div class='buttons'>
                <a href='/' class='btn'>Cancel</a>
                 {{Former::submit()->class('btn btn-primary')}}
               </div>
                
                @if (Session::has('facebookId'))
                    {{Former::hidden('facebookId', Session::get('facebookId'))}}
                @endif
                {{Former::close()}}
               
            </div>
        </div>
    </div>
</div>
</div>
</div>

@stop