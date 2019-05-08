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
                            <td> <img src="{{asset('/storage/'.$user->image)}}" witdth="60" height="60" alt="Imagem"></td>
                           
                            <td>{{$user->name}}</td>

                            <td>{{$user->email}}</td>

                            @if(!$user->isAdmin())
                                <form action="{{route('users.make-admin', $user->id)}}" method="POST">
                                    @csrf

                                    <td> 
                                        <button type="submit">Make Admin</button>
                                        <button type="submit"class="btn btn-success">Make Admin</button>
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

