@extends('Dashboard.admin')

@section('title')
<title>Category Master</title>
@endsection

@section('content')
<section class="section">
          <div class="section-header">
            <h1>Category Master</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="/home">Home</a></div>
              <div class="breadcrumb-item">Category Master</div>
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
                        <a class="nav-link active" href="{{ route('category.index') }}">All <span class="badge badge-white"></span></a>
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
                        <a href="/category/create" class="btn btn-info">Add New</a>
                    </div>
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
                        <th class="">#</th>
                          <th class="col-4">Name</th>
                          <th class="col-4">Status</th>
                          <th class="col-3">Action</th>
                        </thead>
                    @foreach ($categorys as $cats)
                        <tr>
                        <td>{{ ++$no }}</td>
                          <td>{{ $cats->article_category_name }}</td>
                          <td>
                            @if ( $cats->is_active == 1 )
                              <div class="badge badge-primary">Actived</div>
                            @else
                              <div class="badge badge-danger">Inactived</div>
                            @endif
                          </td>
                          <td class="text-white -all">
                            <a href="{{ route('category.edit', $cats->article_category_id) }}" class="btn btn-icon icon-left col-5 btn-warning"> <i class="ion ion-md-create"></i>&nbsp;Edit</a> &nbsp;
                          </td>
                        </tr>
                    @endforeach
                      </table>
                      <div class="float-right">
                        {{ $categorys->links() }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
</section>
@stop