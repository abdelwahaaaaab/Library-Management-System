@extends("layout")
@section("content")
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
        <tr>
            <td>Abdelwahab</td>
            <td>Abdelwahab@gmail.com</td>
            <td>Abdelwahab1234</td>
            <td>
                <button type="submit" class="delete_butt">Delete</button>
            </td>
        </tr>
        <tr>
            <td>Ahmed</td>
            <td>ahmed@gmail.com</td>
            <td>Ahmed1234</td>
            <td>
                <button type="submit" class="delete_butt">Delete</button>
            </td>
        </tr>
    </tbody>
</table>
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