function regform(){
    
        
        var email = document.getElementById("email").value;
        if(email == null || email == ""){
            alert("Not Valid Email null");
            return false;
        }
        if(email.charAt(0) == "@" || email.charAt(0) == "."){
            alert("Not Valid Email start");
            return false;
        }
        var atpos = email.indexOf("@");
        var dotpos = email.indexOf(".");
        var lastdotpos = email.lastIndexOf(".");
        if(atpos == -1 || dotpos == -1 || lastdotpos<atpos){
            alert("Not Valid Email order");
            return false;
        }
        if((lastdotpos - atpos) < 2){
            alert("Not Valid Email dot at gap");
            return false;
        }
        var length = email.length-1;
        if((length - lastdotpos) < 2){
            alert("Not Valid Email end");
            return false;
        }
    
        /* password confirmation and validation*/
        password1 = document.forms["form"]["psw"].value; 
        password2 = document.forms["form"]["pswrepeat"].value;

           if (password1 != password2) { 
                alert ("\nPassword did not match: Please try again...") 
                return false; 
            } 
        
       //not a number phone validation

        var y = document.forms["form"].phone.value;
        var phonepattern = /^[789][0-9]{9}$/ ;
        if(isNaN(y)||y.indexOf(" ")!=-1)
            {
               alert("Enter numeric value")
               return false; 
            }
            if (y.length>10 || y.length<8)
            {
                 alert("Invalid Phone Number");
                 return false;
            }
           
            if(phonepattern.test(y))
            {
                return true;
            }
            else{
                alert("Phone Number should be INDIAN");
                return false;
            }
            // if (y.charAt(0)!="9") 
            // {
            //      alert("it should start with 9");
            //      return false;
            // }
        
    
}