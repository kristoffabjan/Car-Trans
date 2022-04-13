<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All My Ads
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
                                    All My Ads
                                </div>
    
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
                                        @if (($brand->user_id) == ((Auth::user()->id)))
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
                                                <td >
                                                    @if($brand->created_at == NULL)
                                                    <span class="text-danger">No Date Set</span>
                                                    @else
                                                    {{$brand->created_at ->diffForHumans()}}</td>
                                                    @endif
                                                <td>
                                                    <a href="{{url('brand/edit/'.$brand->id)}}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                                                    <a href="{{url('brand/check/'.$brand->id)}}" class="btn btn-info"><i class="fas fa-eye"></i> Check</a>
                                                    <a href="{{route('multi.image', $brand)}}" class="btn btn-info"><i class="fas fa-images"></i> Add photos</a>
                                                    <a href="{{url('brand/delete/'.$brand->id)}}" class="btn btn-danger" 
                                                        onclick="return confirm('Are you sure to delete')" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                                                    {{-- <a href="{{url('brand/addpic/'.$brand->id)}}" class="btn btn-info">Add photos</a> --}}
                                                </td>
                                            </tr>
                                        </div>
                                        @endif
                                            
                                        @endforeach
                                        
                                    </tbody> 
                                </table>

                                {{$brands->links()}}

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
