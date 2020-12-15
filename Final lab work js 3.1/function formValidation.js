function formValidation(){



	var name = document.getElementById('name').value.trim();
	var email = document.getElementById('email').value.trim();
	//var male = document.getElementById('male').value.trim();
	//var female = document.getElementById('female').value.trim();
	//var other = document.getElementById('other').value.trim();
	var gender = document.regForm.gender.value.trim();
	var day = document.getElementById('day').value.trim();
	var month = document.getElementById('month').value.trim();
	var year = document.getElementById('year').value.trim();
	var bloodGroup = document.getElementById('bloodGroup').value.trim();
	var ssc = document.getElementById('ssc').value.trim();
	var hsc = document.getElementById('hsc').value.trim();
	var bsc = document.getElementById('bsc').value.trim();


   var name_flag = "";
   var email_flag = "";
   var gender_flag = "";
   
   // Name Empty Check

	if (name == ""){

	   

		document.getElementById('name_err').innerHTML = "insert your name ";

		name_flag = "error";

	   //return false;

	}

	// Name must be start with a letter check

	if (name != ""){


		if (!(name[0].toLowerCase() >='a' && name[0].toLowerCase() <='z')){

          name_flag = "error";

		  document.getElementById('name_err').innerHTML = "name must be start with a letter";

	      return false; 

		}
	}

   // Name Cannot contain number check

   if (name != ""){

   var count = 0;
   var i=0;

   while (i < name.length){

        if ((name[i] >='0') && (name[i] <='9')){

   		count++;
   	}
   	i++
   }

   if (count != 0){

   	     name_flag = "error"

		document.getElementById('name_err').innerHTML = " only character ";

		return false;

   }

   }

  // Name Can not contain Double Dot and Double Dash Check 

   if (name != ""){

        var dup = name.replace(/ /g, "");

        var doubleDot = dup.indexOf("..");
        var doubleDash = dup.indexOf("--");

        if (doubleDot >= 0){

        	name_flag = "error"

		 document.getElementById('name_err').innerHTML = "name cannot contain Double Dot (..) or more";

		 return false;

        }else if (doubleDash >= 0){

          name_flag = "error"

		  document.getElementById('name_err').innerHTML = "name cannot contain Double dash (--) or more";

		  return false;

        }


   }

   // Name can only contain A to Z or a to z and dash(-) or dot(.) check

   if(name != ""){
     
     var alphaCount = 0;
     var j = 0;

    var rpName = name.replace(/ |-/g,'');
    var dtName = rpName.replace(/\./g,'');

     while (j < dtName.length){

        if (!(dtName[j].toLowerCase() >='a' && dtName[j].toLowerCase() <='z')) {

   		  alphaCount++;

   	}

   	j++

   }

   if (alphaCount != 0){

   	     name_flag = "error"

		document.getElementById('name_err').innerHTML = " name only contain A to Z or a to z ";

		return false;

   }


   }

   // Name Must be at least two words 

   if (name != ""){

  if (name.split(" ").length < 2){

		name_flag = "error"

		document.getElementById('name_err').innerHTML = "name must be at least two words";

		return false;


	}

	}

  // If no error, changing the last error message with null
	
  if (name_flag == ""){

         var obj = document.getElementById('name_err').innerHTML = "";

         //return false;


    }

	

   // Email Empty Check

	if (email == ""){

	     

		document.getElementById('email_err').innerHTML = "Give your email address ";

		email_flag = "error";

		//return false;
	}

	

	if (email != ""){

        var notallowed = email.indexOf(".@");
        var notallowed1 = email.indexOf("..");
		var atposition = email.indexOf("@");
		var firstDot  = email.indexOf(".");
        var lastDot = email.lastIndexOf(".");
        var lengthOfEmail = email.length;

     if (notallowed >= 0 || notallowed1 >= 0){

         var email_flag = "error";

		document.getElementById('email_err').innerHTML = "(.@) and (..) is not allowed ";

		return false;

     }else if ( atposition < 1 || firstDot < 1 ){

         var email_flag = "error";

		document.getElementById('email_err').innerHTML = "(.) and (@) is not allowed in first Position";

		return false;

     }else if (!(atposition+2 < lastDot)){

          var email_flag = "error";

		document.getElementById('email_err').innerHTML = "put atleast two character after(@)";

		return false;

     }else if (!(lengthOfEmail-1 >= lastDot+2)){

        var email_flag = "error";

		document.getElementById('email_err').innerHTML = "put atleast two character after last dot";

		return false;

     }




	}

	if (email_flag == ""){

         var obj1 = document.getElementById('email_err').innerHTML = "";



    }

	if (gender == "" ){

	    

		document.getElementById('gender_err').innerHTML = "select your gender";

		gender_flag = "error";

		//return false;
	}

	if ( gender_flag == ""){

            var obj2 = document.getElementById('gender_err').innerHTML = "";

            

	}

	if( name_flag != "" || email_flag != "" || gender_flag != ""){

      
        return false;


	}else{

           alert("Form submitted");

	}





}