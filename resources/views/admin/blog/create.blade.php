@extends('layouts.master')
@section('content')
        <!--start content-->
        <main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Dashboard</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                <a href="{{ url('admin/blog') }}" class="btn btn-sm btn-primary">Back</a>
              </div>
            </div>
            <!--end breadcrumb-->

              <div class="card">
                <div class="card-header py-3">
                  <h6 class="mb-0">Add blog</h6>
                </div>
                <div class="card-body">
                   <div class="row">
                    {{-- Create Category Form --}}
                     <div class="col-12 col-lg-12 d-flex">
                       <div class="card border shadow-none w-100">
                         <div class="card-body">
                           <form class="row g-3" method="POST" action="{{ url('admin/blog/store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                              <label class="form-label">Blog Title</label>
                              <input type="text" class="form-control @error('blog_name') is-invalid @enderror" name="blog_name" value="{{ old('blog_name') }}" required autofocus>

                             @error('blog_name')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{$message}}</strong>
                                   </span>
                             @enderror
                           </div>

                            <div class="col-12">
                              <label class="form-label">blog Image Title JPN</label>
                              <input type="text" class="form-control" name="blog_name_jpn" value="{{ old('blog_name_jpn') }}">
                           </div>

                            <div class="col-12">
                              <label class="form-label">blog Image</label>
                              <input type="file" class="form-control " name="blog_image" required autofocus>
                            </div>

                            <div class="col-12">
                                <label class="form-label">blog Description</label>
                                <textarea id="summernote" class="form-control" rows="5" cols="5 " name="blog_description" placeholder="blog Description"></textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">blog Description JPN</label>
                                <textarea id="summernote2" class="form-control" rows="5" cols="5 " name="blog_description_jpn" placeholder="blog Description JPN"></textarea>
                            </div>

                            <div class="col-12">
                              <h5>SEO TAG</h5>
                              <label class="form-label">blog SEO Title</label>
                              <input type="text" class="form-control " name="blog_meta_name" value="{{ old('blog_meta_name') }}">
                            </div>

                            <div class="col-12">

                              <label class="form-label">blog SEO Keyword</label>
                              <input type="text" class="form-control " name="blog_meta_keyword" value="{{ old('blog_meta_keyword') }}" placeholder="Bangladesh, Dhaka">
                            </div>

                            <div class="col-12">
                              <label class="form-label">blog SEO Description</label>
                              <textarea class="form-control" rows="4" cols="4" name="blog_meta_description" placeholder="blog SEO Description"></textarea>
                            </div>


                            <div>
                                <label class="form-label">Menu Status</label>
                                <select class="form-group form-control" name="menu_status">
                                    <option value="1">Published</option>
                                    <option value="0">Save Draft</option>
                                </select>
                            </div>


                            <div class="col-12">
                              <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Save blog</button>
                              </div>
                            </div>
                           </form>
                         </div>
                       </div>
                     </div>
                    {{-- Create Category Form --}}
                   </div><!--end row-->
                </div>
              </div>

          </main>
       <!--end page main-->
@endsection

