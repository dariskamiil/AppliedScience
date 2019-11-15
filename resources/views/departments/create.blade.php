@extends('Dashboard.admin')
@section('title')
<title>Department Master</title>
@endsection
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="/department" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>New Department</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="/home">Home</a></div>
      <div class="breadcrumb-item"><a href="/department">Department Master</a></div>
      <div class="breadcrumb-item">New Department</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title ">Add New Department</h2>
    <p class="section-lead">
      On this page you can create a new department
    </p>

    <div class="card">
      <div class="card-header bg-info"> 
        <h4 class="text-white">New Department</h4>
      </div>
      <div class="form-group card-body">
        <div class="form-group">
        <form method="post" action="{{ route('department.index') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="department_id">Department Name</label>
            <input id="department_id" type="text" name="department_name" 
            class="form-control {{ $errors->has('department_name') ? 'is-invalid':'' }}"required autofocus>
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