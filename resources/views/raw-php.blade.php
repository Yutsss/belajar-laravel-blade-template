<html>
    <body>
        @php
            class Person {
                public string $name;
            }

            $person = new Person();
            $person->name = 'Yuta';
        @endphp

        <h1>{{ $person->name }}</h1>
    </body>
</html>
