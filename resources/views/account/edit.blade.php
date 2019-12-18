@extends('Dashboard.admin')
@section('title')
<title>Account Management</title>
@endsection
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="/account" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Edit </h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="/home">Home</a></div>
      <div class="breadcrumb-item"><a href="/account">Account Management</a></div>
      <div class="breadcrumb-item">Edit </div>
    </div>
  </div>

  <div class="section-body">
    
    <div class="card">
      <div class="card-header bg-warning"> 
        <h4 class="text-white">Edit </h4>
      </div>
      <div class="form-group card-body">
        <div class="form-group">
        
        <form method="post" action="{{ route('account.update', $accounts->id) }}">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}

          
            <label>Name</label>
            <input id="id" type="text" name="name"  value="{{ $accounts->name }}"
            class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}"required autofocus>
        <br>
            <label> Department </label>
            <div class="selectric-wrapper selectric-form-control selectric-selectric selectric-below"><div class="selectric-hide-select">
              <select class="form-control selectric">
              </select>
            </div>            
        <br>
        <label> Role  </label>
        <div class="selectric-wrapper selectric-form-control selectric-selectric selectric-below"><div class="selectric-hide-select">
          <select class="form-control selectric" name="role">
            <option value=""></option>
          </select>
        </div>    
        <br>
            <label>Approval</label>
            <input id="id" type="text" name="name" class="form-control">
        <br>
          <div class="form-group float-right col-2">
            <button type="submit" class="btn btn-success btn-lg btn-block "> Save </button>
          </div>
        </div>
         
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
@stop