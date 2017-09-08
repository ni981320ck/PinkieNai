var isIE = navigator.userAgent.search("MSIE") > -1;
var isIE7 = navigator.userAgent.search("MSIE 7") > -1;
var isFirefox = navigator.userAgent.search("Firefox") > -1;
var isOpera = navigator.userAgent.search("Opera") > -1;
var isSafari = navigator.userAgent.search("Safari") > -1; // Google Chrome
if (isIE7) { window.alert('建議使用Google Chrome瀏覽本網站'); }
if (isIE) { window.alert('建議使用Google Chrome瀏覽本網站'); }
if (isFirefox) { window.alert('建議使用Google Chrome瀏覽本網站'); }
if (isOpera) { window.alert('建議使用Google Chrome瀏覽本網站'); }