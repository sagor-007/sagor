<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Student list</title>
</head>
<body>
  



<h1 style="text-align:center;" >Student List</h1>


                      <div class="span12" style="text-align:center">
                        <a href="{{url('/')}}">Home</a>
                        <a href="{{url('about')}}">About</a>
                        <a href="{{url('contact')}}">Contact</a>
                        <a href="{{url('form')}}">Form</a>
                      </div>
    

                        <style>
                        table {
                          font-family: arial, sans-serif;
                          border-collapse: collapse;
                          width: 100%;
                        }

                        td, th {
                          border: 1px solid #dddddd;
                          text-align: left;
                          padding: 8px;
                        }

                        tr:nth-child(even) {
                          background-color: #B6C7FC;
                        }
                        </style>

      <table>
          <tr>
              <th>id</th>
              <th>name</th>
              <th>season</th>
              <th>semester</th>
              <th>email</th>
              <th class="no-sort" colspan=2>Actions</th>
          </tr>

          @foreach($users as $users)
          <tr>
              <td>{{$users->id}}</td>
              <td>{{$users->name}}</td>
              <td>{{$users->season}}</td>
              <td>{{$users->semester}}</td>
              <td>{{$users->email}}</td>
              <td> <a href="edit/{{$users->id}}">eidit</a></td>
              <td> <a href="listshow/{{$users->id}}">delete</a></td>
          </tr>
          @endforeach
        </table>

</body>
</html>