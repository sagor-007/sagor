                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <div class="pd=2">
                                 <form action="/update/{{$user->id}}" method="post">
                                 {{ csrf_field() }}
                                    Name: <input type="text" value="{{$user->name}}"name="name"><br>
                                    Season: <input type="text" value="{{$user->season}}" name="season"><br>
                                    Semester: <input type="text" value="{{$user->semester}}" name="semester"><br>
                                    E-mail: <input type="text" value="{{$user->email}}" name="email"><br>
                                    <input type="submit">
                                </form>
                            </div>