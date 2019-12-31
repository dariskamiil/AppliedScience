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
        <div class="row">
            <div class="col-3" >
              <label for="name" >Name</label>
              <input id="name" type="text" name="name"  value="{{ $accounts->name }}"
              class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}"required autofocus>
            </div>
            <div class="col-3" >
              <label for="username">Username</label>
              <input id="username" type="text" name="username"  value="{{ $accounts->username }}"
              class="form-control {{ $errors->has('username') ? 'is-invalid':'' }}"required autofocus>
            </div>
            <div class="col-6" >
              <label for="email">Email</label>
              <input id="email" type="text" name="email"  value="{{ $accounts->email }}"
              class="form-control {{ $errors->has('email') ? 'is-invalid':'' }}"required autofocus>
            </div>
          </div>    
        <br>
        <div class="row" >
          <div class="col-3" >
            <label for="department_id" > Department </label>
              <select class="form-control selectric" name="department_id" id="department_id">
                <option value="{{ $accounts->department['department_id'] }}">{{ $accounts->department['department_name'] }}</option>
                @foreach ($departments as $deps)
                  <option value="{{ $deps->department_id }}">{{ ucfirst($deps->department_name) }}</option>
                @endforeach
              </select>
          </div>
          <div class="col-3" >
            <label for="role"> Role  </label>        
            <select class="form-control selectric" id="role" name="role">
              @if ( $accounts->role == 'admin' )
                <option value="user">User</option>
                <option value="admin" selected>Admin</option>
              @elseif ( $accounts->role == 'user' )
                <option value="user" selected>User</option>
                <option value="admin">Admin</option>
              @endif
            </select>
          </div>
        </div>
                  <br>
        <label>Approval</label>
          @if ( $accounts->approved == 1 )
          <div class="radio">
            <label class="radio-inline">
              <input type="radio" name="approved" value="1" checked><div class="badge badge-primary">Approved</div>
            </label>
            <label class="radio-inline">
              <input type="radio" name="approved" value="0"><div class="badge badge-danger">Unapproved</div>
            </label>
          </div>
          @elseif( $accounts->approved == 0 )
          <div class="radio">
            <label class="radio-inline">
              <input type="radio" name="approved" value="1"><div class="badge badge-primary">Approved</div>
            </label>
            <label class="radio-inline">
              <input type="radio" name="approved" value="0" checked><div class="badge badge-danger">Not-approved</div>
            </label>
          </div>
          @endif
      </div>
        <br>
          <div class="form-group float-right col-2">
            <button type="submit" class="btn btn-success btn-lg btn-block "> Save </button>
          </div>
        </div>

        </form>
        </div>
      </div>
      <div class="card">
        <div class="form-group card-body">
          <div class="row">
            <div class="col-4">
              <p>Created at <br> {{ $accounts->created_at->format('D, d M Y') }} <br> on &nbsp{{ $accounts->created_at->format('H:i:s') }}</p>
            </div>
            <div class="col-4">
              <p>Updated by<br> {{ $accounts->user['name'] }}</p>
            </div>
            <div class="col-4">
              <p>Last update <br> {{ $accounts->updated_at->format('D, d M Y') }} <br> on &nbsp{{ $accounts->updated_at->format('H:i:s') }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>
@stop