<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Maintenance</title>
    <style>
        body {
            text-align: center;
            padding: 150px;
            font: 20px Helvetica, sans-serif;
            color: #333;
            margin: 0;
        }
        h1 {
            font-size: 50px;
        }
        article {
            display: block;
            text-align: left;
            width: 650px;
            margin: 0 auto;
        }
        a {
            color: #dc8100;
            text-decoration: none;
        }
        a:hover {
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <article>
        <img src=" {{ url('images/maintenance.png') }}" alt="Maintenance Image" style="width:100%; height:auto;">
        <h1>We&rsquo;ll be back soon!</h1>
        <div>
            <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always <a href="mailto:#">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
            <p>&mdash; The Team</p>
        </div>
    </article>
</body>
</html>
