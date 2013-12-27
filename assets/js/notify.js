/* Example:
 * 
 * $(function(){
 * 	 notifications.init();
 *   notifications.addSuccess({
 *     text: 'Thanh dep trai',
 *     duration: 2000
 *   })
 * });
 */

var notifications = {container:null, animationDuration:500, delayDuration:2E3, init:function() {
    0 == $("#notification-container").size() && (container = $("<div></div>"), container.attr("id", "notification-container"), parentContainer = $("body"), 0 == parentContainer.size() && (parentContainer = $("body")), container.prependTo(parentContainer));
    0 == $("#notifications").size() ? null == notifications.container && (notifications.container = $('<div id="notifications"></div>'), notifications.container.addClass("border-corner-2-all"), notifications.hideAll(), notifications.container.prependTo(container)) : null == notifications.container && (notifications.container = $("#notifications"), notifications.hideAll(0));
    if ("undefined" != typeof notification_all) {
        for (var a in notification_all) {
            for (var b in notification_all[a]) {
                "undefined" != typeof notification_all[a][b].text && notifications.addMessage({text:notification_all[a][b].text, type:a, closable:notification_all[a][b].closable, mustbevisible:notification_all[a][b].mustbevisible, onclose:notification_all[a][b].onclose});
            }
        }
    }
    $("#notifications .success b").dblclick(function() {
        $(this).selectText();
    });
}, addMessage:function(a) {
    text = "undefined" != typeof a.text ? a.text : "n/a";
    type = "undefined" != typeof a.type ? a.type : "error";
    closable = "undefined" != typeof a.closable ? a.closable : !1;
    mustbevisible = "undefined" != typeof a.mustbevisible ? a.mustbevisible : !1;
    onclose = "undefined" != typeof a.onclose ? a.onclose : null;
    duration = "undefined" != typeof a.duration ? a.duration : notifications.delayDuration;
    displayCheckmark = "undefined" != typeof a.displayCheckmark ? a.displayCheckmark : !0;
    displayTitle = "undefined" != typeof a.displayTitle ? a.displayTitle : !0;
    css = a.css;
    a = a.title ? a.title : "Notice";
    var b = $('<div class="notification"></div>');
    b.addClass(type);
    css && b.css(css);
    if (closable = "boolean" == typeof closable ? closable : !1) {
        b.addClass("closable");
        var c = $('<div class="close"></div>');
        c.click(function() {
            notifications.hide(b, 1);
        });
        c.appendTo(b);
    }
    !0 == mustbevisible && b.addClass("mustbevisible");
    c = $("<p></p>");
    c.html(text);
    c.appendTo(b);
    displayTitle && (c = $("<h2></h2>"), c.html(a.charAt(0).toUpperCase() + a.slice(1)), c.prependTo(b));
    displayCheckmark || b.css({backgroundImage:"none", paddingLeft:"5px"});
    b.appendTo(notifications.container).hide().fadeIn();
    closable || notifications.hide(b, duration, onclose);
}, addSuccess:function(a, b, c, d) {
    params = null;
    params = "object" == typeof a ? a : {text:a, closable:b, mustbevisible:c, onclose:null, duration:notifications.animationDuration, css:null, displayCheckmark:!0, displayTitle:!0};
    params.type = "success";
    params.title = a.title ? a.title : "Success";
    notifications.addMessage(params);
}, addError:function(a, b, c, d) {
    params = null;
    params = "object" == typeof a ? a : {text:a, closable:b, mustbevisible:c, onclose:null, duration:notifications.animationDuration, css:null, displayCheckmark:!0, displayTitle:!0};
    params.type = "error";
    params.title = a.title ? a.title : "Error";
    notifications.addMessage(params);
}, addInfo:function(a, b, c, d) {
    params = null;
    params = "object" == typeof a ? a : {text:a, closable:b, mustbevisible:c, onclose:null, duration:notifications.animationDuration, css:null, displayCheckmark:!0, displayTitle:!0};
    params.type = "info";
    params.title = a.title ? a.title : "Information";
    notifications.addMessage(params);
}, show:function() {
    notifications.container;
}, hide:function(a, b, c) {
    a.hasClass("mustbevisible") || a.hasClass("closeable") || ("function" == typeof b && (c = b, b = null), b = "number" == typeof b ? b : notifications.delayDuration, a.delay(b).fadeOut(notifications.animationDuration, function() {
        notifications.empty($(this));
        "function" == typeof c && c();
    }));
}, hideAll:function(a) {
    notifications.container.children(".notification:not(.mustbevisible):not(.closable)").delay(notifications.delayDuration).slideUp(notifications.animationDuration, function() {
        notifications.empty($(this));
    });
}, empty:function(a) {
    a.remove();
}, capitaliseTitle:function(a) {
    return a.charAt(0).toUpperCase() + a.slice(1).toLowerCase();
}};