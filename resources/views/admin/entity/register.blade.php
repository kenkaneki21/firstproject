@extends('admin.admin_master')

@section('admin')


      <div class="row">
            
             
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  
                  <h4 class="card-title">Entity List</h4>
<form action="{{ route('register.entity') }}" method="post">
  @csrf

                  <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">PERSONAL INFO</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">FAMILY BACKGROUND</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    
                     <center> <h3>PERSONAL DATA SHEET</h3></center>
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Profile Picture</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" name="firstname"/>
                              
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Entity Type</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="entity_type">
                              <option value="1">Student</option>
                              <option value="2">Instructor</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="firstname" placeholder="First Name" />
                             @error('fname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Middle Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="middlename" placeholder="Middle Name" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="lastname" placeholder="Last Name" />
                             @error('lname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Suffix</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="suffix" placeholder="JR., SR., III (Put N/A if not applicable)" />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="dd/mm/yyyy" name="birthdate"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Place of Birth</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="birthplace" placeholder="Place of Birth">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                       <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Sex</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="sex" id="membershipRadios1" value="1" checked>
                               Male
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="sex" id="membershipRadios2" value="2">
                                Female
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Civil Status</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="civil_status">
                            <option>Single</option>
                            <option>Married</option>
                            <option>Widowed</option>
                            <option>Separated</option>
                          </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Height (m)</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="height" placeholder="Height (m)">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Weight (kg)</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="weight" placeholder="Height (kg)">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Blood Type</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="blood_type" placeholder="Blood Type">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">GSIS ID NO.</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="gsis_id" placeholder="GSIS ID NO.">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">PHILHEALTH NO.</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="philhealth_no" placeholder="PHILHEALTH NO.">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">SSS NO.</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="sss_no" placeholder="SSS NO.">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">TIN NO.</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="tin_no" placeholder="TIN No.">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">AGENCY EMPLOYEE NO.</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="agency_employee_no" placeholder="AGENCY EMPLOYEE NO.">
                          </div>
                        </div>
                      </div>
                      

                    </div>
                   
                    <div class="row">
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">CITIZEN SHIP</label>
                          <div class="col-sm-2">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="citizenship" id="membershipRadios1" value="1" checked>
                              Filipino
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="citizenship" id="membershipRadios2" value="2">
                                Dual Citizenship
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="membershipRadios" id="membershipRadios2">
                                By Birth
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="membershipRadios" id="membershipRadios2">
                                By Naturalization
                              </label>
                            </div>
                          </div>
                         
                        </div>
                    </div>

                    <div class="row">
                      <p class="card-description">
                      If holder of dual citizenship, please indicate the details
                    </p>
                      <div class="col-md-12">
                        <div class="form-group row">
                           
                          <div class="col-sm-9">
                           <select class="form-control">
                             <option>Albania</option>
                           </select>
                          </div>
                        </div>
                      </div>
                       
                    </div>
                       <p class="card-description">
                     RESIDENTIAL ADDRESS
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">HOuSE/BLOCK/LOT NO.</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="res_house" placeholder="HOuSE/BLOCK/LOT NO.">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">STREET</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="res_street">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">SUBDIVISION/VILLAGE</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="res_subdivision">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">BARANGAY</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="res_brgy">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">CITY/MUNICIPAL</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="res_city">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">PROVINCE</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="res_province">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">ZIPCODE</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="res_zipcode">
                          </div>
                        </div>
                      </div>
                    </div>
                      <p class="card-description">
                     PERMANENT ADDRESS &nbsp;&nbsp;&nbsp;<input type="checkbox"> <code>Check if Residential and permanent address are the same</code>
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">HOSE/BLOCK/LOT NO.</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="per_house">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">STREET</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="per_street">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">SUBDIVISION/VILLAGE</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="per_subdivision">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">BARANGAY</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="per_brgy">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">CITY/MUNICIPAL</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="per_city">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">PROVINCE</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="per_province">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">ZIPCODE</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="per_zipcode">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">TELEPHONE NO.</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="telephone" placeholder="TELEPHONE">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">MOBILE NO.</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="mobile" placeholder="MOBILE NUMBER">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">EMAIL</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="email" placeholder="EMAIL ADDRESS.">
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
                  
                   
                </div>
              </div>
            </div>
            
             
          </div>
      @endsection