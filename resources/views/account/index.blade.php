@extends('Dashboard.admin')

@section('title')
<title>Account Management</title>
@endsection

@section('content')
<section class="section">
          <div class="section-header">
            <h1>Account Management</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="/home">Home</a></div>
              <div class="breadcrumb-item">Account Management</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card mb-0">
                  <div class="card-body">
                    <form class="form-inline">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">All <span class="badge badge-white"></span></a>
                      </li>
                    </ul>
                    </form>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    
                    <form class="col-3">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append ">
                        &nbsp;
                        <button class="btn btn-infp"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                    
                  <div class="card-body">
                    <div class="clearfix mb-3"></div>
                    <div class="table-responsive">
                    {{ csrf_field() }}
                  
                      <table class="table table-hover">
                        <thead>
                          <th class="col-1" >#</th>
                          <th class="col-3" >Name</th>
                          <th class="col-2">Role</th>
                          <th class="col-1">Department</th>
                          <th class="col-2">Approval</th>
                          <th class="col-3">Action</th>
                          
                        </thead>
                    @foreach ($accounts as $accs)
                        <tr>
                        <td>{{ ++$no }}</td>
                          <td>{{ $accs->name }}</td>
                          <td>{{ ucfirst($accs->role )}}</td>
                          <td>{{ ucfirst($accs->department['department_name'] )}}</td>
                          <td>
                            @if ( $accs->approved == 1 )
                              <div class="badge badge-primary">Approved</div>
                            @else
                              <div class="badge badge-danger">N A</div>
                            @endif
                          </td>
                          <td class="text-white -all">
                            <a href="{{ route('account.edit', $accs->id) }}" class="btn btn-icon icon-left col-5 btn-warning"> <i class="ion ion-md-create"></i>&nbsp;Edit</a> &nbsp;
                            <a href="#" class="btn btn-icon icon-left col-5 btn-danger"><i class="ion ion-ios-trash"></i>&nbsp;Delete</a>
                          </td>
                        </tr>
                    @endforeach
                      </table>
                      <div class="float-right">
                        {{ $accounts->links() }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
</section>
@stop