@extends('admin.admin_master');
@section('title', 'Cards Data')
@section('admin')

<div class="page-content">
     <div class="container-fluid">

            <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Cards List</h4>

                    <div class="page-title-right">
                        
                    </div>

                </div>
            </div>
        </div>
                        <!-- end page title -->

        <div class="row">
        <div class="col-12">
        <div class="card">
        <div class="card-body">

            <h4 class="card-title">Students List</h4>
              

            <table id="studentsTable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                </thead>


                <tbody>
                  
               
     @if($students->count() > 0)
    @foreach($students as $rs)
        
        <tr>
        <td>{{ $loop->iteration }} </td>
        <td>{{ $rs->student_name }}</td>
        <td>{{ $rs->phone }}</td>
        <td>{{ $rs->email }}</td>
        <td>{{ $rs->department }}</td>
        <td>{{ $rs->created_at }}</td>
        
        <td class="align-middle text-center">
    <div class="dropdown d-inline-block">
        <button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-ellipsis-h"></i>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        
      
            <li><a class="dropdown-item" href="{{ route('students.edit', $rs->id) }}">Edit</a></li>
            <li>
                <form action="{{ route('students.destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Do you Want to Delete This Student?')">
                    @csrf
                    @method('DELETE')
                    <button class="dropdown-item" type="submit">Delete</button>
                </form>
            </li>
        </ul>
    </div>
</td>
    </tr>
       
          
    

   
    @endforeach
@endif
                </tbody>
            </table>

        </div>
        </div>
        </div> <!-- end col -->
        </div> <!-- end row -->
        <script>
    $(document).ready(function() {
        $('#studentsTable').DataTable();
    });
  </script>
        @endsection
  

