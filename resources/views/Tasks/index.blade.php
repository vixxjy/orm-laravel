<!DOCTYPE html>
<html>
    <head>
        <title>Atbu Laravel Training</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/css/mdb.min.css" type="text/css" />
    </head>
    <body>
<!-- Card -->
<div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

    <!-- Content -->
    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
        <div>
            <h5 class="pink-text"><i class="fa fa-pie-chart"></i> Best Training</h5>
            <h3 class="card-title pt-2"><strong>Laravel Training</strong></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                Odit sed qui, dolorum!.</p>
            <a href ="{{route('tasks.create')}}" class="btn btn-pink"><i class="fa fa-clone left"></i> Add more Tasks</a>
        </div>
    </div>
    <!-- Content -->
</div>
<!-- Card -->
<table class="table">
  <thead class="blue-grey lighten-4">
    <tr>
      <th>#</th>
      <th>Student Tasks</th>
      <th>Show Button</th>
      <th>Edit Button</th>
      <th>Delete Buttone</th>
    </tr>
  </thead>
  <tbody>
      
@foreach($tasks as $task)
    <tr>
      <th scope="row">{{$task->id}}</th>
      <td>{{ $task->name }}</td>
      <td><a class="btn btn-info"  href="{{ route('tasks.show', $task->id)}}">Show</a></td>
      <td><a class="btn btn-warning" href="{{ route('tasks.edit', $task->id)}}">Edit</a></td>
      <td><a class="btn btn-danger" href="{{ route('tasks.delete', $task->id)}}">Delete</a></td>
    </tr>

@endforeach
  </tbody>
</table>


        
 <script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/js/mdb.min.js"></script>  
    </body>
</html>





