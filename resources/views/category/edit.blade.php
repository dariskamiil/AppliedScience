@extends('Dashboard.admin')
@section('title')
<title>Category Master</title>
@endsection
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="/Category" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Edit Category</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="/home">Home</a></div>
      <div class="breadcrumb-item"><a href="/Category">Category Master</a></div>
      <div class="breadcrumb-item">Edit Category</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title ">Edit Category</h2>
    <p class="section-lead">
      On this page you can edit a Category
    </p>

    <div class="card">
      <div class="card-header bg-warning"> 
        <h4 class="text-white">Edit Category - {{ $categorys->article_category_name }}</h4>
      </div>
      <div class="form-group card-body">
        <div class="form-group">
        
        <form method="post" action="{{ route('category.update', $categorys->article_category_id) }}">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}

          <div class="form-group">
            <label for="article_category_id">New Category Name </label>
            <input id="article_category_id" type="text" name="article_category_name"  value="{{ $categorys->article_category_name }}"
            class="form-control {{ $errors->has('article_category_name') ? 'is-invalid':'' }}"required autofocus>
          </div>

          <div class="form-group float-right col-2">
            <button type="submit" class="btn btn-success btn-lg btn-block "> Save </button>
          </div>
         
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
@stop