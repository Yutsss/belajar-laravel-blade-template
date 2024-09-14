<html>
    <body>
        @while($i < 10)
            {{ $i }}
            @php
            $i++
            @endphp
        @endwhile
    </body>
</html>
