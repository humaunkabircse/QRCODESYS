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
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                      </ol>
                    </nav>
                  </div>
                  <div class="ms-auto">
                    <a href="{{ url('admin/gallery/create') }}" class="btn btn-sm btn-primary">Add Gallery</a>
                  </div>
                </div>
                <!--end breadcrumb-->

                  <div class="card">
                    <div class="card-header py-3">
                      <h6 class="mb-0">Gallery Details</h6>
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
                                       <th>Gallery Name</th>
                                       <th>Gallery Description</th>
                                       <th>Image</th>
                                       <th>Menu Status</th>
                                       <th>Action</th>
                                     </tr>
                                   </thead>

                                @foreach ($galleries as $key=>$gallery)
                                   <tbody>
                                    <tr>
                                      <td><input class="form-check-input" type="checkbox"></td>
                                      <td>{{ ++$key }}</td>
                                      <td>{{ $gallery->gallery_name }}</td>

                                      <td>{!! substr($gallery->gallery_description, 0, 40) !!}</td>
                                      <td><img src="{{ asset($gallery->gallery_image_thumbnails) }}" width="50" height="auto"></td>
                                      <td>{{ $gallery->menu_status == '1' ? 'Published' : 'Save Draft'}}</td>

                                      <td>
                                       <div class="d-flex align-items-center gap-3 fs-6">
                                         {{-- <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a> --}}
                                         <a href="{{ route('gallery.delete', $gallery->id) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                       </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                @endforeach
                                 </table>
                              </div>
                             
                            </div>
                          </div>
                        </div>
                       </div><!--end row-->
                    </div>
                  </div>

              </main>
           <!--end page main-->
@endsection
