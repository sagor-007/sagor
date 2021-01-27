<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>

        <div class="container">

            <div class="content">
                <div class="title m-b-md">
                  <h1>Add Student Information</h1>  
                </div>

                            <div class="link">

                                <a href="{{url('/')}}">Home</a>
                                <a href="{{url('about')}}">About</a>
                                <a href="{{url('contact')}}">Contact</a>
                                <a href="{{url('form')}}">Form</a>
                            </div>

                            <div class="pd=2">
                                 <form action="formsubmit" method="post">
                                 {{ csrf_field() }}
                                    Name: <input type="text" name="name"><br>
                                    Season: <input type="text" name="season"><br>
                                    Semester: <input type="text" name="semester"><br>
                                    E-mail: <input type="text" name="email"><br>
                                    <input type="submit">
                                </form>
                            </div>

        </div>


                
            </div>
        </div>
    </body>
</html>
