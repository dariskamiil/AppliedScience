@extends('dashboard.admin')

@section('title')
<title>Profile</title>
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="/home" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Profile</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="/home">Home</a></div>
      <div class="breadcrumb-item">Profile</div>
    </div>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-6 col-lg-6">
    <div class="card">
      <div class="card-header bg-success"> 
        <h4 class="text-white">Edit </h4>
      </div>
      <div class="form-group card-body">
        <div class="form-group">
        <form method="post" action="{{ route('profile.update', $accounts->id) }}">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="row">
              <div class="col-6" >
                <label for="name" >Name</label>
                <input id="name" type="text" name="name"  value="{{ $accounts->name }}"
                class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}"required autofocus>
              </div>
              <div class="col-6" >
                <label for="username">Username</label>
                <input id="username" type="text" name="username"  value="{{ $accounts->username }}"
                class="form-control {{ $errors->has('username') ? 'is-invalid':'' }}"required autofocus>
              </div>
          </div>
        <br>
          <div class="row">
              <div class="col-12" >
                <label for="email">Email</label>
                <input id="email" type="text" name="email"  value="{{ $accounts->email }}"
                class="form-control {{ $errors->has('email') ? 'is-invalid':'' }}"required autofocus>
              </div>
            </div>    
          </div>
        <br>
            <button type="submit" class="btn btn-success btn-lg btn-block "> Save </button>
        </div>
      </form>
    </div>
  </div>

<div class="card">
  <div class="form-group card-body">
    <h3>{{ $accounts->name }}</h3>
    <h4>{{ ucfirst($accounts->role) }} &nbsp;-&nbsp; {{ $accounts->department['department_name'] }}</h4>
    <br>
    
  </div>
</div>
      <div class="card">
        <div class="form-group card-body">
          <div class="row">
            <div class="col-4">
              <p>Created at <br> {{ $accounts->created_at->format('D, d M Y') }} <br> on &nbsp{{ $accounts->created_at->format('H:i:s') }}</p>
            </div>
            <div class="col-4">
              <p>Updated by<br> {{ $accounts->updatedBy['name'] }}</p>
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