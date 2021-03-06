//check validator before add post
$('#btn-add-post').click(function(e) {
	e.preventDefault(none);
	let result = validateInput();
	if (result !== null) {
		// e.preventDefault(none);
		$('#'+result[0].id+'_message').text(result[0].message);
	}
});

function validateInput() {
	var title = $('#title').val();
	var short_desc = $('#short_desc').val();
	var long_desc = $('#long_desc').val();
	var image = $('#image').val();
	var filter = /(^[0-9.]{1,9}$)/;

	//get image file extend
	var extension = getFileExtension(image);

	var result = [];
	if (title.length > boundary) {
		var err = []
		err['id'] = "title";
		err['message'] = formatlength;
		result.push(err);
		return result;
	}
	if (short_desc.length > boundary) {
		var err = []
		err['id'] = "short_desc";
		err['message'] = formatlength;
		result.push(err);
		return result;
	}
	if (long_desc.length > boundary) {
		var err = []
		err['id'] = "long_desc";
		err['message'] = formatlength;
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