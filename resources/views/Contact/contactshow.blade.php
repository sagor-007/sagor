
<div class="link">

<a href="{{url('/')}}">Home</a>
<a href="{{url('about')}}">About</a>
<a href="{{url('contact')}}">Contact</a>
<a href="{{url('form')}}">Form</a>
</div>

<h1>Student Contact List</h1>
 <body>
    

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
  background-color: #dddddd;
}
</style>

<table>
<tr>
    <th>id</th>
    <th>name</th>
    <th>contact number</th>
    <th>email</th>
    <th class="no-sort" colspan=2>Actions</th>
</tr>

@foreach($users as $users)
<tr>
    <td>{{$users->id}}</td>
    <td>{{$users->name}}</td>
    <td>{{$users->email}}</td>
    <td> <a href="edit/{{$users->id}}">eidit</a></td>
    <td> <a href="datashow/{{$users->id}}">delete</a></td>
</tr>
@endforeach
</table>

