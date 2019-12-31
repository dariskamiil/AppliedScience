@extends('Dashboard.admin')
@section('title')
<title>Category Master</title>
@endsection
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="/category" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>New Category</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="/home">Home</a></div>
      <div class="breadcrumb-item"><a href="/Category">Category Master</a></div>
      <div class="breadcrumb-item">New Category</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title ">Add New Category</h2>
    <p class="section-lead">
      On this page you can create a new Category
    </p>

    <div class="card">
      <div class="card-header bg-info"> 
        <h4 class="text-white">New Category</h4>
      </div>
      <div class="form-group card-body">
        <div class="form-group">
        <form method="post" action="{{ route('category.index') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="article_category_id">Category Name</label>
            <input id="article_category_id" type="text" name="article_category_name" 
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