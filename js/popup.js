$.getScript("js/jquery-ui-1.10.3/ui/jquery-ui.js");
$.getScript("js/jquery-ui-1.10.3/ui/jquery.ui.core.js");
$.getScript("js/jquery-ui-1.10.3/ui/jquery.ui.widget.js");
$.getScript("js/jquery-ui-1.10.3/ui/jquery.ui.mouse.js");
$.getScript("js/jquery-ui-1.10.3/ui/jquery.ui.draggable.js");
$.getScript("js/jquery-ui-1.10.3/ui/jquery.ui.position.js");
$.getScript("js/jquery-ui-1.10.3/ui/jquery.ui.resizable.js");
$.getScript("js/jquery-ui-1.10.3/ui/jquery.ui.button.js");
$.getScript("js/jquery-ui-1.10.3/ui/jquery.ui.dialog.js");
	
function dialog_start(a) {
    
	$(function() {
		$("#dialog").dialog({ position: { my: "left top", at: "left top", of: "div.otdyh-note" } });
        $("#dialog"). click(function(event){
            $("#dialog").dialog("close");
            
        });
        
	});
    
    get_item_data($(a).attr('href'));
    return false;
	}

/**
 * Get HTML data for clicked item
 *
 * @param mixed \id .
 *
 * @return toggle pop-up.
 */

function get_item_data(href_url) {    
    $.ajax({
        url: href_url,
        type: "POST",
        data: 'pic=true',
        success: function(result) {
            var container = $('#dialog');            
            container.empty();
            
            container.append(result);

        },
        error: function() {
            console.log('Something wrong with form preview html method');
        }
    });
    
}
$(function(){
    $("a.mini_feodosiya").click(function(event){
            
            return dialog_start(this);
        });
});
