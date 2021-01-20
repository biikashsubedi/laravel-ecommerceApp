<!DOCTYPE html>
<html>
<head>
    <title>Manage Projects</title>
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
              User Information </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered"  width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Username</th>
                      <th>Created Date</th>
                    </tr>
                  </thead>
                  <tbody>


                  	@foreach($getadmin as $admin)
                  	<tr>
                  		<td>{{$admin->id}}</td>
                      <td>{{$admin->username}}</td>
                      <td>{{$admin->createDate}}</td>
                  	</tr>
                  	@endforeach

        </tbody>

    </table>
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