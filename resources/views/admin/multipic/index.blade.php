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
                        
                        
                        <div class="col-md-8">
                                <div class="card-group">

                                        @foreach ($images as $multi)
                                            <div class="col-md-4 mt-5">
                                                <div class="card">
                                                    <img src="{{asset($multi->image)}}" alt="">
                                                </div>
                                            </div>
                                        @endforeach
                                    
                                </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                  Multi Image
                                </div>
                                    <div class="card-body">
                                        <form action="{{route('store.image', $brands)}}" method="POST" enctype="multipart/form-data">
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
                                        <br>
                                        <a href="{{url('brand/check/'.$brands->id)}}" class="btn btn-info">Check Updated Add</a>
                                    </div>
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
