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
            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <form class="col-4"  method="GET">
                      <div class="input-group">
                        <div class="input-group-append">
                        <input name="accsearch" type="text" class="form-control" placeholder="Search">
                          &nbsp;
                        <button class="btn btn-info"><i class="fas fa-search"></i></button>
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
                          <th>#</th>
                          <th>Name</th>
                          <th>Username</th>
                          <th>Role</th>
                          <th>Department</th>
                          <th>Approval</th>
                          <th>Action</th>
                        </thead>
                    @foreach ($accounts as $accs)
                        <tr>
                        <td>{{ ++$no }}</td>
                          <td>{{ $accs->name }}</td>
                          <td>{{ $accs->username }}</td>
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
                            <a href="{{ route('account.edit', $accs->id) }}" class="btn btn-icon icon-left btn-warning"><i class="ion ion-md-create">&nbsp; Edit</i></a> 
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