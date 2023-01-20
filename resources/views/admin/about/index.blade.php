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
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                      </ol>
                    </nav>
                  </div>
                  <div class="ms-auto">
                    <a href="{{ url('admin/about/create') }}" class="btn btn-sm btn-primary">Add About</a>
                  </div>
                </div>
                <!--end breadcrumb-->

                  <div class="card">
                    <div class="card-header py-3">
                      <h6 class="mb-0">About Details</h6>
                    </div>
                    <div class="card-body">
                       <div class="row">
                         <div class="col-12 col-lg-12 d-flex">
                          <div class="card border shadow-none w-100">
                            <div class="card-body">
                              <div class="table-responsive">
                                 <table class="table align-middle">
                                   <thead class="table-light">
                                     <tr>
                                       <th><input class="form-check-input" type="checkbox"></th>
                                       <th>Sl</th>
                                       <th>About Name</th>
                                       <th>About Description</th>
                                       <th>Menu Status</th>
                                       <th>Action</th>
                                     </tr>
                                   </thead>

                                @foreach ($abouts as $key=>$about)
                                   <tbody>
                                    <tr>
                                      <td><input class="form-check-input" type="checkbox"></td>
                                      <td>{{ ++$key }}</td>
                                      <td>{{ $about->about_name }}</td>

                                      <td>{!! substr($about->about_description, 0, 40) !!}</td>
                                      <td>{{ $about->menu_status == '1' ? 'Published' : 'Save Draft'}}</td>

                                      <td>
                                       <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="{{ route('about.edit', $about->id) }}" class="text-success btn btn-sm bts-success" ><i class="bi bi-pencil-fill"></i>EDIT</a>
                                        <a href="{{ route('about.delete', $about->id) }}" class="text-danger btn btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                       </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                @endforeach
                                 </table>
                              </div>
                              <nav class="float-end mt-0" aria-label="Page navigation">
                                <ul class="pagination">
                                  <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>

                                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                              </nav>
                            </div>
                          </div>
                        </div>
                       </div><!--end row-->
                    </div>
                  </div>

              </main>
           <!--end page main-->
@endsection

