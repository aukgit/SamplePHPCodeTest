var isEmpty = function(o){
    return o === undefined || o === null;
}


function formSubmit($f){
    console.log($f);
    var $placeholder= document.getElementById("placeholder");
    var body = $f.body.value;
    console.log(body);

    if(!isEmpty(body) && body.length < 30){
        $placeholder.innerHTML = "Please add body text at least 30 characters.";
        $placeholder.classList.add('error');
        $success= document.getElementById("success");
        if(!isEmpty($success)){
            $success.innerHTML = "";
        }
    } else {
        $placeholder.innerHTML = "";
        $placeholder.classList.remove('error');
        $f.submit();
    }

    

}