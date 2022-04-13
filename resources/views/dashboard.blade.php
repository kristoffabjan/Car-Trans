<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hi... <b>{{Auth::user()->name}}</b>
            <b style="float: right"> Total users 
                <span class="badge bg-danger">{{ count($users) }}</span>
            </b>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                </div class="container">
                    <div class="row">

                        {{-- <a href="{{url('/ratinguser/rates/'.$users->id)}}" class="btn btn-info">Rates</a> --}}

                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i=1)
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>
                                            <a href="{{ route('user.profile', $user) }}" class="">{{$user->name}}</a>
                                        </td>
                                        <td><a href="{{url('/ratinguser/coments/'.$user->id)}}" class="">{{$user->email}}</a></td>
                                        <td>{{$user->created_at->diffForHumans() }}</td>
                                    </tr>  
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
