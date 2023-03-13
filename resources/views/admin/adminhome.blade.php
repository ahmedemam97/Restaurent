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
      <nav>
        <a href="#top" class="active">Home</a>
      </nav>
        <!--SIDEBAR-->
        @include('admin.sidebar')
    </div>


    <!--JAVASCRIPT-->
    @include('admin.adminscript')
    
  </body>
</html>