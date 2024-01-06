@extends('admin.admin_master');
@section('title', 'Update Product')
@section('admin');

<div class="page-content">
     <div class="container-fluid">
                            <!-- start page title -->
                            <div class="row">
                            <div class="col-12">
                            @if(session('success'))
                            <div class="alert alert-success">
                            {{ session('success') }}
                            </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Update Product</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Student</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Update Student</h4>
                                        
                                        <form action="{{ route('students.update', $student->id) }}" method="POST" class="needs-validation">
                                            @csrf
                                            @method('PUT')
                            <div class="row">
                              
                                <div class="col-md-6">
                                        <div class="mb-3">
                                        <label for="validationCustom01" class="form-label">Student Name</label>
                                        <input type="text" class="form-control" id=""  
                                        name="student_name"   
                                        value="{{ $student->student_name }}"                       
                                        placeholder="Student Name" required>
                                           
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                        <div class="mb-3">
                                        <label for="validationCustom01" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id=""  
                                    name="phone"      
                                    value="{{ $student->phone }}"                         
                                    placeholder="Phone Number" required>

                                           
                                        </div>
                                    </div>
                          
                                    </div>
                            
                                
                            <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="validationCustom02" class="form-label">Email</label>
                                <input type="email" class="form-control" id=""  
                                name="email"             
                                value="{{ $student->email }}"                  
                                placeholder="Email" required>

                               
                            </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Department</label>
                                        <select name="department" id="department" class="form-control">
                                        <option value="">Select Department</option>
                                        <option value="ICT" {{ $student->department == 'ICT' ? 'selected' : '' }}>ICT</option>
                                        <option value="Accounting" {{ $student->department == 'Accounting' ? 'selected' : '' }}>Accounting</option>
                                        <option value="Economics" {{ $student->department == 'Economics' ? 'selected' : '' }}>Economics</option>
                                        <option value="Nursing" {{ $student->department == 'Nursing' ? 'selected' : '' }}>Nursing</option>
                                        <option value="Sharia and Low" {{ $student->department == 'Sharia and Low' ? 'selected' : '' }}>Sharia and Low</option>
                                       <option value="Laboratory" {{ $student->department == 'Laboratory' ? 'selected' : '' }}>Laboratory</option>
                                       </select>
                                        
                                    </div>
                                </div>
                                
                                
                            </div>
                          
                           
                         
                            <div>
                                <button class="btn btn-success" type="submit">Update Student</button>
                            </div>
                        </form>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div> <!-- end col -->
        
                             <!-- end col -->
                        </div>
                        <!-- end row -->

                        @endsection