var url,link;function image_switcher(t,e,i,a,l,o,r,c,s,h,n,_,v,$,g){jQuery(".img_switch_wrap h2").css({"font-size":s,color:h}),jQuery(".img_switch_wrap p").css({"font-size":n,color:_}),g?jQuery(".img_switch_contents").css({background:v}):jQuery(".img_switch_contents").css({background:"transparent"}),"Top"==$?jQuery(".img_switch_contents").css({top:"0px",bottom:"inherit",left:"0",right:"0"}):"Bottom"==$?jQuery(".img_switch_contents").css({bottom:"0px",top:"inherit",left:"0",right:"0"}):"Left"==$?jQuery(".img_switch_contents").css({bottom:"0px",top:"0",left:"0",right:"inherit"}):jQuery(".img_switch_contents").css({bottom:"0px",top:"0",left:"inherit",right:"0"}),jQuery(document).on("mouseover",t,function(e){jQuery(t).attr("src",i),jQuery(".img_switch_wrap h2").html(o),jQuery(".img_switch_wrap p").html(c)}),jQuery(document).on("mouseout",t,function(i){jQuery(t).attr("src",e),jQuery(".img_switch_wrap h2").html(l),jQuery(".img_switch_wrap p").html(r)})}jQuery(document).ready(function($){var t,e,i;$(".clr").wpColorPicker(),$.wpMediaUploader({target:".switcher_img",uploaderTitle:"Select or upload image",uploaderButton:"Set image",multiple:!1,buttonText:"Upload image",buttonClass:".switcher_img_btn_",previewSize:"150px",modal:!1,buttonStyle:{color:"#fff",background:"teal",fontSize:"16px",padding:"10px 15px"}}),$(document).on("click",".switcher_switch input",function(t){"1"==$(this).val()?($(this).val("0"),$(".switch_adv").show()):($(this).val("1"),$(".switch_adv").hide())}),$(".switch_code").click(function(t){!function(){var t=$("#url").val(),e=$("#alt_url").val(),i=$("#link").val(),a=$("#force_height").val(),l=$("#heading").val(),o=$("#alt_heading").val(),r=$("#text").val(),c=$("#alt_text").val(),s=$("#heading_color").val(),h=$("#text_color").val(),n=$("#heading_size").val(),_=$("#text_size").val(),v=$("#position").val(),g=($("#event").val(),$("#background").val()),u="";""!=g&&(u+='background="'+g+'" ');""!=v&&(u+='position="'+v+'" ');""!=_&&(u+='text_size="'+_+'" ');""!=n&&(u+='heading_size="'+n+'" ');""!=h&&(u+='text_color="'+h+'" ');""!=s&&(u+='heading_color="'+s+'" ');""!=c&&(u+='alt_text="'+c+'" ');""!=r&&(u+='text="'+r+'" ');""!=o&&(u+='alt_heading="'+o+'" ');""!=l&&(u+='heading="'+l+'" ');""!=a&&(u+='force_height="'+a+'" ');""!=i&&(u+='link="'+i+'" ');""!=t&&(u+='url="'+t+'" ');""!=e&&(u+='alt_url="'+e+'" ');$("#shortcodes_switcher_field").val("[image_switcher "+u+"]"),document.querySelector("#shortcodes_switcher_field").select(),document.execCommand("copy"),$(".switch_code").html("copied")}()}),$("#shortcoder_form").change(function(t){$(".switch_code").html("Copy ShortCode")}),$("#shortcoder_form").keyup(function(t){$(".switch_code").html("Copy ShortCode")}),$("#shortcoder_form").click(function(t){$(".switch_code").html("Copy ShortCode")}),$(".img_switch_wrap img").attr({src:switcher.url}),$(".img_switch_wrap a").click(function(t){t.preventDefault()}),setInterval(function(){$("#link").val(),$("#force_height").val(),$("#heading").val(),$("#alt_heading").val();var a=$("#text").val(),l=($("#alt_text").val(),$("#heading_color").val()),o=$("#text_color").val(),r=$("#heading_size").val(),c=$("#text_size").val();$("#position").val(),$("#event").val(),$("#background").val();if(t=""!=$("#url").val()?$("#url").val():switcher.url,e=""!=$("#alt_url").val()?$("#alt_url").val():switcher.alt_url,i=""!=$("#event").val()?$("#event").val():"click",""!=$("#force_height").val()?$(".img_switch_wrap img").css("height",$("#force_height").val()):$(".img_switch_wrap img").css("height","inherit"),""!=$("#heading").val())var s=$("#heading").val();else s="";if(""!=$("#alt_heading").val())var h=$("#alt_heading").val();else h="";if(""!=$("#heading_size").val())r=$("#heading_size").val();else r="";if(""!=$("#heading_color").val())l=$("#heading_color").val();else l="teal";if(""!=$("#text").val())a=$("#text").val();else a="";if(""!=$("#alt_text").val())var n=$("#alt_text").val();else n="";if(""!=$("#text_size").val())c=$("#text_size").val();else c="";if(""!=$("#heading_color").val())o=$("#text_color").val();else o="blue";if(""!=$("#position").val())var _=$("#position").val();else _="Bottom";if(""!=$("#background").val())var v=$("#background").val();else v="rgba(0,0,0,.5)";if("0"==$(".switcher_switch input").val())var g=!0;else g=!1;image_switcher(".img_switch_wrap img",t,e,i,s,h,a,n,r,l,c,o,v,_,g)},500),$(".switcher_switch").click(function(t){"0"==$(".switcher_switch input").val()&&$("#shortcoder_form").trigger("reset")})});