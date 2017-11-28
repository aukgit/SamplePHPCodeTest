var getId = function (id) {
	return document.getElementById(id);
};
var contentWrite = function (e, txt) {
	e.innerHTML = txt;
}
var contentAppend = function (e, txt) {
	e.innerHTML += txt;
};

var isEmpty = function (o) {
	return o === undefined || o === null || o === "";
}


window.onload = function () {
	console.log("Working");


	var searchBox = getId("searchBox");
	var placeHolder = getId("autocomplete-placeholder");

	var options = {
		type: "POST",
		data: ""
	}

	ajax("getLoggedUserInfo.php", options).then(function (data) {
		// console.log(data);
		var response = data.response;
		var user = JSON.parse(response);
		if (user.length > 0) {
			user = user[0];
		}
		console.log(user);
		var form = document.userForm;
		var inputs = document.querySelectorAll("input[type='text']");
		console.log(inputs);
		for (var i = 0; i < inputs.length; i++) {
			var input = inputs[i];
			input.value = user[input.name];
			console.log(input);
		}

		console.log(userForm);
	});

}

var ajax = function (url, options) {
	var promise = new Promise(function (resolve, reject) {
		var xajax = new XMLHttpRequest;


		xajax.onreadystatechange = function (ev) {
			if (this.readyState == 4 && this.status == 200) {
				var result = {
					response: ev.srcElement.responseText,
					state: this.state,
					$this: this,
					event: ev,
					target: ev.target,

				}

				result.url = result.target.responseURL;
				result.response = result.$this.response;
				result.responseText = ev.srcElement.responseText;
				// console.log("Got response : " + result.$this.response);

				resolve(result);
			}
		}

		xajax.open(options.type, url, true);
		xajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		//xajax.setRequestHeader("Content-type", "application/json")
		xajax.send(options.data);
	});

	return promise;

}




function formSubmit($form) {
	console.log($form);
	var queryString = "FullName=" + $form.fullname.value + "&Description=" + $form.description.value + "&UserName=" + $form.username.value; 
	var options = {
		type: "POST",
		data: queryString
	}
	console.log(options);
	ajax("updateUser.php", options).then(function (data) {
		// console.log(data);
		var response = JSON.parse(data.response);
		var placeholder = getId("placeholder");

		

		console.log(response);
		contentWrite(placeholder, response.Message);
	});
}