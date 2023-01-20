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
                    <li class="breadcrumb-item active" aria-current="page">User Profile Update</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                <a href="{{ url('admin/user') }}" class="btn btn-sm btn-primary">Back</a>
              </div>
            </div>
            <!--end breadcrumb-->

              <div class="card">
                <div class="card-header py-3">
                  <h6 class="mb-0">User Profile Update</h6>
                </div>
                <div class="card-body">
                   <div class="row">
                    {{-- Create Category Form --}}
                     <div class="col-12 col-lg-12 d-flex">
                       <div class="card border shadow-none w-100">



                        <div class="card-body">
                            <form method="POST" action="{{ url('admin/user/store'   ) }}" enctype="multipart/form-data">
                                @csrf
                              
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                    <div class="col-md-6">
                                        <input  type="text" name="name" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                    <div class="col-md-6">
                                        <input  type="email" name="email"  class="form-control" >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input  type="password" name="password"  class="form-control">
                                    </div>
                                </div>
                                {{--
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="password_confirmation">
                                    </div>
                                </div> --}}

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">{{ __('Profile Image') }}</label>

                                    <div class="col-md-6">
                                        <input type="file" name="profile_image" class="form-control">
                                    </div>
                                </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">{{ __('User Role') }}</label>
                                    <div class="col-md-6">
                                        <select class="form-group form-control" name="is_admin">
                                            {{-- <option>Select Role</option> --}}
                                            <option value="1" >Admin</option>
                                            {{-- <option value="2" >Editor</option> --}}
                                            <option value="0" >Customer</option>
                                        </select>
                                    </div>
                                </div>




                                <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Create User') }}
                                        </button>
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

