<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            User Rates
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
                        
                        
                        <div class="col-md-2">
                            <form action="{{ route('store.rate', $user) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if ($nowuser != ($user->id))
                                
                                <b style="font-size: 20px">Please rate:</b>
         

                                <p>Overall:</p>
                               
                                <input type="range" min="1" max="5" value="1" style="width: 100%" name="overall">
                                

                                <p>Communication with user:</p>
                                
                                <input type="range" min="1" max="5" value="1" style="width: 100%" name="comunication">

                            
                                <br>  
                            
                                <p>Reliability of user:</p>
                                
                                <input type="range" min="1" max="5" value="1" style="width: 100%" name="reliability">

                                
                                <br>  
    
                                <p>Packet condition:</p>
                                
                                <input type="range" min="1" max="5" value="1"  style="width: 100%" name="packet_condition">

                        
                                <p>Your comment:</p>
                                <textarea id="coment" rows="7"  style="width: 100%" name="coment"></textarea>

                                <button type="submit" class="btn btn-primary">Rate User</button>
                                @endif
                              </form>
    
                        </div> 


        

                        <div class="col-md-10">
                            <table class="table">
                                <thead>
                                    <tr>
                                    {{-- <th scope="col">SL No</th> --}}
                                    {{-- <th scope="col">User ID</th> --}}
                                    <th scope="col">Overall</th>
                                    <th scope="col">Comunication</th>
                                    <th scope="col">Reliability</th>
                                    <th scope="col">Packet Condition</th>
                                    <th scope="col">Comment</th>
                                    <th scope="col">When</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- @php($i=1) -->
                                     @foreach ($rates as $rate)
                                        <div>
                                            <tr>
                                                    <td >
                                                        @for($i = 0; $i < ($rate->who_id); $i++)
                                                            <span><i class="fas fa-star" style="color: #357EC7"></i></span>
                                                        @endfor
                                                   
                                                    <td >
                                                        @for($i = 0; $i < ($rate->comunication); $i++)
                                                            <span><i class="fas fa-star" style="color: #357EC7"></i></span>
                                                        @endfor</td>
                                                    <td >
                                                        @for($i = 0; $i < ($rate->reliability); $i++)
                                                        <span><i class="fas fa-star" style="color: #357EC7"></i></span>
                                                         @endfor
                                                        
                                                    <td >
                                                        @for($i = 0; $i < ($rate->packet_condition); $i++)
                                                        <span><i class="fas fa-star" style="color: #357EC7"></i></span>
                                                        @endfor
                                                    <td > {{$rate->coment}}</td >
                                                    
                                                    <td >{{$rate->created_at->diffForHumans() }} by <a href="{{url('/ratinguser/rates/'.$rate->who_id)}}" >{{$rate->rater->name}}</a> <br></td>
                                                    
                                                        
                                                </tr>
                                                
                                        </div>
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
</x-app-layout>
