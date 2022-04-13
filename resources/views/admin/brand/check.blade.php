<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Check Car Specs
            <b style="float: right"> 
                <span class="badge bg-danger"></span>
            </b>
        </h2>
    </x-slot>

     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                </div class="container">
                    <div class="row">                        
                        <div class="col-md-12">
                             <div class="card">
                                <table class="table">


                                      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                          <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{asset($brands->brand_image)}}" alt="">  
                                          </div>
                                          
                                            @foreach ($images as $multi)
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="{{asset($multi->image)}}" alt="">
                                            </div>
                                             @endforeach
                                          
                                         
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Next</span>
                                        </a>
                                      </div>

                                    <br>
                                    <br>

                                    <thead>
                                        <tr>
                                            <th scope="col" style="font-size: 25px">SPECS</th>
                                        </tr>
                                    </thead>
                                </table>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Car Brand</th>
                                            <th scope="col">Height</th>
                                            <th scope="col">Width</th>
                                            <th scope="col">Weight</th>
                                        </tr>
                                    </thead>
                                

                                    <tbody>
                                        <div href="{{url('brand/check/'.$brands->id)}}">
                                            <tr>
                                                <td >{{$brands->brand_name}}</td>
                                                <td >{{$brands->height}} cm</td>
                                                <td >{{$brands->width}} cm</td>
                                                <td >{{$brands->weight}} kg</td>
                                            </tr>
                                        </div>
                                    </tbody>
                                </table>

                                <br>
                                <br>
                                <br>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="font-size: 25px">ADITIONAL INFORMATIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div href="{{url('brand/check/'.$brands->id)}}">
                                            <tr>
                                                <td >{{$brands->opis}}</td>
                                            </tr>
                                        </div>
                                    </tbody>
                                </table>
  

                                <br>
                                <br>
                                <br>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="font-size: 25px">SHIPMENT INFORMATION</th>
                                        </tr>
                                    </thead>
                                </table>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Delivery from</th>
                                            <th scope="col">Delivery to</th>
                                            <th scope="col">When</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <div href="{{url('brand/check/'.$brands->id)}}">
                                            <tr>
                                                <td >{{$brands->from_city}}</td>
                                                <td >{{$brands->to_city}}</td>
                                                <td >{{$brands->date_of_go}}</td>
                                            </tr>
                                               
                                            <tr>
                                                <td >{{$brands->from_state}}</td>
                                                <td >{{$brands->to_state}}</td>
                                                <td >{{$brands->time_of_go}}</td>
                                            </tr>
  
                                            <tr>
                                                <td >{{$brands->from_post_nr}} {{$brands->from_post}}</td>
                                                <td >{{$brands->to_post_nr}} {{$brands->to_post}}</td>
                                            </tr>
                                        </div>
                                    </tbody>
                                </table>

                                <table class="table">
                                    <thead>
                                        <tr>

                                            {{-- href="{{ route('user.profile', $users) }}" --}}

                                            <th scope="col" style="font-size: 15px">Uploaded by: <a href="{{url('/ratinguser/rates/'.$brands->user_id)}}" class="">{{$brands->user->name}}</td></a> </th>
                                        </tr>
                                    </thead>
                                </table>

                                <div class="card-body">
                                    <form action="{{url('/brand/bidupdate/'.$brands->id)}}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Update Bid</label>
                                            <input type="text" name="price" class="form-control" id="exampleInputEmail1" 
                                            adria-describedby="emailHelp" value="{{$brands->price}}">
                                            @if(($brands->bidder_id) == 0)
                                                <div>Bid was not yet placed</div> 
                                            @else
                                                 <div>Bid by <a href="{{url('/ratinguser/rates/'.$brands->bidder_id)}}" >{{$brands->bidder->name}}</a></div> 
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Bid</button>
                                    </form>
                                </div>
                                    
                                   
                                    {{-- <tbody>
                                        <!-- @php($i=1) -->
                                        @foreach ($brands as $brand)
                                            <div href="{{url('brand/edit/'.$brand->id)}}">
                                                <tr>
                                                    <th scope="row">{{$brands->firstItem()+$loop->index}}</th>
                                                    <td >{{$brand->user->name}}</td>
                                                    <td >{{$brand->brand_name}}</td>
                                                    <td >{{$brand->height}} cm</td>
                                                    <td >{{$brand->width}} cm</td>
                                                    <td >{{$brand->weight}} kg</td>
                                                    <td >{{$brand->price}} €</td>
                                                    <td >{{$brand->end_time}}</td>
                                                    <td ><img src="{{asset($brand->brand_image)}}" style="height:80px; width 70px;"  alt="">  </td>
                                                    <td >
                                                        @if($brand->created_at == NULL)
                                                        <span class="text-danger">No Date Set</span>
                                                        @else
                                                        {{$brand->created_at ->diffForHumans()}}</td>
                                                        @endif
                                                    <td>
                                                        <a href="{{url('brand/edit/'.$brand->id)}}" class="btn btn-info">Edit</a>
                                                        <a href="{{url('brand/delete/'.$brand->id)}}" class="btn btn-danger" 
                                                            onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                                        <a href="{{url('brand/check/'.$brand->id)}}" class="btn btn-info">Check</a>
                                                    </td>
                                                </tr>
                                            </div>
                                        @endforeach
                                        
                                    </tbody> --}}
                                {{-- </table>  --}}

                                {{-- {{$brands->links()}}--}}

                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
