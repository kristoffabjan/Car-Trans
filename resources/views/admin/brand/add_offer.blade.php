<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add offer for a transportation ride
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
                                <form action="{{route('store.brand')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="card-header" style="background-color:#17a2b7"> 
                                            <strong style="font-size: 20px; color:black; "><i class="fas fa-car"></i> Type of transport:</strong>
                                        </div>
                                        <br>
                                        
                                        <input type="number" class="form-control" hidden id="exampleInputEmail1" value="2" name="ride_type">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Type of cargo</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="brand_name">
                                                
                                                @error('brand_name')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Description</label>
                                            <textarea id="exampleInputEmail1" rows="7"  style="width: 100%" name="opis"></textarea>
                                            
                                            @error('opis')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror                                            
                                        </div>
                                        
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Cargo image</label>
                                            <input type="file" class="form-control" id="exampleInputEmail1" name="brand_image">
                                                
                                                @error('brand_image')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        
                                        </div>
                                        <br>

                                        <div class="card-header" style="background-color:#17a2b7">
                                            <strong style="font-size: 20px; color:black"><i class="fas fa-ruler"></i> Dimensions:</strong>      
                                        </div>
                                            <br>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Heigth (cm)</label>
                                                    <input type="number" class="form-control" id="exampleInputEmail1" name="height">   
                                                    
                                                    @error('height')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror   
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Width (cm)</label>
                                                    <input type="number" class="form-control" id="exampleInputEmail1" name="width">  
                                                    @error('width')
                                                     <span class="text-danger">{{$message}}</span>
                                                    @enderror                                             
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Length (cm)</label>
                                                    <input type="number" class="form-control" id="exampleInputEmail1" name="length">  
                                                    @error('length')
                                                        <span class="text-danger">{{$message}}</span>
                                                     @enderror                                             
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Weight (kg)</label>
                                                    <input type="number" class="form-control" id="exampleInputEmail1" name="weight">                                            
                                                </div>
                                                    @error('weight')
                                                        <span class="text-danger">{{$message}}</span>
                                                     @enderror
                                                <br>
                                            </div>
                                        
                                        <br>
                                        
                                        <div class="card-header" style="background-color:#17a2b7">
                                            <strong style="font-size: 20px; color:black; "><i class="fas fa-user"></i> Shipper data:</strong>
                                            
                                            
                                        </div>
                                        <br>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="from_name">    
                                                @error('from_name')
                                                        <span class="text-danger">{{$message}}</span>
                                                     @enderror                                       
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Surname</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="from_surname">  
                                                @error('from_surname')
                                                        <span class="text-danger">{{$message}}</span>
                                                     @enderror                                          
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Phone number</label>
                                                <input type="tel" class="form-control" id="exampleInputEmail1" name="from_phone"> 
                                                @error('from_phone')
                                                        <span class="text-danger">{{$message}}</span>
                                                     @enderror                                           
                                            </div>
                                            <br>

                                               
                                        
                                       
                                        {{-- <div class="card-header" style="background-color:#17a2b7">
                                            <strong style="font-size: 20px; color:black; "><i class="fas fa-user"></i> Receiver  data:</strong>
                                        </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">To name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="to_name">   
                                                @error('to_name')
                                                <span class="text-danger">{{$message}}</span>
                                             @enderror                                          
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">To surname</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="to_surname"> 
                                                @error('to_surname')
                                                <span class="text-danger">{{$message}}</span>
                                             @enderror                                            
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">To phone</label>
                                                <input type="tel" class="form-control" id="exampleInputEmail1" name="to_phone">    
                                                @error('to_phone')
                                                <span class="text-danger">{{$message}}</span>
                                             @enderror                                         
                                            </div> --}}
                                        

                                        <br>
                                        <div class="card-header" style="background-color:#17a2b7">  
                                            <strong style="font-size: 20px; color:black; "><i class="fas fa-map-marked-alt"></i> Location information:</strong>
                                        </div>
                                        <br>

                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Address:</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="from_street">  
                                            @error('from_street')
                                                <span class="text-danger">{{$message}}</span>
                                             @enderror                                           
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">City</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="from_city">  
                                            @error('from_city')
                                                <span class="text-danger">{{$message}}</span>
                                             @enderror                                            
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">State</label>
                                            {{-- <input type="text" class="form-control" id="exampleInputEmail1" name="from_state">     --}}
                                            <select id="country" name="from_state" style="width: 100%">
                                                <option>select country</option>
                                                <option value="Aland Islands">Aland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Vatican City">Vatican City </option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Kosovo">Kosovo</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="North Macedonia">North Macedonia</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Romania">Romania</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                            </select> 
                                            @error('country')
                                                <span class="text-danger">{{$message}}</span>
                                             @enderror                           
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Destination street:</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="to_street">  
                                            @error('to_street')
                                                <span class="text-danger">{{$message}}</span>
                                             @enderror                                           
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Destination city</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="to_city">  
                                            @error('to_city')
                                                <span class="text-danger">{{$message}}</span>
                                             @enderror                                           
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Destination state</label>
                                            {{-- <input type="text" class="form-control" id="exampleInputEmail1" name="to_state">  --}}
                                            <select id="country" name="to_state" style="width: 100%">
                                                <option>select country</option>
                                                <option value="Aland Islands">Aland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Vatican City">Vatican City </option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Kosovo">Kosovo</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="North Macedonia">North Macedonia</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Romania">Romania</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                @error('to_state')
                                                <span class="text-danger">{{$message}}</span>
                                             @enderror  
                                            </select>                                                    
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Postal code of starting location</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1" name="from_post_nr"> 
                                            @error('from_post_nr')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror                                            
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">City of starting position</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="from_post"> 
                                            @error('from_post')
                                                <span class="text-danger">{{$message}}</span>
                                             @enderror                                             
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Postal code of destination</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1" name="to_post_nr">  
                                            @error('to_post_nr')
                                            <span class="text-danger">{{$message}}</span>
                                         @enderror                                           
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Post city of destination</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="to_post">    
                                            @error('to_post')
                                            <span class="text-danger">{{$message}}</span>
                                         @enderror                                         
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Departure time</label>
                                            <input type="date" name="date_of_go" min="2022-04-10" style="width: 100%">         
                                            @error('date_of_go')
                                            <span class="text-danger">{{$message}}</span>
                                         @enderror                                    
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Arrival time</label>
                                            <input type="time" name="time_of_go" style="width: 100%"> 
                                            @error('time_of_go')
                                            <span class="text-danger">{{$message}}</span>
                                         @enderror                                            
                                        </div>
                                        <br>
                                        <div class="card-header" style="background-color:#17a2b7">   
                                            <strong style="font-size: 20px; color:black; "><i class="fas fa-gavel"></i> Pricing:</strong>
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Price (€)</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1" name="price">   
                                            @error('price')
                                            <span class="text-danger">{{$message}}</span>
                                         @enderror                                         
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Expiry time</label>
                                            <input type="time" name="end_time" style="width: 100%">         
                                            @error('end_time')
                                            <span class="text-danger">{{$message}}</span>
                                         @enderror                                   
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Expiry date</label>
                                            <input type="date" name="end_date" min="2022-04-10" style="width: 100%">  
                                            @error('end_date')
                                            <span class="text-danger">{{$message}}</span>
                                         @enderror                                          
                                        </div>
                                        <br>
                            </div>
                        </div>

                         
                                            <br>
                                            <br>
                                            <button type="submit" class="btn btn-primary">Add enqury</button>
                                        </form>
                                    </div>


                            </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
