@extends('admin.layout')
@section('content')

<div class="row">
    {!! Form::open(['route'=>'page-create','enctype'=>'multipart/form-data']) !!}
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error )
            <li>{{ $error }}</li>
        @endforeach
    </div>
    @endif
    <div class="x_panel">
        <div class="x_title">
            <h2 class="sub_title" >Page Content</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="form-group has-feedback" style="position: relative;">
                <label for="name" class="hws_form_label">Title : </label>
                {!! Form::text('title','events',['class'=>'form-control','required'=>'required','readonly'=>'readonly']) !!}  
                <span class="hws_error text-right text-danger">
                    {{ $errors->first('title') }}
                </span>
            </div>
            <div class="form-group has-feedback" style="position: relative;">
                <label  class="hws_form_label">first Section :</label><br>
                <label  class="hws_form_label">Title :</label>
                {!! Form::hidden('txt_name[]','first_title') !!}
                @if ($total_row)
                @foreach ($page as $value )
                    @if ($value->section_title=='first_title')
                    {!! Form::text('first_title',$value->data,['class'=>'form-control',]) !!}  
                    @endif                   
                @endforeach     
                @else
                {!! Form::text('first_title','',['class'=>'form-control',]) !!}
                @endif
                <label  class="hws_form_label">Text :</label>
                {!! Form::hidden('txt_name[]','first_text') !!}
                {!! Form::text('first_text','',['class'=>'form-control',]) !!}
                @if ($total_row)
                @foreach ($page as $value )
                    @if ($value->section_title=='first_text')
                    {!! Form::text('first_text',$value->data,['class'=>'form-control',]) !!}  
                    @endif                   
                @endforeach     
                @endif
            </div>
            
            
            {{ Form::submit('save',['class'=>'btn btn-primary']) }}
        </div>
    </div>

    {!! Form::close() !!}
</div>

@endsection

@push('footer-script')
    
@endpush