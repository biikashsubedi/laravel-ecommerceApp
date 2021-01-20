@extends('layouts.master')


@section('header')

    <h2>Edit Project</h2>
@stop

@section('content')
    {!! Form::model($blog, ['route'=>['blog.update', $blog->id], 'method'=>'PATCH', 'class'=>'form-horizontal']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name', ['class'=>'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
                {!! $errors->has('name')?$errors->first('name'):'' !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('qty', 'QTY', ['class'=>'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::text('qty', null, ['class'=>'form-control']) !!}
                {!! $errors->has('qty')?$errors->first('qty'):'' !!}
            </div>
        </div>
        
        <div class="form-group">
            {!! Form::label('price', 'Price', ['class'=>'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::text('price', null, ['class'=>'form-control']) !!}
                {!! $errors->has('price')?$errors->first('price'):'' !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('qty', 'QTY', ['class'=>'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::text('qty', null, ['class'=>'form-control']) !!}
                {!! $errors->has('qty')?$errors->first('qty'):'' !!}
            </div>
        </div>
        
        <div class="form-group">
            {!! Form::label('discount', 'Discount', ['class'=>'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::text('discount', null, ['class'=>'form-control']) !!}
                {!! $errors->has('discount')?$errors->first('discount'):'' !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Category ID', ['class'=>'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::text('category_id', null, ['class'=>'form-control']) !!}
                {!! $errors->has('category_id')?$errors->first('category_id'):'' !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('image', 'Image', ['class'=>'control-label col-md-2']) !!}
            <div class="col-md-10">
            {!! Form::file('image', null, ['class'=>'form-control']) !!}
                {!! $errors->has('image')?$errors->first('image'):'' !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('detail', 'Detail', ['class'=>'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::textarea('detail', null, ['class'=>'form-control']) !!}
                {!! $errors->has('detail')?$errors->first('detail'):'' !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
                <tr>
                <a href="{{'/blog'}}" class="btn btn-success">Cancel</a>
                </tr>
            </div>  
        </div>
    {!! Form::close() !!}
@stop