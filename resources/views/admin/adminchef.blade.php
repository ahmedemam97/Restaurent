<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--CSS-->
    @include('admin.admincss')
</head>
<body>
    
    <div class="container-scroller">
            <!--SIDEBAR-->
        @include('admin.Sidebar')
        <!-------------------------------------------------------------------------------->
        
        <form action="{{ url('/uploadchef') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Name</label>
                <input style="color: blue" type="text" name="name" placeholder="Chef" required>
            </div>
            <div>
                <label>Speciality</label>
                <input style="color: blue" type="text" name="speciality" placeholder="Speciality" required>
            </div>
            <div>
                <label>Chef Image</label>
                <input type="file" name="image" required>
            </div>
            <div>
                <input type="submit" value="Save">
            </div>
        </form>

        <table bgcolor='black'>
            <tr>
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Speciality</th>
                <th style="padding: 30px">Image</th>
                <th style="padding: 30px">Action</th>
            </tr>

            @foreach ($data as $data)
            <tr align="center">
                <td>{{ $data->name }}</td>
                <td>{{ $data->speciality }}</td>
                <td><img height="100" width="100" src="/chefimage/{{ $data->image }}"></td>
                <td><a href="{{ url('/updatechef',$data->id) }}">Update</a></td>
                <td><a href="{{ url('/deletechef',$data->id) }}">Delete</a></td>
            </tr>
            @endforeach
        </table>
    </div>
    <!--JAVASCRIPT-->
    @include('admin.adminscript')
    
  </body>
</html>