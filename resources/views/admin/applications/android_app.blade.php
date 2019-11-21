@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
    <div class="row">
    	<div class="col-md-12 col-xs-12 col-sm-12" style="margin-top:50px;">
    	    <div class="x_panel">

    	        <div class="x_title">
    	            <h2>Android Applications</h2>
    	            <div class="clearfix"></div>
    	        </div>
    	        <div>
    	            <div class="x_content">
                        <table id="size_list" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>Sl</th>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Mobile</th>
                              <th>Email</th>
                              <th>Payment Status</th>
                              <th>Payment Request Id</th>
                              <th>Payment Id</th>
                              <th>Highest Qualification</th>
                              <th>Address</th>
                              <th>Application Date</th>
                            </tr>
                          </thead>
                          <tbody>                       
                          </tbody>
                        </table>
    	            </div>
    	        </div>
    	    </div>
    	</div>
    </div>
	</div>


 @endsection

@section('script')
     
<script type="text/javascript">
  $(function () {

     var table = $('#size_list').DataTable({
         processing: true,
         serverSide: true,
         ajax: "{{route('admin.android_ajax')}}",
         columns: [
             {data: 'DT_RowIndex', name: 'DT_RowIndex'},
             {data: 'id', name: 'id',searchable: true},
             {data: 'name', name: 'name',searchable: true},
             {data: 'mobile', name: 'mobile' ,searchable: true},
             {data: 'email', name: 'email' ,searchable: true},       
             {data: 'payment_status', name: 'payment_status' ,searchable: true},
             {data: 'payment_request_id', name: 'payment_request_id' ,searchable: true}, 

             {data: 'payment_id', name: 'payment_id' ,searchable: true}, 
             {data: 'qualification', name: 'qualification' ,searchable: true}, 
             {data: 'address', name: 'address' ,searchable: true},              
             {data: 'created_at', name: 'created_at', orderable: false, searchable: false},
         ]
     });
     
 });
</script>
    
 @endsection