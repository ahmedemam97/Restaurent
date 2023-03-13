<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public"> <!--to view css codes in the page-->
    <!--CSS-->
    @include('admin.admincss')
  </head>
  <body>
    

    <div class="container-scroller">
        <!--SIDEBAR-->
        @include('admin.sidebar')


        <div style="position: relative; top: 60px; right: -150px">
            <form action="{{ url('/update',$data->id) }}" method="post" enctype="multipart/form-data">
                
                @csrf
    
                <div>
                    <label>Title</label>
                    <input style="color: blue" type="text" name="title" 
                           required value="{{ $data->title }}">
                </div>
    
                <div>
                    <label>Price</label>
                    <input style="color: blue" type="num" 
                           name="price" required value="{{ $data->price }}">
                </div>
    
    
    
                <div>
                    <label>Description</label>
                    <input style="color: blue" type="text" name="description" 
                           required value="{{ $data->description }}">
                </div>
    
                <div>
                    <label>Old Image</label>
                    <img src="/foodimage/{{ $data->image }}" height="200" width="200">
                </div>
                <div>
                    <label>New Image</label>
                    <input type="file" name="image" required>
                </div>
    
                <div>
                    <input style="color: rgb(161, 230, 134)" type="submit" value="Save">
                </div>
    
            </form>
    
    </div>

    <!--JAVASCRIPT-->
    @include('admin.adminscript')
    
  </body>
</html>