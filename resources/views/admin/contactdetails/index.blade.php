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
        {{--
        <div class="ms-auto">
            <a href="{{ url('admin/about/create') }}" class="btn btn-sm btn-primary">Add About</a>
        </div>
        --}}
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Patient Name</th>
                            <th>Mobile Number</th>
                            <th>Husband Mobile</th>
                            <th>Occupation</th>
                            <th>Husband Occupation</th>
                            <th>Fee</th>
                            <th>Address Details</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contactdetails as $key=>$row)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>{{ $row->husbandphone }}</td>
                            <td>{{ $row->occupation }}</td>
                            <td>{{ $row->husbandoccupation }}</td>
                            <td>{{ $row->fee }}</td>
                            <td>{{ $row->details }}</td>
                            <td>{{ $row->email }}</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                    {{-- <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a> --}}
                                    <a href="{{ url('admin/contactdetails/edit', $row->id) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<!--end page main-->
@endsection
