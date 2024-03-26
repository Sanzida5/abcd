<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANEL - {{env("APP_NAME")}} - taste Better</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">ADMIN PANEL | {{env("APP_NAME")}}</a>
            

            <div class="navbar-nav nav">
                <a href="" class="nav-link nav-item">Logout</a>
            </div>
        </div>
</div>
<div class="navbar navbar-expand-lg navbar-dark bg-secondary py-0 small">
        <div class="container">
         
            

            <div class="navbar-nav nav">
                <a href="{{route("admin.dashboard")}}" class="nav-link nav-item">Home</a>
                <a href="{{route("admin.category")}}" class="nav-link nav-item">Manage Category</a>
                <a href="" class="nav-link nav-item">Manage Products</a>
                <a href="" class="nav-link nav-item">Insert Product</a>

            </div>
        </div>
</div>

@section('content')
        
        @show
    
    

</body>
</html>