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
    <h1>Edit Category</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="/home">Home</a></div>
      <div class="breadcrumb-item"><a href="/Category">Category Master</a></div>
      <div class="breadcrumb-item">Edit Category</div>
    </div>
  </div>

  <div class="section-body">
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
    <div class="card">
      <div class="form-group card-body">
        <div class="row">
          <div class="col-3">
            <p>Created by <br> {{ $categorys->createdBy['name'] }}</p>
          </div>
          <div class="col-3">
            <p>Created at <br> {{ $categorys->created_at->format('D, d M Y') }} <br> on &nbsp{{ $categorys->created_at->format('H:i:s') }}</p>
          </div>
          <div class="col-3">
            <p>Updated by<br> {{ $categorys->updatedBy['name'] }}</p>
          </div>
          <div class="col-3">
            <p>Last update <br> {{ $categorys->updated_at->format('D, d M Y') }} <br> on &nbsp{{ $categorys->updated_at->format('H:i:s') }}</p>
          </div>
        </div>
      </div>
    </div>        

  </div>
</section>
@stop