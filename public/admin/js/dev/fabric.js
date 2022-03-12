var host = $("meta[name='host']").attr("content");  
$(document).ready(function(){
	'use strict'

	//Categories
		$(document).on('change', '#category', function(){
			var id = $(this).val();
			$('#subCategory').html("<option value=''>...</option>");
			$.get(host+"/fabric/getCategory/"+id, function(data){
				$('#subCategory').html(data);
			});
		});

		$(document).on('click', '.deleteFabric', function(){
				var id = $(this).data('id');
				Swal.fire({
				  title: 'Are you sure?',
				  text: "You won't be able to revert this!",
				  icon: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
				  if (result.isConfirmed) {
				    window.location.href = host+"/fabric/delete/"+id;
				  }else{
				  	Swal.close();
				  }
				})
			});

			$(document).on('click', '.editFabric', function(){
				var id = $(this).data('id');
				$('#editFabricModal .modal-content').html('<img src="'+host+'/../public/loader.gif">');
				$('#editFabricModal').modal('show');
				$.get(host+"/fabric/edit/"+id, function(data){
					$('#editFabricModal .modal-content').html(data);
				});
			});

			$(document).on('change', '.fabricImageEdit', function(){
				var file = $(this).get(0).files[0];
		        if(file){
		            var reader = new FileReader();
		            reader.onload = function(){
		                $("#fabricImagePreview").attr("src", reader.result);
		            }
		            reader.readAsDataURL(file);
		        }
			});
});