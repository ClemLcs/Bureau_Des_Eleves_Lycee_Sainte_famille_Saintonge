(function(){var cookie_notice_texts={'fr':{'main':'En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de cookies pour améliorer votre expérience.','accept':'OK'}};jQuery(document).ready(function(){if(getCookie('cookie_notice')!='true'){if(typeof(cookie_notice)!='undefined'){cookie_notice_texts=cookie_notice_texts['fr'];setCookie('cookie_notice',true,365);var _banner={'html':jQuery('<div id="cookie_law_banner"></div>'),'text':jQuery('<span id="cookie_law_banner_text" style="padding: 0 10px;"></span>'),'accept':jQuery('<span style="text-decoration:none; padding:.4em .8em" id="cookie_law_banner_accept"></span>')};if(typeof(cookie_notice_texts)!='undefined'){_banner.text.text(cookie_notice_texts.main);_banner.accept.text(cookie_notice_texts.accept);}var _position={'top':0};if(cookie_notice.cookie_notice_position=='bottom'){_position={'bottom':0};}_banner.accept.css({'background':cookie_notice.cookie_notice_accept_bgcolor,'color':cookie_notice.cookie_notice_accept_color});if(cookie_notice.cookie_notice_accept_shape=='rounded'){_banner.accept.css({'-o-border-radius':cookie_notice.cookie_notice_accept_radius+'px','-moz-border-radius':cookie_notice.cookie_notice_accept_radius+'px','-webkit-border-radius':cookie_notice.cookie_notice_accept_radius+'px','border-radius':cookie_notice.cookie_notice_accept_radius+'px'});}_banner.accept.bind('click',function(){if(cookie_notice.cookie_notice_appearance=='slide'){var _banner_height=_banner.html.outerHeight(true);if(cookie_notice.cookie_notice_position=='bottom'){_banner.html.animate({'bottom':-_banner_height},function(){jQuery(this).remove();});}else{_banner.html.animate({'top':-_banner_height},function(){jQuery(this).remove();});}}else{_banner.html.fadeOut(function(){jQuery(this).remove();});}return false;});_banner.html.css({'background':cookie_notice.cookie_notice_bgcolor,'color':cookie_notice.cookie_notice_textcolor,'font-size':cookie_notice.cookie_notice_textsize+'px','font-family':cookie_notice.cookie_notice_fontfamily,'padding':'1em 0','position':'fixed','left':0,'width':'100%','z-index':99999999,'text-align':'center'});_banner.html.css(_position);_banner.html.hover(function(){jQuery(this).animate({'opacity':1});},function(){jQuery(this).animate({'opacity':cookie_notice.cookie_notice_opacity});});_banner.accept.css({'margin':'0 0 0 1em','cursor':'pointer'});_banner.text.appendTo(_banner.html);_banner.accept.appendTo(_banner.html);_banner.html.appendTo(jQuery('body'));if(jQuery('html').hasClass('mobile')){jQuery('#cookie_law_banner_text').css({'display':'block','padding':'0 10px 10px 10px'});}_banner.html.css('opacity',0);if(cookie_notice.cookie_notice_appearance=='slide'){var _banner_height=_banner.html.outerHeight(true);if(cookie_notice.cookie_notice_position=='bottom'){_banner.html.css('bottom',-_banner_height);_banner.html.animate({'bottom':0,'opacity':cookie_notice.cookie_notice_opacity});}else{_banner.html.css('top',-_banner_height);_banner.html.animate({'top':0,'opacity':cookie_notice.cookie_notice_opacity});}}else{_banner.html.animate({'opacity':cookie_notice.cookie_notice_opacity});}}}function setCookie(cname,cvalue,exdays){var d=new Date();d.setTime(d.getTime()+(exdays*24*60*60*1000));var expires="expires="+d.toUTCString();document.cookie=cname+"="+cvalue+"; "+expires;}function getCookie(cname){var name=cname+"=";var ca=document.cookie.split(';');for(var i=0;i<ca.length;i++){var c=ca[i];while(c.charAt(0)==' ')c=c.substring(1);if(c.indexOf(name)!=-1)return c.substring(name.length,c.length);}return"";}});})();