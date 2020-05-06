//check validator before add category
$('#btn-edit-category').click(function(e) {
	e.preventDefault();
	let result = validateInput();
	if (result !== null) {
		$('#'+result[0].id+'_message').text(result[0].message);
	}
	else{
	}
});

function validateInput() {
	var title = $('#title').val();
	var description = $('#description').val();
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
	if (description.length > boundary) {
		var err = []
		err['id'] = "description";
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