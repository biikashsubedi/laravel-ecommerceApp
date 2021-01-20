<!DOCTYPE html>
<html>
<head>
	<title>Add News</title>
  

  </head>
  <body id="page-top">
@include('admin/header')    
    <div id="wrapper">

@include('admin/leftbar')
		<div id="content-wrapper">
			<div id="container-fluid">
				<div class="card-header">
              <i class="fas fa-table"></i>
              Add News</div>

              <style type="text/css">
              	.onform{
              		padding: 15px 15px 15px 15px;
              		font-size: 17px;
              		font-family: sans-serif;
              	}
              	.control-label{
              		font-weight: bold;
              	}
              	.form-group{
              		padding: 10px 10px 10px 10px;
              	}

              </style>
        
              <form method="POST" class="form-horizontal onform" enctype="multipart/form-data">
              <div class="row form-group">
              	<label class="col-md-2 control-label">News Title: <span style="color:red">*</span></label>
              	<div class="col-md-4">
              	<input type="text" class="form-control" name="blogtitle">
              	</div>

              	<label class="col-md-2 control-label">Post By: <span style="color:red">*</span></label>
              	<div class="col-md-4">
              	<input type="text" class="form-control" name="postby">
              	</div>
              </div>

                <div class="row form-group">
              	<!-- <label class="col-md-2 control-label">Post Date: <span style="color:red">*</span></label>
              	<div class="col-md-4">
              	<input type="date" class="form-control" name="">
              	</div> -->
              	<label class="col-md-2 control-label">Image: <span style="color:red">*</span></label>
              	<div class="col-md-4">
              	<input type="file" class="form-control" name="image">
              	</div>
              	</div>
              	<div class="row form-group">
       		<label class="col-md-2 control-label">News Details<span style="color: red">*</span></label>
       		<div class="col-md-10">
       		<textarea class="form-control" rows="3" name="details"></textarea>		
       		</div>
              	</div>

                     <div class="form-group">
                     <div class="col-sm-8 col-sm-offset-2">
                     <button type="submit" name="submit" class="btn btn-success">Post News</button>
                     <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                     </div>
                     </div>
          	  </form>
			</div>
      <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright ©  bikkiConsult 2019</span>
            </div>
          </div>
        </footer>
		</div>
	</div>

</body>
</html>