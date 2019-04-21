<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel BBS</title>

    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    >
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <header class="navbar navbar-dark bg-dark">
        <div class="container" id="top">
            <a class="navbar-brand" href="{{ url('') }}">
                Stationary Station
            </a>

            <div class="navbar-menu">
              <a href="index">
                  Supply
              </a>
              <span>　/　</span>
              <a href="index">
                  Repair
              </a>
              <span>　/　</span>
              <a href="index">
                  Notification
              </a>
          </div>
        </div>
    </header>
    <div>
        @yield('content')
    </div>
</body>
</html>
