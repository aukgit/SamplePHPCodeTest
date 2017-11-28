window.onload = function () {
	console.log("Working");
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

	var searchBox = getId("searchBox");
	var placeHolder = getId("autocomplete-placeholder");

	if (!isEmpty(searchBox)) {
		searchBox.addEventListener("keyup", function (h, e) {
			console.log(h);
			console.log(e);
			console.log(this.value);
			var options = {
				type: "POST",
				data: "Search=" + this.value
			}

			ajax("getCountries.php", options).then(function (data) {
				// console.log(data);
				var response = data.response;
				var countriesJson = JSON.parse(response).countries;
				console.log(countriesJson);
				var countryNames = [];
				for(var i = 0 ; i < countriesJson.length;i++){
					var country = countriesJson[i];
					countryNames.push(country.country_name);
				}

				contentWrite(placeHolder, countryNames.join("<br>"));
			});

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


}