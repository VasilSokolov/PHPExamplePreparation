$(document).ready(function(){
    function disableRegister(){
        $('#registerButton').prop('disable', 'disable');
    }
    function enableRegister(){
        $('#registerButton').removeProp('disable');
    }
    function errorOnFieldId(id){
        $(id).prop(
            'style',
            'border:1px solid red');
    }

    function successOnField(id){
        $(id).prop(
            'style',
            'border:1px solid green');
    }
   $('#confirmPass').on('input', function(){
       var password = $('#password').val();
       var confirmPass = $('confirmPass').val();

       if (password != confirmPass) {
           errorOnFieldId('#confirmPass');
           disableRegister();
       }else {
           $('#confirmPass').prop(
               'style',
               'border:1px solid green');
           enableRegister();
            }
       });
   $('#email').on('input', function(){
        var emailRegex = '^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$';
        var email = $('#email').val();
        var isValid = emailRegex.test(email);
       if (!isValid) {
           disableRegister();
           errorOnFieldId('#email');
       }else {
           enableRegister();
           successOnField('#email');
       }
    });
});