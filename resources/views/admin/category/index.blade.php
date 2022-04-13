<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hi... <b>{{Auth::user()->name}}</b>
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
                                    All Category
                                </div>
    
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">SL No</th>
                                        <th scope="col">Category name</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- @php($i=1) -->
                                        @foreach ($categories as $category)
                                            <tr>
                                                <th scope="row">{{$categories->firstItem()+$loop->index}}</th>
                                                <td >{{$category->category_name}}</td>
                                                <td >{{$category->user->name}}</td>
                                                <td >
                                                    @if($category->created_at == NULL)
                                                    <span class="text-danger">No Date Set</span>
                                                    @else
                                                    {{$category->created_at ->diffForHumans()}}</td>
                                                    @endif
                                                <td>
                                                    <a href="{{url('category/edit/'.$category->id)}}" class="btn btn-info">Edit</a>
                                                    <a href="{{url('softdelete/category/'.$category->id)}}" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>

                                {{$categories->links()}}

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    Add Category
                                </div>
                                    <div class="card-body">
                                        <form action="{{route('store.category')}}" method="POST">
                                            @csrf

                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Category name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="category_name">
                                                
                                                @error('category_name')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary">Add Category</button>
                                        </form>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>

       
      


            {{-- Trash part --}}


                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        </div class="container">
                            <div class="row">                        
                                <div class="col-md-8">
                                    <div class="card">

                                    
                                        <div class="card-header">
                                            Trash List
                                        </div>

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">SL No</th>
                                                <th scope="col">Category name</th>
                                                <th scope="col">User</th>
                                                <th scope="col">Created At</th>
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- @php($i=1) -->
                                                @foreach ($trashCat as $category)
                                                    <tr>
                                                        <th scope="row">{{$categories->firstItem()+$loop->index}}</th>
                                                        <td >{{$category->category_name}}</td>
                                                        <td >{{$category->user->name}}</td>
                                                        <td >
                                                            @if($category->created_at == NULL)
                                                            <span class="text-danger">No Date Set</span>
                                                            @else
                                                            {{$category->created_at ->diffForHumans()}}</td>
                                                            @endif
                                                        <td>
                                                            <a href="{{url('category/restore/'.$category->id)}}" class="btn btn-info">Restore</a>
                                                            <a href="{{url('category/pdelete/'.$category->id)}}" class="btn btn-danger">P Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>

                

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    
                                </div>

                            </div>
                        </div>

                        {{-- End trash --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
