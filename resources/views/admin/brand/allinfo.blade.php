<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Get All Info About Winning Bid
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
                                   <tr>
                                   <thead>
                                        <th scope="col" style="font-size: 25px">DEAL FOR {{$brands->price}}€</th>
                                        </tr>
                                    </thead>
 
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
                                           <th scope="col">When to take packet</th>
                                       </tr>
                                   </thead>
                                   
                                   <tbody>
                                       <div href="{{url('brand/check/'.$brands->id)}}">
                                           <tr>
                                               <td >{{$brands->from_name}} {{$brands->from_surname}}</td>
                                               <td >{{$brands->to_name}} {{$brands->to_surname}}</td>
                                               <td >{{$brands->date_of_go}}</td>
                                           </tr>
                                           
                                           <tr>
                                                <td >Contact: {{$brands->from_phone}}</td>
                                                <td >Contact: {{$brands->to_phone}}</td>
                                                <td >{{$brands->time_of_go}}</td>
                                           </tr>

                                           <tr>
                                            <td >{{$brands->from_street}}</td>
                                            <td >{{$brands->to_street}}</td>
                                            <td>
                                       </tr>

                                           <tr>
                                                <td >{{$brands->from_city}}</td>
                                                <td >{{$brands->to_city}}</td>
                                            </tr>

                                           <tr>
                                               <td >{{$brands->from_state}}</td>
                                               <td >{{$brands->to_state}}</td>
                                           </tr>
 
                                           <tr>
                                               <td >{{$brands->from_post_nr}} {{$brands->from_post}}</td>
                                               <td >{{$brands->to_post_nr}} {{$brands->to_post}}</td>
                                           </tr>
                                       </div>
                                   </tbody>
                               </table>
                           </div> 
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
