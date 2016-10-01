 $().ready(function() {
$("#register_school").validate({
            rules: {
                school_name: {
                    required: true,
                    minlength: 6
                },
                boite_p: {
                    required: true,
                    minlength: 1
                },
                director_name: {
                    required: true,
                    minlength: 5
                },
                password: {
                    required: true,
                    minlength: 5
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                phone_number: {
                    required: true
                },
                logo: {
                    required: true
                },
                topic: {
                    required: "#newsletter:checked",
                    minlength: 2
                },
                agree: "required"
            },
            messages: {                
                school_name: {
                    required: "Please enter a school name.",
                    minlength: "Your school name must consist of at least 6 characters long."
                },
                boite_p: {
                    required: "Please enter a POBOX.",
                    minlength: "Your POBOX must consist of at least 1 characters long."
                },
                director_name: {
                    required: "Please enter a director name.",
                    minlength: "Your director name must consist of at least 5 characters long."
                },
                password: {
                    required: "Please provide a password.",
                    minlength: "Your password must be at least 5 characters long."
                },
                confirm_password: {
                    required: "Please provide a password.",
                    minlength: "Your password must be at least 5 characters long.",
                    equalTo: "Please enter the same password as above."
                },
                logo: {
                    required: "Please provide a file."
                },
                phone_number: "Please enter a phone number.",
                agree: "Please accept our terms & condition."
            },
            submitHandler: function(form) {
                if(validate()==1)
                form.submit();
    }
             
        });

   

 });

 function validate(){
    var test=0;
    var id="logo";
    var size1=102400;
    var height1=30;
    var width1=100;
    var fileUpload = document.getElementById(id);
    $('#'+id).change(function(){  $("#file_error_"+id).html(""); });
    //Check whether the file is valid Image.
         var file_size = $('#'+id)[0].files[0].size;
        if(file_size>size1) {
            $("#file_error_"+id).html("File size is greater than 100ko");
            $("#file_error_"+id).css("color","red");
           test=0;
        } else test=1;
                    
    var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.jpeg)$");
    if (regex.test(fileUpload.value.toLowerCase())) {
        //Check whether HTML5 is supported.
        if (typeof (fileUpload.files) != "undefined") {
            //Initiate the FileReader object.
            var reader = new FileReader();
            //Read the contents of Image File.
            reader.readAsDataURL(fileUpload.files[0]);
            reader.onload = function (e) {
                //Initiate the JavaScript Image object.
                var image = new Image();
 
                //Set the Base64 string return from FileReader as source.
                image.src = e.target.result;
                       
                //Validate the File Height and Width.
                image.onload = function () {
                    var height = this.height;
                    var width = this.width;
                    if (height>height1 || width >width1) {
                        $("#file_error_"+id).html("invalide Height or Width");
                        $("#file_error_"+id).css("color","red");
                       test=0;
                    }else test=1;
                    
                };
 
            }
        } else {
            $("#file_error_"+id).html("This browser does not support HTML5.");
            $("#file_error_"+id).css("color","red");
            test=0;
        }
    } else {
        $("#file_error_"+id).html("Please select a valid Image file.(jpg,jpeg,png)");
            $("#file_error_"+id).css("color","red");
        test=0;
    }
    $('.fileupload').each(function () {
        var id=this.id;
     var size1=204800;
    var height1=380;
    var width1=930;
    var fileUpload = document.getElementById(id);
    $('#'+id).change(function(){  $("#file_error_"+id).html(""); });
    if(fileUpload.files[0]!=null){
            var file_size = $('#'+id)[0].files[0].size;
        if(file_size>size1) {
            $("#file_error_"+id).html("File size is greater than 100ko");
            $("#file_error_"+id).css("color","red");
            test=0;
        } else test=1;
                    
    //Check whether the file is valid Image.
    var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.jpeg)$");
    if (regex.test(fileUpload.value.toLowerCase())) {
        //Check whether HTML5 is supported.
        if (typeof (fileUpload.files) != "undefined") {
            //Initiate the FileReader object.
            var reader = new FileReader();
            //Read the contents of Image File.
            reader.readAsDataURL(fileUpload.files[0]);
            reader.onload = function (e) {
                //Initiate the JavaScript Image object.
                var image = new Image();
 
                //Set the Base64 string return from FileReader as source.
                image.src = e.target.result;
                       
                //Validate the File Height and Width.
                image.onload = function () {
                    var height = this.height;
                    var width = this.width;
                    if (height!=height1 || width !=width1) {
                        $("#file_error_"+id).html("invalide Height or Width");
                        $("#file_error_"+id).css("color","red");
                       test=0;
                    }else test==1;
                    
                };
 
            }
        } else {
            $("#file_error_"+id).html("This browser does not support HTML5.");
            $("#file_error_"+id).css("color","red");
            test=0;
        }
    } else {
        $("#file_error_"+id).html("Please select a valid Image file.(jpg,jpeg,png)");
            $("#file_error_"+id).css("color","red");
        test=0;
    }
}
 });

    return test;

}
