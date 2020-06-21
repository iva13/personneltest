

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Users List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>List user</h2>

    <table class="table">
        <thead>
            <tr>
                <th> User </th>  <th> Client </th>  <th> Client Type </th> 
                <th> Date </th>  <th> Duration </th>  <th> Type of Call </th> <th> External Call Score </th><th>  </th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $key => $user)

<tr>
<td> {{ $user['user'] }} </td>
<td> {{ $user['client'] }} </td>
<td> {{ $user['clientType'] }} </td>
<td> {{ $user['date'] }} </td>
<td> {{ $user['duration'] }} </td>
<td> {{ $user['typeOfCall'] }} </td>
<td> {{ $user['externalCallScore'] }} </td>


                    <td>
                        <a href="{{URL::to('/user')}}/{{$key+1}}"> View </a>  &nbsp;&nbsp;
                    
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</div>

</body>
</html>
