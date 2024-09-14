<html>
    <body>
        <form action="/test" method="post">
            @csrf
            <input type="text" name="name" />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
