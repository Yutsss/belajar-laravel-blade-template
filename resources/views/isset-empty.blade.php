<html>
    <body>
        @isset($name)
            Hello, {{ $name }}
        @endisset

        @empty($hobbies)
            No hobbies.
        @endempty
    </body>
</html>
