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
                    <li class="breadcrumb-item active" aria-current="page">Contact Details</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                <a href="{{ url('admin/contactdetails/index') }}" class="btn btn-sm btn-primary">Back</a>
              </div>
            </div>
            <!--end breadcrumb-->

              <div class="card">

                <div class="card-body">
                   <div class="row">
                    {{-- Create Category Form --}}
                     <div class="col-12 col-lg-12 d-flex">
                       <div class="card border shadow-none w-100">
                         <div class="card-body">
                           <form class="row g-3" method="POST" action="{{ url('admin/contactdetails/update', $contactdetails->id) }}" enctype="multipart/form-data">
                            @csrf

                            {{-- <div class="col-12">
                              <label class="form-label">Serial No*</label>
                                <input name="serial" type="number" placeholder="Serial No*" value="{{ $contactdetails->serial }}" class="form-control @error('serial') is-invalid @enderror" required autofocus>
                            </div> --}}

                            <div class="col-lg-6 col-md-12">
                              <label class="form-label">Mobile Number*</label>
                              <input name="phone" type="text" placeholder="Mobile Number" value="{{ $contactdetails->phone }}" class="form-control @error('phone') is-invalid @enderror" required autofocus>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                           </div>

                            <div class="col-lg-6 col-md-12">
                              <label class="form-label">Husband Mobile Number</label>
                              <input name="husbandphone" type="text" placeholder="Husband Mobile Number" value="{{ $contactdetails->husbandphone }}" class="form-control @error('husbandphone') is-invalid @enderror">
                                @error('husbandphone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                           </div>

                            <div class="col-12">
                              <label class="form-label">Patient Name*</label>
								                <input type="text" placeholder="Patient Name" class="form-control" name="name" value="{{ $contactdetails->name }}" required autofocus/>
                            </div>

                            <div class="col-lg-6 col-md-12">
                              <label class="form-label">Occupation</label>
								              <input type="text" placeholder="Occupation" class="form-control" name="occupation" value="{{ $contactdetails->occupation }}" required autofocus/>
                            </div>


                            <div class="col-lg-6 col-md-12">
                              <label class="form-label">Husband Occupation</label>
								              <input type="text" placeholder="husbandoccupation" class="form-control" name="husbandoccupation" value="{{ $contactdetails->husbandoccupation }}" required autofocus/>
                            </div>

                            <div class="col-12">

                              <select class="form-select" name="fee" id="validationDefault04" required>
                                <option selected disabled value="">Select Service Fee*</option>
                                <option value="Free" {{ $contactdetails->fee == 'Free' ?  'selected' : ''}}>Free</option>
                                <option value="New 1200" {{ $contactdetails->fee == 'New 1200' ?  'selected' : ''}}>New 1200</option>
                                <option value="Old 600" {{ $contactdetails->fee == 'Old 600' ?  'selected' : ''}}>Old 600</option>
                                <option value="Without Paisent 500" {{ $contactdetails->fee == 'Without Paisent 500' ?  'selected' : ''}}>Without Paisent 500</option>
                                <option value="Dressing 1500" {{ $contactdetails->fee == 'Dressing 1500' ?  'selected' : ''}}>Dressing 1500</option>
                            </select>
                            </div>


                            <div class="col-12">
                                <label class="form-label">Email Address</label>
                                <input name="email" type="email" placeholder="Email" value="{{ $contactdetails->email }}" class="form-control">
                            </div>

                            <div class="col-12">
                                <textarea name="details" placeholder="Contact Address Details" class="txtarea form-control">{{ $contactdetails->details }}</textarea>
                            </div>




                        </div>




                            <div class="col-12">
                              <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Update Information</button>
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

