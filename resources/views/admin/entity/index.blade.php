@extends('admin.admin_master')

@section('admin')


      <div class="row">
            
             
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                  <h4 class="card-title">Entity List</h4>
                  
                  <div class="table-responsive  ">
                   <table class="table">
                      <thead>
                        <tr>
                          <th>Full Name</th>
                          <th>Address</th>
                          <th>Contact</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         <!--@php($i = 1) -->
                             @foreach($entities as $entity)
                            <tr>
                            <th scope="row"> {{ $entities->firstItem()+$loop->index }} </th>
                            <td>{{ $entity->f_name}} {{ $entity->m_name}} {{ $entity->l_name}} </td>
                            <td>   </td>
                            <td>
                                 
                            </td>
                            <td><a href="{{ url('entity/profile/'.$entity->id)}}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ url('entity/delete/'.$entity->id)}}" onclick="return confirm('Are you sure to delete')"  class="btn btn-danger btn-sm">Delete</a>
                            </td>
                            </tr>
                            @endforeach
                      </tbody>
                    </table>
                     {{ $entities->links() }} 
                  </div>
                </div>
              </div>
            </div>
            
             
          </div>
      @endsection