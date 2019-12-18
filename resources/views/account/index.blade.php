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
            <h2 class="section-title">Posts</h2>
            <p class="section-lead">
              You can manage all posts, such as editing, deleting and more.
            </p>

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
                          <th >#</th>
                          <th >Name</th>
                          <th >Role</th>
                          <th >Approval</th>
                          <th >Action</th>
                          
                        </thead>
                    @foreach ($accounts as $accs)
                        <tr>
                        <td>{{ ++$no }}</td>
                          <td>{{ $accs->name }}</td>
                          <td>{{ ucfirst($accs->role )}}</td>
                          <td>
                            @if ( $accs->approved == 1 )
                              <div class="badge badge-primary">Approved</div>
                            @else
                              <div class="badge badge-danger">N A</div>
                            @endif
                          </td>
                          <td class="text-white -all">
                            <a href="{{ route('account.edit', $accs->id) }}" class="btn btn-icon icon-left col-5 btn-warning"> <i class="ion ion-md-create"></i>&nbsp;Edit</a> &nbsp;
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