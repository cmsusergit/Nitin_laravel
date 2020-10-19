@extends('layout')
@section('single')
    

    <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="about-info">
                         
                         <h1>{{$post1->title}}</h1>

                         <p>Posted On <b>{{$post1->Post_date}}</b> </p>
                         <br/>
                         <p>{{$post1->description}}</p>
                    </div>
               </div>

          </div>
     </div>


@endsection