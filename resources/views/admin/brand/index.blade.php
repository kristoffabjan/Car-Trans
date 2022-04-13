<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Active Deals
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

                                @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{session('success')}}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                @endif

                                        <div class="card-header">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #17a2b7">
                                                    <i class="fas fa-sort"> </i> Sort by
                                                </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="dropdown-item" value="created_atasc" href="/brand/sort/created_atasc"><i class="fas fa-sort-numeric-down"></i> Newest first</a></li>
                                                        <li><a class="dropdown-item" value="created_atdesc" href="/brand/sort/created_atdesc"><i class="fas fa-sort-numeric-down-alt"></i> Oldest first</a></li>
                                                        <li><a class="dropdown-item" value="date_of_goAsc" href="/brand/sort/date_of_goAsc"><i class="fas fa-sort-numeric-down"></i> Date of Departure Ascending</a></li>
                                                        <li><a class="dropdown-item" value="date_of_goDesc" href="/brand/sort/date_of_goDesc"><i class="fas fa-sort-numeric-down-alt"></i> Date of Departure Descending</a></li>
                                                        <li><a class="dropdown-item" value="from_state" href="/brand/sort/from_state"><i class="fas fa-sort-alpha-down"></i> State of Departure</a></li>
                                                        <li><a class="dropdown-item" value="to_state" href="/brand/sort/to_state"><i class="fas fa-sort-alpha-down"></i> State of Arival</a></li>
                                                        <li><a class="dropdown-item" value="from_city" href="/brand/sort/from_city"><i class="fas fa-sort-alpha-down"></i> City of Departure</a></li>
                                                        <li><a class="dropdown-item" value="to_city" href="/brand/sort/to_city"><i class="fas fa-sort-alpha-down"></i> City of Arival</a></li>
                                                        <li><a class="dropdown-item" value="price" href="/brand/sort/pricel"><i class="fas fa-sort-numeric-down"></i> Price Low-High</a></li>
                                                        <li><a class="dropdown-item" value="price" href="/brand/sort/priceh"><i class="fas fa-sort-numeric-down-alt"></i> Price High-Low</a></li>
                                                        </ul>
                                            </div>       
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">Photo</th>
                                        <th scope="col">Colection</th>
                                        <th scope="col">Delivery</th>
                                        <th scope="col">Details</th>
                                        <th scope="col">Listing info</th>
                                        <th scope="col">Check advert</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- @php($i=1) -->
                                        @foreach ($brands as $brand)
                                            @if($date <= $brand->end_date) 
                                            <div href="{{url('brand/edit/'.$brand->id)}}">
                                                    <tr data-href="{{url('brand/check/'.$brand->id)}}">
                                                        {{-- <th scope="row">{{$brands->firstItem()+$loop->index}}</th> --}}
                                                        {{-- <td >{{$brand->user->name}}</td> --}}
                                                        <td ><img src="{{asset($brand->brand_image)}}" style="height:80px; width 70px;"  alt="">  </td>
                                                        <td >{{$brand->brand_name}}<br>
                                                             {{$brand->weight}} kg</td>
                                                        
                                                        <td >{{$brand->from_city}} <br>
                                                             {{$brand->from_state}}<br>
                                                             {{$brand->from_post_nr}}</td>

                                                        <td >{{$brand->to_city}}<br>
                                                             {{$brand->to_state}}<br>
                                                             {{$brand->to_post_nr}}</td>
                                                
                                                        <td >{{$brand->price}} € <br>
                                                             {{$brand->end_date}}</td>
                                                       
                                                        {{-- <td >
                                                            @if($brand->created_at == NULL)
                                                            <span class="text-danger">No Date Set</span>
                                                            @else
                                                            {{$brand->created_at ->diffForHumans()}}</td>
                                                            @endif--}}
                                                        <td> 
                                                            {{-- <a href="{{url('brand/edit/'.$brand->id)}}" class="btn btn-info">Edit</a>
                                                            <a href="{{url('brand/delete/'.$brand->id)}}" class="btn btn-danger" 
                                                                onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a> --}}
                                                            <a href="{{url('brand/check/'.$brand->id)}}" class="btn btn-info"><i class="fas fa-eye"></i> Check</a>
                                                            
                                                        </td>
                                                    </tr>
                                            </div>
                                            @endif
                                        @endforeach
                                        
                                    </tbody>
                                </table>

 

                            </div>
                        </div>

                    </div>
                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
