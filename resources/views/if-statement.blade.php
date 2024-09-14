<html>
    <body>
        @if (count($hobbies) == 1)
            I have one hobby.
        @elseif (count($hobbies) > 1)
            I have multiple hobbies.
        @else
            I don't have any hobbies.
        @endif
    </body>
</html>
