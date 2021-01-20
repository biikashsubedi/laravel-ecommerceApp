<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body id="page-top">
@include('admin/header')
    <div id="wrapper">
        @include('admin/leftbar')
        <div id="content-wrapper">
            <div id="container-fluid">
                <div class="card-header">
              <i class="fas fa-table"></i>
              Add Project</div>

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

              <br>



    {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store', 'files'=>true]) !!}

    <div class="form-group">
    <div class="row">
    <div class="col md-6">
    {!! Form::label ('name', 'Product Name *' )  !!}
   
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
     <div class="col md-6">
    {!! Form::label ('qty', 'QTY *')  !!}
    {!! Form::text('qty', null, ['class'=>'form-control']) !!}
    </div>
    </div>
    </div>



    <div class="form-group">
    <div class="row">
    <div class="col md-6">
    {!! Form::label ('price', 'Price *' )  !!}
    {!! Form::text('price', null, ['class'=>'form-control']) !!}
    </div>
    <div class="col md-6">
    {!! Form::label ('discount', 'Discount *' )  !!}
    {!! Form::text('discount', null, ['class'=>'form-control']) !!}
    </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col md-6">
    {!! Form::label ('is_featured', 'Featured *' )  !!}
    {!! Form::text('is_featured', null, ['class'=>'form-control']) !!}
    </div>
    <div class="col md-6">
    {!! Form::label ('category_id', 'Category ID *' )  !!}
    {!! Form::text('category_id', null, ['class'=>'form-control']) !!}
    </div>
    </div>
    </div>


    <div class="form-group">
    {!! Form::label('file', 'Image *') !!}
    <div class="col-md-10">
    {!! Form::file('file', ['class'=>'control-label']) !!}
    </div>
    </div> 

    <div class="form-group">
    {!! Form::label ('detail', 'Detail *' )  !!}
    <div class="col-md-10">
    {!! Form::textarea('detail', null, ['class'=>'control-label']) !!}
    </div>
    </div>  

    <div class="form-group">
    <div class="col-md-offset-2 col-md-10">
    {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
    </div>
    </div>

    {!! Form::close() !!}


   <!--  {!! Form::open(['url'=>'blog','class'=>'form-horizontal']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title', ['class'=>'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
                {!! $errors->has('title')?$errors->first('title'):'' !!}
            </div>
            <div class="form-group">
            {!! Form::label('image','Image', ['class'=>'control-label col-md-2']) !!}
            <div class="col-md-10">
            {!! Form::file('file', ['class'=>'control-label']) !!}
            <span class="text-danger">{!! $errors->has('image')?$errors->first('image'):'' !!}</span>
            </div>
        </div>
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description', ['class'=>'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                {!! $errors->has('description')?$errors->first('description'):'' !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>
    {!! Form::close() !!} -->

              

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