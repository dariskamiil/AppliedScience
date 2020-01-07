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
            
          </div>

            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <div class="col-8">
                        <a href="/department/create" class="btn btn-info">Add New</a>
                    </div>
                    <form class="col-4">
                          <div class="input-group-append">
                            <input type="text" class="form-control" placeholder="Search">
                              &nbsp;
                            <button class="btn btn-info"><i class="fas fa-search"></i></button>
                          </div>
                    </form>
                  </div>
                    
                  <div class="card-body">
                    <div class="clearfix mb-3"></div>
                    <div class="table-responsive">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                  
                      <table class="table table-hover">
                        <thead>
                        <th class="">#</th>
                          <th>Name</th>
                          <th>Status</th>
                          <th>Last update</th>
                          <th>Action</th>
                        </thead>
                    @foreach ($departments as $deps)
                        <tr>
                        <td>{{ ++$no }}</td>
                          <td>{{ $deps->department_name }}</td>
                          <td>
                            @if ( $deps->is_active == 1 )
                              <div class="badge badge-primary">Actived</div>
                            @else
                              <div class="badge badge-danger">Inactived</div>
                            @endif
                          </td>
                          <td>
                            {{ $deps->updated_at->format('d F Y') }}
                          </td>
                          <td class="text-white -all">
                            <a href="{{ route('department.edit', $deps->department_id) }}" class="btn btn-icon icon-left col-5 btn-warning"> <i class="ion ion-md-create"></i>&nbsp;Edit</a> &nbsp;
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