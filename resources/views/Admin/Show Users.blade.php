@extends("layout")
@section("content")
<div class="wappe">
    <form action="{{route('users.store')}}" method="POST">
        @csrf
    <input type="text" name="search_user" id="search_user" placeholder="Searching">
    <input type="submit" value="Search" class="mybutt">
    </form>
    
</div>
@if($flag != 1)
<table class="table2">
    <h2 class="wappee">Website's Users</h2>
    <thead>
        
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Username</th>
            <th colspan>Actions</th>
        </tr>
    </thead>
                    
    <tbody>
        
        @foreach($users as $user)
        @if($user->Username != 'admin1234')
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->Username}}</td>
            <td>
                <form action="{{route('sign-up.destroy', $user->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="delete_buttt">Delete</button>
                </form>
            </td>
        </tr>  
        @endif
        @endforeach
    </tbody>
</table>        
        @else
        <div class="wappee">
                <h1>This User Not found</h1>
        </div>
        @endif

<div class="pagination2">
    <a href="#">&laquo;</a>
    <a href="#" class="active">1</a>
    <a class="#" href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">6</a>
    <a href="#">&raquo;</a>
</div> 
@endsection