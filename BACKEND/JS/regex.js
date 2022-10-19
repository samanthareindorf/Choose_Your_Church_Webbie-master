//selecting Ui elms
var form=$('#signForm');
const fname=$('#fname');
const lname=$('#lname');
const dob=$('#dob');
const email=$('#email');
const password=$('#password');
const confirmPassword=$('#confirmPassword');
const mobile=$('#phone');
const fel=$('#fel');

//variable to count error
let errCount=0;

//function to showerror
 //takes the id and the message
const displayError=(errorID, errorMsg)=>{
        //displays error in html
    errorID.html(errorMsg);
        //increment if errors found
    errCount+=1;
}


//checking required fields
const checkReq =(inputArray)=>{

    //on each iteration take array
    inputArray.forEach(function(input){
                //get value
                if(input.val()===''){
        //check if error exists and move to next element and select id
                    displayError(input.next(), `${input.attr('id')} field is required`);
                }


    })
}

//check input length
const checkInputLength=(input, min, max)=>{
    if(input.val().length <= min){
        displayError(input.next(), `${input.attr('id')} must be more than ${min} characters long` );

    }else if(input.val().length >= max){
        displayError(input.next(), `${input.attr('id')} must be less than ${max} characters long` );


    }
}

//valid email check
const checkEmail=(input)=>{
    const Mailregex= /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/; 

    //compare input with regex
    if(!Mailregex.test(input.val())){
        displayError(input.next(), 'Invalid data');
    }
}

//check for valid password 
const checkPasswordContains=(input)=>{
    const passRegex= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;

    //compare password with regex 
    if(!passRegex.test(input.val())){
        displayError(input.next(), 'Invalid format');
    }
}



//check if phone number is a number
const noTel=(tel)=>{
    if(!isNaN(tel)){
        tel.next(), "Invalid";

    }
}

//password match
const checkPasswordMatch=(password1, password2)=> {
    if(password1.val() !=password2.val()){
        displayError(password2, "Passwords do not match");
    }

}




//when form is submit
form.submit(function(e){

    // clearing error messages
    $('small').html('');
    errCount=0; //to set errors to 0 without refresh


    // input validation Not empty
    checkReq([fname,lname, email, dob, mobile, password, confirmPassword, fel]);

    // fname length
    checkInputLength(fname, 2, 15);

    // lname length 
    checkInputLength(lname, 2, 20);


    // mobile no length
    checkInputLength(mobile, 9, 15);

    // email
    checkEmail(email);

    // password length
    checkInputLength(password, 5, 20);


    // password contains
    checkPasswordContains(password);

    // password match
    checkPasswordMatch(password, confirmPassword);


    if(errCount===0){
        $('#success').html('Correct Inputs!');
    
    }
    e.preventDefault(); //prevent it from submitting

    
});








