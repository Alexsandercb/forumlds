<?php
use Illuminate\Support\Facades\Session;
?>
@extends('layouts.dashboard')

@section('content')
          <!--main content start-->
       
          
    <section id="main-content">
        <section class="wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-edit"></i>Editar Forum</h3>
              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/dashboard/home">Home</a></li>
                <li><i class="fa fa-question"></i>Forum</li>
              <li><i class="fa fa-plus"></i>Editar</li>
              </ol>
            </div>
          </div>


          <!-- edit-profile -->
<div id="edit-profile" class="tab-pane">
  <section class="panel">
    <div class="panel-body bio-graph-info">
        @if (session()->has('errors'))
            @foreach ($errors as $error)
                {{$error}}
            @endforeach
        @endif
      @if(\Session::has('message'))

      <p class="alert
      {{ Session::get('alert-class', 'alert-success') }}">{{Session::get('message') }}</p>
      
      @endif
      <form class="form-horizontal" method="POST" action="{{
      route('forum.update', $forum->id)}}" enctype="multipart/form-data">
          @csrf
      
        <div class="form-group">
          <label class="col-lg-2 control-label">Titutlo do Forum</label>
          <div class="col-lg-10">
          <input name="title" class="form-control" value="{{ $forum->title}}"/>
          </div>
        </div>


        <div class="form-group">
            <label class="col-lg-2 control-label">Categoria do forum</label>
            <div class="col-lg-10">
              <select name="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->title }}  </option>
                @endforeach
              </select>
            </div>
          </div>
          
    
        <div class="form-group">
          <label class="col-lg-2 control-label">Descrição forum</label>
          <div class="col-lg-10">
          <textarea name="desc" id="editor1" class="form-control" cols="30" rows="5">
            {{ $forum->desc }}
          </textarea>
          </div>
        </div>
      
        <input type="number" value="{{ auth()->id() }}" name="user_id" hidden/>

   


        

        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-success">Atualizar Forum</button>
            <a href="/dashboard/home" class="btn btn-danger">Cancel</a>
          </div>
        </div>
      </form>
    </div>
  </section>
</div>


        </section>
      </section>
      <!--main content end-->
      
@endsection
?>