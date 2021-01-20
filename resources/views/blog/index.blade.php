<!DOCTYPE html>
<html>
<head>
    <title>Manage Product</title>
</head>
<body id="page-top">
@include('admin/header')
      <div id="wrapper">

@include('admin/leftbar')
      <div id="content-wrapper">

        <div class="container-fluid">
 <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Manage Products</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered"  width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Product Name</th>
                      <th>QTY</th>
                      <th>Images</th>
                      <th>Price</th>
                      <th>Detail</th>
                      <th>Discount</th>
                      <th>Featured</th>
                      <th>Category ID</th>
                      <th>Action 1</th>
                      <th>Action 2</th>

                    </tr>
                  </thead>
                  <tbody>
                      @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td>{{ $blog->name }}</td>
                <td>{{ $blog->qty }}</td>
                <td><img src="{{ asset("image/$blog->image")}}" style="height:100px; width:100px;">
                </td>
                <td>{{ $blog->price }}</td>
                <td>{{ $blog->detail }}</td>
                <td>{{ $blog->discount }}</td>
                <td>{{ $blog->is_featured }}</td>
                <td>{{ $blog->category_id }}</td>

<!--                 <td>{{ $blog->path }}</td>
 -->                <td>
                    <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-success">Edit</a>
                </td>
                <td>
                    {!! Form::open(['method'=>'delete', 'route'=>['blog.destroy', $blog->id]]) !!}
                    {!! Form::submit('Delete', ['class'=>'btn btn-danger', 'onclick'=>'return confirm("Do you want to delete this record?")']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
        </div>


        <div>
    {{ $blogs->links() }}
        </div>


    </div>

</div>
<footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright ©  bikkiConsult 2019</span>
            </div>
          </div>
        </footer>
</body>
</html>