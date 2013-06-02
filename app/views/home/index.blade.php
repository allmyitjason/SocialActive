@extends('template.base')

@section('content')

<!-- Slider starts -->
  <div class="parallax-slider">
          <!-- Slider (Parallax Slider) -->            
            <div id="da-slider" class="da-slider">
              <!-- Each slide should be enclosed inside "da-slide" class -->
              <!-- Slide starts -->
              <div class="da-slide">

                  <p class="bgreen">
                    <!-- Heading -->
                    <span class="das-head">Looking for a local recreation facility?</span><br />
                    <!-- Para -->
                    Our extensive database contains the locations of thousands of local sporting facilities and recreational locations. Do you want to organise an activity to meet people in your local area? Click below to find out more.
                    <br />
                    <!-- Link -->
                    <a class="das-link btn">Find local activities <i class="icon-double-angle-right"></i></a>
                  </p>
                  <!-- Image -->
                  <div class="da-img"><img src="img/balls.png" alt="image01" /></div>

              </div>
              <!-- Slide ends -->

              <div class="da-slide">

                  <p class="bblue">
                    <!-- Heading -->
                    <span class="das-head">Anyone can host an activity for FREE!</span><br />
                    <!-- Para -->
                    SocialActive allows anybody to host an activity at your desired venue. Our database includes 1000's of venues around Adelaide in a range of different categories, from tennis and golf to fishing groups and aerobic sessions...
                    <br />
                    <a class="das-link btn">Host an Activity <i class="icon-double-angle-right"></i></a>
                  </p>
                  <!-- Image -->
                  <div class="da-img"><img src="img/people.png" alt="image01" /></div>

              </div>
              <div class="da-slide">

                  <p class="bgreen">
                    <!-- Heading -->
                    <span class="das-head">Love to fish but don't have a boat?</span><br />
                    <!-- Para -->
                    Well don't fear, SocialActive allows members with boats to host fishing charters. Simply click the button below to find members near you who are wanting to go on a boating expidition!
                    <br />
                    <a class="das-link btn">Find fishing activites <i class="icon-double-angle-right"></i></a>
                  </p>
                  <!-- Image -->
                  <div class="da-img"><img src="img/boat.png" alt="image01" /></div>

              </div>
              <div class="da-slide">

                  <p class="bred">
                    <!-- Heading -->
                    <span class="das-head">How do you know the host is reliable?</span><br />
                    <!-- Para -->
                    All of our hosts have ratings and reviews left by other members, make sure you check the activities' host profile before registering for an activity. You also may contact the host through our website before making the decision to register.
                    <br />
                    <a class="das-link btn">Read More <i class="icon-double-angle-right"></i></a>
                  </p>
                  <!-- Image -->
                  <div class="da-img"><img src="img/tick.png" alt="image01" /></div>

              </div>

              <nav class="da-arrows">
                <span class="da-arrows-prev"></span>
                <span class="da-arrows-next"></span>
              </nav>
            </div>
  </div>
<!-- Slider ends -->

<!-- Hero starts -->

  <div class="hero">
    <div class="container">
      <div class="row">
        <div class="span12">

          <div class="hero-left">
            <i class="icon-desktop"></i>
          </div>

          <div class="hero-right">
            <div class="hero-title">Hello! <b class="lightblue">Welcome</b> to South Australia's exciting new <b class="lightblue">Sports and Recreation</b> platform.</div>
            <p>Participants of the <em><a href="http://http://unleashedadelaide.dptiapps.com.au/">Adelaide Unleashed Open Data Competition</a></em> have developed a platform that accesses several Government Sports and Recreation datasets to extract information on local clubs and facilities. SocialActive will allow you to make new friends, eliminate boredom and most importantly help keep you fit and healthy!</p>
          </div>

          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>


<!-- Hero Ends -->

@include('home.map');


<!-- CTA Starts -->

