@extends('layout')
@section('project')

<section id="home" class="parallax-section" style="height:500px">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-8 col-sm-12">
                    <div class="home-text">
                         <h1>Welcome to My Blog</h1>
                         <p>You can Explore more things here about me</p>
                         <ul class="section-btn">
                              <a href="#about" class="smoothScroll"><span data-hover="Discover More">Discover More</span></a>
                         </ul>
                    </div>
               </div>

          </div>
     </div>

     <!-- Video -->
     <video controls autoplay loop muted>
          <source src="videos/video.mp4" type="video/mp4">
          Your browser does not support the video tag.
     </video>
</section>

<div style="background-color:white;height:50px">
</div>
<section id="project" class="parallax-section">
     <div class="container">
          <div class="row">
            @foreach ($post_list as $temp)
               <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                         
                              <img   src="images/contact-bg.jpg" class="img-responsive" alt="">
                         
                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1>{{$temp->title}}</h1>
                                        <h2 style="color:white">{{$temp->Post_date}}</h2>
                                        <h3 ><a  href={{route('post',['id' => $temp->id])}}>Read More....!!</a></h3>
                                   </div>
                              </div>
                         
                    </div>
               </div>
               @endforeach

               

          </div>
     </div>
</section>
@endsection