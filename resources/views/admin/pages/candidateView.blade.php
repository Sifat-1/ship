@extends('master')
@section('content')
<style>

        /* .image-container {
            position: relative;
        } */

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .image-container:hover .image {
            opacity: 0.3;
        }

        .image-container:hover .middle {
            opacity: 1;
        }
</style>


{{-- <link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css"/> --}}



                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="{{url('/uploads/candidates/'.$candidate->image)}}" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <div class="middle">
                                        <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                    </div>
                                </div>
                                
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-controls="connectedServices" aria-selected="false">Connected Services</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">First Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$candidate->first_name}}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Last Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$candidate->last_name}}
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Birth Date</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$candidate->date}}
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Nationality</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$candidate->nationality}}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Phone Number</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$candidate->phone}}
                                            </div>
                                        </div>
                                        <hr />
                                    </div>
                                    <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                      
                                           
                                       <form action="{{route('store.sailor_c')}}" method="POST" >
                                           @csrf
                                        <h4>Adding New Sailor</h4>

                                        <input type="hidden" name="candidate_id" value="{{$candidate->id}}">

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="mb-3">
                                                <label for="exampleInputRank" class="form-label">Sailor rank</label>
                                            
                                            {{-- <input name="rank"placeholder="Enter Sailor rank"  type="text" class="form-control" id="exampleInputRank"> --}}
                                            <select name="rank" class="form-control">
                                                {{-- <option>Select Rank</option> --}}
                                        
                                                {{-- compact name --}}
                                        
                                                @foreach ($ranks as $item)
                                                {{-- database new table name --}}
                                                    <option value="{{$item->id}}">{{$item->rank}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputName" class="form-label">Ship</label>
                                                <input name="ship" placeholder="Enter Sailor Name" type="text" class="form-control" id="exampleInputName">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputName" class="form-label">Blood Group</label>
                                                <input name="blood" placeholder="Enter Sailor Name" type="text" class="form-control" id="exampleInputName">
                                            </div>

                                            <button type="submit" class="btn btn-success">Submit</button>
                                        
                                            </div>
                                        
                                       </form>         





                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
          
@endsection




 {{-- <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Something</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                Something
                                            </div>
                                        </div>
                                        <hr /> --}}