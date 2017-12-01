
/**
 * Now your job would be send the result json when all of these requests are done with this conditions.
 */
var getFiveAjaxAsOne = function () {
	var result = {
		ajax1: {
			status: null,
			response: null
		},
		ajax2: {
			status: null,
			response: null
		},
		ajax3: {
			status: null,
			response: null
		},
		ajax4: {
			status: null,
			response: null
		},
		ajax5: {
			status: null,
			response: null
		}
	}
	var ajax1 = $.ajax({
		type: "POST",
		url: "SampleURL",
		data: "",
		dataType: "JSON",
		success: function (response) {

			var ajax2 = $.ajax({
				type: "POST",
				url: "SampleURL",
				data: "",
				dataType: "JSON",
				success: function (response) {

				}
			});

			var ajax3 = $.ajax({
				type: "POST",
				url: "SampleURL",
				data: "",
				dataType: "JSON",
				success: function (response) {

				}
			});
		}
	});

	var ajax4 = $.ajax({
		type: "POST",
		url: "SampleURL",
		data: "",
		dataType: "JSON",
		success: function (response) {

		}
	});

	var ajax5 = $.ajax({
		type: "POST",
		url: "SampleURL",
		data: "",
		dataType: "JSON",
		success: function (response) {

		}
	});
}


/**
 * This method is not DRY, please apply the DRY principals and make this method DRY and readable
 * Optimize the method and reduce duplication in code.
 */
var notDry = function () {
	// assume you have jquery and every method/variable is necessary
	 var fieldsArray = [
           { fieldId: 7, value: getFieldValue("FI", 7) },		//"ZipCode"
           { fieldId: 8, value: getFieldValue("FI", 8) },		//"City"
           { fieldId: 10, value: getFieldValue("FI", 10) },		//"Street"
           { fieldId: 61, value: getFieldValue("FI", 61) },		//"FreeC2" - House number
           { fieldId: 62, value: getFieldValue("FI", 62) },		//"FreeC3" - House number addition
           { fieldId: 149, value: getFieldValue("FI", 149) },	//"FreeC6"	- Delivery service qualifier	
           							
           { fieldId: 7017, value: getFieldValue("FI", 7017) },	//"Premise"
           { fieldId: 7018, value: getFieldValue("FI", 7018) },	//"Subpremise"
           { fieldId: 7019, value: getFieldValue("FI", 7019) },	//"AdditionalStreetName"
           { fieldId: 7022, value: getFieldValue("FI", 7022) },	//"AdditionalCityName"
           { fieldId: 7024, value: getFieldValue("FI", 7024) },	//"AdministrativeArea"
           { fieldId: 7025, value: getFieldValue("FI", 7025) },	//"SubadministrativeArea"
           { fieldId: 7026, value: getFieldValue("FI", 7026) },	//"Matchcode"
           { fieldId: 7094, value: getFieldValue("FI", 7094) },	//"Addresschecked"           
	];
	
	
	$("#PlaceHolder").empty();
	if( fieldsArray[3].value > 5){
		$("#PlaceHolder").html( "<div class='item-1'>" +  fieldsArray[0].value+ "</div>");
		$("#PlaceHolder").append( "<div class='item-2'>" +  fieldsArray[1].value+ "</div>");
		$("#PlaceHolder").append( "<div class='item-3'>" +  fieldsArray[3].value+ "</div>");
		$("#PlaceHolder").append( "<div class='item-4'>" +  fieldsArray[4].value+ "</div>");
		$("#PlaceHolder").append( "<div class='item-5'>" +  fieldsArray[5].value+ "</div>");
	
	} else {

		$("#PlaceHolder").html( "<div class='new-item-1'>" +  fieldsArray[0].value+ "</div>");
		$("#PlaceHolder").append( "<div class='new-item-2'>" +  fieldsArray[1].value+ "</div>");
		$("#PlaceHolder").append( "<div class='new-item-3'>" +  fieldsArray[3].value+ "</div>");
		$("#PlaceHolder").append( "<div class='new-item-4'>" +  fieldsArray[4].value+ "</div>");
		$("#PlaceHolder").append( "<div class='new-item-5'>" +  fieldsArray[5].value+ "</div>");
		switch (fieldsArray[3].value) {
			case "1": // La Poste
				var t_file = { FileName: "F" + t_OrderNumber + ".txt", Path: "C:\\PGS\\TNT" };
				// this.Export_Commande_TNT_Petit_Colis(p_infoArea,p_recordId,t_file);
				anotherMethod(d1, "1", t_file);
				break;
			case "2": // TNT
				var t_file = { FileName: "F" + t_OrderNumber + ".txt", Path: "C:\\PGS\\TNT" };
				// this.Export_Commande_TNT(p_infoArea,p_recordId,t_file);
				anotherMethod(d1, "2", t_file);
				break;
		}
	}
	
	var ajax = $.ajax({
		type: "POST",
		url: "SampleURL",
		data: "",
		dataType: "JSON",
		success: function (response) {
			$("#PlaceHolder").append( "<div class='item-6'>Ajax : " +  response +  + "</div>");
		}
	});

	switch (fieldsArray[6].value) {
		case "1": // La Poste
			var t_file = { FileName: "F" + t_OrderNumber + ".txt", Path: "C:\\PGS\\TNT" };
			// this.Export_Commande_TNT_Petit_Colis(p_infoArea,p_recordId,t_file);
			anotherMethod(d1, "1", t_file);
			break;
		case "2": // TNT
			var t_file = { FileName: "F" + t_OrderNumber + ".txt", Path: "C:\\PGS\\TNT" };
			// this.Export_Commande_TNT(p_infoArea,p_recordId,t_file);
			anotherMethod(d1, "2", t_file);
			break;
	}

	return null;
}	