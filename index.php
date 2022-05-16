<!DOCTYPE html>
<html lang="en">
<head>
  <title>SWAPI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<br>
  <h2>SWAPI</h2>
	<br>
  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="nav-people-tab" data-bs-toggle="tab" data-bs-target="#people" type="button" role="tab" aria-controls="nav-people" aria-selected="true">People</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="films-tab" data-bs-toggle="tab" data-bs-target="#films" type="button" role="tab" aria-controls="films" aria-selected="false">Films</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="starships-tab" data-bs-toggle="tab" data-bs-target="#starships" type="button" role="tab" aria-controls="starships" aria-selected="false">Starships</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="vehicles-tab" data-bs-toggle="tab" data-bs-target="#vehicles" type="button" role="tab" aria-controls="vehicles" aria-selected="false">Vehicles</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="species-tab" data-bs-toggle="tab" data-bs-target="#species" type="button" role="tab" aria-controls="species" aria-selected="false">Species</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="planets-tab" data-bs-toggle="tab" data-bs-target="#planets" type="button" role="tab" aria-controls="planets" aria-selected="false">Planets</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="people" role="tabpanel" aria-labelledby="people-tab">
		
		<h5 class="mb-3 font-weight-bold mt-3">People's List</h5>
		
		<div class="d-grid gap-2 d-md-flex justify-content-md-end">
		<button type="button" class="btn btn-info">
          <span class="glyphicon glyphicon-refresh"></span> Get API data
        </button>
		</div>
		<table class="table">
		  <thead>
			<tr>
			  <th scope="col">#</th>
			  <th scope="col">Name</th>
			  <th scope="col">DOB</th>
			  <th scope="col">Gender</th>
			  <th scope="col">Action</th>
			</tr>
		  </thead>
		  <tbody>
			
		  </tbody>
		</table>

  
  </div>
  <div class="tab-pane fade" id="films" role="tabpanel" aria-labelledby="films-tab">
  <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
		<button type="button" class="btn btn-info">
          <span class="glyphicon glyphicon-refresh"></span> Get API data
        </button>
		</div>
	<table class="table">
		  <thead>
			<tr>
			  <th scope="col">#</th>
			  <th scope="col">Name</th>
			  <th scope="col">Release Date</th>
			  <th scope="col">Characters</th>
			  <th scope="col">Action</th>
			</tr>
		  </thead>
		  <tbody>
			
		  </tbody>
		</table>
  </div>
  <div class="tab-pane fade" id="starships" role="tabpanel" aria-labelledby="starships-tab">
  
  <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
		<button type="button" class="btn btn-info">
          <span class="glyphicon glyphicon-refresh"></span> Get API data
        </button>
		</div>
	<table class="table">
		  <thead>
			<tr>
			  <th scope="col">#</th>
			  <th scope="col">Name</th>
			  <th scope="col">Model</th>
			  <th scope="col">Class</th>
			  <th scope="col">Action</th>
			</tr>
		  </thead>
		  <tbody>
			
		  </tbody>
		</table>
  
  </div>
  <div class="tab-pane fade" id="vehicles" role="tabpanel" aria-labelledby="vehicles-tab">
  
  <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
		<button type="button" class="btn btn-info">
          <span class="glyphicon glyphicon-refresh"></span> Get API data
        </button>
		</div>
	<table class="table">
		  <thead>
			<tr>
			  <th scope="col">#</th>
			  <th scope="col">Name</th>
			  <th scope="col">Model</th>
			  <th scope="col">Class</th>
			  <th scope="col">Action</th>
			</tr>
		  </thead>
		  <tbody>
			
		  </tbody>
		</table>
  
  </div>
  <div class="tab-pane fade" id="species" role="tabpanel" aria-labelledby="species-tab">
  
  <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
		<button type="button" class="btn btn-info">
          <span class="glyphicon glyphicon-refresh"></span> Get API data
        </button>
		</div>
	<table class="table">
		  <thead>
			<tr>
			  <th scope="col">#</th>
			  <th scope="col">Name</th>
			  <th scope="col">Classification</th>
			  <th scope="col">Designation</th>
			  <th scope="col">Action</th>
			</tr>
		  </thead>
		  <tbody>
			
		  </tbody>
		</table>
  
  </div>
  <div class="tab-pane fade" id="planets" role="tabpanel" aria-labelledby="planets-tab">
  
  <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
		<button type="button" class="btn btn-info">
          <span class="glyphicon glyphicon-refresh"></span> Get API data
        </button>
		</div>
	<table class="table">
		  <thead>
			<tr>
			  <th scope="col">#</th>
			  <th scope="col">Name</th>
			  <th scope="col">Diameter</th>
			  <th scope="col">Climate</th>
			  <th scope="col">Action</th>
			</tr>
		  </thead>
		  <tbody>
			
		  </tbody>
		</table>
  </div>
</div>
</div>


<div class="modal" id="peopledata">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Profile Data</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">	  
	  
       <div class="row">
		<div class="row g-3">
		  <div class="col-md-4">
			<label for="pl_fullname" class="form-label">Fullname</label>
			<input type="text" class="form-control" id="pl_fullname" disabled="true">
		  </div>
		  <div class="col-md-4">
			<label for="pl_height" class="form-label">Height</label>
			<input type="text" class="form-control" id="pl_height" disabled="true">
		  </div>
		  <div class="col-md-4">
			<label for="pl_mass" class="form-label">Mass</label>
			<input type="text" class="form-control" id="pl_mass" disabled="true">
		  </div>
		  <div class="col-md-4">
			<label for="pl_hair" class="form-label">Hair Color</label>
			<input type="text" class="form-control" id="pl_hair" disabled="true">
		  </div>
		 <div class="col-md-4">
			<label for="pl_skin" class="form-label">Skin Color</label>
			<input type="text" class="form-control" id="pl_skin" disabled="true">
		  </div>
		  <div class="col-md-4">
			<label for="pl_eye" class="form-label">Eye Color</label>
			<input type="text" class="form-control" id="pl_eye" disabled="true">
		  </div>
		  <div class="col-md-4">
			<label for="pl_dob" class="form-label">Birth Year</label>
			<input type="text" class="form-control" id="pl_dob" disabled="true">
		  </div>
		  <div class="col-md-4">
			<label for="pl_gender" class="form-label">Gender</label>
			<input type="text" class="form-control" id="pl_gender" disabled="true">
		  </div>
		  
		  
		  <div class="pl_films" mt-3>
				<h3>Films</h3>
				<div class="container">
				  <div class="row">
					
				  </div>
				</div>
		  </div>
		  
		  <div class="pl_vehicles" mt-3>
				<h3>Vehicles</h3>
				<div class="container">
				  <div class="row">
					
				  </div>
				</div>
		  </div>
		  
		  <div class="pl_planets" mt-3>
				<h3>Planets</h3>
				<div class="container">
				  <div class="row">
					
				  </div>
				</div>
		  </div>
		  
		  <div class="pl_species" mt-3>
				<h3>Species</h3>
				<div class="container">
				  <div class="row">
					
				  </div>
				</div>
		  </div>
		  
		  <div class="pl_starship" mt-3>
				<h3>Starship</h3>
				<div class="container">
				  <div class="row">
					
				  </div>
				</div>
		  </div>
		</div>
</div>
      </div>
    </div>
  </div>
</div>
<div class="modal-backdrop fade" style="display:none;"> <div class="spanner" style="top:50%;left:50%;position:fixed;">
  <div class="spinner-border text-primary" role="status" >
  <span class="sr-only"></span>
</div>
</div></div>



<script src="assets/js/script.js"></script>

</body>
</html>
