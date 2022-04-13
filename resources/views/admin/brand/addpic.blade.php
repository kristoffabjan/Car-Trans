<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Multi Image
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
                        

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                  Multi Image
                                </div>
                                    {{-- <div class="card-body">
                                        <form action="{{route('storePic', $brand->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            
                                            
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Multi image</label>
                                                <input type="file" class="form-control" id="exampleInputEmail1" 
                                                    name="image[]" multiple="">
                                                    
                                                    @error('image')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                            
                                                </div>
                                
            
                                            <br>
                                            <button type="submit" class="btn btn-primary">Add Image</button>
                                        </form>
                                    </div> --}}


                                    {{-- @guest 
                                    @else
                                        <p class="mt-2" style="font-size: 1em">Add more images:</p>
        
                                            <form action="{{route('storePic', $brand->id)}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group border">
                                                    <label for="images" class="col-md col-form-label" style="font-size: 1em">Images</label>
                                                    <div class="col-sm-10">
                                                    <input type="file" class="form" id="brand_images" name="images[]"  placeholder="Images" multiple >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-primary btn-dark">Add images</button>
                                                    </div>
                                                </div>
                                            </form>
                                    @endguest --}}


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
