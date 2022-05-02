<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>{{ $bb->title }} :: listing</title>
    </head>

    <body>
        <div class="container">
            <h1 class="my-3 tехt-сеntеr">Объявления</h1>
            <tr>
                
                <h3>{{ $bb->title }}</h3>
                
                <p>{{ $bb->content }}</p>
                <p>{{ $bb->price }}</p>
                <p>Email {{ $user }} : <a href="mailto:{{ $user->email }}">Get in touch</a></p>
                <p><a href="/news">Back to listings</a></p>
            </tr>
        </div>
    </body>

    </html>