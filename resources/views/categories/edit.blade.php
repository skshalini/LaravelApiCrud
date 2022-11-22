<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <title>Categories</title>
    
</head>
<body>
   
<div class="container">   
<h2> Edit Category </h2>          
 <div class="row">
     <div class="col-sm-4">
       <form method="Post" action="/category-update/{{ $category->id}}" />
       @csrf
       @method('put')
         <label>Title</label>
         <input type="text" name="title" class="form-control" value="{{ $category->title }}">
         <button type="submit" class="btn btn-info mt-4">Update</button>
       </form>
     </div>
   </div>
</div>
</body>
</html>
</body>
</html>