<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Tasks List</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
</head>
<body>

        <div class="container mt-2">

                <div class="row">

                        <div class="col-lg-12 margin-tb">

                                <div class="pull-left">
                                        <h2>Admin Tasks List</h2>
                                </div>

                                <div class="pull-right mb-2">
                                        <a class="btn btn-success" href="{{route('tasks.create')}}"> Create Task</a>&nbsp;
                                        <a class="btn btn-success" href="{{route('tasks.list')}}"> All Tasks</a>&nbsp;
                                        <a class="btn btn-success" href="{{route('tasks.filter', ['status' => 1])}}"> New Tasks</a>&nbsp;
                                        <a class="btn btn-success" href="{{route('tasks.filter', ['status' => 2])}}"> Completed Tasks</a>&nbsp;
                                </div>

                        </div>

                </div>

        <table class="table table-bordered">
                <tr>
                        <th>ID</th>

                        <th>TITLE</th>

                        <th>DESCRIPTION</th>

                        <th>CREATED DATE</th>

                        <th width="280px">Action</th>
                </tr>

                @foreach ($tasks as $task)

                        <tr>
                                @if($task->status == 2)
                                        <td class='text-decoration-line-through'>{{ $task->id }}</td>

                                        <td class='text-decoration-line-through'>{{ $task->title }}</td>

                                        <td class='text-decoration-line-through'>{{ $task->description }}</td>

                                        <td class='text-decoration-line-through'>{{ $task->created_at }}</td>
                                        <td>&nbsp</td>                   
                                @else
                                        <td>{{ $task->id }}</td>

                                        <td>{{ $task->title }}</td>

                                        <td>{{ $task->description }}</td>

                                        <td>{{ $task->created_at }}</td>

                                        <td> 
                                                <a class="btn btn-primary" href="{{route('tasks.edit', $task->id)}}">Edit</a>

                                                <a class="btn btn-primary" href="{{route('tasks.done', $task->id)}}">Done</a>

                                                <a class="btn btn-primary" href="{{route('tasks.delete', $task->id)}}">Delete</a>
                                              
                                         </td>
                                @endif
                                
                        </tr>

                @endforeach
        </table>        

</body>
</html>