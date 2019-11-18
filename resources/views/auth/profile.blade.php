  @extends('dashboard.admin')

@section('title')
<title>Profile</title>
@endsection

@section('content')
<section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Profile</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                  <div class="profile-widget-header">
                    <div class="profile-widget-items">
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Posts</div>
                        <div class="profile-widget-item-value"><div class="text-muted d-inline font-weight-normal">0</div></div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Followers</div>
                        <div class="profile-widget-item-value"><div class="text-muted d-inline font-weight-normal">0</div></div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Following</div>
                        <div class="profile-widget-item-value"><div class="text-muted d-inline font-weight-normal">0</div></div>
                      </div>
                    </div>
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name"><h3>{{ Auth::user()->name }}</h3></div>
                    
                    <h4>{{ ucfirst(Auth::user()->role) }}</h4>
                  </div>
                  <div class="card-footer text-center">
                    <div class="text-muted d-inline font-weight-normal">Footer</div>
                  </div>
                </div>

              </div>
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <form method="post" class="needs-validation" novalidate="">
                    <div class="card-header">
                      <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        
                          <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" class="form-control" value="" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label">Username</label>
                            <input type="text" class="form-control" value="" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="email" class="form-control" value="" required="">
                            <div class="invalid-feedback">
                              Please fill in the email
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="control-label"> Department </label>
                            <select name="department_id" id="department_id" required class="form-control">
                              <option value=""></option>
                            </select>   
                          </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
@stop