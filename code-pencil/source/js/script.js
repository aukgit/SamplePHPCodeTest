

var app = {
		
	Htmleditor : CodeMirror.fromTextArea(document.getElementById("htmlPanel"), {
	lineNumbers: true,
	mode: "text/html"
	}),

	Csseditor : CodeMirror.fromTextArea(document.getElementById("cssPanel"), {
	lineNumbers: true,
	mode: "stylesheet",
	matchBrackets: true
	}),
	
	Jseditor : CodeMirror.fromTextArea(document.getElementById("javascriptPanel"), {
	lineNumbers: true,
	mode: "javascript",
	matchBrackets: true
	})
}


 function updateOutput() {
 
 	$("iframe").contents().find("html").html("<html><head><style type='text/css'>" + app.Csseditor.getValue() + "</style></head><body>" + app.Htmleditor.getValue() + "</body></html>");
 	document.getElementById("outputPanel").contentWindow.eval(app.Jseditor.getValue());
 }
 
 

 $("textarea").on('change keyup paste keydown', function(e) {
	
	 
		// Tab Key Prevent
	  if (e.keyCode == 9) { 
		if(e.preventDefault) {
			//alert("pab pressed");
		    this.value += "";
			return false;
		}
	} 

	
	var htmlcode = app.Htmleditor.getValue();
	var css = app.Csseditor.getValue();
	var js = app.Jseditor.getValue();
	

	ajaxRequest(htmlcode,css,js);
	updateOutput();

 });




	function ajaxRequest(gethtml,getcss,getjs){
		$.ajax({
			method: "POST",
			url: "../Controller/dbSave.php?html="+gethtml+"&css="+getcss+"&js="+getjs,
			dataType: "html"
		//	data: {html: gethtml, css: getcss, js:getjs }
		})
			.done(function( msg ) {
				console.log( "Data Retrive : " );
				console.log( msg );
			});
		 
		
	 }
