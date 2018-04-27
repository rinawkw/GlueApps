<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
	    $('#example').DataTable();} );
</script>
</head>
<body>
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="text-center">
    				<h2>Member</h2>
    			</div>
    		</div>
    	</div>
    	<div class="row" style="margin-bottom: 10px;">
    		<div class="col-md-2 col-md-offset-10">
    			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add member</button>
    		</div>
    	</div>
    	<div class="row">    		
	    	<div class="col-md-12">    		
				<table id="example" class="table table-striped table-bordered" style="width:100%">
			        <thead>
			            <tr>
			                <th>KTA</th>
			                <th>NRP</th>
			                <th>Nama</th>
			                <th>Universitas</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			        <tbody>
			        	@foreach($members as $key => $member)
			            <tr>
			        		<td>{{$member->user_no_kta}}</td>
			                <td>{{$member->user_nrp}}</td>
			                <td>{{$member->user_nama}}</td>
			                <td>{{$univ[$kode[$key][2]]}}</td>
			                <td><a href="/members/delete/{{$member->user_nrp}}" onclick="return confirm('Yakin ingin hapus member ini?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			            </tr>
			        	@endforeach
			        </tbody>
			    </table>
	    	</div>
    	</div>
	</div>
<!-- Modal -->
  <div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Member</h4>
        </div>
        <div class="modal-body">
        	<form id="form" class="comment-form" role="form" method="POST" action='/members/add' enctype="multipart/form-data">
        		{!! csrf_field() !!}
        		<div class="form-group">
        			<label>Nama</label>
        			<input class="form-control" type="text" name="nama">
        		</div>
        		<div class="form-group">
        			<label>NRP</label>
        			<input class="form-control" type="text" name="nrp">
        		</div>
        		<div class="form-group">
        			<label>Tahun masuk</label>
        			<input class="form-control" type="number" name="tahun">
        		</div>
        		<div class="form-group">
        			<label>Universitas</label>
        			<select name="universitas" class="form-control">
						<option value="10">ITS</option>
						<option value="11">UNAIR</option>
						<option value="12">UINSA</option>
						<option value="13">UTM</option>
						<option value="14">UNESA</option>
					</select>
        		</div>
  				<button type="submit" class="btn btn-default">Submit</button>
        	</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</body>
</html>                                		                            