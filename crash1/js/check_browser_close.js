 function wireUpEvents() {

   2:   /*

   3:   * For a list of events that triggers onbeforeunload on IE

   4:   * check http://msdn.microsoft.com/en-us/library/ms536907(VS.85).aspx

   5:   */

   6:   window.onbeforeunload = function() {

   7:       if (!validNavigation) {

   8:          endSession();

   9:       }

  10:   }

  11:  

  12:   // Attach the event keypress to exclude the F5 refresh

  13:   $(document).bind('keypress', function(e) {

  14:     if (e.keyCode == 116){

  15:       validNavigation = true;

  16:     }

  17:   });

  18:  

  19:   // Attach the event click for all links in the page

  20:   $("a").bind("click", function() {

  21:     validNavigation = true;

  22:   });

  23:  

  24:   // Attach the event submit for all forms in the page

  25:   $("form").bind("submit", function() {

  26:     validNavigation = true;

  27:   });

  28:  

  29:   // Attach the event click for all inputs in the page

  30:   $("input[type=submit]").bind("click", function() {

  31:     validNavigation = true;

  32:   });

  33:   

  34: }

  35:  

  36: // Wire up the events as soon as the DOM tree is ready

  37: $(document).ready(function() {

  38:   wireUpEvents();  

  39: });



