<a href="{{route("categories.create")}}"><button>CREATE CATEGORY</button></a>
    <table border="1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $key => $category)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$category["name"]}}</td>
                    <td>{{$category["description"]}}</td>
                    <td><img style="width: 300px; height: 150px" src="img/{{$category->image}}" alt=""></td>
                    <td><a href="{{route('categories.detail',$category->id)}}">Detail</a></td>
                    <td><a href="{{route('categories.update',$category->id)}}">Update</a></td>
                    <td><a href="{{route('categories.delete',$category->id)}}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

