<html>
    <body>
    @foreach($hobbies as $hobby)
        {{$loop->iteration}}. {{$hobby}}
    @endforeach
    </body>
</html>
