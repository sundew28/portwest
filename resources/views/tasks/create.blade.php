<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>

<body>

    <div class="container mt-2">

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left mb-2">

            <h2>Add Task</h2>

            </div>

            <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('tasks.list') }}"> Back</a>

            </div>

        </div>

    </div>

    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{route('tasks.store')}}" method="POST">

    @csrf

        <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-6">

                <div class="form-group">

                    <strong>Title:</strong>

                    <input type="text" name="title" class="form-control" placeholder="Title">

                    @error('title')

                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

                    @enderror

                </div>

            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">

                <div class="form-group">

                    <strong>Description:</strong>

                    <textarea name="description" class="form-control" placeholder="Description"></textarea>

                    @error('description')

                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

                    @enderror

                </div>

            </div>    

            <div class="col-xs-6 col-sm-6 col-md-6">

                <button type="submit" class="btn btn-primary ml-3">Submit</button>

            </div>

        </div>

    </form>

</body>

</html>