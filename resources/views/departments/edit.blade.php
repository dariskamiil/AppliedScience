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
    <h1>Edit Department</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="/home">Home</a></div>
      <div class="breadcrumb-item"><a href="/department">Department Master</a></div>
      <div class="breadcrumb-item">Edit Department</div>
    </div>
  </div>

  <div class="section-body">
    
    <div class="card">
      <div class="card-header bg-warning"> 
        <h4 class="text-white">Edit Department - {{ $departments->department_name }}</h4>
      </div>
      <div class="form-group card-body">
        <div class="form-group">  
        <form method="post" action="{{ route('department.update', $departments->department_id) }}">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="form-group">
            <div class="row">
              <div class="col-2">
                <label for="department_id">Name </label>
                <input id="department_id" type="text" name="department_name"  value="{{ $departments->department_name }}"
                class="form-control {{ $errors->has('department_name') ? 'is-invalid':'' }}"required autofocus>
              </div>
              <div class="col-3">
                <label>Status</label>
                  @if ( $departments->is_active == 1 )
                  <div class="radio">
                    <label class="radio-inline">
                      <input type="radio" name="status" value="1" checked><div class="badge badge-primary">Actived</div>
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="status" value="0"><div class="badge badge-danger">Inactived</div>
                    </label>
                  </div>
                  @elseif( $departments->is_active == 0 )
                  <div class="radio">
                    <label class="radio-inline">
                      <input type="radio" name="status" value="1"><div class="badge badge-primary">Actived</div>
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="status" value="0" checked><div class="badge badge-danger">Inactived</div>
                    </label>
                  </div>
                  @endif
                </div>
              </div>
          <br>
          <div class="float-right col-2">
            <button type="submit" class="btn btn-success btn-lg btn-block "> Save </button>
          </div>
        </div>
      </div>
        </form>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="form-group card-body">
        <div class="row">
          <div class="col-3">
            <p>Created by <br> {{ $departments->createdBy['name'] }}</p>
          </div>
          <div class="col-3">
            <p>Created at <br> {{ $departments->created_at->format('D, d M Y') }} <br> on &nbsp{{ $departments->created_at->format('H:i:s') }}</p>
          </div>
          <div class="col-3">
            <p>Updated by<br> {{ $departments->updatedBy['name'] }}</p>
          </div>
          <div class="col-3">
            <p>Last update <br> {{ $departments->updated_at->format('D, d M Y') }} <br> on &nbsp{{ $departments->updated_at->format('H:i:s') }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop