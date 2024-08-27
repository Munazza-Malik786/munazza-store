$(document).ready(function(){
    // ==valid Name===
    function validateName(){
        let nameInput=$('#nameInput').val();
        let nameRegex= /^[a-zA-Z]*$/;

        if(!nameRegex.test(nameInput)){
            $('#name-error-message').show();
            return false;
        }
        else{
            $('#name-error-message').hide();
            return true;
        }
    }
    // ===valid Number====
    function validateNum(){
       var inputNum=$('#inputNum').val();
       var numRegex=/^[1-9]$/;
        if(!numRegex.test(inputNum)){
           $('#name-error-message').show();
           return false;     
        }
        else{
           $('#name-error-message').hide();
            return true;
        }
    }
    // ==before submiting===
    $('#myForm').submit(function(event){
        var isValidName=validateName();
        var isValidNum=validateNum();
        if(!isValidName || !isValidNum){
            alert("Please correct the highlighted errors before submitting the form.");
            event.preventDefault();
        }
    });
    // ==after submiting===
    $('#nameInput').on('input blur focus', function(){
        validateName();
    });
    $('#inputNum').on('input blur focus',function(){
        validateNum();
    });
});
