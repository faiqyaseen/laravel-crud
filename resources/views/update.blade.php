<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center bg-warning">
            <div class="col-md-6 p-5 m-5">
                <form action="/update" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" value="{{$data['id']}}" placeholder="Enter Your Name" name="id" class="form-control my-1">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$data['name']}}" placeholder="Enter Your Name" name="name" class="form-control my-1">
                    </div>
                    <div class="form-group">
                        <input type="email" value="{{$data['email']}}" placeholder="Enter Your Email" name="email" class="form-control my-1">
                    </div>
                    <input type="submit" value="Add" class="btn btn-primary my-3">
                </form>
            </div>
        </div>
    </div>

</body>
</html>