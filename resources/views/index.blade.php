<!DOCTYPE>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/{{ $theme }}.css">
    </head>

    <body class="d-flex align-items-center">
        <div class="container text-center d-flex justify-content-center flex-column" style="position:relative;">
            <h1>TO DO LIST</h1>
            <div class="themes">
                <a href="/70sAcid">70's-Acid</a>
                <a href="/Hawaii">Hawaii</a>
                <a href="/Modern">Modern</a>
            </div>
            <h4 class="mt-5">What do you want to do today ?</h4>

            <div>
                <form method="POST" action="{{route('add')}}" class="d-flex justify-content-center align-items-center">
                    @csrf
                    <input type="text" name="dosomething" placeholder="Do something...">
                    <button type="submit" class="btn addbtn">Add</button>
                </form>
            </div>

            <div class="d-flex flex-column mx-3 my-5 myscroll" style="overflow-y: scroll; height:50vh;">
                @foreach($list as $item)
                <div class="list-items">
                    @if($item->status)
                        <p>{{ $item->todosomething }}</p>
                    @else
                        <del><p>{{ $item->todosomething }}</p></del>
                    @endif
                    <form method="POST" action="{{$item->status ? route('done', $item->id) : route('remove', $item->id)}}" style="margin:auto 0px;">
                        @csrf
                        @if ($item->status)
                            <button type="submit" class="btn doneBtn">Done</button>
                        @else
                            @method('DELETE')
                            <button type="submit" class="btn removeBtn">Remove</button>
                        @endif
                    </form>
                </div>
                @endforeach
            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{url('js/myscript.js')}}"></script>
        <script>
            // $(document).ready(function(){
            //     $('select').change(function(){
            //         var xhttp = new XMLHttpRequest;
            //         xhttp.onreadystatechange=function() {
            //             if (this.readyState == 4 && this.status == 200) {
            //                 alert(this.responseText);
            //             }
            //         };
            //         xhttp.open("GET", "/"+$('select option:selected').text());
            //         xhttp.send();
            //     });
            // });
        </script>
    </body>
</html>