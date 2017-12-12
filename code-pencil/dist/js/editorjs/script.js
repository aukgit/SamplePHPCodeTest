var Htmleditor = CodeMirror.fromTextArea(document.getElementById("htmlPanel"), {
	mode: "text/html",
	extraKeys: {
		"Ctrl-Space": "autocomplete"
	},
	scrollbarStyle: "simple",
	styleActiveLine: true,
	lineNumbers: true,
	lineWrapping: true,
	profile: 'xhtml',
	value: document.documentElement.innerHTML

});
emmetCodeMirror(Htmleditor);

var Csseditor = CodeMirror.fromTextArea(document.getElementById("cssPanel"), {
	mode: "css",
	styleActiveLine: true,
	lineNumbers: true,
	lineWrapping: true,
	scrollbarStyle: "simple"
});

var Jseditor = CodeMirror.fromTextArea(document.getElementById("javascriptPanel"), {
	mode: "javascript",
	extraKeys: {

		"Ctrl-Space": "autocomplete",
		"Tab": "autocomplete"
	},
	styleActiveLine: true,
	lineNumbers: true,
	lineWrapping: true,
	scrollbarStyle: "simple"
});



function updateOutput() {

	$("iframe").contents().find("html").html("<html><head><style type='text/css'>" + Csseditor.getValue() + "</style></head><body>" + Htmleditor.getValue() + "</body></html>");
	document.getElementById("outputPanel").contentWindow.eval(Jseditor.getValue());
}



$("textarea").on('change keyup paste keydown', function (e) {

	let html = Htmleditor.getValue();
	let css = Csseditor.getValue();
	let js = Jseditor.getValue();
	let codename = document.getElementById("codename").value;

	ajaxRequest(codename, html, css, js);
	updateOutput();

});

$("#codename").on('change keyup paste keydown', function (e) {
	let html = Htmleditor.getValue();
	let css = Csseditor.getValue();
	let js = Jseditor.getValue();
	let codename = document.getElementById("codename").value;

	ajaxRequest(codename, html, css, js);
});



function ajaxRequest(codenames, gethtml, getcss, getjs) {
	console.log(gethtml);
	$.ajax({
			method: "POST",
			url: "../api/db_Update.php",
			dataType: "html",
			data: {
				codename: codenames,
				html: gethtml,
				css: getcss,
				js: getjs
			}
		})
		.done(function (msg) {
			console.log("Data Retrive : " + msg);

		});
}



$(document).ready(function () {
	
	$("textarea").keyup();


	$("#sidebar").mCustomScrollbar({
		theme: "minimal"
	});

	$('#dismiss, .overlay').on('click', function () {
		$('#sidebar').removeClass('active');
		$('.overlay').fadeOut();
	});

	$('#sidebarCollapse').on('click', function () {
		$('#sidebar').addClass('active');
		$('.overlay').fadeIn();
		$('.collapse.in').toggleClass('in');
		$('a[aria-expanded=true]').attr('aria-expanded', 'false');
	});

	$('#htmlHide').on('click', function () {

		var $Show = $('#htmlHide');
		if ($Show.text() == 'Show HTML') {
			$("#htmlhideShow").show();
			$('#htmlHide').text('Hide HTML');
		} else {
			$("#htmlhideShow").hide();
			$('#htmlHide').text('Show HTML');
		}
	});

	$('#cssHide').on('click', function () {


		var $Show = $('#cssHide');
		if ($Show.text() == 'Show CSS') {
			$("#csshideShow").show();
			$('#cssHide').text('Hide CSS');

		} else {
			$("#csshideShow").hide();
			$('#cssHide').text('Show CSS');

		}
	});

	$('#jsHide').on('click', function () {

		var $Show = $('#jsHide');
		if ($Show.text() == 'Show JS') {
			$("#jshideShow").show();
			$('#jsHide').text('Hide JS');
		} else {
			$("#jshideShow").hide();
			$('#jsHide').text('Show JS');
		}
	});

	$('#CheckhtmlHide').on('click', function () {

		var $Show = $('#CheckhtmlHide').prop('checked');
		if ($Show == true) {
			$('#myCheckbox').attr('checked', true);
			$("#htmlhideShow").show();
			$('#htmlHide').text('Hide HTML');

		} else {
			$('#myCheckbox').attr('checked', false);
			$("#htmlhideShow").hide();
			$('#htmlHide').text('Show HTML');
		}
	});

	$('#CheckcssHide').on('click', function () {

		var $Show = $('#CheckcssHide').prop('checked');
		if ($Show == true) {
			$('#myCheckbox').attr('checked', true);
			$("#csshideShow").show();
			$('#cssHide').text('Hide CSS');

		} else {
			$('#myCheckbox').attr('checked', false);
			$("#csshideShow").hide();
			$('#cssHide').text('Show CSS');
		}
	});

	$('#CheckjsHide').on('click', function () {

		var $Show = $('#CheckjsHide').prop('checked');
		if ($Show == true) {
			$('#myCheckbox').attr('checked', true);
			$("#jshideShow").show();
			$('#jsHide').text('Hide JS');

		} else {
			$('#myCheckbox').attr('checked', false);
			$("#jshideShow").hide();
			$('#jsHide').text('Show JS');
		}
	});


});