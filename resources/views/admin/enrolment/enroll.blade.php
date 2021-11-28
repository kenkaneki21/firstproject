@extends('admin.admin_master')

@section('admin')
<div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-2">
                      <div class="border-bottom text-center pb-4">
                        
                          @if($entities->profile_pic)
                           <img src="{{ asset($entities->profile_pic)}}" alt="profile" class="img-lg rounded-circle mb-3"/> 
                            @else
                               <img src="{{ asset('template/images/faces/face13.jpg') }}" alt="profile" class="img-lg rounded-circle mb-3"/>
                             @endif
                        <div class="mb-3">
                          <h3>{{ $entities->f_name }} {{ $entities->m_name }} {{ $entities->l_name }} </h3>
                         
                        </div>
                        <p class="w-75 mx-auto mb-3">Bureau Oberhaeuser is a design bureau focused on Information- and Interface Design. </p>
                        <div class="d-flex justify-content-center">
                          <button class="btn btn-success mr-1">Hire Me</button>
                          <button class="btn btn-success">Follow</button>
                        </div>
                      </div>
                     
                       
                      <button class="btn btn-primary btn-block mb-2">Previous Course</button>
                    </div>
                    <div class="col-lg-10">
                      <div class="d-block d-md-flex justify-content-between mt-4 mt-md-0">
                        <div class="text-center mt-4 mt-md-0">
                          <button class="btn btn-outline-primary">Enroll</button>
                          <button class="btn btn-warning">Reset</button>
                          <button class="btn btn-danger">Cancel</button>
                           

                        </div>
                      </div>
                      <div class="mt-4 py-2 border-top border-bottom">
                         <span>SELECT COURSE</span>
                      </div><br>
                      <div class="profile-feed">
                         <div class="row">
                           <div class="col-md-6">
                            <h4 class="card-title">Course List</h4>
                               <div class="table-responsive">
                    <table id="example" class="table">
                      <thead>
                        <tr>
                            <th>Couse</th>
                            <th>Details</th>
                             
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         
                      </tbody>
                    </table>
                  </div>

                   
                           </div>
                           <div class="col-md-6">
                            <h4 class="card-title">Course Selected</h4>
                              <div class="table-responsive">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th>
                                       Course
                                      </th>
                                      <th>
                                       Instructor
                                      </th>
                                       
                                      <th>
                                        Action
                                      </th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td class="py-1">
                                        <img src="images/faces/face1.jpg" alt="image"/>
                                      </td>
                                      <td>
                                        Herman Beck
                                      </td>
                                      <td>
                                        <div class="progress">
                                          <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td>
                                        $ 77.99
                                      </td>
                                     
                                    </tr>
                                     
                                     
                                  </tbody>
                                </table>
                              </div>
                           </div>
                         </div>
                            
                           
                         
                         
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="{{ asset('template/js/jquery.dataTables.js')}}"></script>
          <script type="text/javascript">
              $(document).ready(function() {
            $('#example').dataTable({
    "lengthChange": false,
    "bInfo": false, // hide showing entries

      'ajax' : "{{ route('course.getjson') }}",
})
          });
          
          </script>
          @endsection