var host = $("meta[name='host']").attr("content");  
$(document).ready(function(){
	'use strict'

	//General Settings

		//Categories
			$(document).on('click', '.deleteCategory', function(){
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
				    window.location.href = host+"/settings/categories/delete/"+id;
				  }else{
				  	Swal.close();
				  }
				})
			});

			$(document).on('click', '.editCategory', function(){
				var id = $(this).data('id');
				$('#editCategoryModal .modal-content').html('<img src="'+host+'/../public/loader.gif">');
				$('#editCategoryModal').modal('show');
				$.get(host+"/settings/categories/edit/"+id, function(data){
					$('#editCategoryModal .modal-content').html(data);
				});
			});

			$(document).on('change', '.categoryImageEdit', function(){
				var file = $(this).get(0).files[0];
		        if(file){
		            var reader = new FileReader();
		            reader.onload = function(){
		                $("#categoryImagePreview").attr("src", reader.result);
		            }
		            reader.readAsDataURL(file);
		        }
			});

		//Sub Categories
			$(document).on('click', '.deleteSubCategory', function(){
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
				    window.location.href = host+"/settings/subCategories/delete/"+id;
				  }else{
				  	Swal.close();
				  }
				})
			});

			$(document).on('click', '.editSubCategory', function(){
				var id = $(this).data('id');
				$('#editSubCategoryModal .modal-content').html('<img src="'+host+'/../public/loader.gif">');
				$('#editSubCategoryModal').modal('show');
				$.get(host+"/settings/subCategories/edit/"+id, function(data){
					$('#editSubCategoryModal .modal-content').html(data);
				});
			});

			$(document).on('change', '.subCategoryImageEdit', function(){
				var file = $(this).get(0).files[0];
		        if(file){
		            var reader = new FileReader();
		            reader.onload = function(){
		                $("#subCategoryImagePreview").attr("src", reader.result);
		            }
		            reader.readAsDataURL(file);
		        }
			});

		//Fabric
			//Color
				$(document).on('click', '.deleteFabricColor', function(){
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
					    window.location.href = host+"/settings/fabric/color/delete/"+id;
					  }else{
					  	Swal.close();
					  }
					})
				});

				$(document).on('click', '.editFabricColor', function(){
					var id = $(this).data('id');
					$('#editFabricColorModal .modal-content').html('<img src="'+host+'/../public/loader.gif">');
					$('#editFabricColorModal').modal('show');
					$.get(host+"/settings/fabric/color/edit/"+id, function(data){
						$('#editFabricColorModal .modal-content').html(data);
					});
				});

				$(document).on('change', '.fabricColorImageEdit', function(){
					var file = $(this).get(0).files[0];
			        if(file){
			            var reader = new FileReader();
			            reader.onload = function(){
			                $("#fabricColorImagePreview").attr("src", reader.result);
			            }
			            reader.readAsDataURL(file);
			        }
				});

			//Material
				$(document).on('click', '.deleteFabricMaterial', function(){
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
					    window.location.href = host+"/settings/fabric/material/delete/"+id;
					  }else{
					  	Swal.close();
					  }
					})
				});

				$(document).on('click', '.editFabricMaterial', function(){
					var id = $(this).data('id');
					$('#editFabricMaterialModal .modal-content').html('<img src="'+host+'/../public/loader.gif">');
					$('#editFabricMaterialModal').modal('show');
					$.get(host+"/settings/fabric/material/edit/"+id, function(data){
						$('#editFabricMaterialModal .modal-content').html(data);
					});
				});

				$(document).on('change', '.fabricMaterialImageEdit', function(){
					var file = $(this).get(0).files[0];
			        if(file){
			            var reader = new FileReader();
			            reader.onload = function(){
			                $("#fabricMaterialImagePreview").attr("src", reader.result);
			            }
			            reader.readAsDataURL(file);
			        }
				});

			//Pattern
				$(document).on('click', '.deleteFabricPattern', function(){
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
					    window.location.href = host+"/settings/fabric/pattern/delete/"+id;
					  }else{
					  	Swal.close();
					  }
					})
				});

				$(document).on('click', '.editFabricPattern', function(){
					var id = $(this).data('id');
					$('#editFabricPatternModal .modal-content').html('<img src="'+host+'/../public/loader.gif">');
					$('#editFabricPatternModal').modal('show');
					$.get(host+"/settings/fabric/pattern/edit/"+id, function(data){
						$('#editFabricPatternModal .modal-content').html(data);
					});
				});

				$(document).on('change', '.fabricPatternImageEdit', function(){
					var file = $(this).get(0).files[0];
			        if(file){
			            var reader = new FileReader();
			            reader.onload = function(){
			                $("#fabricPatternImagePreview").attr("src", reader.result);
			            }
			            reader.readAsDataURL(file);
			        }
				});

			//Type
				$(document).on('click', '.deleteFabricType', function(){
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
					    window.location.href = host+"/settings/fabric/type/delete/"+id;
					  }else{
					  	Swal.close();
					  }
					})
				});

				$(document).on('click', '.editFabricType', function(){
					var id = $(this).data('id');
					$('#editFabricTypeModal .modal-content').html('<img src="'+host+'/../public/loader.gif">');
					$('#editFabricTypeModal').modal('show');
					$.get(host+"/settings/fabric/type/edit/"+id, function(data){
						$('#editFabricTypeModal .modal-content').html(data);
					});
				});

				$(document).on('change', '.fabricTypeImageEdit', function(){
					var file = $(this).get(0).files[0];
			        if(file){
			            var reader = new FileReader();
			            reader.onload = function(){
			                $("#fabricTypeImagePreview").attr("src", reader.result);
			            }
			            reader.readAsDataURL(file);
			        }
				});
});