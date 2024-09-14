<html>
    <body>
        @forelse($hobbies as $hobby)
            <li>{{ $hobby }}</li>
        @empty
            <p>Belum ada hobi</p>
        @endforelse
    </body>
</html>
