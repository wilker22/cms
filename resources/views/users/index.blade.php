@extends('layouts.app');

@section('content')

       
    <div class="card">
        <div class="card-header">Users</div>
        <div class="card-body">
           @if($users->count() > 0)
           <table class="table">
                <thead>
                    <th>Image</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th></th>
                    <th></th>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td> <img width="50px" height="50px" style="border-radius: 50%" src="{{Gravatar::src($user->email)}}" alt="{{$user->name}}"></td>
                           
                            <td>{{$user->name}}</td>

                            <td>{{$user->email}}</td>

                            @if(!$user->isAdmin())
                                <form action="{{route('users.make-admin', $user->id)}}" method="POST">
                                    @csrf

                                    <td>                                         
                                        <button type="submit" class="btn btn-primary">Make Admin</button>
                                    </td>

                                </form>
                            @endif
                            
                        </tr> 
                    @endforeach
                </tbody>
            </table>
           @else
                <h3 class="text-center">No Users Yet</h3>

           @endif

                
               
        </div>
    </div>
@endsection

