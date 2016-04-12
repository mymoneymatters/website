/*!
 * Custom DataBase Tables v2.0.8 (http://ka2.org)
 * Copyright 2014-2016 ka2@ka2.org
 * Licensed under GPLv2 (http://www.gnu.org/licenses/gpl.txt)
 */
function setCookie(e,t,a){var n="/",i=(new Date).getTime(),r=new Date(i+864e5*a),o=r.toUTCString(),d=new Array(t),s=d.filter(function(e,t,a){return a.indexOf(e)===t}),c="";c+=e+"="+escape(s.join(",")),c+="; path="+n,c+=a?"; expires="+o+"; ":"; ",document.cookie=c}function getCookie(e){var t="",a="",n="";return document.cookie.length>0&&(t=document.cookie.indexOf(e+"="),-1!==t&&(t=t+e.length+1,a=document.cookie.indexOf(";",t),-1===a&&(a=document.cookie.length),n=unescape(document.cookie.substring(t,a)))),n}function removeCookie(e){var t="/";e&&-1===document.cookie.indexOf(e+"=")&&(document.cookie=escape(e)+"=; expires=Thu, 01 Jan 1970 00:00:00 GMT"+(t?"; path="+t:""))}jQuery(document).ready(function(e){e.QueryString=function(e){if(""===e)return{};for(var t={},a=0;a<e.length;++a){var n=e[a].split("=");2===n.length&&(t[n[0]]=decodeURIComponent(n[1].replace(/\+/g," ")))}return t}(window.location.search.substr(1).split("&")),e.isDebug="true"===cdbt_main_vars.is_debug?!0:!1,e.ajaxUrl=cdbt_main_vars.ajax_url,e.nonce="",e.modalNotices="true"===cdbt_main_vars.notices_via_modal?!0:!1,e.emitMessage=cdbt_main_vars.emit_message,e.emitType=cdbt_main_vars.emit_type,e.localErrMsg=decodeURIComponent(cdbt_main_vars.local_err_msg.replace(/\+/g," ")),e.onTimer=!0,e.isDebug&&console.info(e.extend({debugMode:"ON",modalNotices:e.modalNotices,onTimer:e.onTimer},e.QueryString)),e.ajaxResponse={};var t=function(){this.reload_timer=function(){if(e.onTimer){var t=new Date;e(".cdbt-datepicker").datepicker("getDate",t),e('.datepicker-combobox-hour[data-on-timer="true"] input[type="text"]').val(("00"+t.getHours()).slice(-2)),e('.datepicker-combobox-minute[data-on-timer="true"] input[type="text"]').val(("00"+t.getMinutes()).slice(-2)),e('.datepicker-combobox-second[data-on-timer="true"] input[type="text"]').val(("00"+t.getSeconds()).slice(-2))}},this.render_modal=function(){e("div.cdbt-modal").size()>0&&(e("div.cdbt-modal").remove(),e("#append-dynamic-modal").remove()),e("body").append(e.ajaxResponse.responseText)},this.load_into_modal=function(){if(e("div.cdbt-modal").size()>0){e("div.modal-body").html(e.ajaxResponse.responseText).trigger("create"),e.ajaxResponse.responseText="";var t=e("form#"+e("div.modal-body").find("form").attr("id"));t.find(".dropdown-toggle").dropdown(),t.find(".checkbox-custom").checkbox("enable"),t.find(".combobox").combobox("enable"),t.find(".infinitescroll").infinitescroll("enable"),t.find(".loader").loader("reset"),t.find(".pillbox").pillbox(),t.find(".placard").placard("enable"),t.find(".radio").radio("enable"),t.find(".search").search("enable"),t.find(".selectlist").selectlist("enable"),t.find(".spinbox").spinbox(),t.find(".tree").tree("render"),t.find(".wizard").wizard(),t.find(".repeater").repeater("render"),t.find(".datepicker").each(function(){var a=e(this).attr("id").replace("entry-data-","").split("-"),n=a[0],i=t.find('input[name="custom-database-tables['+n+'][prev_date]"]').val();e(this).datepicker({date:new Date(i),allowPastDates:!0,restrictDateSelection:!0,momentConfig:{culture:e(this).data("momentLocale"),format:e(this).data("momentFormat")}}),e.onTimer=!1}),e("div.modal-body").find("input,textarea,select").each(function(){"undefined"!=typeof e(this).attr("required")&&e(this).prop("required",!0)})}},this.submit_data_deletion=function(){var t=[];e("tr.selectable.selected input.row_where_condition").each(function(){t.push(e(this).val())});var a=e.ajaxResponse.responseText,n='<form method="post" action="'+location.href+'" id="data-deletion-'+a+'" style="display: none;">';n+='<input type="hidden" name="action" value="delete_data">',n+='<input type="hidden" name="table" value="'+_.last(e.sessionKey.split("-"))+'">',n+='<input type="hidden" name="_wpnonce" value="'+a+'">',n+='<input type="hidden" name="where_conditions" value="'+t.join(",")+'">',n+="</form>",e("#cdbtDeleteData .modal-body").append(n);var i=e("#cdbtDeleteData .modal-body").find("#data-deletion-"+a);setCookie("once_action",i.attr("id")),i.submit()},this.set_global_var=function(){}},a=new t,n=function(){var t={};arguments.length>0&&(t=arguments[0]),e("div.cdbt-modal").size()>0&&(e("div.cdbt-modal").remove(),e("#append-dynamic-modal").remove()),l(e.ajaxUrl,"post",_.extend(t,{event:"retrieve_modal"}),"html","render_modal"),e(document).on("hide.bs.modal","div.cdbt-modal, #append-dynamic-modal",function(){e(".cdbt-entry-data-form").size()>0&&(""!==e("#cdbt-entry-redirection").val()?location.replace(e("#cdbt-entry-redirection").val()):location.replace(location.href))})};"undefined"!=typeof wizard&&e("#welcome-wizard").wizard();var i=function(t){if(1===e("form#"+t).size()){var a=0,n=0;return e("form#"+t).find(".form-group").each(function(){if(e(this).find(".required").size()>0||e(this).find(".cdbt-form-required").size()>0){a+=1;var t=0,i=0;e(this).find(".checkbox").size()>0?(e(this).find(".checkbox-custom").each(function(){e(this).checkbox("isChecked")&&t++}),0===t&&n++):e(this).find(".selectlist").size()>0?e(this).find(".selectlist").selectlist("selectedItem").selected||n++:e(this).find('input[type="text"]').size()>0?(e(this).find('input[type="text"]').each(function(){""!==e(this).val()&&i++}),i!==e(this).find('input[type="text"]').size()&&n++):e(this).find('input[type="number"]').size()>0?(e(this).find('input[type="number"]').each(function(){""!==e(this).val()&&i++}),i!==e(this).find('input[type="number"]').size()&&n++):e(this).find("textarea").size()>0?(e(this).find("textarea").each(function(){""!==e(this).val()&&i++}),i!==e(this).find("textarea").size()&&n++):e(this).find('input[type="file"]').size()>0}}),0===a||0===n?!0:!1}return!0};if("undefined"!=typeof repeater){_.each(repeater,function(e,t){return repeater[t]()});var r=function(){e(".table-frozen tr").removeAttr("style"),e(".repeater table tr").each(function(){e(this).children("th").removeAttr("style"),e(this).children("td").removeAttr("style"),e(this).find(".repeater-list-heading").removeAttr("style"),e(".repeater-list-heading").each(function(){e(this).css("width",e(this).parent("th").width()+16+"px")})});var t=0;e(".repeater-list-wrapper>table tr").each(function(){var a=e(this).height()+1;e(this).css("height",a+"px"),e(".table-frozen tr").eq(t).css("height",a+"px"),t++})},o=0===e(".repeater").attr("id").indexOf("cdbt-repeater-view-"),d=0===e(".repeater").attr("id").indexOf("cdbt-repeater-edit-");if(o||d){e(".dropdown-toggle").dropdown(),e(document).on("click",".repeater-views",function(){}),e(document).on("click","th.sortable",function(){}),e(document).on("click",".modal-preview",function(){var t=e(this).children("img").attr("src"),a="",i={id:"cdbtModal",insertContent:!0,modalTitle:"",modalBody:""};if("undefined"!=typeof t)0===t.indexOf("data:")&&(a=t),i.modalTitle="image_preview",i.modalSize="large",i.modalBody='<div class="preview-image-body"><img src="'+a+'" class="center-block"></div>';else{var r=e(this).parents(".repeater").attr("id");a=e(this).text(),i.modalTitle="binary_downloader",i.modalExtras={table_name:r.substr(r.lastIndexOf("-")+1),target_column:e(this).attr("data-column-name"),where_clause:e(this).attr("data-where-conditions")}}n(i)});var s=function(t){var a=e("#"+t).repeater("list_getSelectedItems"),n=e("#"+t+" button#repeater-editor-edit"),i=e("#"+t+" button#repeater-editor-delete");1===a.length?(n.attr("class","btn btn-primary").removeAttr("disabled"),i.attr("class","btn btn-default")):a.length>1?(n.attr("class","btn btn-default").attr("disabled","disabled"),i.attr("class","btn btn-primary")):(n.attr("class","btn btn-default").removeAttr("disabled"),i.attr("class","btn btn-default"))};e('.repeater[id^="cdbt-repeater-edit-"]').on("selected.fu.repeaterList deselected.fu.repeaterList",function(t){s(e(t.target).attr("id"))}),e(document).on("click","#repeater-check-switch",function(t){s(e(t.target).attr("id"))}),e(document).on("click",'button[id^="repeater-editor-"]',function(){var t=_.last(e(this).attr("id").split("-")),a=_.last(e(this).parents(".repeater").attr("id").split("-")),i=e(this).parents(".repeater").repeater("list_getSelectedItems"),r={};switch(e.sessionKey="cdbt-edit-"+a,$common_modal_hide="$('input[name=\"custom-database-tables[operate_action]\"]').val('edit'); $('form.navbar-form').trigger('submit');",t){case"refresh":return r={session_key:e.sessionKey,default_action:"edit",target_table:a,event:"reload_page",callback_url:window.location.href},l(e.ajaxUrl,"post",r,"script");case"edit":r={id:"cdbtEditData",insertContent:!0,modalTitle:"",modalBody:""},0===i.length?(r.id="cdbtEditWarning",r.modalTitle="no_selected_item"):i.length>1?(r.id="cdbtEditWarning",r.modalTitle="too_many_selected_item"):(r.modalSize="large",r.modalTitle="edit_data_form",r.modalExtras={table_name:a,action_url:window.location.href,where_clause:e("tr.selectable.selected input.row_where_condition").val()}),e.ajaxResponse.targetTable=a,n(r);break;case"delete":r={id:"cdbtDeleteData",insertContent:!0,modalTitle:"",modalBody:"",modalExtras:{items:i.length}},0===i.length?r.modalTitle="no_selected_item":r.modalTitle="delete_data",n(r);break;default:return!1}}),e(document).on("show.bs.modal","#cdbtEditData",function(){var t={session_key:e.sessionKey,table_name:_.last(e.sessionKey.split("-")),operate_action:"edit_data",event:"render_edit_form",shortcode:"["+e("#edit-data-form").val()+"]"};return l(e.ajaxUrl,"post",t,"html","load_into_modal")}),e(document).on("change","#cdbtEditData div.cdbt-entry-data-form form .checkbox-custom input",function(){if(e(this).parent().hasClass("multiple")){var t=e('input[name="'+e(this).attr("name").replace("[]","")+'[checked]"]'),a=Number(t.val());e(this).prop("checked")?a+=1:a-=1,a=0>a?0:a,t.val(a)}});e(document).on("click","#run_update_data",function(t){t.preventDefault();var a=e("#cdbtEditData div.cdbt-entry-data-form form"),n=a.attr("id");a.children('input[name="_wp_http_referer"]').val(location.href),i(n)?(setCookie("once_action",a.attr("id")),a.submit()):(e(this).popover({animation:!0,content:e.localErrMsg,placement:"top",trigger:"hover"}).popover("show"),e(this).on("hidden.bs.popover",function(){e(this).popover("destroy")}))}),e(document).on("click","#run_delete_data",function(){e("#run_delete_data").off();var t={table:_.last(e.sessionKey.split("-")),event:"retrieve_nonce"};return l(e.ajaxUrl,"post",t,"text","submit_data_deletion")})}r()}if(e(".cdbt-datepicker").size()>0){var c=e("form#"+e(".cdbt-datepicker").parents("form").attr("id"));c.find(".cdbt-datepicker").each(function(){e(this).data().momentLocale&&e(this).data().momentFormat&&e(this).datepicker({momentConfig:{culture:e(this).data().momentLocale,format:e(this).data().momentFormat}}),"undefined"==typeof e(this).data("date")?e(this).datepicker("getDate",new Date):e(this).datepicker("setDate",e(this).data("date"));var t=e(this).parent().next("input[type=hidden]").val();"0000-00-00 00:00:00"===t?e.onTimer=!0:e.onTimer=!1}),setInterval(function(){"use strict";a.reload_timer()},1e3)}e(".cdbt-entry-data-form form").size()>0&&(e(".dropdown-toggle").dropdown(),e(".cdbt-entry-data-form form .checkbox-custom").on("checked.fu.checkbox unchecked.fu.checkbox",function(){if(e(this).hasClass("multiple")){var t=e('input[name="'+e(this).children("input").attr("name").replace("[]","")+'[checked]"]'),a=Number(t.val());e(this).checkbox("isChecked")?a+=1:a-=1,t.val(a)}}),e(document).on("click",'button[id^="btn-entry/"]',function(t){t.preventDefault();var a=e(this).attr("id").split("/"),r=e("#"+a[1]),o=i(a[1]);r.find(".checkbox-custom").each(function(){if(e(this).hasClass("multiple")&&e(this).hasClass("required")){var t=e('input[name="'+e(this).children("input").attr("name").replace("[]","")+'[checked]"]'),a=Number(t.val());0===a&&(o=!1)}}),o?(setCookie("once_action",r.attr("id")),r.submit()):(m={id:"cdbtModal",insertContent:!0,modalTitle:"empty_required_field",modalBody:""},n(m))})),"undefined"!=typeof dynamicTable&&_.each(dynamicTable,function(e,t){return dynamicTable[t]()});var l=function(){if(arguments.length<2)return!1;var t=arguments[0],n=arguments[1],i="undefined"!=typeof arguments[2]?arguments[2]:null,r="undefined"!=typeof arguments[3]?arguments[3]:"text",o="undefined"!=typeof arguments[4]?arguments[4]:null,d="undefined"!=typeof arguments[5]?arguments[5]:null,s="undefined"!=typeof arguments[6]?arguments[6]:null,c={async:!0,url:t,type:n,data:i,dataType:r,cache:!1,beforeSend:function(e,t){}};null!==d&&c.append("processData",d),null!==s&&c.append("contentType",s);var l=e.ajax(c);l.done(function(t,n,i){return e.isDebug&&console.log({done:n,data:t,xhr:i}),"script"===r?t:(e.ajaxResponse={responseText:l.responseText,status:l.status,statusText:l.statusText},""!==o?a[o]():void 0)}),l.fail(function(t,a,n){e.isDebug&&console.log({fail:a,error:n,xhr:t})}),l.always(function(t,a,n){e.isDebug&&console.log({always:a,res1:t,res2:n})})};if(""!==e.emitMessage){var u="notice"===e.emitType?"notices_updated":"notices_error",m={id:"cdbtModal",insertContent:!0,modalTitle:u,modalBody:e.emitMessage,modalHideEvent:"$('#cdbtModal .modal-body').html(''); $('#cdbtModal').remove(); $.emitMessage = cdbt_main_vars.emit_message = ''; $.emitType = 'error';"};n(m),e.emitMessage=cdbt_main_vars.emit_message="",e.emitType="error"}e(document).on("click","a.collapse-col-data",function(){m={id:"cdbtModal",insertContent:!0,modalTitle:"view_item_full",modalBody:e(this).data("raw")},n(m)})});var convert_datetime=function(){if(arguments.length<2)return 1===arguments.length?arguments[0]:!1;if("undefined"==typeof arguments[0]||!arguments[0])return"-";var e=arguments[0].replace(/\-/g,"/"),t=new Date(e),a=arguments[1].join(" ");a=a.replace(/Y/g,t.getFullYear()),a=a.replace(/y/g,(""+t.getFullYear()).slice(-2)),a=a.replace(/m/g,("0"+(t.getMonth()+1)).slice(-2)),a=a.replace(/n/g,t.getMonth()+1);var n={Jan:"January",Feb:"February",Mar:"March",Apr:"April",May:"May",Jun:"June",Jul:"July",Aug:"August",Sep:"September",Oct:"October",Nov:"November",Dec:"December"};a=a.replace(/F/g,_.find(n,t.getMonth())),a=a.replace(/F/g,_.findKey(n,t.getMonth())),a=a.replace(/d/g,("0"+t.getDate()).slice(-2)),a=a.replace(/j/g,t.getDate());var i=["st","nd","rd","th"],r=function(){var e=t.getDate();return e>3?3:e-1};a=a.replace(/S/g,i[r()]);var o={Sun:"Sunday",Mon:"Monday",Tue:"Tuesday",Wed:"Wednesday",Thu:"Thurseday",Fri:"Friday",Sat:"Saturday"};a=a.replace(/l/g,_.find(o,t.getDay())),a=a.replace(/D/g,_.findKey(o,t.getDay()));var d=function(){var e=t.getHours();return e>12?e-12:e},s=function(){var e=t.getHours();return e>12?"pm":"am"};return a=a.replace(/a/g,s()),a=a.replace(/A/g,s().toUpperCase()),a=a.replace(/g/g,d()),a=a.replace(/h/g,("0"+d()).slice(-2)),a=a.replace(/G/g,t.getHours()),a=a.replace(/H/g,("0"+t.getHours()).slice(-2)),a=a.replace(/i/g,("0"+t.getMinutes()).slice(-2)),a=a.replace(/s/g,("0"+t.getSeconds()).slice(-2)),a=a.replace(/T/g,""),a=a.replace(/c/g,arguments[0].replace(" ","T")+"+00:00"),a=a.replace(/r/g,t),-1!==a.indexOf("Na")?arguments[0]:a},isSurrogatePear=function(e,t){return e>=55296&&56319>=e&&t>=56320&&57343>=t},mb_strlen=function(e){for(var t=0,a=0;a<e.length;a++,t++){var n=e.charCodeAt(a),i=e.length>a+1?e.charCodeAt(a+1):0;isSurrogatePear(n,i)&&a++}return t},mb_substr=function(e,t,a){for(var n="",i=0,r=0;i<e.length;i++,r++){var o=e.charCodeAt(i),d=e.length>i+1?e.charCodeAt(i+1):0,s="";isSurrogatePear(o,d)?(i++,s=String.fromCharCode(o,d)):s=String.fromCharCode(o),r>=t&&a>r&&(n+=s)}return n},strip_tags=function(e,t){t=(((t||"")+"").toLowerCase().match(/<[a-z][a-z0-9]*>/g)||[]).join("");var a=/<\/?([a-z][a-z0-9]*)\b[^>]*>/gi,n=/<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi;return e.replace(n,"").replace(a,function(e,a){return t.indexOf("<"+a.toLowerCase()+">")>-1?e:""})},cdbtCustomColumnFilter=function(e,t){t=t||100;var a=$("<div/>").html(strip_tags(_.unescape(e),"<a><b><strong><em><i>")).text();if(mb_strlen(a)>t){var n=mb_substr(a,0,t-1);e=n+'<a href="javascript:;" class="btn btn-default btn-sm collapse-col-data" data-raw="'+e+'">...<span class="caret"></span></a>'}else e=a;return e};
//# sourceMappingURL=cdbt-main.js.map
