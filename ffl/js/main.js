function validateForm()
{
    var x = document.forms["myForm"]["naam"].value;
    if (x == "") {
      alert("Naam moet ingevuld worden");
      return false;
    }
    
    var y = document.forms["myForm"]["email"].value;
    if (y == "") {
      alert("email moet ingevuld worden");
      return false;
    }
     

    var z = document.forms["myForm"]["password"].value;
    if (z == "") {
      alert("Wachtwoord moet ingevuld worden");
      return false;
    }

    var s = document.forms["myForm"]["st_nummer"].value;
    if (s == "") {
      alert("Student nummer moet ingevuld worden");
      return false;
    }

    var k = document.forms["myForm"]["klas"].value;
    if (k == "") {
      alert("Kies een klas");
      return false;
    }

   
  }




  function nowAsDuration(){
    return moment.duration({
        hours:   moment().hour(),
        minutes: moment().minute(),
        seconds: moment().second()
    });
}


$("input").on("change", function() {
    var a = moment(this.value);
    var b = nowAsDuration();
    var c = a.add(b);
    
        
    this.setAttribute("my-date", c.format( this.getAttribute("my-date-format") )
    )
}).trigger("change")