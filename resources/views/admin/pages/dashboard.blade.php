@extends('master')
@section('content')



    @if(session()->has('message'))
        <p class="alert alert-success">
            {{session()->get('message')}}
        </p>
    @endif

    <style>
        .card-box {
            position: relative;
            color: #fff;
            padding: 20px 10px 40px;
            margin: 20px 0px;
        }
        .card-box:hover {
            text-decoration: none;
            color: #f1f1f1;
        }
        .card-box:hover .icon i {
            font-size: 100px;
            transition: 1s;
            -webkit-transition: 1s;
        }
        .card-box .inner {
            padding: 5px 10px 0 10px;
        }
        .card-box h3 {
            font-size: 27px;
            font-weight: bold;
            margin: 0 0 8px 0;
            white-space: nowrap;
            padding: 0;
            text-align: left;
        }
        .card-box p {
            font-size: 15px;
        }
        .card-box .icon {
            position: absolute;
            top: auto;
            bottom: 5px;
            right: 5px;
            z-index: 0;
            font-size: 72px;
            color: rgba(0, 0, 0, 0.15);
        }
        .card-box .card-box-footer {
            position: absolute;
            left: 0px;
            bottom: 0px;
            text-align: center;
            padding: 3px 0;
            color: rgba(255, 255, 255, 0.8);
            background: rgba(0, 0, 0, 0.1);
            width: 100%;
            text-decoration: none;
        }
        .card-box:hover .card-box-footer {
            background: rgba(0, 0, 0, 0.3);
        }
        .bg-blue {
            background-color: #97c7b1 !important;
        }
        .bg-green {
            background-color: #eb7680 !important;
        }
        .bg-orange {
            background-color: #cc959d !important;
        }
        .bg-red {
            background-color: #d9534f !important;
        }
        .bg-black {
            background-color: #a9e97e !important;
        }
        .bg-pest {
            background-color: #f0c17b !important;
        }
        .bg-pet {
            background-color: #90a9f0 !important;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card-box bg-blue">
                    <div class="inner">
                        <h3> {{$count['candidates']}} </h3>
                        <p> Number of Candidates </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users" aria-hidden="true"></i>
                    </div>
                   
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card-box bg-black">
                  <div class="inner">
                      <h3> {{$count['sailors']}} </h3>
                      <p> Number of Sailors </p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-user-shield"> </i>
                  </div>
                 
              </div>
          </div>

            <div class="col-lg-3 col-sm-6">
                <div class="card-box bg-green">
                    <div class="inner">
                        <h3> {{$count['ranks']}} </h3>
                        <p> Total Rank </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-anchor" aria-hidden="true"></i>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card-box bg-pest">
                    <div class="inner">
                        <h3> {{$count['courses']}} </h3>
                        <p> Total Course </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-stamp" aria-hidden="true"></i>
                    </div>
                   
                </div>
            </div>
            
            {{-- <div class="col-lg-3 col-sm-6">
                <div class="card-box bg-pest">
                    <div class="inner">

                            
                        
                        <h3> {{$count['hazz']}} </h3>
                        
                        <p> Total Hazz Done </p>
                      
                    </div> --}}
                    
                    {{-- <div class="icon">
                        <i class="fas fa-calendar-check" aria-hidden="true"></i>
                    </div>
                    
                </div>
            </div> --}}
            <div class="col-lg-3 col-sm-6">
              <div class="card-box bg-pet">
                  <div class="inner">
                      <h3> {{$count['ships']}} </h3>
                      <p>Total Ship </p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-ship" aria-hidden="true"></i>
                  </div>
                 
              </div>
          </div>
         

          
         
        </div>
    </div>











@endsection