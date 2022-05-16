var page_name = 'people';
var action = 'getlist';
$(document).ready(function (){
	$.post(page_name+".php",
	  {
		type: page_name,
		action: action
	  },
	  function(data){ 
		data = $.parseJSON( data );
		$("#"+page_name+" tbody").empty().append(data.data);
	  });
	
});


$(".nav-link").click(function(){
  page_name = $(this).attr('aria-controls');
  $.post(page_name+".php",
	  {
		type: page_name,
		action: action
	  },
	  function(data){ 
		data = $.parseJSON( data );
		$("#"+page_name+" tbody").empty().append(data.data);
	  });
});


$(".btn.btn-info").click(function(){
  $(".modal-backdrop").addClass('show').show();
  page_name = $(this).parent().parent().attr('id');
  $.post(page_name+".php",
	  {
		type: page_name,
		action: "getdata"
	  },
	  function(data){ 
		$(".modal-backdrop").removeClass('show').hide();
	  });
});



$(document).on("click",".pdata",function(){
  //$(".modal-backdrop").addClass('show').show();
  var people_id = $(this).attr('data-id');
  $("#peopledata").show();
  $(".modal-backdrop").addClass('show').show();
  $.post("people.php",
	  {
		type: "people",
		action: "detaildata",
		id:people_id
	  },
	  function(data){ 
		data = $.parseJSON( data );
		var pl_data = data.pl_data;
		$("#pl_fullname").val(pl_data[0]['fullname']);
		$("#pl_height").val(pl_data[0]['height']);
		$("#pl_mass").val(pl_data[0]['mass']);
		$("#pl_hair").val(pl_data[0]['hair_color']);
		$("#pl_skin").val(pl_data[0]['skin_color']);
		$("#pl_eye").val(pl_data[0]['eye_color']);
		$("#pl_dob").val(pl_data[0]['birth_year']);
		$("#pl_gender").val(pl_data[0]['gender']);
		
		var pl_film = data.pl_film;
		var pl_data = '';
		$.each(pl_film, function( index, value ) {			 
			  pl_data += '<div class="col-md-4"><input type="text" class="form-control" id="pl_skin" disabled="true" value="'+value.film_name+'"></div>';
			});
		$(".pl_films .row").empty().html(pl_data);
		
		var pl_vehicles = data.pl_vehicle;
		var pl_data = '';
		$.each(pl_vehicles, function( index, value ) {			 
			  pl_data += '<div class="col-md-4"><input type="text" class="form-control" id="pl_skin" disabled="true" value="'+value.vehicle_name+'"></div>';
			});
		$(".pl_vehicles .row").empty().html(pl_data);
		
		
		var pl_planets = data.pl_planets;
		var pl_data = '';
		$.each(pl_planets, function( index, value ) {			 
			  pl_data += '<div class="col-md-4"><input type="text" class="form-control" id="pl_skin" disabled="true" value="'+value.planet_name+'"></div>';
			});
		$(".pl_planets .row").empty().html(pl_data);
		
		
		var pl_species = data.pl_species;
		var pl_data = '';
		$.each(pl_species, function( index, value ) {			 
			  pl_data += '<div class="col-md-4"><input type="text" class="form-control" id="pl_skin" disabled="true" value="'+value.species_name+'"></div>';
			});
		$(".pl_species .row").empty().html(pl_data);
		
		var pl_starship = data.pl_starship;
		var pl_data = '';
		$.each(pl_starship, function( index, value ) {			 
			  pl_data += '<div class="col-md-4"><input type="text" class="form-control" id="pl_skin" disabled="true" value="'+value.starship_name+'"></div>';
			});
		$(".pl_starship .row").empty().html(pl_data);
	  });
});

$(document).on("click",".btn-close",function(){
	$("#peopledata").hide();
	$(".modal-backdrop").addClass('show').hide();
});

