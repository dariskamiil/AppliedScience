@extends('dashboard.user')

@section('title')
<title>Request</title>
@endsection

@section('content')
          <div class="section-header">
            <h1>Create New Request</h1>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Write Your Request</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4" >
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type</label>
                      <div class="col-sm-12 col-md-7">
                        <select name="article_type" class="form-control selectric" onchange="yesnoCheck(this);">
                          <option value="" selected disabled>Please Select</option>
                          <option value="public">Public</option>
                          <option value="credential">Credential</option>   
                        </select>
                      </div>
                    </div>
                    <div id="ifYes" style="display: none;">
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">...</label>
                        <div class="col-sm-12 col-md-7">
                          <textarea class="summernote-simple form-control" style="width:100%"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                      <div class="col-sm-12 col-md-7">
                        <select name="article_category_id" 
                        class="form-control{{ $errors->has ('article_category_id') ? 'is - invalid':''}} selectric">
                          <option value="" selected disabled>Please select</option>
                          @foreach ($categories as $cats)
                            <option value="{{ $cats->article_category_id }}">{{ ucfirst($cats->article_category_name) }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Case Study</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote-simple form-control" style="width:100%"></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Author</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Date Range Picker</label>
                      <div class="input-group">
                        <input type="text" class="form-control daterange-cus">
                      </div>
                    </div>
                    <div class="form-group text-center row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Send a request</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection

<script type="text/javascript">
  function yesnoCheck(that) {
      if (that.value == "credential") {
          document.getElementById("ifYes").style.display = "block";
      } else {
          document.getElementById("ifYes").style.display = "none";
      }
  }
  </script>