<div class="cta">
  <div class="container bviolet">
    <div class="row">
      <div class="span5">
        <div class="ctas">
          <!-- Title and Para -->
          <h5><i class="icon-arrow-right icon-metroid"></i> Are you a sporting/activities provider?</h5>
          <p>The SocialActive platform allows you easily to host paid activties, users are able to register for classes or activities with ease.</p>
        </div>
      </div>
      <div class="span4">
        <div class="ctas">
          <!-- List -->
          <ul>
            <li>Get more exposure for your business.</li>
            <li>Simple and easy to use system.</li>
            <li>Make money for your local club / organisation</li>
          </ul>
        </div>
      </div>
      <div class="span3">
        <div class="ctas">
          <!-- Button -->
          <a href="#" class="btn btn-inverse btn-large">Host an activity today <i class="icon-double-angle-right"></i></a>
          
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CTA Ends -->


<!-- Service and Social media starts -->

<div class="service-home">
  <div class="container">
    <!-- Title -->
    <h3 class="title"><i class="icon-arrow-right title-icon"></i> Looking for something to do?</h3>
    <div class="row">

      <!-- Social -->
      <div class="span3">

        <div class="service-social bblack">
          <!-- Big number -->
          <div class="service-big">Top 5 <span class="lightblue">Open Activities</span></div>
          <!-- Labels -->
          <div class="label label-important">SPORT</div> 
          <div class="label label-info">RECREATIONAL</div> 
          <div class="label label-success">FITNESS</div>

          <hr />

          <!-- Social media -->
          <div class="service-box bred">
            <!-- name and followers -->
            <a href="#">Tennis <span class="pull-right">43</span></a>
          </div>
          <div class="service-box bblue">
            <!-- name and followers -->
            <a href="#">Fishing <span class="pull-right">31</span></a>
          </div>
          <div class="service-box bred">
            <!-- name and followers -->
            <a href="#">Cricket <span class="pull-right">28</span></a>
          </div>
          <div class="service-box bblue">
            <!-- name and followers -->
            <a href="#">Golf <span class="pull-right">25</span></a>
          </div>
          <div class="service-box bgreen">
            <!-- name and followers -->
            <a href="#">Yoga<span class="pull-right">15</span></a>
          </div>    

          <div class="clearfix"></div>

        </div>

      </div>

      <!-- Service -->

      <div class="span6 service-list">

          <!--  Service #1 -->
          <!-- Service icon -->
          <div class="service-icon">
            <i class="icon-camera bred"></i>
          </div>

          <div class="service-content">
            <!-- Title -->
            <div class="service-home-meta">Take action</div>
            <h4>Host a sporting activity</h4>
            <p>SocialActive enables you to organise <strong>any</strong> type of sporting activity in your local area!</p>
          </div>

          <hr />

          <!-- Service #2 -->

          <div class="service-icon">
            <i class="icon-desktop blightblue"></i>
          </div>

          <div class="service-content">
            <div class="service-home-meta">FISHING</div>
            <h4>Organise or join a fishing group</h4>
            <p>Want to go fishing but don't want to go by yourself? Meet up with people who like to fish!</p>
          </div>

          <hr />   

          <!-- Service #3 -->

          <div class="service-icon">
            <i class="icon-cloud borange"></i>
          </div>

          <div class="service-content">
            <div class="service-home-meta">GROUP WORKOUT</div>
            <h4>Find local gyms offering classes</h4>
            <p>Aenean sodales augue ac rhoncus erat hendrerit. Vivamus vel ultricies elit.</p>
          </div>
          
          <hr />

          <!-- Service #4 -->

          <div class="service-icon">
            <i class="icon-user bviolet"></i>
          </div>

          <div class="service-content">
            <div class="service-home-meta">GET YOUR FRIENDS ACTIVE</div>
            <h4>Invite your friends to a private activity</h4>
            <p>Hosting activities doesn't need to be public, you can opt for a private activity where you can send requests to your friends.</p>
          </div>
          
          <br />


          <div class="clearfix"></div>

      </div>

      <!-- Image -->
      <div class="span3">
        <a href="#" class="service-image"><img src="img/basketball.jpg" alt="" /></a>
      </div>

    </div>

    <hr />
    
  </div>
</div>

<!-- Service and Social media ends -->

<!-- Features starts -->


<!-- Features ends -->

<!-- Pricing Table starts -->

        

<!-- Pricing Table ends -->
            
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




		


