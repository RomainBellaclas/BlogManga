<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{asset("css/site.css")}}">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
    <title>Blog Manga Naïto</title>
  </head>
  <body>

    @include("_includes.navbar")

    <div class="container-fluid h-100">
                @include("_includes.errors")
                @yield("content")
                @yield("card")
                
        
        
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script')
    <script>
        $(() => {
            $('#logout').click((e) => {
                e.preventDefault()
                $('#logout-form').submit()
            })
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

  </body>
</html>