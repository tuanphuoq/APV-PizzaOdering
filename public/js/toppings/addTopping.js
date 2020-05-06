//check validator before add category
$('#btn-add-topping').click(function(e) {
	e.preventDefault(none);
	let result = validateInput();
	if (result !== null) {
		// e.preventDefault(none);
		$('#'+result[0].id+'_message').text(result[0].message);
	}
});

function validateInput() {
	var name = $('#name').val();
	var price = $('#price').val();
	var image = $('#image').val();
	var filter = /(^[0-9.]{1,9}$)/;

	//get image file extend
	var extension = getFileExtension(image);

	var result = [];
	if (name.length > 255) {
		var err = []
		err['id'] = "name";
		err['message'] = formatlength;
		result.push(err);
		return result;
	}
	if (!filter.test(price)) {
		var err = []
		err['id'] = "price";
		err['message'] = formatPrice;
		result.push(err);
		return result;
	}
	if (image != "") {
		if ((extension != "jpg") && (extension != "png")) {
			var err = []
			err['id'] = "image";
			err['message'] = wrongFormat;
			result.push(err);
			return result;
		}
	}	
}

//function return file extend
function getFileExtension(fullPath) {
	var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
	var filename = fullPath.substring(startIndex);
	if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
		filename = filename.substring(1);
	}
	var extension = filename.split('.').pop();
	return extension;
}