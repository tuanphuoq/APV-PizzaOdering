//check validator before add product
$('#btn-edit-product').click(function(e) {
	var result = validateInput();
	if (result == null) {
		e.preventDefault(none);
	}
	else{
		e.preventDefault();

		//announce the error message
		$('#'+result[0].id+'_message').text(result[0].message);
	}
});

function validateInput() {
	var name = $('#inputProductName').val();
	var price = $('#inputPrice').val();
	var description = $('#inputDescription').val();
	var tag = $('#inputProductTag').val();
	var image = $('#inputImage').val();
	var filter = /(^[0-9.]{1,9}$)/;

	//get image file extend
	var extension = getFileExtension(image);

	var result = [];
	if (name.length > 255) {
		var err = []
		err['id'] = "name";
		err['message'] = "*Length of product name more than 255 character";
		result.push(err);
		return result;
	}
	if (description.length > 255) {
		var err = []
		err['id'] = "description";
		err['message'] = "*Length of description more than 255 character";
		result.push(err);
		return result;
	}
	if (tag.length > 255) {
		var err = []
		err['id'] = "tag";
		err['message'] = "*Length of tag more than 255 character";
		result.push(err);
		return result;
	}
	if (!filter.test(price)) {
		var err = []
		err['id'] = "price";
		err['message'] = "*Price of product must be number";
		result.push(err);
		return result;
	}
	if (image != "") {
		if ((extension != "jpg") && (extension != "png")) {
			var err = []
			err['id'] = "image";
			err['message'] = "*Wrong file format";
			result.push(err);
			return result;
		}
	}	
};

//function return file extend
function getFileExtension(fullPath) {
	var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
	var filename = fullPath.substring(startIndex);
	if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
		filename = filename.substring(1);
	}
	var extension = filename.split('.').pop();
	return extension;
};