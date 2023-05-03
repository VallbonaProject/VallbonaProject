let estada_edit_control = {
    "student_name": [isAlphabet, "El nom no pot tenir números o símbols"],
    "curs_id": [madeSelection, "Cal escollir un curs"],
    "cicle_id": [madeSelection, "Cal escollir un cicle"],
    "registered_by": [madeSelection, "Cal escollir un tutor"],
    "empresa_id": [madeSelection, "Cal escollir una empresa"],
    "dual": [madeSelection, "Cal escollir un tipus"],
    "evaluation": [lengthRestriction, 0, 10],
};


window.onload = function() {
    document.forms['editEstadaForm'].addEventListener("submit", formValidator);

    for (let x in estada_edit_control) {
        document.forms['editEstadaForm'][x].addEventListener("change", ErrorVisibility);
    }
};

function formValidator(e) {
    var result = true;
    var first_error = null;

    for (let x in estada_edit_control) {
        elem = document.forms['editEstadaForm'][x];

        if (!estada_edit_control[x][0](elem, estada_edit_control[x][1], estada_edit_control[x][2])) {
            result = false;
            if (first_error == null) {
                first_error = document.forms['editEstadaForm'][x];
            }
        }
    }
    
    if (!result) {
        if (first_error != null) {
            first_error.focus();
        }
        e.preventDefault();
    }

    return result;
}

function ErrorVisibility(e){
    estada_edit_control[e.target.name][0](e.target, estada_edit_control[e.target.name][1]);
}

function tractarError(elem, noError, msgError){
    
    if (noError){
        elem.parentElement.classList = "col-md-10 col-sm-10"
        document.getElementById(elem.name + "-edit-estada-error").classList = "error"
        document.getElementById(elem.name + "-edit-estada-error").innerHTML = "";
    } else { 
        elem.parentElement.classList = "col-md-5 col-sm-5"
        document.getElementById(elem.name + "-edit-estada-error").classList = "error col-md-5 col-sm-5"
        document.getElementById(elem.name + "-edit-estada-error").innerHTML = msgError;
    }
}