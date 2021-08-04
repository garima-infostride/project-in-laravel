@extends('admin.layout')
@section('content')

<div class="row">
    {!! Form::open(['route'=>'page-create','enctype'=>'multipart/form-data']) !!}
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </div>        
        @endif
        <div class="x_panel">
            <div class="x_title">
                <h2 class="sub_title" >Page Content</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="form-group has-feedback" style="position: relative;">
                    <label for="name" class="hws_form_label">title:</label>
                    {{-- <input type="text" name="title" value="{{ $page->page_title }}" class="form-control" placeholder="Title..." 
                    readonly="readonly"> --}}
                    {!! Form::text('title','home',['class'=>'form-control','required'=>'required','readonly'=>'readonly']) !!}  
                    <span class="hws_error text-right text-danger">
                        {{ $errors->first('title') }}
                    </span>
                </div>
                 <div class="form-group has-feedback" style="position: relative;">
                    <label for="image" class="hws_form_label">Banner Image :</label>
                    {!! Form::hidden('image[]','banner_image') !!}
                    {!! Form::file('banner_image',['class'=>'form-control','id'=>'file']) !!}
                </div>
                
                @foreach ($page as $value )
                    @if ($value->section_title == 'banner_image')
                        <img src="{{ URL::asset("uploads") }}/{{ $value->data }}"  style="height: 200px; width:200px" alt=""> 
                    @endif
                @endforeach
                
                <div class="form-group has-feedback" style="position: relative;">
                    <label  class="hws_form_label">second Section :</label><br>
                    <label  class="hws_form_label">Title :</label>
                    {!! Form::hidden('txt_name[]','second_title') !!}
                    {!! Form::text('second_title','',['class'=>'form-control',]) !!}  
                    
                    @foreach ($page as $value )
                        @if ($value->section_title=='second_title')
                        {!! Form::text('second_title',$value->data,['class'=>'form-control',]) !!}  
                        @endif                   
                    @endforeach           
                </div> 
                 <div class="form-group has-feedback" style="position: relative;">
                    <label  class="hws_form_label">Third Section :</label><br>
                    <label  class="hws_form_label">Title :</label>
                    {!! Form::hidden('txt_name[]','third_title') !!}
                    {!! Form::text('third_title','',['class'=>'form-control',]) !!} 
                    
                    @foreach ($page as $value )
                        @if ($value->section_title=='third_title')
                        {!! Form::text('third_title',$value->data,['class'=>'form-control',]) !!}  
                        @endif                   
                    @endforeach  
                    <label  class="hws_form_label">Text :</label>
                    {!! Form::hidden('txt_name[]','third_text') !!}
                    {!! Form::text('third_text','',['class'=>'form-control',]) !!}  
                    @foreach ($page as $value )
                        @if ($value->section_title=='third_text')
                        {!! Form::text('third_text',$value->data,['class'=>'form-control',]) !!}  
                        @endif                   
                    @endforeach          
                </div>
                <div class="form-group has-feedback" style="position: relative;">
                    <label  class="hws_form_label">Forth Section :</label><br>
                    <label  class="hws_form_label">Title :</label>
                    {!! Form::hidden('txt_name[]','forth_title') !!}
                    {!! Form::text('forth_title','',['class'=>'form-control',]) !!}  
                    @foreach ($page as $value )
                        @if ($value->section_title=='forth_title')
                        {!! Form::text('forth_title',$value->data,['class'=>'form-control',]) !!}  
                        @endif                   
                    @endforeach      
                         
                </div>
                <div class="form-group has-feedback" style="position: relative;">
                    <label  class="hws_form_label">Fifth Section :</label><br>
                    <label  class="hws_form_label">Title :</label>
                    {!! Form::hidden('txt_name[]','fifth_title') !!}
                    {!! Form::text('fifth_title','',['class'=>'form-control',]) !!}  
                    @foreach ($page as $value )
                        @if ($value->section_title=='fifth_title')
                        {!! Form::text('fifth_title',$value->data,['class'=>'form-control',]) !!}  
                        @endif                   
                    @endforeach           
                </div> 
            
                {{ Form::submit('save',['class'=>'btn btn-primary']) }}
            </div>
        </div>
    {!! Form::close() !!}
</div>

@endsection

@push('footer-script')
<script>
    $(function(){
        if($("#editor").length){
            CKEDITOR.replace('editor',{});
        }
        $('.editor').each(function(){
            CKEDITOR.replace($(this).attr('id'));
        });
    });
</script>
    
@endpush