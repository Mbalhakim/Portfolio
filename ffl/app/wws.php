<script>
// Already clicked
function doClicked () {
  alert("You have already clicked!");
}
 
// Normal function
function doSomething () {
  // Switch funky to do the clicked function
  funky = doClicked;
 
  // Do your processing here
  alert("Something is done!");
}

// Funky switching function
var funky = doSomething;
</script>
 
<input type="button" id="myButton" value="Click Here To Do Something" onclick="funky()"/>