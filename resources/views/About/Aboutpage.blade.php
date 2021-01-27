<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>About</title>

        <div class="container">
            <div class="content">
                <div class="title m-b-md">
                  <h1>About</h1>
                </div>


                <div class="link">

                                <a href="{{url('/')}}">Home</a>
                                <a href="{{url('about')}}">About</a>
                                <a href="{{url('contact')}}">Contact</a>
                                <a href="{{url('form')}}">Form</a>
                </div>
                </div>       
            </div>
        </div>
    </body>
</html>
