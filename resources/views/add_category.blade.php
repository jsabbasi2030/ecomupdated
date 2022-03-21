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


                    <div class="col-xl-12 col-lg-12">


                    	@if(session("msg"))

                            


                            <div class="alert alert-primary alert-dismissible fade show">
									<svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
									<strong>{{session("msg")}}</strong> 
									
								</div>





                            @endif
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Category</h4>
                            </div>


                            
                            
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{route('save-cat')}}" method="POST">

                                    	@csrf
                                        <div class="mb-3">
                                            <input type="text" name="category_name" class="form-control input-default " placeholder="Enter Category Name">
@error('category_name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror






                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="category_status" class="form-control input-rounded" placeholder="Enter Category Status">


@error('category_status')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                                        </div>


                                        <div class="mb-3">
                                            
                                            <input type="submit" value="Add Category" class="btn btn-dark" name="">
                                        </div>
                                    </form>
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