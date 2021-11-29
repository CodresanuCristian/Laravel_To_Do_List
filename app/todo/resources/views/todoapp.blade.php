<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>

    <body style=" background-image: linear-gradient(to right top, #482ec2, #624ac3, #7764c3, #8c7ec2, #9f97bf, #9a93b8, #968fb1, #918baa, #74699e, #584890, #3b2781, #140071); color:white;">
        <div class="container-lg d-flex flex-column align-items-center p-5" style="height:100vh;">
            <h1 class="text-center" style="margin-top:150px; font-weight:bold;">To Do List</h1>
            <h3 class="text-center">What do you want to do today?</h3>
            <form method="POST" action="datarecord" class="container d-flex justify-content-center my-3">
                @csrf
                <input type="text" name="inputText" placeholder="To do something" style="width:50%;">
                <button class="btn btn-md btn-primary" type="submit" style="width:100px;">Add</button>
            </form>

            <div class="container" style="padding:0px 10%; margin:70px 0px; overflow-y:scroll;">
                @foreach($list as $item)
                    <div class="d-flex justify-content-between align-items-center" id="todolist">
                        @if ($item->status == 1)
                            <del style="color:red;"><h4 style="color:white;">{{ $item->todobody }}</h4></del>
                        @else
                            <h4 style="color:white;">{{ $item->todobody }}</h4>
                        @endif
                        <form method="GET" action="{{$item->status ? route('destroy', $item->id) : route('update', $item->id)}}">
                            @csrf
                            @if ($item->status == 0)
                                <button class="btn btn-md btn-success my-2" type="submit" style="width:100px;">Finish</button>
                            @else
                                @method('DELETE')
                                <button class="btn btn-md btn-danger my-2" type="submit" style="width:100px;">Delete</button>
                            @endif
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>