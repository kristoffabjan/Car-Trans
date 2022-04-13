<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Update Add 
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
                                <div class="card-header">
                                    Edit Brand
                                </div>


                                @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{session('success')}}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                @endif

                                    <div class="card-body">
                                        <form action="{{url('brand/update/'.$brands->id)}}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf 

                                            <input type="hidden" name="old_image" value="{{$brands->brand_image}}">

                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Update Brand Name</label>
                                            <input type="text" name="brand_name" class="form-control" id="exampleInputEmail1" 
                                            adria-describedby="emailHelp" value="{{$brands->brand_name}}">
                                                
                                                @error('brand_name')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Update Heigth</label>
                                                <input type="text" name="height" class="form-control" id="exampleInputEmail1" 
                                                adria-describedby="emailHelp" value="{{$brands->height}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Update Width</label>
                                                <input type="text" name="width" class="form-control" id="exampleInputEmail1" 
                                                adria-describedby="emailHelp" value="{{$brands->width}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Update Length</label>
                                                <input type="text" name="length" class="form-control" id="exampleInputEmail1" 
                                                adria-describedby="emailHelp" value="{{$brands->length}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Update Weight</label>
                                                <input type="text" name="weight" class="form-control" id="exampleInputEmail1" 
                                                adria-describedby="emailHelp" value="{{$brands->weight}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Update Price</label>
                                                <input type="text" name="price" class="form-control" id="exampleInputEmail1" 
                                                adria-describedby="emailHelp" value="{{$brands->price}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Update End Time</label>
                                                <input type="text" name="end_time" class="form-control" id="exampleInputEmail1" 
                                                adria-describedby="emailHelp" value="{{$brands->end_time}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Update Profile Image</label>
                                                <input type="file" name="brand_image" class="form-control" id="exampleInputEmail1" 
                                                adria-describedby="emailHelp" value="{{$brands->brand_image}}">
                                                    
                                                    @error('brand_image')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                            
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <img src="{{asset($brands->brand_image)}}" style=" height:200px;">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Update Description</label>
                                                    <input type="text" name="opis" class="form-control" id="exampleInputEmail1" 
                                                    adria-describedby="emailHelp" value="{{$brands->opis}}">
                                                </div>
    

                                                <br>
                                            <button type="submit" class="btn btn-primary">Update Brand</button>
                                        </form>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
