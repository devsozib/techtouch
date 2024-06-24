@extends('backend.layouts.app')
@section('content')
<div class="page-content">
    <div class="main-wrapper">
      <div class="row">
        <div class="card py-3">
           
            <div class="d-flex justify-content-between">
                <div>
                    <strong>Categories</strong>
                </div>
                <div>

                </div>
                <div>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Add Category</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @if ($errors->any())
                            <div class="alert alert-danger" id="validation-error-alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>                
                                <script>
                                    // Set a timeout to hide the alert after 2000 milliseconds (2 seconds)
                                    setTimeout(function () {
                                        document.getElementById('validation-error-alert').style.display = 'none';
                                    }, 3000);
                                </script>
                            @endif
                            <form action="{{ route('category.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Name</label>
                                  <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" required>                                  
                                </div>
                                <div class="mb-3">
                                  <label for="Status" class="form-label">Status</label>
                                    <select name="status" id="Status" class="form-control">                                                                  
                                        <option selected="" value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>                                                                                           
                            </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>                       
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        <table id="zero-conf" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>SL</th>                              
                    <th>Name</th>                              
                    <th>Status</th>                              
                    <th>Action</th>                  
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)                    
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{$item->status == 1 ? "Active" : "Deactive"}}</td>                 
                        <td> <button class="btn btn-sm btn-primary" title="Edit" data-bs-toggle="modal" data-bs-target="#myEditModal{{$item->id}}">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </button>| <button type="button" data-bs-toggle="modal" data-bs-target="#myModal{{ $item->id }}" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        <div id="myModal{{ $item->id }}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Delete</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                    </div>
                                    <div class="modal-body">
                                    Are you sure you want to delete this product:
                                    <strong
                                        style="color: darkorange">{{ $item->name }}</strong>
                                    ?
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('category.destroy',$item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-default">Delete</button>
                                        </form>
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        
                        <div id="myEditModal{{ $item->id }}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Edit Category of {{ $item->name }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('category.update',$item->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                                <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" value="{{ $item->name }}" required>                                  
                                              </div>
                                              <div class="mb-3">
                                                <label for="Status" class="form-label">Status</label>
                                                  <select name="status" id="Status" class="form-control">   
                                                      <option {{$item->status == 1 ? 'selected' : ''}} value="1">Active</option>
                                                      <option {{$item->status == 1 ? 'selected' : ''}} value="0">Inactive</option>
                                                  </select>
                                              </div> 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        </div>                                                                              
                                    </form>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </td>                 
                    </tr>
                @endforeach              
            </tbody>
            <tfoot>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Action</th>                    
                </tr>
            </tfoot>
        </table>
    </div>
  </div>
@endsection