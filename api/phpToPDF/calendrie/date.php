  <link rel="stylesheet" href="calendrie/calendar-jos.css" type="text/css" title="Green" media="all">
  
 
  <script src="calendrie/mootools-core.js" type="text/javascript"></script>

  <script src="calendrie/mootools-more.js" type="text/javascript"></script>
  <script src="calendrie/validate.js" type="text/javascript"></script>
  <script src="calendrie/modal.js" type="text/javascript"></script>
  <script src="calendrie/calendar.js" type="text/javascript"></script>
  <script src="calendrie/calendar-setup.js" type="text/javascript"></script>
  <script type="text/javascript">
window.addEvent('domready', function() {
			
			var JTooltips = new Tips($$('.hasTip'), { maxTitleChars: 50, fixed: false});
		});


			var global_ie_bookmark = false;


			
window.addEvent('domready', function(){ new Fx.Accordion($$('div#content-sliders-.pane-sliders > .panel > h3.pane-toggler'), $$('div#content-sliders-.pane-sliders > .panel > div.pane-slider'), {onActive: function(toggler, i) {toggler.addClass('pane-toggler-down');toggler.removeClass('pane-toggler');i.addClass('pane-down');i.removeClass('pane-hide');Cookie.write('jpanesliders_content-sliders-',$$('div#content-sliders-.pane-sliders > .panel > h3').indexOf(toggler));},onBackground: function(toggler, i) {toggler.addClass('pane-toggler');toggler.removeClass('pane-toggler-down');i.addClass('pane-hide');i.removeClass('pane-down');if($$('div#content-sliders-.pane-sliders > .panel > h3').length==$$('div#content-sliders-.pane-sliders > .panel > h3.pane-toggler').length) Cookie.write('jpanesliders_content-sliders-',-1);},duration: 300,opacity: false,alwaysHide: true}); });
		window.addEvent('domready', function() {

			SqueezeBox.initialize({});
			
		});
	function jSelectUser_jform_created_by(id, title) {
		var old_id = document.getElementById("jform_created_by_id").value;
		if (old_id != id) {
			document.getElementById("jform_created_by_id").value = id;
			document.getElementById("jform_created_by_name").value = title;
			
		}
		SqueezeBox.close();
	}
Calendar._DN = new Array ("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"); Calendar._SDN = new Array ("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"); Calendar._FD = 0; Calendar._MN = new Array ("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"); Calendar._SMN = new Array ("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"); Calendar._TT = {};Calendar._TT["INFO"] = "About the Calendar"; Calendar._TT["ABOUT"] =
 "DHTML Date/Time Selector\n" +
 "(c) dynarch.com 2002-2005 / Author: Mihai Bazon\n" +
"For latest version visit: http://www.dynarch.com/projects/calendar/\n" +
"Distributed under GNU LGPL.  See http://gnu.org/licenses/lgpl.html for details." +
"\n\n" +
"Date selection:\n" +
"- Use the « and » buttons to select year\n" +
"- Use the < and > buttons to select month\n" +
"- Hold mouse button on any of the above buttons for faster selection.";
Calendar._TT["ABOUT_TIME"] = "\n\n" +
"Time selection:\n" +
"- Click on any of the time parts to increase it\n" +
"- or Shift-click to decrease it\n" +
"- or click and drag for faster selection.";

		Calendar._TT["PREV_YEAR"] = "Click to move to the previous year. Click and hold for a list of years."; Calendar._TT["PREV_MONTH"] = "Click to move to the previous month. Click and hold for a list of the months."; Calendar._TT["GO_TODAY"] = "Go to today"; Calendar._TT["NEXT_MONTH"] = "Click to move to the next month. Click and hold for a list of the months."; Calendar._TT["NEXT_YEAR"] = "Click to move to the next year. Click and hold for a list of years."; Calendar._TT["SEL_DATE"] = "Select a date."; Calendar._TT["DRAG_TO_MOVE"] = "Drag to move"; Calendar._TT["PART_TODAY"] = "Today"; Calendar._TT["DAY_FIRST"] = "Display %s first"; Calendar._TT["WEEKEND"] = "0,6"; Calendar._TT["CLOSE"] = "Close"; Calendar._TT["TODAY"] = "Today"; Calendar._TT["TIME_PART"] = "(Shift-)Click or Drag to change the value."; Calendar._TT["DEF_DATE_FORMAT"] = "%Y-%m-%d"; Calendar._TT["TT_DATE_FORMAT"] = "%a, %b %e"; Calendar._TT["WK"] = "wk"; Calendar._TT["TIME"] = "Time:";

window.addEvent('domready', function() {Calendar.setup({
				// Id of the input field
				inputField: "jform_publish_down",
				// Format of the input field
				ifFormat: "%Y-%m-%d",
				// Trigger for the calendar (button ID)
				button: "jform_publish_down_img",
				// Alignment (defaults to "Bl")
				align: "Tl",
				singleClick: true,
				firstDay: 0
				});});
	function jInsertFieldValue(value, id) {
		var old_id = document.id(id).value;
		if (old_id != id) {
			var elem = document.id(id);
			elem.value = value;
			elem.fireEvent("change");
		}
	}
window.addEvent('domready', function(){ new Fx.Accordion($$('div#permissions-sliders-.pane-sliders > .panel > h3.pane-toggler'), $$('div#permissions-sliders-.pane-sliders > .panel > div.pane-slider'), {onActive: function(toggler, i) {toggler.addClass('pane-toggler-down');toggler.removeClass('pane-toggler');i.addClass('pane-down');i.removeClass('pane-hide');Cookie.write('jpanesliders_permissions-sliders-',$$('div#permissions-sliders-.pane-sliders > .panel > h3').indexOf(toggler));},onBackground: function(toggler, i) {toggler.addClass('pane-toggler');toggler.removeClass('pane-toggler-down');i.addClass('pane-hide');i.removeClass('pane-down');if($$('div#permissions-sliders-.pane-sliders > .panel > h3').length==$$('div#permissions-sliders-.pane-sliders > .panel > h3.pane-toggler').length) Cookie.write('jpanesliders_permissions-sliders-',-1);},duration: 300,opacity: false,alwaysHide: true}); });
window.addEvent('domready', function(){ new Fx.Accordion($$('div#permissions-sliders.pane-sliders .panel h3.pane-toggler'),$$('div#permissions-sliders.pane-sliders .panel div.pane-slider'), {onActive: function(toggler, i) {toggler.addClass('pane-toggler-down');toggler.removeClass('pane-toggler');i.addClass('pane-down');i.removeClass('pane-hide');Cookie.write('jpanesliders_permissions-sliderscom_content',$$('div#permissions-sliders.pane-sliders .panel h3').indexOf(toggler));},onBackground: function(toggler, i) {toggler.addClass('pane-toggler');toggler.removeClass('pane-toggler-down');i.addClass('pane-hide');i.removeClass('pane-down');}, duration: 300, display: 0, show: 0, alwaysHide:true, opacity: false}); });
  </script>
