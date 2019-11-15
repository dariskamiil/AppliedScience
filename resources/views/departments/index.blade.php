@extends('Dashboard.admin')

@section('title')
<title>Department Master</title>
@endsection

@section('content')
<section class="section">
          <div class="section-header">
            <h1>Department Master</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="/home">Home</a></div>
              <div class="breadcrumb-item">Department Master</div>
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
                        <a class="nav-link active" href="#">All <span class="badge badge-white">{{ $all_count }}</span></a>
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
                    <div class="col-8">
                        <a href="/department/create" class="btn btn-info">Add New</a>
                    </div>
                    <form class="col-3">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append ">
                        &nbsp;
                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
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
                        <th class="">#</th>
                          <th class="col-8">Name</th>
                          <th class="col-3">Action</th>
                        </thead>
                    @foreach ($departments as $deps)
                        <tr>
                        <td>{{ ++$no }}</td>
                          <td>{{ $deps->department_name }}</td>
                          <td class="text-white -all">
                            <a href="{{ route('department.edit', $deps->department_id) }}" class="btn btn-icon icon-left col-5 btn-warning"> <i class="ion ion-md-create"></i>&nbsp;Edit</a> &nbsp;
                            <a href="#" class="btn btn-icon icon-left col-5 btn-danger"><i class="ion ion-ios-trash"></i>&nbsp;Delete</a>
                          </td>
                        </tr>
                    @endforeach
                      </table>
                      <div class="float-right">
                        {{ $departments->links() }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
</section>
@stop