function e(a){var b=window.getSelection(),c=document.createRange();c.selectNodeContents(a);b.removeAllRanges();b.addRange(c)}
function f(a){a.className=a.className.replace(/(\s|^)kint-minus(\s|$)/," ");return a}function g(a){var b;b||(b="dd");
do a=a.nextElementSibling;while(a.nodeName.toLowerCase()!=b);return a}function h(a,b){var c=g(a),d=a.getElementsByClassName("kint-plus")[0];
typeof b=="undefined"&&(b=c.style.display=="block");b?(c.style.display="none",f(d)):(c.style.display="block",f(d).className+=" kint-minus")}
function i(a,b){a=a.parentNode.parentNode.getElementsByClassName(b)[0];a.style.display=a.style.display=="block"?"none":"block"} window.addEventListener("load",
function(){for(var a=document.getElementsByClassName("kint-parent"),b=a.length,c,d=document.getElementsByClassName("kint");b--;)a[b].addEventListener("mousedown",
function(){h(this)},!1);a=document.getElementsByClassName("kint-plus");for(b=a.length;b--;)a[b].addEventListener("mousedown",function(a){var b=this;setTimeout(
function(){if(parseInt(b.a,10)>0)b.a--;else{var a=b.parentNode,c=g(a),d=c.getElementsByClassName("kint-parent"),j=d.length;for(c=c.style.display=="block";j--;)
h(d[j], c);h(a,c)}},300);a.stopPropagation()},!1),a[b].addEventListener("dblclick",function(a){this.a=2;for(var b=document.getElementsByClassName("kint-parent"),c=b.length;c--;)
h(b[c],!1);a.stopPropagation()},!1);for(b=d.length;b--;){a=d[b].getElementsByTagName("var");for(c=a.length;c--;)a[c].addEventListener("mouseup",
function(){e(this)},!1);a=d[b].getElementsByTagName("dfn");for(c=a.length;c--;)a[c].addEventListener("mouseup",function(){e(this)},!1)}
a=document.getElementsByClassName("kint-args-parent"); for(b=a.length;b--;)a[b].addEventListener("mousedown",function(){i(this,"kint-args")},!1);
a=document.getElementsByClassName("kint-source-parent");for(b=a.length;b--;)a[b].addEventListener("mousedown",function(){i(this,"kint-source")},!1)},!1);