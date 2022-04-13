<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Deals I Won 
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
                                    <thead>
                                        <tr>
                                        {{-- <th scope="col">SL No</th> --}}
                                        {{-- <th scope="col">User ID</th> --}}
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
                                            @if($date >= $brand->end_date && $user == $brand->bidder_id) 
                                                <div href="{{url('brand/edit/'.$brand->id)}}">
                                                        <tr> 
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
                                                            <td> 

                                                                <a href="{{url('/brand/getinfo/'.$brand->id)}}" class="btn btn-info"><i class="fas fa-info-circle"></i> Get All Info</a>
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
