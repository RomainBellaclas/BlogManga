<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{asset("css/site.css")}}">
    <title>Hello, world!</title>
  </head>
  <body>
      
     <!-- <img src="{{ asset("images/BlameFont.jpg") }}" alt="BlameFont">-->

    <div class="container-fluid">
        <div class="card divTemplate text-center col-md-6 offset-md-3 ">
            <div class="card-body">
                @yield("content")
            </div>
        </div>
        
        
    </div>

  </body>
</html>