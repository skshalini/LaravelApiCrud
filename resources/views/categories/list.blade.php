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
<h1>Categories<a class="btn btn-info" href="/category-create"> New Category </a><h1>  
    @if(session()->has('Success'))   
  <div class="alert alert-info" role="alert">
      <strong>{{ session()->get('Success') }}</strong>
  </div>
  @endif     
  <table class="table table-hover">
    <thead>
      <tr>
        <th>SL no.</th>
        <th>Title</th>
        <th>Created Time</th>
        <th>Updated Time</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
      <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{ $category->title }}</td>
        <td>{{ $category->created_at}}</td>
        <td>{{ $category->updated_at}}</td>
        <td>
        <form method="POST" action="/category-delete/{{ $category->id }}" />
            <a href="/category-edit/{{ $category->id }}" class="btn btn-sm btn-info"> Edit </a>
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
        </td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>

{{ $categories->links() }}

</body>
</html>

