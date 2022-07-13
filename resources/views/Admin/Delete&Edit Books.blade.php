@extends("layout")
@section("content")
<table class="table2">
    <thead>
        <tr>
            <th>Book name</th>
            <th>Writer</th>
            <th>Type</th>
            <th>Language</th>
            <th>Price</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
                    
    <tbody>
    
        <tr>
            <td>C++</td>
            <td>Jone Doe</td>
            <td>Programming</td>
            <td>English</td>
            <td>10$</td>
            <td>
                <button class="edit_butt"><a href="#" class="butt_link">Edit</a></button>     
            </td>
            <td>
                <button type="submit" class="delete_butt"  >Delete</button>
            </td>
        </tr>
        <tr>
            <td>Python</td>
            <td>Jone Doe</td>
            <td>Programming</td>
            <td>English</td>
            <td>15$</td>
            <td>
                <button class="edit_butt"><a href="#" class="butt_link">Edit</a></button>     
            </td>
            <td>
                <button type="submit" class="delete_butt"  >Delete</button>
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