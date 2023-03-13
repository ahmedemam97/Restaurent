<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!--CSS-->
    @include('admin.admincss')
  </head>
  <body>
    
    <div class="container-scroller">
        <!--SIDEBAR-->
        @include('admin.navbar')

        <form action="{{ url('/updatefoodchef',$data->id) }}" method="POST" enctype="multipart/form-data">

            <div>
                <label>Chef Name</label>
                <input style='color: blue;' type="text" name="name" value="{{ $data->name }}">
            </div>

            <div>
                <label>Specialityy</label>
                <input style='color: blue;' type="text" name="speciality" value="{{ $data->speciality }}">
            </div>

            <div>
                <label>Old Image</label>
                <img height="200" width="200" src="/chefimage/{{ $data->image }}">
            </div>

            <div>
                <label>Upload Image</label>
                <input type="file" name="image">
            </div>

            <div>
                <input style='color: blue;' type="submit" value="Update Chef" required>
            </div>
        </form>

    </div>


    <!--JAVASCRIPT-->
    @include('admin.adminscript')
    
  </body>
</html>