var arrayCategories = []

$(document).ready(function() {  	
	
	$('#form').submit(function (ev) {
		ev.preventDefault()
	})

	$('#add').click(function (ev) {
		ev.preventDefault()
		let category = $('#category option:selected')
		let idCategory = category.val()
		let nameCategory = (category.text()).trim()

		let exist = arrayCategories.find( element => {
			return idCategory == element[0].id
		})

		if(exist === undefined) {			
			arrayCategories.push([
					{
						'id': idCategory,
						'name': nameCategory
					}
				])
			
			$('#infoCategories').append("<div class='row m-4'><div class='col-md-4'><p class='text-center'>"+nameCategory+"</p></div><div class='col-md-6'><button onclick='remove("+idCategory+")' class='btn btn-danger'>Borrar</button></div></div>")
		}
		else 
			alert("La categoría ya se ha agregado.")

	})

	$('#category').change(function() {
		if($('#category').val() != '')
			$('#add').show()
		else
			$('#add').hide()
	})

	$('#submit').click(function () {
		let data = {
			'name': $('#name').val(),
			'user_id': $('#user').val(),
			'arrayCategories': arrayCategories
		}

		$.post("?controller=movie&method=save", data, function (response) {
			window.location = '?controller=movie'
		}).fail(function () {
			alert('Error, No se puedo Registrar la Pelicula')
		})
	})

})

function remove(idCategory) {
	let exist = arrayCategories.find( element => {
			return idCategory == element[0].id
		})

	index = arrayCategories.indexOf(exist)
	arrayCategories.splice(index,1)
	
	$('#infoCategories').html('')
	
	arrayCategories.forEach(function(element){
		$('#infoCategories').append("<div class='row m-4'><div class='col-md-4'><p class='text-center'>"+element[0].name+"</p></div><div class='col-md-6'><button onclick='remove("+element[0].id+")' class='btn btn-danger'>Borrar</button></div></div>")
	})
}