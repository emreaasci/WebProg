document.getElementsById("submitBtn").addEventListener('click',send);
document.getElementsById("clearBtn").addEventListener('click',clear);

function send(){
    document.getElementsByClassName('form').submit();

}

function clear(){
    document.getElementsByClassName('form').reset();
}


function validate(){
    var form = document.getElementsByClassName('form');
    var formElements = form.elements;
    console.log(form);

    for(var i = 0; i < formElements.length; i++){
        var element = formElements[i];

        if(element.type == "text" && element.value.length <= 0){
            validateMessage = element.name + " boş geçilemez!";
        }
    }
}

