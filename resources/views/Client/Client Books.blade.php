@extends("layout")
@section("content")
<table>
    <h2 class="wappee">Borrowed Books</h2>
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

<table>
    <h2 class="wappee">Buyed Books</h2>
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
                <button type="submit" class="delete_butt" >Delete</button>
            </td>
        </tr>
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
    </tbody>
</table>
@endsection
    