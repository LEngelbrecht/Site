﻿(function(f,e,b,g,c,d,h){/*! Jssor */
new(function(){});var k=f.$JssorEasing$={$EaseLinear:function(a){return a},$EaseGoBack:function(a){return 1-b.abs(2-1)},$EaseSwing:function(a){return-b.cos(a*b.PI)/2+.5},$EaseInQuad:function(a){return a*a},$EaseOutQuad:function(a){return-a*(a-2)},$EaseInOutQuad:function(a){return(a*=2)<1?1/2*a*a:-1/2*(--a*(a-2)-1)},$EaseInCubic:function(a){return a*a*a},$EaseOutCubic:function(a){return(a-=1)*a*a+1},$EaseInOutCubic:function(a){return(a*=2)<1?1/2*a*a*a:1/2*((a-=2)*a*a+2)},$EaseInQuart:function(a){return a*a*a*a},$EaseOutQuart:function(a){return-((a-=1)*a*a*a-1)},$EaseInOutQuart:function(a){return(a*=2)<1?1/2*a*a*a*a:-1/2*((a-=2)*a*a*a-2)},$EaseInQuint:function(a){return a*a*a*a*a},$EaseOutQuint:function(a){return(a-=1)*a*a*a*a+1},$EaseInOutQuint:function(a){return(a*=2)<1?1/2*a*a*a*a*a:1/2*((a-=2)*a*a*a*a+2)},$EaseInSine:function(a){return 1-b.cos(a*b.PI/2)},$EaseOutSine:function(a){return b.sin(a*b.PI/2)},$EaseInOutSine:function(a){return-1/2*(b.cos(b.PI*a)-1)},$EaseInExpo:function(a){return a==0?0:b.pow(2,10*(a-1))},$EaseOutExpo:function(a){return a==1?1:-b.pow(2,-10*a)+1},$EaseInOutExpo:function(a){return a==0||a==1?a:(a*=2)<1?1/2*b.pow(2,10*(a-1)):1/2*(-b.pow(2,-10*--a)+2)},$EaseInCirc:function(a){return-(b.sqrt(1-a*a)-1)},$EaseOutCirc:function(a){return b.sqrt(1-(a-=1)*a)},$EaseInOutCirc:function(a){return(a*=2)<1?-1/2*(b.sqrt(1-a*a)-1):1/2*(b.sqrt(1-(a-=2)*a)+1)},$EaseInElastic:function(a){if(!a||a==1)return a;var c=.3,d=.075;return-(b.pow(2,10*(a-=1))*b.sin((a-d)*2*b.PI/c))},$EaseOutElastic:function(a){if(!a||a==1)return a;var c=.3,d=.075;return b.pow(2,-10*a)*b.sin((a-d)*2*b.PI/c)+1},$EaseInOutElastic:function(a){if(!a||a==1)return a;var c=.45,d=.1125;return(a*=2)<1?-.5*b.pow(2,10*(a-=1))*b.sin((a-d)*2*b.PI/c):b.pow(2,-10*(a-=1))*b.sin((a-d)*2*b.PI/c)*.5+1},$EaseInBack:function(a){var b=1.70158;return a*a*((b+1)*a-b)},$EaseOutBack:function(a){var b=1.70158;return(a-=1)*a*((b+1)*a+b)+1},$EaseInOutBack:function(a){var b=1.70158;return(a*=2)<1?1/2*a*a*(((b*=1.525)+1)*a-b):1/2*((a-=2)*a*(((b*=1.525)+1)*a+b)+2)},$EaseInBounce:function(a){return 1-k.$EaseOutBounce(1-a)},$EaseOutBounce:function(a){return a<1/2.75?7.5625*a*a:a<2/2.75?7.5625*(a-=1.5/2.75)*a+.75:a<2.5/2.75?7.5625*(a-=2.25/2.75)*a+.9375:7.5625*(a-=2.625/2.75)*a+.984375},$EaseInOutBounce:function(a){return a<1/2?k.$EaseInBounce(a*2)*.5:k.$EaseOutBounce(a*2-1)*.5+.5},$EaseInWave:function(a){return 1-b.cos(a*b.PI*2)},$EaseOutWave:function(a){return b.sin(a*b.PI*2)},$EaseOutJump:function(a){return 1-((a*=2)<1?(a=1-a)*a*a:(a-=1)*a*a)},$EaseInJump:function(a){return(a*=2)<1?a*a*a:(a=2-a)*a*a}},p={id:37,td:39},m,i,a=new function(){var i=this,lb=1,F=2,F=3,eb=4,ib=5,q=0,l=0,u=0,X=0,D=0,qb=navigator.appName,k=navigator.userAgent,p=e.documentElement,B;function x(){if(!q)if(qb=="Microsoft Internet Explorer"&&!!f.attachEvent&&!!f.ActiveXObject){var d=k.indexOf("MSIE");q=lb;u=n(k.substring(d+5,k.indexOf(";",d)));/*@cc_on X=@_jscript_version@*/;l=e.documentMode||u}else if(qb=="Netscape"&&!!f.addEventListener){var c=k.indexOf("Firefox"),a=k.indexOf("Safari"),h=k.indexOf("Chrome"),b=k.indexOf("AppleWebKit");if(c>=0){q=F;l=n(k.substring(c+8))}else if(a>=0){var i=k.substring(0,a).lastIndexOf("/");q=h>=0?eb:F;l=n(k.substring(i+1,a))}if(b>=0)D=n(k.substring(b+12))}else{var g=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(k);if(g){q=ib;l=n(g[2])}}}function s(){x();return q==lb}function N(){return s()&&(l<6||e.compatMode=="BackCompat")}function db(){x();return q==F}function cb(){x();return q==eb}function hb(){x();return q==ib}function Y(){return db()&&D>534&&D<535}function A(){return s()&&l<9}function v(a){if(!B){j(["transform","WebkitTransform","msTransform","MozTransform","OTransform"],function(b){if(a.style[b]!=h){B=b;return c}});B=B||"transform"}return B}function ob(a){return Object.prototype.toString.call(a)}var I;function j(a,d){if(ob(a)=="[object Array]"){for(var b=0;b<a.length;b++)if(d(a[b],b,a))return c}else for(var e in a)if(d(a[e],e,a))return c}function vb(){if(!I){I={};j(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){I["[object "+a+"]"]=a.toLowerCase()})}return I}function z(a){return a==g?String(a):vb()[ob(a)]||"object"}function y(a,b){return{x:a,y:b}}function pb(b,a){setTimeout(b,a||0)}function G(b,d,c){var a=!b||b=="inherit"?"":b;j(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.lastIndex+1,a.length-(b.lastIndex+1));a=d+e}});a=c+(a.indexOf(" ")!=0?" ":"")+a;return a}function ab(b,a){if(l<9)b.style.filter=a}function sb(b,a,c){if(X<9){var e=b.style.filter,g=new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),f=a?"progid:DXImageTransform.Microsoft.Matrix(M11="+a[0][0]+", M12="+a[0][1]+", M21="+a[1][0]+", M22="+a[1][1]+", SizingMethod='auto expand')":"",d=G(e,[g],f);ab(b,d);i.Gc(b,c.y);i.Hc(b,c.x)}}i.Ob=s;i.De=db;i.Gb=cb;i.Hb=A;i.A=function(){return l};i.Mc=function(){x();return D};i.$Delay=pb;function mb(a){a.constructor===mb.caller&&a.Nc&&a.Nc()}i.Nc=mb;i.N=function(a){if(i.ge(a))a=e.getElementById(a);return a};function t(a){return a||f.event}t=t;i.fe=function(a){a=t(a);return a.target||a.srcElement||e};i.Qc=function(a){a=t(a);var b=e.body;return{x:a.pageX||a.clientX+(p.scrollLeft||b.scrollLeft||0)-(p.clientLeft||b.clientLeft||0)||0,y:a.pageY||a.clientY+(p.scrollTop||b.scrollTop||0)-(p.clientTop||b.clientTop||0)||0}};function E(c,d,a){if(a!=h)c.style[d]=a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&f.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,g);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function U(b,c,a,d){if(a!=h){d&&(a+="px");E(b,c,a)}else return n(E(b,c))}function o(d,a){var b=a&2,c=a?U:E;return function(e,a){return c(e,d,a,b)}}function tb(b){if(s()&&u<9){var a=/opacity=([^)]*)/.exec(b.style.filter||"");return a?n(a[1])/100:1}else return n(b.style.opacity||"1")}function ub(c,a,f){if(s()&&u<9){var h=c.style.filter||"",i=new RegExp(/[\s]*alpha\([^\)]*\)/g),e=b.round(100*a),d="";if(e<100||f)d="alpha(opacity="+e+") ";var g=G(h,[i],d);ab(c,g)}else c.style.opacity=a==1?"":b.round(a*100)/100}function W(e,a){var d=a.$Rotate||0,c=a.$Scale==h?1:a.$Scale;if(A()){var k=i.ce(d/180*b.PI,c,c);sb(e,!d&&c==1?g:k,i.de(k,a.$OriginalWidth,a.$OriginalHeight))}else{var f=v(e);if(f){var j="rotate("+d%360+"deg) scale("+c+")";if(cb()&&D>535)j+=" perspective(2000px)";e.style[f]=j}}}i.Zd=function(b,a){if(Y())pb(i.v(g,W,b,a));else W(b,a)};i.he=function(b,c){var a=v(b);if(a)b.style[a+"Origin"]=c};i.ie=function(a,c){if(s()&&u<9||u<10&&N())a.style.zoom=c==1?"":c;else{var b=v(a);if(b){var f="scale("+c+")",e=a.style[b],g=new RegExp(/[\s]*scale\(.*?\)/g),d=G(e,[g],f);a.style[b]=d}}};i.je=function(a){if(!a.style[v(a)]||a.style[v(a)]=="none")a.style[v(a)]="perspective(2000px)"};i.xb=function(b,a){return function(c){c=t(c);var e=c.type,d=c.relatedTarget||(e=="mouseout"?c.toElement:c.fromElement);(!d||d!==a&&!i.Pd(a,d))&&b(c)}};i.a=function(a,c,d,b){a=i.N(a);if(a.addEventListener){c=="mousewheel"&&a.addEventListener("DOMMouseScroll",d,b);a.addEventListener(c,d,b)}else if(a.attachEvent){a.attachEvent("on"+c,d);b&&a.setCapture&&a.setCapture()}};i.vb=function(a,c,d,b){a=i.N(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",d,b);a.removeEventListener(c,d,b)}else if(a.detachEvent){a.detachEvent("on"+c,d);b&&a.releaseCapture&&a.releaseCapture()}};i.Rd=function(b,a){i.a(A()?e:f,"mouseup",b,a)};i.I=function(a){a=t(a);a.preventDefault&&a.preventDefault();a.cancel=c;a.returnValue=d};i.v=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};i.Sd=function(a,b){if(b==h)return a.textContent||a.innerText;var c=e.createTextNode(b);i.fc(a);a.appendChild(c)};i.fc=function(a){a.innerHTML=""};i.bb=function(c){for(var b=[],a=c.firstChild;a;a=a.nextSibling)a.nodeType==1&&b.push(a);return b};function nb(a,c,e,b){b=b||"u";for(a=a?a.firstChild:g;a;a=a.nextSibling)if(a.nodeType==1){if(Q(a,b)==c)return a;if(!e){var d=nb(a,c,e,b);if(d)return d}}}i.s=nb;function fb(a,c,d){for(a=a?a.firstChild:g;a;a=a.nextSibling)if(a.nodeType==1){if(a.tagName==c)return a;if(!d){var b=fb(a,c,d);if(b)return b}}}i.xe=fb;i.Ee=function(b,a){return b.getElementsByTagName(a)};function T(c){for(var b=1;b<arguments.length;b++){var a=arguments[b];if(a)for(var d in a)c[d]=a[d]}return c}i.r=T;i.ye=function(a){return z(a)=="function"};i.ge=function(a){return z(a)=="string"};i.le=function(a){return!isNaN(n(a))&&isFinite(a)};i.f=j;function O(a){return e.createElement(a)}i.F=function(){return O("DIV",e)};i.te=function(){return O("SPAN",e)};i.Mb=function(){};function R(b,c,a){if(a==h)return b.getAttribute(c);b.setAttribute(c,a)}function Q(a,b){return R(a,b)||R(a,"data-"+b)}i.fb=Q;function r(b,a){if(a==h)return b.className;b.className=a}i.Ec=r;i.Cc=function(a){return a.parentNode};i.B=function(a){i.P(a,"none")};i.q=function(a,b){i.P(a,b?"none":"")};i.gd=function(b,a){b.removeAttribute(a)};i.kd=function(){return s()&&l<10};i.be=function(d,c){if(c)d.style.clip="rect("+b.round(c.$Top)+"px "+b.round(c.$Right)+"px "+b.round(c.$Bottom)+"px "+b.round(c.$Left)+"px)";else{var g=d.style.cssText,f=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],e=G(g,f,"");a.kb(d,e)}};i.z=function(){return+new Date};i.t=function(b,a){b.appendChild(a)};i.jb=function(c,b,a){c.insertBefore(b,a)};i.T=function(b,a){b.removeChild(a)};i.ad=function(b,a){j(a,function(a){i.T(b,a)})};i.Zc=function(a){i.ad(a,i.bb(a))};function n(a){return parseFloat(a)}i.Pd=function(b,a){var c=e.body;while(a&&b!=a&&c!=a)try{a=a.parentNode}catch(f){return d}return b==a};function S(b,a){return b.cloneNode(!a)}i.W=S;function M(a){if(a){var b=a.$FlyDirection;if(b&1)a.x=a.$ScaleHorizontal||1;if(b&2)a.x=-a.$ScaleHorizontal||-1;if(b&4)a.y=a.$ScaleVertical||1;if(b&8)a.y=-a.$ScaleVertical||-1;if(a.$Rotate==c)a.$Rotate=1;M(a.$Brother)}}i.ob=function(a){if(a){for(var b=0;b<a.length;b++)M(a[b]);for(var c in a)M(a[c])}};i.Z=function(e,f){var a=new Image;function b(c){i.vb(a,"load",b);i.vb(a,"abort",d);i.vb(a,"error",d);f&&f(a,c)}function d(){b(c)}if(hb()&&l<11.6||!e)b(!e);else{i.a(a,"load",b);i.a(a,"abort",d);i.a(a,"error",d);a.src=e}};i.Kd=function(d,a,e){var c=d.length+1;function b(b){c--;if(a&&b&&b.src==a.src)a=b;!c&&e&&e(a)}j(d,function(a){i.Z(a.src,b)});b()};i.oc=function(c,j,i,h){if(h)c=S(c);for(var g=a.Ee(c,j),e=g.length-1;e>-1;e--){var b=g[e],d=S(i);r(d,r(b));a.kb(d,b.style.cssText);var f=a.Cc(b);a.jb(f,d,b);a.T(f,b)}return c};var C;function xb(b){var g=this,m,k,l,e;function f(){var a=m;if(e)a+="ds";else if(k)a+="dn";else if(l)a+="av";r(b,a)}function n(a){if(e)i.I(a);else{C.push(g);k=c;f()}}g.Fd=function(){k=d;f()};g.pc=function(a){if(a!=h){l=a;f()}else return l};g.$Enable=function(a){if(a!=h){e=!a;f()}else return!e};b=i.N(b);if(!C){i.Rd(function(){var a=C;C=[];j(a,function(a){a.Fd()})});C=[]}m=r(b);a.a(b,"mousedown",n)}i.lb=function(a){return new xb(a)};i.V=E;i.eb=o("overflow");i.l=o("top",2);i.k=o("left",2);i.g=o("width",2);i.i=o("height",2);i.Hc=o("marginLeft",2);i.Gc=o("marginTop",2);i.u=o("position");i.P=o("display");i.D=o("zIndex",1);i.Cb=function(b,a,c){if(a!=h)ub(b,a,c);else return tb(b)};i.kb=function(a,b){if(b!=h)a.style.cssText=b;else return a.style.cssText};var P={$Opacity:i.Cb,$Top:i.l,$Left:i.k,yb:i.g,Bb:i.i,db:i.u,Zf:i.P,$ZIndex:i.D},w;function H(){if(!w)w=T({Yf:i.Gc,Xf:i.Hc,$Clip:i.be,gb:i.Zd},P);return w}i.Hd=H;i.R=function(c,b){var a=H();j(b,function(d,b){a[b]&&a[b](c,d)})};m=new function(){var a=this;function b(d,g){for(var j=d[0].length,i=d.length,h=g[0].length,f=[],c=0;c<i;c++)for(var k=f[c]=[],b=0;b<h;b++){for(var e=0,a=0;a<j;a++)e+=d[c][a]*g[a][b];k[b]=e}return f}a.ub=function(d,c){var a=b(d,[[c.x],[c.y]]);return y(a[0][0],a[1][0])}};i.ce=function(d,a,c){var e=b.cos(d),f=b.sin(d);return[[e*a,-f*c],[f*a,e*c]]};i.de=function(d,c,a){var e=m.ub(d,y(-c/2,-a/2)),f=m.ub(d,y(c/2,-a/2)),g=m.ub(d,y(c/2,a/2)),h=m.ub(d,y(-c/2,a/2));return y(b.min(e.x,f.x,g.x,h.x)+c/2,b.min(e.y,f.y,g.y,h.y)+a/2)};i.gb=function(j,k,t,q,u,w,h){var c=k;if(j){c={};for(var e in k){var x=w[e]||1,r=u[e]||[0,1],d=(t-r[0])/r[1];d=b.min(b.max(d,0),1);d=d*x;var o=b.floor(d);if(d!=o)d-=o;var v=q[e]||q.rb,p=v(d),f,s=j[e],n=k[e];if(a.le(n))f=s+(n-s)*p;else{f=a.r({H:{}},j[e]);a.f(n.H,function(c,b){var a=c*p;f.H[b]=a;f[b]+=a})}c[e]=f}if(j.$Zoom)c.gb={$Rotate:c.$Rotate||0,$Scale:c.$Zoom,$OriginalWidth:h.$OriginalWidth,$OriginalHeight:h.$OriginalHeight}}if(k.$Clip&&h.$Move){var i=c.$Clip.H,m=(i.$Top||0)+(i.$Bottom||0),l=(i.$Left||0)+(i.$Right||0);c.$Left=(c.$Left||0)+l;c.$Top=(c.$Top||0)+m;c.$Clip.$Left-=l;c.$Clip.$Right-=l;c.$Clip.$Top-=m;c.$Clip.$Bottom-=m}if(c.$Clip&&a.kd()&&!c.$Clip.$Top&&!c.$Clip.$Left&&c.$Clip.$Right==h.$OriginalWidth&&c.$Clip.$Bottom==h.$OriginalHeight)c.$Clip=g;return c}},l=function(){var b=this,d=[];function i(a,b){d.push({Xb:a,Yb:b})}function h(b,c){a.f(d,function(a,e){a.Xb==b&&a.Yb===c&&d.splice(e,1)})}b.$On=b.addEventListener=i;b.$Off=b.removeEventListener=h;b.d=function(b){var c=[].slice.call(arguments,1);a.f(d,function(a){try{a.Xb==b&&a.Yb.apply(f,c)}catch(d){}})}};i=function(n,z,i,Q,O,K){n=n||0;var e=this,r,o,p,y,A=0,H,I,G,C,l=0,u=0,D,m=n,j,h,q,v=[],B;function L(b){j+=b;h+=b;m+=b;l+=b;u+=b;a.f(v,function(a){a,a.$Shift(b)})}function P(a,b){var c=a-j+n*b;L(c);return h}function x(g,n){var d=g;if(q&&(d>=h||d<=j))d=((d-j)%q+q)%q+j;if(!D||y||n||l!=d){var f=b.min(d,h);f=b.max(f,j);if(!D||y||n||f!=u){if(K){var k=(f-m)/(z||1);if(i.$Reverse)k=1-k;var o=a.gb(O,K,k,H,G,I,i);a.f(o,function(b,a){B[a]&&B[a](Q,b)})}e.Ub(u-m,f-m)}u=f;a.f(v,function(b,c){var a=g<l?v[v.length-c-1]:b;a.E(g,n)});var r=l,p=g;l=d;D=c;e.qb(r,p)}}function E(a,c){c&&a.rc(h,1);h=b.max(h,a.ab());v.push(a)}var s=f.requestAnimationFrame||f.webkitRequestAnimationFrame||f.mozRequestAnimationFrame||f.msRequestAnimationFrame;if(a.De()&&a.A()<7)s=g;s=s||function(b){a.$Delay(b,i.$Interval)};function J(){if(r){var d=a.z(),e=b.min(d-A,i.wc),c=l+e*p;A=d;if(c*p>=o*p)c=o;x(c);if(!y&&c*p>=o*p)M(C);else s(J)}}function w(d,f,g){if(!r){r=c;y=g;C=f;d=b.max(d,j);d=b.min(d,h);o=d;p=o<l?-1:1;e.Dc();A=a.z();s(J)}}function M(a){if(r){y=r=C=d;e.Bc();a&&a()}}e.$Play=function(a,b,c){w(a?l+a:h,b,c)};e.cc=w;e.G=M;e.Ed=function(a){w(a)};e.C=function(){return l};e.ec=function(){return o};e.U=function(){return u};e.E=x;e.dc=function(){x(j,c)};e.$Move=function(a){x(l+a)};e.$IsPlaying=function(){return r};e.ed=function(a){q=a};e.rc=P;e.$Shift=L;e.Sb=function(a){E(a,0)};e.Qb=function(a){E(a,1)};e.ab=function(){return h};e.qb=e.Dc=e.Bc=e.Ub=a.Mb;e.Tb=a.z();i=a.r({$Interval:16,wc:50},i);q=i.hc;B=a.r({},a.Hd(),i.gc);j=m=n;h=n+z;I=i.$Round||{};G=i.$During||{};H=a.r({rb:a.ye(i.$Easing)&&i.$Easing||k.$EaseSwing},i.$Easing)};var q;new function(){;function m(q,kc){var j=this;function Gc(){var a=this;i.call(a,-1e8,2e8);a.Ce=function(){var c=a.U(),d=b.floor(c),f=u(d),e=c-b.floor(c);return{O:f,Be:d,db:e}};a.qb=function(d,a){var e=b.floor(a);if(e!=a&&a>d)e++;Xb(e,c);j.d(m.$EVT_POSITION_CHANGE,u(a),u(d),a,d)}}function Fc(){var b=this;i.call(b,0,0,{hc:t});a.f(D,function(a){N&1&&a.ed(t);b.Qb(a);a.$Shift(lb/ec)})}function Ec(){var a=this,b=Wb.$Elmt;i.call(a,-1,2,{$Easing:k.$EaseLinear,gc:{db:cc},hc:t},b,{db:1},{db:-1});a.tb=b}function tc(n,l){var a=this,e,f,h,k,b;i.call(a,-1e8,2e8,{wc:100});a.Dc=function(){T=c;Y=g;j.d(m.$EVT_SWIPE_START,u(y.C()),y.C())};a.Bc=function(){T=d;k=d;var a=y.Ce();j.d(m.$EVT_SWIPE_END,u(y.C()),y.C());!a.db&&Ic(a.Be,s)};a.qb=function(g,d){var a;if(k)a=b;else{a=f;if(h){var c=d/h;a=o.$SlideEasing(c)*(f-e)+e}}y.E(a)};a.sb=function(b,d,c,g){e=b;f=d;h=c;y.E(b);a.E(0);a.cc(c,g)};a.Vd=function(d){k=c;b=d;a.$Play(d,g,c)};a.Od=function(a){b=a};y=new Gc;y.Sb(n);y.Sb(l)}function uc(){var c=this,b=bc();a.D(b,0);a.V(b,"pointerEvents","none");c.$Elmt=b;c.mb=function(){a.B(b);a.fc(b)}}function Dc(p,n){var e=this,r,x,H,y,f,A=[],R,q,T,G,P,F,h,w,k;i.call(e,-v,v+1,{});function E(a){x&&x.Ib();r&&r.Ib();S(p,a);F=c;r=new I.$Class(p,I,1);x=new I.$Class(p,I);x.dc();r.dc()}function Z(){r.Tb<I.Tb&&E()}function K(n,q,l){if(!G){G=c;if(f&&l){var g=l.width,b=l.height,k=g,i=b;if(g&&b&&o.$FillMode){if(o.$FillMode&3&&(!(o.$FillMode&4)||g>M||b>L)){var h=d,p=M/L*b/g;if(o.$FillMode&1)h=p>1;else if(o.$FillMode&2)h=p<1;k=h?g*L/b:M;i=h?L:b*M/g}a.g(f,k);a.i(f,i);a.l(f,(L-i)/2);a.k(f,(M-k)/2)}a.u(f,"absolute");j.d(m.$EVT_LOAD_END,hc)}}a.B(q);n&&n(e)}function X(b,c,d,f){if(f==Y&&s==n&&U)if(!Hc){var a=u(b);B.qe(a,n,c,e,d);c.ee();fb.rc(a,1);fb.E(a);z.sb(b,b,0)}}function ab(b){if(b==Y&&s==n){if(!h){var a=g;if(B)if(B.O==n)a=B.oe();else B.mb();Z();h=new Bc(n,a,e.Nd(),e.Td());h.Pc(k)}!h.$IsPlaying()&&h.Fb()}}function Q(d,c,j){if(d==n){if(d!=c)D[c]&&D[c].ne();else!j&&h&&h.me();k&&k.$Enable();var l=Y=a.z();e.Z(a.v(g,ab,l))}else{var i=b.abs(n-d),f=v+o.$LazyLoading;(!P||i<=f||t-i<=f)&&e.Z()}}function bb(){if(s==n&&h){h.G();k&&k.$Quit();k&&k.$Disable();h.Oc()}}function cb(){s==n&&h&&h.G()}function O(b){if(W)a.I(b);else j.d(m.$EVT_CLICK,n,b)}function N(){k=w.pInstance;h&&h.Pc(k)}e.Z=function(d,b){b=b||y;if(A.length&&!G){a.q(b);if(!T){T=c;j.d(m.$EVT_LOAD_START);a.f(A,function(b){if(!b.src){b.src=a.fb(b,"src2");a.P(b,b["display-origin"])}})}a.Kd(A,f,a.v(g,K,d,b))}else K(d,b)};e.Yc=function(){if(B){var b=B.pe(t);if(b){var e=Y=a.z(),c=n+ac,d=D[u(c)];return d.Z(a.v(g,X,c,d,b,e),y)}}gb(s+o.$AutoPlaySteps*ac)};e.Lb=function(){Q(n,n,c)};e.ne=function(){k&&k.$Quit();k&&k.$Disable();e.Kc();h&&h.Ld();h=g;E()};e.ee=function(){a.B(p)};e.Kc=function(){a.q(p)};e.Id=function(){k&&k.$Enable()};function S(b,e,d){if(b["jssor-slider"])return;d=d||0;if(!F){if(b.tagName=="IMG"){A.push(b);if(!b.src){P=c;b["display-origin"]=a.P(b);a.B(b)}}a.Hb()&&a.D(b,(a.D(b)||0)+1);if(o.$HWA&&a.Mc())(!J||a.Mc()<534||!jb&&!a.Gb())&&a.je(b)}var g=a.bb(b);a.f(g,function(g){var i=a.fb(g,"u");if(i=="player"&&!w){w=g;if(w.pInstance)N();else a.a(w,"dataavailable",N)}if(i=="caption"){if(!a.Ob()&&!e){var h=a.W(g);a.jb(b,h,g);a.T(b,g);g=h;e=c}}else if(!F&&!d&&!f&&a.fb(g,"u")=="image"){f=g;if(f){if(f.tagName=="A"){R=f;a.R(R,V);q=a.W(f,c);a.a(q,"click",O);a.R(q,V);a.P(q,"block");a.Cb(q,0);a.V(q,"backgroundColor","#000");f=a.xe(f,"IMG")}f.border=0;a.R(f,V)}}S(g,e,d+1)})}e.Ub=function(c,b){var a=v-b;cc(H,a)};e.Nd=function(){return r};e.Td=function(){return x};e.O=n;l.call(e);var C=a.s(p,"thumb",c);if(C){e.nd=a.W(C);a.gd(C,"id");a.B(C)}a.q(p);y=a.W(ib);a.D(y,1e3);a.a(p,"click",O);E(c);e.zc=f;e.Jc=q;e.tb=H=p;a.t(H,y);j.$On(203,Q);j.$On(28,cb);j.$On(24,bb)}function Bc(h,q,v,u){var b=this,l=0,x=0,n,g,e,f,k,r,w,t,p=D[h];i.call(b,0,0);function y(){a.Zc(Q);ic&&k&&p.Jc&&a.t(Q,p.Jc);a.q(Q,!k&&p.zc)}function z(){if(r){r=d;j.d(m.$EVT_ROLLBACK_END,h,e,l,g,e,f);b.E(g)}b.Fb()}function A(a){t=a;b.G();b.Fb()}b.Fb=function(){var a=b.U();if(!C&&!T&&!t&&s==h){if(!a){if(n&&!k){k=c;b.Oc(c);j.d(m.$EVT_SLIDESHOW_START,h,l,x,n,f)}y()}var d,o=m.$EVT_STATE_CHANGE;if(a!=f)if(a==e)d=f;else if(a==g)d=e;else if(!a)d=g;else if(a>e){r=c;d=e;o=m.$EVT_ROLLBACK_START}else d=b.ec();j.d(o,h,a,l,g,e,f);var i=U&&(!K||G);if(a==f)(e!=f&&!(K&12)||i)&&p.Yc();else(i||a!=e)&&b.cc(d,z)}};b.me=function(){e==f&&e==b.U()&&b.E(g)};b.Ld=function(){B&&B.O==h&&B.mb();var a=b.U();a<f&&j.d(m.$EVT_STATE_CHANGE,h,-a-1,l,g,e,f)};b.Oc=function(b){q&&a.eb(nb,b&&q.Fc.$Outside?"":"hidden")};b.Ub=function(b,a){if(k&&a>=n){k=d;y();p.Kc();B.mb();j.d(m.$EVT_SLIDESHOW_END,h,l,x,n,f)}j.d(m.$EVT_PROGRESS_CHANGE,h,a,l,g,e,f)};b.Pc=function(a){if(a&&!w){w=a;a.$On($JssorPlayer$.fd,A)}};q&&b.Qb(q);n=b.ab();b.ab();b.Qb(v);g=v.ab();e=g+o.$AutoPlayInterval;u.$Shift(e);b.Sb(u);f=b.ab()}function cc(e,g){var f=x>0?x:mb,c=Eb*g*(f&1),d=Fb*g*(f>>1&1);if(a.Gb()&&a.A()<38){c=c.toFixed(3);d=d.toFixed(3)}else{c=b.round(c);d=b.round(d)}if(a.Ob()&&a.A()>=10&&a.A()<11)e.style.msTransform="translate("+c+"px, "+d+"px)";else if(a.Gb()&&a.A()>=30&&a.A()<34){e.style.WebkitTransition="transform 0s";e.style.WebkitTransform="translate3d("+c+"px, "+d+"px, 0px) perspective(2000px)"}else{a.k(e,c);a.l(e,d)}}function zc(c){var b=a.fe(c).tagName;!O&&b!="INPUT"&&b!="TEXTAREA"&&b!="SELECT"&&xc()&&yc(c)}function Sb(){ub=T;Ob=z.ec();E=y.C()}function lc(){Sb();if(C||!G&&K&12){z.G();j.d(m.bd)}}function jc(e){e&&Sb();if(!C&&(G||!(K&12))&&!z.$IsPlaying()){var c=y.C(),a=b.ceil(E);if(e&&b.abs(F)>=o.$MinDragOffsetToSlide){a=b.ceil(c);a+=kb}if(!(N&1))a=b.min(t-v,b.max(a,0));var d=b.abs(a-c);d=1-b.pow(1-d,5);if(!W&&ub)z.Ed(Ob);else if(c==a){xb.Id();xb.Lb()}else z.sb(c,a,d*Yb)}}function yc(b){C=c;Db=d;Y=g;a.a(e,sb,fc);a.z();W=0;lc();if(!ub)x=0;if(J){var h=b.touches[0];yb=h.clientX;zb=h.clientY}else{var f=a.Qc(b);yb=f.x;zb=f.y;a.I(b)}F=0;hb=0;kb=0;j.d(m.$EVT_DRAG_START,u(E),E,b)}function fc(e){if(C&&(!a.Hb()||e.button)){var f;if(J){var l=e.touches;if(l&&l.length>0)f={x:l[0].clientX,y:l[0].clientY}}else f=a.Qc(e);if(f){var j=f.x-yb,k=f.y-zb;if(b.floor(E)!=E)x=x||mb&O;if((j||k)&&!x){if(O==3)if(b.abs(k)>b.abs(j))x=2;else x=1;else x=O;if(J&&x==1&&b.abs(k)-b.abs(j)>3)Db=c}if(x){var d=k,i=Fb;if(x==1){d=j;i=Eb}if(!(N&1)){if(d>0){var g=i*s,h=d-g;if(h>0)d=g+b.sqrt(h)*5}if(d<0){var g=i*(t-v-s),h=-d-g;if(h>0)d=-g-b.sqrt(h)*5}}if(F-hb<-2)kb=0;else if(F-hb>2)kb=-1;hb=F;F=d;wb=E-F/i/(eb||1);if(F&&x&&!Db){a.I(e);if(!T)z.Vd(wb);else z.Od(wb)}else a.Hb()&&a.I(e)}}}else Ib(e)}function Ib(f){vc();if(C){C=d;a.z();a.vb(e,sb,fc);W=F;W&&a.I(f);z.G();var b=y.C();j.d(m.$EVT_DRAG_END,u(b),b,u(E),E,f);jc(c)}}function sc(a){D[s];s=u(a);xb=D[s];Xb(a);return s}function Ic(a,b){x=0;sc(a);j.d(m.$EVT_PARK,u(a),b)}function Xb(b,c){Bb=b;a.f(S,function(a){a.Rb(u(b),b,c)})}function xc(){var b=m.Lc||0,a=R;if(J)a&1&&(a&=1);m.Lc|=a;return O=a&~b}function vc(){if(O){m.Lc&=~R;O=0}}function bc(){var b=a.F();a.R(b,V);a.u(b,"absolute");return b}function u(a){return(a%t+t)%t}function pc(a,c){if(c)if(!N){a=b.min(b.max(a+Bb,0),t-v);c=d}else if(N&2){a=u(a+Bb);c=d}gb(a,o.$SlideDuration,c)}function Cb(){a.f(S,function(a){a.Vb(a.nb.$ChanceToShow<=G)})}function nc(){if(!G){G=1;Cb();if(!C){K&12&&jc();K&3&&D[s].Lb()}}}function mc(){if(G){G=0;Cb();C||!(K&12)||lc()}}function oc(){V={yb:M,Bb:L,$Top:0,$Left:0};a.f(Z,function(b){a.R(b,V);a.u(b,"absolute");a.eb(b,"hidden");a.B(b)});a.R(ib,V)}function qb(b,a){gb(b,a,c)}function gb(g,f,k){if(Ub&&(!C||o.$NaviQuitDrag)){T=c;C=d;z.G();if(f==h)f=Yb;var e=Jb.U(),a=g;if(k){a=e+g;if(g>0)a=b.ceil(a);else a=b.floor(a)}if(!(N&1)){a=u(a);a=b.max(0,b.min(a,t-v))}var j=(a-e)%t;a=e+j;var i=e==a?0:f*b.abs(j);i=b.min(i,f*v*1.5);z.sb(e,a,i||1)}}j.$PlayTo=gb;j.$GoTo=function(a){gb(a,1)};j.$Next=function(){qb(1)};j.$Prev=function(){qb(-1)};j.$Pause=function(){U=d};j.$Play=function(){if(!U){U=c;D[s]&&D[s].Lb()}};j.$SetSlideshowTransitions=function(b){a.ob(b);o.$SlideshowOptions.$Transitions=b};j.$SetCaptionTransitions=function(b){a.ob(b);I.Cd=b;I.Tb=a.z()};j.$SlidesCount=function(){return Z.length};j.$CurrentIndex=function(){return s};j.$IsAutoPlaying=function(){return U};j.$IsDragging=function(){return C};j.$IsSliding=function(){return T};j.$IsMouseOver=function(){return!G};j.$LastDragSucceded=function(){return W};function db(){return a.g(w||q)}function ob(){return a.i(w||q)}j.$OriginalWidth=j.$GetOriginalWidth=db;j.$OriginalHeight=j.$GetOriginalHeight=ob;function Lb(c,f){if(c==h)return a.g(q);if(!w){var b=a.F(e);a.kb(b,a.kb(q));a.Ec(b,a.Ec(q));a.u(b,"relative");a.l(b,0);a.k(b,0);a.eb(b,"visible");w=a.F(e);a.u(w,"absolute");a.l(w,0);a.k(w,0);a.g(w,a.g(q));a.i(w,a.i(q));a.he(w,"0 0");a.t(w,b);var i=a.bb(q);a.t(q,w);a.V(q,"backgroundImage","");var g={navigator:bb&&bb.$Scale==d,arrowleft:P&&P.$Scale==d,arrowright:P&&P.$Scale==d,thumbnavigator:H&&H.$Scale==d,thumbwrapper:H&&H.$Scale==d};a.f(i,function(c){a.t(g[a.fb(c,"u")]?q:b,c)});a.q(b);a.q(w)}eb=c/(f?a.i:a.g)(w);a.ie(w,eb);a.g(q,f?eb*db():c);a.i(q,f?c:eb*ob());a.f(S,function(a){a.ac()})}j.$ScaleHeight=j.$GetScaleHeight=function(b){if(b==h)return a.i(q);Lb(b,c)};j.$ScaleWidth=j.$SetScaleWidth=j.$GetScaleWidth=Lb;j.nc=function(a){var d=b.ceil(u(lb/ec)),c=u(a-s+d);if(c>v){if(a-s>t/2)a-=t;else if(a-s<=-t/2)a+=t}else a=s+c-d;return a};l.call(j);j.$Elmt=q=a.N(q);var o=a.r({$FillMode:0,$LazyLoading:1,$StartIndex:0,$AutoPlay:d,$Loop:1,$HWA:c,$NaviQuitDrag:c,$AutoPlaySteps:1,$AutoPlayInterval:3e3,$PauseOnHover:1,$SlideDuration:500,$SlideEasing:k.$EaseOutQuad,$MinDragOffsetToSlide:20,$SlideSpacing:0,$DisplayPieces:1,$ParkingPosition:0,$UISearchMode:1,$PlayOrientation:1,$DragOrientation:1},kc),mb=o.$PlayOrientation&3,ac=(o.$PlayOrientation&4)/-4||1,cb=o.$SlideshowOptions,I=a.r({$Class:r},o.hf);a.ob(I.Cd);var bb=o.$BulletNavigatorOptions,P=o.$ArrowNavigatorOptions,H=o.$ThumbnailNavigatorOptions,X=!o.$UISearchMode,w,A=a.s(q,"slides",X),ib=a.s(q,"loading",X)||a.F(e),Nb=a.s(q,"navigator",X),gc=a.s(q,"arrowleft",X),dc=a.s(q,"arrowright",X),Mb=a.s(q,"thumbnavigator",X),rc=a.g(A),qc=a.i(A),V,Z=[],Ac=a.bb(A);a.f(Ac,function(b){b.tagName=="DIV"&&!a.fb(b,"u")&&Z.push(b)});var s=-1,Bb,xb,t=Z.length,M=o.$SlideWidth||rc,L=o.$SlideHeight||qc,Zb=o.$SlideSpacing,Eb=M+Zb,Fb=L+Zb,ec=mb&1?Eb:Fb,v=b.min(o.$DisplayPieces,t),nb,x,O,Db,J,S=[],Tb,Vb,Rb,ic,Hc,U,K=o.$PauseOnHover,Yb=o.$SlideDuration,vb,jb,lb,Ub=v<t,N=Ub?o.$Loop:0,R,W,G=1,T,C,Y,yb=0,zb=0,F,hb,kb,Jb,y,fb,z,Wb=new uc,eb;U=o.$AutoPlay;j.nb=kc;oc();q["jssor-slider"]=c;a.D(A,a.D(A)||0);a.u(A,"absolute");nb=a.W(A);a.jb(a.Cc(A),nb,A);if(cb){ic=cb.$ShowLink;vb=cb.$Class;a.ob(cb.$Transitions);jb=v==1&&t>1&&vb&&(!a.Ob()||a.A()>=8)}lb=jb||v>=t||!(N&1)?0:o.$ParkingPosition;R=(v>1||lb?mb:-1)&o.$DragOrientation;var Ab=A,D=[],B,Q,Hb="mousedown",sb="mousemove",Kb="mouseup",rb,E,ub,Ob,wb,ab;if(f.navigator.pointerEnabled||(ab=f.navigator.msPointerEnabled)){Hb=ab?"MSPointerDown":"pointerdown";sb=ab?"MSPointerMove":"pointermove";Kb=ab?"MSPointerUp":"pointerup";rb=ab?"MSPointerCancel":"pointercancel";if(R){var Gb="none";if(R==1)Gb="pan-y";else if(R==2)Gb="pan-x";a.V(Ab,ab?"msTouchAction":"touchAction",Gb)}}else if("ontouchstart"in f||"createTouch"in e){J=c;Hb="touchstart";sb="touchmove";Kb="touchend";rb="touchcancel"}fb=new Ec;if(jb)B=new vb(Wb,M,L,cb,J);a.t(nb,fb.tb);a.eb(A,"hidden");Q=bc();a.V(Q,"backgroundColor","#000");a.Cb(Q,0);a.jb(Ab,Q,Ab.firstChild);for(var tb=0;tb<Z.length;tb++){var Cc=Z[tb],hc=new Dc(Cc,tb);D.push(hc)}a.B(ib);Jb=new Fc;z=new tc(Jb,fb);if(R){a.a(A,Hb,zc);a.a(e,Kb,Ib);rb&&a.a(e,rb,Ib)}K&=J?10:5;if(Nb&&bb){Tb=new bb.$Class(Nb,bb,db(),ob());S.push(Tb)}if(P&&gc&&dc){Vb=new P.$Class(gc,dc,P,db(),ob());S.push(Vb)}if(Mb&&H){H.$StartIndex=o.$StartIndex;Rb=new H.$Class(Mb,H);S.push(Rb)}a.f(S,function(a){a.Kb(t,D,ib);a.$On(n.pb,pc)});Lb(db());a.a(q,"mouseout",a.xb(nc,q));a.a(q,"mouseover",a.xb(mc,q));Cb();o.$ArrowKeyNavigation&&a.a(e,"keydown",function(a){if(a.keyCode==p.id)qb(-1);else a.keyCode==p.td&&qb(1)});var pb=o.$StartIndex;if(!(N&1))pb=b.max(0,b.min(pb,t-v));z.sb(pb,pb,0)}m.$EVT_CLICK=21;m.$EVT_DRAG_START=22;m.$EVT_DRAG_END=23;m.$EVT_SWIPE_START=24;m.$EVT_SWIPE_END=25;m.$EVT_LOAD_START=26;m.$EVT_LOAD_END=27;m.bd=28;m.$EVT_POSITION_CHANGE=202;m.$EVT_PARK=203;m.$EVT_SLIDESHOW_START=206;m.$EVT_SLIDESHOW_END=207;m.$EVT_PROGRESS_CHANGE=208;m.$EVT_STATE_CHANGE=209;m.$EVT_ROLLBACK_START=210;m.$EVT_ROLLBACK_END=211;f.$JssorSlider$=q=m};var n={pb:1};f.$JssorBulletNavigator$=function(f,F,E,C){var h=this;l.call(h);f=a.N(f);var t,u,s,r,m=0,e,o,k,y,z,j,i,q,p,D=[],A=[];function x(a){a!=-1&&A[a].pc(a==m)}function v(a){h.d(n.pb,a*o)}h.$Elmt=f;h.Rb=function(a){if(a!=r){var d=m,c=b.floor(a/o);m=c;r=a;x(d);x(c)}};h.Vb=function(b){a.q(f,b)};var B;h.ac=function(){if(!B||e.$Scale==d){e.$AutoCenter&1&&a.k(f,(E-u)/2);e.$AutoCenter&2&&a.l(f,(C-s)/2);B=c}};var w;h.Kb=function(C){if(!w){t=b.ceil(C/o);m=0;var n=q+y,r=p+z,l=b.ceil(t/k)-1;u=q+n*(!j?l:k-1);s=p+r*(j?l:k-1);a.g(f,u);a.i(f,s);for(var d=0;d<t;d++){var B=a.te();a.Sd(B,d+1);var h=a.oc(i,"NumberTemplate",B,c);a.u(h,"absolute");var x=d%(l+1);a.k(h,!j?n*x:d%k*n);a.l(h,j?r*x:b.floor(d/(l+1))*r);a.t(f,h);D[d]=h;e.$ActionMode&1&&a.a(h,"click",a.v(g,v,d));e.$ActionMode&2&&a.a(h,"mouseover",a.xb(a.v(g,v,d),h));A[d]=a.lb(h)}w=c}};h.nb=e=a.r({$SpacingX:0,$SpacingY:0,$Orientation:1,$ActionMode:1},F);i=a.s(f,"prototype");q=a.g(i);p=a.i(i);a.T(f,i);o=e.$Steps||1;k=e.$Lanes||1;y=e.$SpacingX;z=e.$SpacingY;j=e.$Orientation-1};f.$JssorArrowNavigator$=function(e,f,t,o,m){var b=this;l.call(b);var h,j,r=a.g(e),p=a.i(e);function k(a){b.d(n.pb,a,c)}b.Rb=function(b,a,c){if(c);};b.Vb=function(b){a.q(e,b);a.q(f,b)};var s;b.ac=function(){if(!s||h.$Scale==d){if(h.$AutoCenter&1){a.k(e,(o-r)/2);a.k(f,(o-r)/2)}if(h.$AutoCenter&2){a.l(e,(m-p)/2);a.l(f,(m-p)/2)}s=c}};var q;b.Kb=function(b){if(!q){a.a(e,"click",a.v(g,k,-j));a.a(f,"click",a.v(g,k,j));a.lb(e);a.lb(f);q=c}};b.nb=h=a.r({$Steps:1},t);j=h.$Steps};f.$JssorThumbnailNavigator$=function(i,A){var h=this,x,m,e,u=[],y,w,f,o,p,t,s,k,r,g,j;l.call(h);i=a.N(i);function z(o,d){var g=this,b,l,k;function p(){l.pc(m==d)}function i(){if(!r.$LastDragSucceded()){var a=f-d%f,b=r.nc((d+a)/f-1),c=b*f+f-a;h.d(n.pb,c)}}g.O=d;g.tc=p;k=o.nd||o.zc||a.F();g.tb=b=a.oc(j,"ThumbnailTemplate",k,c);l=a.lb(b);e.$ActionMode&1&&a.a(b,"click",i);e.$ActionMode&2&&a.a(b,"mouseover",a.xb(i,b))}h.Rb=function(c,d,e){var a=m;m=c;a!=-1&&u[a].tc();u[c].tc();!e&&r.$PlayTo(r.nc(b.floor(d/f)))};h.Vb=function(b){a.q(i,b)};h.ac=a.Mb;var v;h.Kb=function(F,D){if(!v){x=F;b.ceil(x/f);m=-1;k=b.min(k,D.length);var h=e.$Orientation&1,n=t+(t+o)*(f-1)*(1-h),l=s+(s+p)*(f-1)*h,C=n+(n+o)*(k-1)*h,A=l+(l+p)*(k-1)*(1-h);a.u(g,"absolute");a.eb(g,"hidden");e.$AutoCenter&1&&a.k(g,(y-C)/2);e.$AutoCenter&2&&a.l(g,(w-A)/2);a.g(g,C);a.i(g,A);var j=[];a.f(D,function(l,e){var i=new z(l,e),d=i.tb,c=b.floor(e/f),k=e%f;a.k(d,(t+o)*k*(1-h));a.l(d,(s+p)*k*h);if(!j[c]){j[c]=a.F();a.t(g,j[c])}a.t(j[c],d);u.push(i)});var E=a.r({$AutoPlay:d,$NaviQuitDrag:d,$SlideWidth:n,$SlideHeight:l,$SlideSpacing:o*h+p*(1-h),$MinDragOffsetToSlide:12,$SlideDuration:200,$PauseOnHover:1,$PlayOrientation:e.$Orientation,$DragOrientation:e.$DisableDrag?0:e.$Orientation},e);r=new q(i,E);v=c}};h.nb=e=a.r({$SpacingX:3,$SpacingY:3,$DisplayPieces:1,$Orientation:1,$AutoCenter:3,$ActionMode:1},A);y=a.g(i);w=a.i(i);g=a.s(i,"slides",c);j=a.s(g,"prototype");t=a.g(j);s=a.i(j);a.T(g,j);f=e.$Lanes||1;o=e.$SpacingX;p=e.$SpacingY;k=e.$DisplayPieces};function r(){i.call(this,0,0);this.Ib=a.Mb}})(window,document,Math,null,true,false)