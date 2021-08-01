//to disbale future date selection in birth date field
$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth()+1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    $('#dateofbirth').attr('max', maxDate);
});

function validatePanNumber(pan) {

    let pannumber = $(pan).val();

    var regex = /[a-zA-z]{5}\d{4}[a-zA-Z]{1}/;

    if (pannumber.match(regex)) {

        $("#lblPANCard").css("visibility", "hidden");

    }

    else {

        $("#lblPANCard").css("visibility", "visible");

        $(pan).val("");

    }


}

function GetDetail(str) {
    if (str.length == 0) {
        document.getElementById("state").value = "";
        document.getElementById("district").value = "";
        document.getElementById("taluka").value = "";
        return;
    }
    else {

        // Creates a new XMLHttpRequest object
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {

            // Defines a function to be called when
            // the readyState property changes
            if (this.readyState == 4 && 
                    this.status == 200) {
                  
                // Typical action to be performed
                // when the document is ready
                var myObj = JSON.parse(this.responseText);

                // Returns the response data as a
                // string and store this array in
                // a variable assign the value 
                // received to first name input field
                  
                document.getElementById("state").value = myObj[0];
                  
                // Assign the value received to
                // last name input field
                document.getElementById("district").value = myObj[1];

                document.getElementById("taluka").value = myObj[2];
            }
        };
        xmlhttp.open("GET", "autofill.php?pincode=" + str, true);
          
        // Sends the request to the server
        xmlhttp.send();

        // xhttp.open("GET", "filename", true);
        
    }
}

$(function () {
    $('#donor').validate({
      rules: {
        fname: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        contact: {
          required: true,
          rangelength: [10, 12],
          number: true
        },
        password: {
          required: true,
          minlength: 8
        },
        confirmPassword: {
          required: true,
          equalTo: "#password"
        }
      },
      messages: {
        name: 'Please enter Name.',
        email: {
          required: 'Please enter Email Address.',
          email: 'Please enter a valid Email Address.',
        },
        contact: {
          required: 'Please enter Contact.',
          rangelength: 'Contact should be 10 digit number.'
        },
        password: {
          required: 'Please enter Password.',
          minlength: 'Password must be at least 8 characters long.',
        },
        confirmPassword: {
          required: 'Please enter Confirm Password.',
          equalTo: 'Confirm Password do not match with Password.',
        }
      },
      submitHandler: function (form) {
        form.submit();
      }
    });
  });