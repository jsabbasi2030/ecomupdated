@extends('layouts.template')





@section("admin")



  <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Form</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Element</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">


                  
					
				
					


 <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Payments Queue</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th style="width:80px;"><strong>#</strong></th>
                                                <th><strong>Category Name</strong></th>
                                                <th><strong>Category Status</strong></th>
                                                <th><strong>Action</strong></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>




              @foreach($categories as $cat)


                                            <tr>
                                                <td><strong>{{$cat->id}}</strong></td>
                                                <td>{{$cat->category_name}}</td>
                                                <td>{{$cat->category_status}}</td>
                                                <td>
                                                    
<button type="button" class="btn btn-success">Edit</button>--
<button type="button" class="btn btn-danger">Delete</button>
                                         
                                            
                                               
                                           





                                                </td>
                                                
                                            </tr>




             @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
























				
                  
					
					
					
					
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->





@endsection