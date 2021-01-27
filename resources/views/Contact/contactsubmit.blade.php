<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact submit</title>
</head>
<body>
    







                            <div class="pd=2">
                                 <form action="contactsubmit" method="post">
                                 {{ csrf_field() }}
                                    Name: <input type="text" name="name"><br>
                                    Contact_Number: <input type="number" name="Contact_Number"><br>
                                    E-mail: <input type="text" name="email"><br>
                                    <input type="submit">
                                </form>
                            </div>









</body>
</html>