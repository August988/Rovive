(function(){/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
'use strict';var n;function aa(a){var b=0;return function(){return b<a.length?{done:!1,value:a[b++]}:{done:!0}}}
var da="function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,c){if(a==Array.prototype||a==Object.prototype)return a;a[b]=c.value;return a};
function ea(a){a=["object"==typeof globalThis&&globalThis,a,"object"==typeof window&&window,"object"==typeof self&&self,"object"==typeof global&&global];for(var b=0;b<a.length;++b){var c=a[b];if(c&&c.Math==Math)return c}throw Error("Cannot find global object");}
var fa=ea(this);function r(a,b){if(b)a:{var c=fa;a=a.split(".");for(var d=0;d<a.length-1;d++){var e=a[d];if(!(e in c))break a;c=c[e]}a=a[a.length-1];d=c[a];b=b(d);b!=d&&null!=b&&da(c,a,{configurable:!0,writable:!0,value:b})}}
r("Symbol",function(a){function b(f){if(this instanceof b)throw new TypeError("Symbol is not a constructor");return new c(d+(f||"")+"_"+e++,f)}
function c(f,g){this.i=f;da(this,"description",{configurable:!0,writable:!0,value:g})}
if(a)return a;c.prototype.toString=function(){return this.i};
var d="jscomp_symbol_"+(1E9*Math.random()>>>0)+"_",e=0;return b});
r("Symbol.iterator",function(a){if(a)return a;a=Symbol("Symbol.iterator");for(var b="Array Int8Array Uint8Array Uint8ClampedArray Int16Array Uint16Array Int32Array Uint32Array Float32Array Float64Array".split(" "),c=0;c<b.length;c++){var d=fa[b[c]];"function"===typeof d&&"function"!=typeof d.prototype[a]&&da(d.prototype,a,{configurable:!0,writable:!0,value:function(){return ha(aa(this))}})}return a});
function ha(a){a={next:a};a[Symbol.iterator]=function(){return this};
return a}
function u(a){var b="undefined"!=typeof Symbol&&Symbol.iterator&&a[Symbol.iterator];return b?b.call(a):{next:aa(a)}}
function ia(a){if(!(a instanceof Array)){a=u(a);for(var b,c=[];!(b=a.next()).done;)c.push(b.value);a=c}return a}
function ja(a,b){return Object.prototype.hasOwnProperty.call(a,b)}
var ka="function"==typeof Object.assign?Object.assign:function(a,b){for(var c=1;c<arguments.length;c++){var d=arguments[c];if(d)for(var e in d)ja(d,e)&&(a[e]=d[e])}return a};
r("Object.assign",function(a){return a||ka});
var la="function"==typeof Object.create?Object.create:function(a){function b(){}
b.prototype=a;return new b},ma;
if("function"==typeof Object.setPrototypeOf)ma=Object.setPrototypeOf;else{var oa;a:{var pa={a:!0},qa={};try{qa.__proto__=pa;oa=qa.a;break a}catch(a){}oa=!1}ma=oa?function(a,b){a.__proto__=b;if(a.__proto__!==b)throw new TypeError(a+" is not extensible");return a}:null}var sa=ma;
function v(a,b){a.prototype=la(b.prototype);a.prototype.constructor=a;if(sa)sa(a,b);else for(var c in b)if("prototype"!=c)if(Object.defineProperties){var d=Object.getOwnPropertyDescriptor(b,c);d&&Object.defineProperty(a,c,d)}else a[c]=b[c];a.O=b.prototype}
function ta(){this.u=!1;this.o=null;this.j=void 0;this.i=1;this.m=this.v=0;this.J=this.l=null}
function ua(a){if(a.u)throw new TypeError("Generator is already running");a.u=!0}
ta.prototype.C=function(a){this.j=a};
function wa(a,b){a.l={Ta:b,Ya:!0};a.i=a.v||a.m}
ta.prototype.return=function(a){this.l={return:a};this.i=this.m};
function w(a,b,c){a.i=c;return{value:b}}
ta.prototype.s=function(a){this.i=a};
function xa(a,b,c){a.v=b;void 0!=c&&(a.m=c)}
function ya(a,b){a.i=b;a.v=0}
function za(a){a.v=0;var b=a.l.Ta;a.l=null;return b}
function Aa(a){a.J=[a.l];a.v=0;a.m=0}
function Ba(a){var b=a.J.splice(0)[0];(b=a.l=a.l||b)?b.Ya?a.i=a.v||a.m:void 0!=b.s&&a.m<b.s?(a.i=b.s,a.l=null):a.i=a.m:a.i=0}
function Ca(a){this.i=new ta;this.j=a}
function Da(a,b){ua(a.i);var c=a.i.o;if(c)return Ea(a,"return"in c?c["return"]:function(d){return{value:d,done:!0}},b,a.i.return);
a.i.return(b);return Fa(a)}
function Ea(a,b,c,d){try{var e=b.call(a.i.o,c);if(!(e instanceof Object))throw new TypeError("Iterator result "+e+" is not an object");if(!e.done)return a.i.u=!1,e;var f=e.value}catch(g){return a.i.o=null,wa(a.i,g),Fa(a)}a.i.o=null;d.call(a.i,f);return Fa(a)}
function Fa(a){for(;a.i.i;)try{var b=a.j(a.i);if(b)return a.i.u=!1,{value:b.value,done:!1}}catch(c){a.i.j=void 0,wa(a.i,c)}a.i.u=!1;if(a.i.l){b=a.i.l;a.i.l=null;if(b.Ya)throw b.Ta;return{value:b.return,done:!0}}return{value:void 0,done:!0}}
function Ga(a){this.next=function(b){ua(a.i);a.i.o?b=Ea(a,a.i.o.next,b,a.i.C):(a.i.C(b),b=Fa(a));return b};
this.throw=function(b){ua(a.i);a.i.o?b=Ea(a,a.i.o["throw"],b,a.i.C):(wa(a.i,b),b=Fa(a));return b};
this.return=function(b){return Da(a,b)};
this[Symbol.iterator]=function(){return this}}
function Ha(a){function b(d){return a.next(d)}
function c(d){return a.throw(d)}
return new Promise(function(d,e){function f(g){g.done?d(g.value):Promise.resolve(g.value).then(b,c).then(f,e)}
f(a.next())})}
function x(a){return Ha(new Ga(new Ca(a)))}
function Ia(){for(var a=Number(this),b=[],c=a;c<arguments.length;c++)b[c-a]=arguments[c];return b}
r("Reflect.setPrototypeOf",function(a){return a?a:sa?function(b,c){try{return sa(b,c),!0}catch(d){return!1}}:null});
r("Promise",function(a){function b(g){this.i=0;this.l=void 0;this.j=[];this.u=!1;var h=this.o();try{g(h.resolve,h.reject)}catch(k){h.reject(k)}}
function c(){this.i=null}
function d(g){return g instanceof b?g:new b(function(h){h(g)})}
if(a)return a;c.prototype.j=function(g){if(null==this.i){this.i=[];var h=this;this.l(function(){h.m()})}this.i.push(g)};
var e=fa.setTimeout;c.prototype.l=function(g){e(g,0)};
c.prototype.m=function(){for(;this.i&&this.i.length;){var g=this.i;this.i=[];for(var h=0;h<g.length;++h){var k=g[h];g[h]=null;try{k()}catch(l){this.o(l)}}}this.i=null};
c.prototype.o=function(g){this.l(function(){throw g;})};
b.prototype.o=function(){function g(l){return function(m){k||(k=!0,l.call(h,m))}}
var h=this,k=!1;return{resolve:g(this.Aa),reject:g(this.m)}};
b.prototype.Aa=function(g){if(g===this)this.m(new TypeError("A Promise cannot resolve to itself"));else if(g instanceof b)this.kb(g);else{a:switch(typeof g){case "object":var h=null!=g;break a;case "function":h=!0;break a;default:h=!1}h?this.pa(g):this.v(g)}};
b.prototype.pa=function(g){var h=void 0;try{h=g.then}catch(k){this.m(k);return}"function"==typeof h?this.lb(h,g):this.v(g)};
b.prototype.m=function(g){this.C(2,g)};
b.prototype.v=function(g){this.C(1,g)};
b.prototype.C=function(g,h){if(0!=this.i)throw Error("Cannot settle("+g+", "+h+"): Promise already settled in state"+this.i);this.i=g;this.l=h;2===this.i&&this.jb();this.J()};
b.prototype.jb=function(){var g=this;e(function(){if(g.P()){var h=fa.console;"undefined"!==typeof h&&h.error(g.l)}},1)};
b.prototype.P=function(){if(this.u)return!1;var g=fa.CustomEvent,h=fa.Event,k=fa.dispatchEvent;if("undefined"===typeof k)return!0;"function"===typeof g?g=new g("unhandledrejection",{cancelable:!0}):"function"===typeof h?g=new h("unhandledrejection",{cancelable:!0}):(g=fa.document.createEvent("CustomEvent"),g.initCustomEvent("unhandledrejection",!1,!0,g));g.promise=this;g.reason=this.l;return k(g)};
b.prototype.J=function(){if(null!=this.j){for(var g=0;g<this.j.length;++g)f.j(this.j[g]);this.j=null}};
var f=new c;b.prototype.kb=function(g){var h=this.o();g.sa(h.resolve,h.reject)};
b.prototype.lb=function(g,h){var k=this.o();try{g.call(h,k.resolve,k.reject)}catch(l){k.reject(l)}};
b.prototype.then=function(g,h){function k(t,p){return"function"==typeof t?function(y){try{l(t(y))}catch(z){m(z)}}:p}
var l,m,q=new b(function(t,p){l=t;m=p});
this.sa(k(g,l),k(h,m));return q};
b.prototype.catch=function(g){return this.then(void 0,g)};
b.prototype.sa=function(g,h){function k(){switch(l.i){case 1:g(l.l);break;case 2:h(l.l);break;default:throw Error("Unexpected state: "+l.i);}}
var l=this;null==this.j?f.j(k):this.j.push(k);this.u=!0};
b.resolve=d;b.reject=function(g){return new b(function(h,k){k(g)})};
b.race=function(g){return new b(function(h,k){for(var l=u(g),m=l.next();!m.done;m=l.next())d(m.value).sa(h,k)})};
b.all=function(g){var h=u(g),k=h.next();return k.done?d([]):new b(function(l,m){function q(y){return function(z){t[y]=z;p--;0==p&&l(t)}}
var t=[],p=0;do t.push(void 0),p++,d(k.value).sa(q(t.length-1),m),k=h.next();while(!k.done)})};
return b});
r("WeakMap",function(a){function b(k){this.i=(h+=Math.random()+1).toString();if(k){k=u(k);for(var l;!(l=k.next()).done;)l=l.value,this.set(l[0],l[1])}}
function c(){}
function d(k){var l=typeof k;return"object"===l&&null!==k||"function"===l}
function e(k){if(!ja(k,g)){var l=new c;da(k,g,{value:l})}}
function f(k){var l=Object[k];l&&(Object[k]=function(m){if(m instanceof c)return m;Object.isExtensible(m)&&e(m);return l(m)})}
if(function(){if(!a||!Object.seal)return!1;try{var k=Object.seal({}),l=Object.seal({}),m=new a([[k,2],[l,3]]);if(2!=m.get(k)||3!=m.get(l))return!1;m.delete(k);m.set(l,4);return!m.has(k)&&4==m.get(l)}catch(q){return!1}}())return a;
var g="$jscomp_hidden_"+Math.random();f("freeze");f("preventExtensions");f("seal");var h=0;b.prototype.set=function(k,l){if(!d(k))throw Error("Invalid WeakMap key");e(k);if(!ja(k,g))throw Error("WeakMap key fail: "+k);k[g][this.i]=l;return this};
b.prototype.get=function(k){return d(k)&&ja(k,g)?k[g][this.i]:void 0};
b.prototype.has=function(k){return d(k)&&ja(k,g)&&ja(k[g],this.i)};
b.prototype.delete=function(k){return d(k)&&ja(k,g)&&ja(k[g],this.i)?delete k[g][this.i]:!1};
return b});
r("Map",function(a){function b(){var h={};return h.previous=h.next=h.head=h}
function c(h,k){var l=h.i;return ha(function(){if(l){for(;l.head!=h.i;)l=l.previous;for(;l.next!=l.head;)return l=l.next,{done:!1,value:k(l)};l=null}return{done:!0,value:void 0}})}
function d(h,k){var l=k&&typeof k;"object"==l||"function"==l?f.has(k)?l=f.get(k):(l=""+ ++g,f.set(k,l)):l="p_"+k;var m=h.data_[l];if(m&&ja(h.data_,l))for(h=0;h<m.length;h++){var q=m[h];if(k!==k&&q.key!==q.key||k===q.key)return{id:l,list:m,index:h,entry:q}}return{id:l,list:m,index:-1,entry:void 0}}
function e(h){this.data_={};this.i=b();this.size=0;if(h){h=u(h);for(var k;!(k=h.next()).done;)k=k.value,this.set(k[0],k[1])}}
if(function(){if(!a||"function"!=typeof a||!a.prototype.entries||"function"!=typeof Object.seal)return!1;try{var h=Object.seal({x:4}),k=new a(u([[h,"s"]]));if("s"!=k.get(h)||1!=k.size||k.get({x:4})||k.set({x:4},"t")!=k||2!=k.size)return!1;var l=k.entries(),m=l.next();if(m.done||m.value[0]!=h||"s"!=m.value[1])return!1;m=l.next();return m.done||4!=m.value[0].x||"t"!=m.value[1]||!l.next().done?!1:!0}catch(q){return!1}}())return a;
var f=new WeakMap;e.prototype.set=function(h,k){h=0===h?0:h;var l=d(this,h);l.list||(l.list=this.data_[l.id]=[]);l.entry?l.entry.value=k:(l.entry={next:this.i,previous:this.i.previous,head:this.i,key:h,value:k},l.list.push(l.entry),this.i.previous.next=l.entry,this.i.previous=l.entry,this.size++);return this};
e.prototype.delete=function(h){h=d(this,h);return h.entry&&h.list?(h.list.splice(h.index,1),h.list.length||delete this.data_[h.id],h.entry.previous.next=h.entry.next,h.entry.next.previous=h.entry.previous,h.entry.head=null,this.size--,!0):!1};
e.prototype.clear=function(){this.data_={};this.i=this.i.previous=b();this.size=0};
e.prototype.has=function(h){return!!d(this,h).entry};
e.prototype.get=function(h){return(h=d(this,h).entry)&&h.value};
e.prototype.entries=function(){return c(this,function(h){return[h.key,h.value]})};
e.prototype.keys=function(){return c(this,function(h){return h.key})};
e.prototype.values=function(){return c(this,function(h){return h.value})};
e.prototype.forEach=function(h,k){for(var l=this.entries(),m;!(m=l.next()).done;)m=m.value,h.call(k,m[1],m[0],this)};
e.prototype[Symbol.iterator]=e.prototype.entries;var g=0;return e});
function La(a,b,c){if(null==a)throw new TypeError("The 'this' value for String.prototype."+c+" must not be null or undefined");if(b instanceof RegExp)throw new TypeError("First argument to String.prototype."+c+" must not be a regular expression");return a+""}
r("String.prototype.endsWith",function(a){return a?a:function(b,c){var d=La(this,b,"endsWith");b+="";void 0===c&&(c=d.length);c=Math.max(0,Math.min(c|0,d.length));for(var e=b.length;0<e&&0<c;)if(d[--c]!=b[--e])return!1;return 0>=e}});
r("Array.prototype.find",function(a){return a?a:function(b,c){a:{var d=this;d instanceof String&&(d=String(d));for(var e=d.length,f=0;f<e;f++){var g=d[f];if(b.call(c,g,f,d)){b=g;break a}}b=void 0}return b}});
r("String.prototype.startsWith",function(a){return a?a:function(b,c){var d=La(this,b,"startsWith");b+="";var e=d.length,f=b.length;c=Math.max(0,Math.min(c|0,d.length));for(var g=0;g<f&&c<e;)if(d[c++]!=b[g++])return!1;return g>=f}});
r("Number.isFinite",function(a){return a?a:function(b){return"number"!==typeof b?!1:!isNaN(b)&&Infinity!==b&&-Infinity!==b}});
r("Number.isInteger",function(a){return a?a:function(b){return Number.isFinite(b)?b===Math.floor(b):!1}});
r("Number.MAX_SAFE_INTEGER",function(){return 9007199254740991});
function Ma(a,b){a instanceof String&&(a+="");var c=0,d=!1,e={next:function(){if(!d&&c<a.length){var f=c++;return{value:b(f,a[f]),done:!1}}d=!0;return{done:!0,value:void 0}}};
e[Symbol.iterator]=function(){return e};
return e}
r("Array.prototype.entries",function(a){return a?a:function(){return Ma(this,function(b,c){return[b,c]})}});
r("Number.isNaN",function(a){return a?a:function(b){return"number"===typeof b&&isNaN(b)}});
r("Object.setPrototypeOf",function(a){return a||sa});
r("Set",function(a){function b(c){this.i=new Map;if(c){c=u(c);for(var d;!(d=c.next()).done;)this.add(d.value)}this.size=this.i.size}
if(function(){if(!a||"function"!=typeof a||!a.prototype.entries||"function"!=typeof Object.seal)return!1;try{var c=Object.seal({x:4}),d=new a(u([c]));if(!d.has(c)||1!=d.size||d.add(c)!=d||1!=d.size||d.add({x:4})!=d||2!=d.size)return!1;var e=d.entries(),f=e.next();if(f.done||f.value[0]!=c||f.value[1]!=c)return!1;f=e.next();return f.done||f.value[0]==c||4!=f.value[0].x||f.value[1]!=f.value[0]?!1:e.next().done}catch(g){return!1}}())return a;
b.prototype.add=function(c){c=0===c?0:c;this.i.set(c,c);this.size=this.i.size;return this};
b.prototype.delete=function(c){c=this.i.delete(c);this.size=this.i.size;return c};
b.prototype.clear=function(){this.i.clear();this.size=0};
b.prototype.has=function(c){return this.i.has(c)};
b.prototype.entries=function(){return this.i.entries()};
b.prototype.values=function(){return this.i.values()};
b.prototype.keys=b.prototype.values;b.prototype[Symbol.iterator]=b.prototype.values;b.prototype.forEach=function(c,d){var e=this;this.i.forEach(function(f){return c.call(d,f,f,e)})};
return b});
r("Object.entries",function(a){return a?a:function(b){var c=[],d;for(d in b)ja(b,d)&&c.push([d,b[d]]);return c}});
r("Array.prototype.keys",function(a){return a?a:function(){return Ma(this,function(b){return b})}});
r("Array.prototype.values",function(a){return a?a:function(){return Ma(this,function(b,c){return c})}});
r("Array.from",function(a){return a?a:function(b,c,d){c=null!=c?c:function(h){return h};
var e=[],f="undefined"!=typeof Symbol&&Symbol.iterator&&b[Symbol.iterator];if("function"==typeof f){b=f.call(b);for(var g=0;!(f=b.next()).done;)e.push(c.call(d,f.value,g++))}else for(f=b.length,g=0;g<f;g++)e.push(c.call(d,b[g],g));return e}});
r("Object.is",function(a){return a?a:function(b,c){return b===c?0!==b||1/b===1/c:b!==b&&c!==c}});
r("Array.prototype.includes",function(a){return a?a:function(b,c){var d=this;d instanceof String&&(d=String(d));var e=d.length;c=c||0;for(0>c&&(c=Math.max(c+e,0));c<e;c++){var f=d[c];if(f===b||Object.is(f,b))return!0}return!1}});
r("String.prototype.includes",function(a){return a?a:function(b,c){return-1!==La(this,b,"includes").indexOf(b,c||0)}});
var A=this||self;function B(a,b){a=a.split(".");b=b||A;for(var c=0;c<a.length;c++)if(b=b[a[c]],null==b)return null;return b}
function Na(a){var b=typeof a;return"object"!=b?b:a?Array.isArray(a)?"array":b:"null"}
function Oa(a){var b=Na(a);return"array"==b||"object"==b&&"number"==typeof a.length}
function Pa(a){var b=typeof a;return"object"==b&&null!=a||"function"==b}
function Qa(a){return Object.prototype.hasOwnProperty.call(a,Ra)&&a[Ra]||(a[Ra]=++Sa)}
var Ra="closure_uid_"+(1E9*Math.random()>>>0),Sa=0;function Ta(a,b,c){return a.call.apply(a.bind,arguments)}
function Ua(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var e=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(e,d);return a.apply(b,e)}}return function(){return a.apply(b,arguments)}}
function Va(a,b,c){Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?Va=Ta:Va=Ua;return Va.apply(null,arguments)}
function C(a,b){a=a.split(".");var c=A;a[0]in c||"undefined"==typeof c.execScript||c.execScript("var "+a[0]);for(var d;a.length&&(d=a.shift());)a.length||void 0===b?c[d]&&c[d]!==Object.prototype[d]?c=c[d]:c=c[d]={}:c[d]=b}
function Wa(a,b){function c(){}
c.prototype=b.prototype;a.O=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.Ub=function(d,e,f){for(var g=Array(arguments.length-2),h=2;h<arguments.length;h++)g[h-2]=arguments[h];return b.prototype[e].apply(d,g)}}
function Xa(a){return a}
;function Ya(a,b){if(Error.captureStackTrace)Error.captureStackTrace(this,Ya);else{var c=Error().stack;c&&(this.stack=c)}a&&(this.message=String(a));void 0!==b&&(this.nb=b)}
Wa(Ya,Error);Ya.prototype.name="CustomError";function Za(a){a=a.url;var b=/[?&]dsh=1(&|$)/.test(a);this.l=!b&&/[?&]ae=1(&|$)/.test(a);this.o=!b&&/[?&]ae=2(&|$)/.test(a);if((this.i=/[?&]adurl=([^&]*)/.exec(a))&&this.i[1]){try{var c=decodeURIComponent(this.i[1])}catch(d){c=null}this.j=c}}
;function ab(){}
function bb(a){var b=!1,c;return function(){b||(c=a(),b=!0);return c}}
;var cb=Array.prototype.indexOf?function(a,b){return Array.prototype.indexOf.call(a,b,void 0)}:function(a,b){if("string"===typeof a)return"string"!==typeof b||1!=b.length?-1:a.indexOf(b,0);
for(var c=0;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1},D=Array.prototype.forEach?function(a,b,c){Array.prototype.forEach.call(a,b,c)}:function(a,b,c){for(var d=a.length,e="string"===typeof a?a.split(""):a,f=0;f<d;f++)f in e&&b.call(c,e[f],f,a)},db=Array.prototype.reduce?function(a,b,c){return Array.prototype.reduce.call(a,b,c)}:function(a,b,c){var d=c;
D(a,function(e,f){d=b.call(void 0,d,e,f,a)});
return d};
function eb(a,b){b=cb(a,b);var c;(c=0<=b)&&Array.prototype.splice.call(a,b,1);return c}
function fb(a){return Array.prototype.concat.apply([],arguments)}
function gb(a){var b=a.length;if(0<b){for(var c=Array(b),d=0;d<b;d++)c[d]=a[d];return c}return[]}
function hb(a,b){for(var c=1;c<arguments.length;c++){var d=arguments[c];if(Oa(d)){var e=a.length||0,f=d.length||0;a.length=e+f;for(var g=0;g<f;g++)a[e+g]=d[g]}else a.push(d)}}
;function ib(a,b){for(var c in a)b.call(void 0,a[c],c,a)}
function jb(a){var b=lb,c;for(c in b)if(a.call(void 0,b[c],c,b))return c}
function mb(a,b){for(var c in a)if(!(c in b)||a[c]!==b[c])return!1;for(var d in b)if(!(d in a))return!1;return!0}
function nb(a){if(!a||"object"!==typeof a)return a;if("function"===typeof a.clone)return a.clone();if("undefined"!==typeof Map&&a instanceof Map)return new Map(a);if("undefined"!==typeof Set&&a instanceof Set)return new Set(a);var b=Array.isArray(a)?[]:"function"!==typeof ArrayBuffer||"function"!==typeof ArrayBuffer.isView||!ArrayBuffer.isView(a)||a instanceof DataView?{}:new a.constructor(a.length),c;for(c in a)b[c]=nb(a[c]);return b}
var ob="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" ");function pb(a,b){for(var c,d,e=1;e<arguments.length;e++){d=arguments[e];for(c in d)a[c]=d[c];for(var f=0;f<ob.length;f++)c=ob[f],Object.prototype.hasOwnProperty.call(d,c)&&(a[c]=d[c])}}
;var vb;function wb(){}
function xb(a){return new wb(yb,a)}
var yb={};xb("");var zb=String.prototype.trim?function(a){return a.trim()}:function(a){return/^[\s\xa0]*([\s\S]*?)[\s\xa0]*$/.exec(a)[1]},Ab=/&/g,Bb=/</g,Cb=/>/g,Db=/"/g,Eb=/'/g,Fb=/\x00/g,Gb=/[\x00&<>"']/;function Hb(a,b){this.i=b===Ib?a:""}
Hb.prototype.toString=function(){return this.i.toString()};
var Ib={},Jb=new Hb("about:invalid#zClosurez",Ib);function Kb(){var a=A.navigator;return a&&(a=a.userAgent)?a:""}
function E(a){return-1!=Kb().indexOf(a)}
;function Lb(){return(E("Chrome")||E("CriOS"))&&!E("Edge")||E("Silk")}
;var Mb={};function Nb(a){this.i=Mb===Mb?a:""}
Nb.prototype.toString=function(){return this.i.toString()};var Ob=RegExp("^(?:([^:/?#.]+):)?(?://(?:([^\\\\/?#]*)@)?([^\\\\/?#]*?)(?::([0-9]+))?(?=[\\\\/?#]|$))?([^?#]+)?(?:\\?([^#]*))?(?:#([\\s\\S]*))?$");function Pb(a){return a?decodeURI(a):a}
function Qb(a){return Pb(a.match(Ob)[3]||null)}
function Rb(a){var b=a.match(Ob);a=b[1];var c=b[2],d=b[3];b=b[4];var e="";a&&(e+=a+":");d&&(e+="//",c&&(e+=c+"@"),e+=d,b&&(e+=":"+b));return e}
function Sb(a,b,c){if(Array.isArray(b))for(var d=0;d<b.length;d++)Sb(a,String(b[d]),c);else null!=b&&c.push(a+(""===b?"":"="+encodeURIComponent(String(b))))}
function Tb(a){var b=[],c;for(c in a)Sb(c,a[c],b);return b.join("&")}
var Yb=/#|$/;function Zb(a,b){var c=a.search(Yb);a:{var d=0;for(var e=b.length;0<=(d=a.indexOf(b,d))&&d<c;){var f=a.charCodeAt(d-1);if(38==f||63==f)if(f=a.charCodeAt(d+e),!f||61==f||38==f||35==f)break a;d+=e+1}d=-1}if(0>d)return null;e=a.indexOf("&",d);if(0>e||e>c)e=c;d+=b.length+1;return decodeURIComponent(a.slice(d,-1!==e?e:0).replace(/\+/g," "))}
;var $b={};function ac(a){if(a!==$b)throw Error("requires a valid immutable API token");}
;function bc(){return E("iPhone")&&!E("iPod")&&!E("iPad")}
;function cc(a){cc[" "](a);return a}
cc[" "]=function(){};var dc=E("Opera"),ec=E("Trident")||E("MSIE"),fc=E("Edge"),gc=E("Gecko")&&!(-1!=Kb().toLowerCase().indexOf("webkit")&&!E("Edge"))&&!(E("Trident")||E("MSIE"))&&!E("Edge"),hc=-1!=Kb().toLowerCase().indexOf("webkit")&&!E("Edge");function ic(){var a=A.document;return a?a.documentMode:void 0}
var jc;a:{var kc="",lc=function(){var a=Kb();if(gc)return/rv:([^\);]+)(\)|;)/.exec(a);if(fc)return/Edge\/([\d\.]+)/.exec(a);if(ec)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(hc)return/WebKit\/(\S+)/.exec(a);if(dc)return/(?:Version)[ \/]?(\S+)/.exec(a)}();
lc&&(kc=lc?lc[1]:"");if(ec){var mc=ic();if(null!=mc&&mc>parseFloat(kc)){jc=String(mc);break a}}jc=kc}var nc=jc,oc;if(A.document&&ec){var pc=ic();oc=pc?pc:parseInt(nc,10)||void 0}else oc=void 0;var qc=oc;var rc=bc()||E("iPod"),sc=E("iPad");!E("Android")||Lb();Lb();var tc=E("Safari")&&!(Lb()||E("Coast")||E("Opera")||E("Edge")||E("Edg/")||E("OPR")||E("Firefox")||E("FxiOS")||E("Silk")||E("Android"))&&!(bc()||E("iPad")||E("iPod"));var vc={},wc=null;
function xc(a,b){Oa(a);void 0===b&&(b=0);if(!wc){wc={};for(var c="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".split(""),d=["+/=","+/","-_=","-_.","-_"],e=0;5>e;e++){var f=c.concat(d[e].split(""));vc[e]=f;for(var g=0;g<f.length;g++){var h=f[g];void 0===wc[h]&&(wc[h]=g)}}}b=vc[b];c=Array(Math.floor(a.length/3));d=b[64]||"";for(e=f=0;f<a.length-2;f+=3){var k=a[f],l=a[f+1];h=a[f+2];g=b[k>>2];k=b[(k&3)<<4|l>>4];l=b[(l&15)<<2|h>>6];h=b[h&63];c[e++]=""+g+k+l+h}g=0;h=d;switch(a.length-
f){case 2:g=a[f+1],h=b[(g&15)<<2]||d;case 1:a=a[f],c[e]=""+b[a>>2]+b[(a&3)<<4|g>>4]+h+d}return c.join("")}
;var yc="undefined"!==typeof Uint8Array,zc={};var Ac;function Bc(a){if(zc!==zc)throw Error("illegal external caller");this.Na=a;if(null!=a&&0===a.length)throw Error("ByteString should be constructed with non-empty values");}
Bc.prototype.isEmpty=function(){return null==this.Na};var Cc="function"===typeof Symbol&&"symbol"===typeof Symbol()?Symbol(void 0):void 0;function Dc(a,b){Object.isFrozen(a)||(Cc?a[Cc]|=b:void 0!==a.ba?a.ba|=b:Object.defineProperties(a,{ba:{value:b,configurable:!0,writable:!0,enumerable:!1}}))}
function Ec(a){var b;Cc?b=a[Cc]:b=a.ba;return null==b?0:b}
function Fc(a){return Array.isArray(a)?!!(Ec(a)&1):!1}
function Gc(a){Dc(a,1);return a}
function Kc(a){return Array.isArray(a)?!!(Ec(a)&2):!1}
function Lc(a){if(!Array.isArray(a))throw Error("cannot mark non-array as immutable");Dc(a,2)}
function Mc(a,b){if(!Array.isArray(a))throw Error("cannot mark non-array as mutable");b?Dc(a,8):Object.isFrozen(a)||(Cc?a[Cc]&=-9:void 0!==a.ba&&(a.ba&=-9))}
;function Nc(a){return Kc(a.D)}
function Oc(a){return null!==a&&"object"===typeof a&&!Array.isArray(a)&&a.constructor===Object}
var Pc,Qc=Object.freeze(Gc([]));function Rc(a){if(Nc(a))throw Error("Cannot mutate an immutable Message");}
var Sc="undefined"!=typeof Symbol&&"undefined"!=typeof Symbol.hasInstance;function Tc(a){return{value:a,configurable:!1,writable:!1,enumerable:!1}}
;function Uc(a){A.setTimeout(function(){throw a;},0)}
;function Vc(a){return a.displayName||a.name||"unknown type name"}
function Wc(a,b){a instanceof b||Uc(Error("Expected instanceof "+Vc(b)+" but got "+(a&&Vc(a.constructor))));return a}
function Xc(a,b,c){c=void 0===c?!1:c;if(Array.isArray(a))return new b(a);if(c)return new b}
;function Yc(a){switch(typeof a){case "number":return isFinite(a)?a:String(a);case "object":if(a&&!Array.isArray(a)){if(yc&&null!=a&&a instanceof Uint8Array)return xc(a);if(a instanceof Bc){var b=a.Na;null!=b&&"string"!==typeof b&&(yc&&b instanceof Uint8Array?b=xc(b):(Na(b),b=null));return null==b?"":a.Na=b}}}return a}
;function Zc(a,b){b=void 0===b?$c:b;return ad(a,b)}
function bd(a,b){if(null!=a){if(Array.isArray(a))a=ad(a,b);else if(Oc(a)){var c={},d;for(d in a)c[d]=bd(a[d],b);a=c}else a=b(a);return a}}
function ad(a,b){for(var c=a.slice(),d=0;d<c.length;d++)c[d]=bd(c[d],b);Fc(a)&&Gc(c);return c}
function cd(a){if(a&&"object"==typeof a&&a.toJSON)return a.toJSON();a=Yc(a);return Array.isArray(a)?Zc(a,cd):a}
function $c(a){return yc&&null!=a&&a instanceof Uint8Array?new Uint8Array(a):a}
;function dd(a){return a.j||(a.j=a.D[a.l+a.Z]={})}
function ed(a,b,c){return-1===b?null:b>=a.l?a.j?a.j[b]:void 0:(void 0===c?0:c)&&a.j&&(c=a.j[b],null!=c)?c:a.D[b+a.Z]}
function F(a,b,c,d,e){d=void 0===d?!1:d;(void 0===e?0:e)||Rc(a);b<a.l&&!d?a.D[b+a.Z]=c:dd(a)[b]=c;return a}
function fd(a,b,c,d){c=void 0===c?!0:c;var e=ed(a,b,d);Array.isArray(e)||(e=Qc);if(Nc(a))c&&(Lc(e),Object.freeze(e));else if(e===Qc||Kc(e))e=Gc(e.slice()),F(a,b,e,d);return e}
function gd(a,b,c,d){Rc(a);(c=hd(a,c))&&c!==b&&null!=d&&(a.i&&c in a.i&&(a.i[c]=void 0),F(a,c));return F(a,b,d)}
function hd(a,b){for(var c=0,d=0;d<b.length;d++){var e=b[d];null!=ed(a,e)&&(0!==c&&F(a,c,void 0,!1,!0),c=e)}return c}
function id(a,b,c,d,e){e=void 0===e?!1:e;var f=e;if(-1===c)d=null;else{a.i||(a.i={});var g=a.i[c];if(g)d=g;else{var h=ed(a,c,f);b=Xc(h,b,d);void 0==b?d=g:(d&&b.D!==h&&F(a,c,b.D,f,!0),a.i[c]=b,Nc(a)&&Lc(b.D),d=b)}}if(null==d)return d;Nc(d)&&!Nc(a)&&(d=d.Ma($b),F(a,c,d.D,e),a.i[c]=d);return d}
function jd(a,b,c,d,e){e=void 0===e?!0:e;a.i||(a.i={});var f=Nc(a),g=a.i[c];d=fd(a,c,!0,d);var h=f||Kc(d);if(!g){g=[];f=f||h;for(var k=0;k<d.length;k++){var l=d[k];f=f||Kc(l);l=Xc(l,b);void 0!==l&&(g.push(l),h&&Lc(l.D))}a.i[c]=g;Mc(d,!f)}b=h||e;e=Kc(g);b&&!e&&(Object.isFrozen(g)&&(a.i[c]=g=g.slice()),Lc(g),Object.freeze(g));!b&&e&&(a.i[c]=g=g.slice());return g}
function H(a,b,c,d){Rc(a);a.i||(a.i={});b=null!=d?Wc(d,b).D:d;a.i[c]=d;return F(a,c,b)}
function kd(a,b,c,d,e){Rc(a);a.i||(a.i={});b=null!=e?Wc(e,b).D:e;a.i[c]=e;gd(a,c,d,b)}
function ld(a,b,c,d){Rc(a);if(null!=d){var e=Gc([]);for(var f=!1,g=0;g<d.length;g++)e[g]=Wc(d[g],b).D,f=f||Kc(e[g]);a.i||(a.i={});a.i[c]=d;Mc(e,!f)}else a.i&&(a.i[c]=void 0),e=Qc;return F(a,c,e)}
function md(a,b,c,d){Rc(a);var e=jd(a,c,b,void 0,!1);c=null!=d?Wc(d,c):new c;a=fd(a,b);e.push(c);a.push(c.D);ac($b);Nc(c)&&Mc(a,!1)}
function nd(a,b){a=ed(a,b);return null==a?"":a}
;function od(a,b,c){a||(a=pd);pd=null;var d=this.constructor.j;a||(a=d?[d]:[]);this.Z=(d?0:-1)-(this.constructor.i||0);this.i=void 0;this.D=a;a:{d=this.D.length;a=d-1;if(d&&(d=this.D[a],Oc(d))){this.l=a-this.Z;this.j=d;break a}void 0!==b&&-1<b?(this.l=Math.max(b,a+1-this.Z),this.j=void 0):this.l=Number.MAX_VALUE}if(c)for(b=0;b<c.length;b++)if(a=c[b],a<this.l)a+=this.Z,(d=this.D[a])?Array.isArray(d)&&Gc(d):this.D[a]=Qc;else{d=dd(this);var e=d[a];e?Array.isArray(e)&&Gc(e):d[a]=Qc}}
od.prototype.toJSON=function(){var a=this.D;return Pc?a:Zc(a,cd)};
function qd(a){Pc=!0;try{return JSON.stringify(a.toJSON(),rd)}finally{Pc=!1}}
od.prototype.clone=function(){var a=Zc(this.D);pd=a;a=new this.constructor(a);pd=null;sd(a,this);return a};
od.prototype.isMutable=function(a){ac(a);return!Nc(this)};
od.prototype.toString=function(){return this.D.toString()};
function rd(a,b){return Yc(b)}
function sd(a,b){b.ja&&(a.ja=b.ja.slice());var c=b.i;if(c){b=b.j;for(var d in c){var e=c[d];if(e){var f=!(!b||!b[d]),g=+d;if(Array.isArray(e)){if(e.length){var h=a,k=e[0].constructor,l=f;l=void 0===l?!1:l;f=Nc(h);k=jd(h,k,g,l,f);g=fd(h,g,l);if(!(h=f)&&(h=g)){h=g;if(!Array.isArray(h))throw Error("cannot check mutability state of non-array");h=!(Ec(h)&8)}if(h){for(h=0;h<k.length;h++)(l=k[h])&&Nc(l)&&!f&&(k[h]=k[h].Ma($b),g[h]=k[h].D);Mc(g,!0)}f=k;for(k=0;k<Math.min(f.length,e.length);k++)sd(f[k],e[k])}}else(f=
id(a,e.constructor,g,void 0,f))&&sd(f,e)}}}}
var pd;function td(){od.apply(this,arguments)}
v(td,od);td.prototype.Ma=function(){return this};
if(Sc){var ud={};Object.defineProperties(td,(ud[Symbol.hasInstance]=Tc(function(){throw Error("Cannot perform instanceof checks for MutableMessage");}),ud))};function vd(a,b,c,d,e,f){(a=a.i&&a.i[c])?Array.isArray(a)?(e=f.Ca?Gc(a.slice()):a,ld(b,0<e.length?e[0].constructor:void 0,c,e)):H(b,a.constructor,c,a):(yc&&d instanceof Uint8Array?e=d.length?new Bc(new Uint8Array(d)):Ac||(Ac=new Bc(null)):(Array.isArray(d)&&(e?Lc(d):Fc(d)&&f.Ca&&(d=d.slice())),e=d),F(b,c,e))}
;function I(){td.apply(this,arguments)}
v(I,td);I.prototype.Ma=function(a){ac(a);if(Nc(this)){a={Ca:!0};var b=Nc(this);if(b&&!a.Ca)throw Error("copyRepeatedFields must be true for frozen messages");var c=new this.constructor;this.ja&&(c.ja=this.ja.slice());for(var d=this.D,e=0;e<d.length;e++){var f=d[e];if(e===d.length-1&&Oc(f))for(h in f){var g=+h;Number.isNaN(g)?dd(c)[h]=f[h]:vd(this,c,g,f[h],b,a)}else vd(this,c,e-this.Z,f,b,a)}var h=c}else h=this;return h};
if(Sc){var wd={};Object.defineProperties(I,(wd[Symbol.hasInstance]=Tc(Object[Symbol.hasInstance]),wd))};var xd=window;xb("csi.gstatic.com");xb("googleads.g.doubleclick.net");xb("partner.googleadservices.com");xb("pubads.g.doubleclick.net");xb("securepubads.g.doubleclick.net");xb("tpc.googlesyndication.com");/*

 SPDX-License-Identifier: Apache-2.0
*/
function yd(a){this.isValid=a}
function zd(a){return new yd(function(b){return b.substr(0,a.length+1).toLowerCase()===a+":"})}
var Ad=[zd("data"),zd("http"),zd("https"),zd("mailto"),zd("ftp"),new yd(function(a){return/^[^:]*([/?#]|$)/.test(a)})];
function Bd(a,b){b=void 0===b?Ad:b;for(var c=0;c<b.length;++c){var d=b[c];if(d instanceof yd&&d.isValid(a))return new Hb(a,Ib)}}
function Cd(a){var b=void 0===b?Ad:b;return Bd(a,b)||Jb}
;function Dd(a,b){a.removeAttribute("srcdoc");b instanceof Hb&&b.constructor===Hb?b=b.i:(Na(b),b="type_error:SafeUrl");a.src=b;for(b="allow-same-origin allow-scripts allow-forms allow-popups allow-popups-to-escape-sandbox allow-storage-access-by-user-activation".split(" ");0<a.sandbox.length;)a.sandbox.remove(a.sandbox.item(0));for(var c=0;c<b.length;c++)a.sandbox.supports&&!a.sandbox.supports(b[c])||a.sandbox.add(b[c])}
;function Ed(a,b){this.width=a;this.height=b}
n=Ed.prototype;n.clone=function(){return new Ed(this.width,this.height)};
n.aspectRatio=function(){return this.width/this.height};
n.isEmpty=function(){return!(this.width*this.height)};
n.ceil=function(){this.width=Math.ceil(this.width);this.height=Math.ceil(this.height);return this};
n.floor=function(){this.width=Math.floor(this.width);this.height=Math.floor(this.height);return this};
n.round=function(){this.width=Math.round(this.width);this.height=Math.round(this.height);return this};function Fd(){var a=document;var b="IFRAME";"application/xhtml+xml"===a.contentType&&(b=b.toLowerCase());return a.createElement(b)}
function Gd(a,b){for(var c=0;a;){if(b(a))return a;a=a.parentNode;c++}return null}
;function Hd(a){var b=Id;if(b)for(var c in b)Object.prototype.hasOwnProperty.call(b,c)&&a(b[c],c,b)}
function Jd(){var a=[];Hd(function(b){a.push(b)});
return a}
var Id={Cb:"allow-forms",Db:"allow-modals",Eb:"allow-orientation-lock",Fb:"allow-pointer-lock",Gb:"allow-popups",Hb:"allow-popups-to-escape-sandbox",Ib:"allow-presentation",Jb:"allow-same-origin",Kb:"allow-scripts",Lb:"allow-top-navigation",Mb:"allow-top-navigation-by-user-activation"},Kd=bb(function(){return Jd()});
function Nd(){var a=Od(),b={};D(Kd(),function(c){a.sandbox&&a.sandbox.supports&&a.sandbox.supports(c)&&(b[c]=!0)});
return b}
function Od(){var a=void 0===a?document:a;return a.createElement("iframe")}
;var Pd=(new Date).getTime();var Qd=new function(a,b){this.flag=a;this.defaultValue=void 0===b?!1:b}(434462125,!0);function Rd(a){if(!a)return"";if(/^about:(?:blank|srcdoc)$/.test(a))return window.origin||"";a=a.split("#")[0].split("?")[0];a=a.toLowerCase();0==a.indexOf("//")&&(a=window.location.protocol+a);/^[\w\-]*:\/\//.test(a)||(a=window.location.href);var b=a.substring(a.indexOf("://")+3),c=b.indexOf("/");-1!=c&&(b=b.substring(0,c));c=a.substring(0,a.indexOf("://"));if(!c)throw Error("URI is missing protocol: "+a);if("http"!==c&&"https"!==c&&"chrome-extension"!==c&&"moz-extension"!==c&&"file"!==c&&"android-app"!==
c&&"chrome-search"!==c&&"chrome-untrusted"!==c&&"chrome"!==c&&"app"!==c&&"devtools"!==c)throw Error("Invalid URI scheme in origin: "+c);a="";var d=b.indexOf(":");if(-1!=d){var e=b.substring(d+1);b=b.substring(0,d);if("http"===c&&"80"!==e||"https"===c&&"443"!==e)a=":"+e}return c+"://"+b+a}
;var Sd="client_dev_mss_url client_dev_regex_map client_dev_root_url client_rollout_override expflag forcedCapability jsfeat jsmode mods".split(" ");ia(Sd);function Td(){function a(){e[0]=1732584193;e[1]=4023233417;e[2]=2562383102;e[3]=271733878;e[4]=3285377520;m=l=0}
function b(q){for(var t=g,p=0;64>p;p+=4)t[p/4]=q[p]<<24|q[p+1]<<16|q[p+2]<<8|q[p+3];for(p=16;80>p;p++)q=t[p-3]^t[p-8]^t[p-14]^t[p-16],t[p]=(q<<1|q>>>31)&4294967295;q=e[0];var y=e[1],z=e[2],G=e[3],K=e[4];for(p=0;80>p;p++){if(40>p)if(20>p){var M=G^y&(z^G);var P=1518500249}else M=y^z^G,P=1859775393;else 60>p?(M=y&z|G&(y|z),P=2400959708):(M=y^z^G,P=3395469782);M=((q<<5|q>>>27)&4294967295)+M+K+P+t[p]&4294967295;K=G;G=z;z=(y<<30|y>>>2)&4294967295;y=q;q=M}e[0]=e[0]+q&4294967295;e[1]=e[1]+y&4294967295;e[2]=
e[2]+z&4294967295;e[3]=e[3]+G&4294967295;e[4]=e[4]+K&4294967295}
function c(q,t){if("string"===typeof q){q=unescape(encodeURIComponent(q));for(var p=[],y=0,z=q.length;y<z;++y)p.push(q.charCodeAt(y));q=p}t||(t=q.length);p=0;if(0==l)for(;p+64<t;)b(q.slice(p,p+64)),p+=64,m+=64;for(;p<t;)if(f[l++]=q[p++],m++,64==l)for(l=0,b(f);p+64<t;)b(q.slice(p,p+64)),p+=64,m+=64}
function d(){var q=[],t=8*m;56>l?c(h,56-l):c(h,64-(l-56));for(var p=63;56<=p;p--)f[p]=t&255,t>>>=8;b(f);for(p=t=0;5>p;p++)for(var y=24;0<=y;y-=8)q[t++]=e[p]>>y&255;return q}
for(var e=[],f=[],g=[],h=[128],k=1;64>k;++k)h[k]=0;var l,m;a();return{reset:a,update:c,digest:d,pb:function(){for(var q=d(),t="",p=0;p<q.length;p++)t+="0123456789ABCDEF".charAt(Math.floor(q[p]/16))+"0123456789ABCDEF".charAt(q[p]%16);return t}}}
;function Ud(a,b,c){var d=String(A.location.href);return d&&a&&b?[b,Vd(Rd(d),a,c||null)].join(" "):null}
function Vd(a,b,c){var d=[],e=[];if(1==(Array.isArray(c)?2:1))return e=[b,a],D(d,function(h){e.push(h)}),Wd(e.join(" "));
var f=[],g=[];D(c,function(h){g.push(h.key);f.push(h.value)});
c=Math.floor((new Date).getTime()/1E3);e=0==f.length?[c,b,a]:[f.join(":"),c,b,a];D(d,function(h){e.push(h)});
a=Wd(e.join(" "));a=[c,a];0==g.length||a.push(g.join(""));return a.join("_")}
function Wd(a){var b=Td();b.update(a);return b.pb().toLowerCase()}
;var Xd={};function Yd(a){this.i=a||{cookie:""}}
n=Yd.prototype;n.isEnabled=function(){if(!A.navigator.cookieEnabled)return!1;if(!this.isEmpty())return!0;this.set("TESTCOOKIESENABLED","1",{Ga:60});if("1"!==this.get("TESTCOOKIESENABLED"))return!1;this.remove("TESTCOOKIESENABLED");return!0};
n.set=function(a,b,c){var d=!1;if("object"===typeof c){var e=c.Yb;d=c.secure||!1;var f=c.domain||void 0;var g=c.path||void 0;var h=c.Ga}if(/[;=\s]/.test(a))throw Error('Invalid cookie name "'+a+'"');if(/[;\r\n]/.test(b))throw Error('Invalid cookie value "'+b+'"');void 0===h&&(h=-1);c=f?";domain="+f:"";g=g?";path="+g:"";d=d?";secure":"";h=0>h?"":0==h?";expires="+(new Date(1970,1,1)).toUTCString():";expires="+(new Date(Date.now()+1E3*h)).toUTCString();this.i.cookie=a+"="+b+c+g+h+d+(null!=e?";samesite="+
e:"")};
n.get=function(a,b){for(var c=a+"=",d=(this.i.cookie||"").split(";"),e=0,f;e<d.length;e++){f=zb(d[e]);if(0==f.lastIndexOf(c,0))return f.slice(c.length);if(f==a)return""}return b};
n.remove=function(a,b,c){var d=void 0!==this.get(a);this.set(a,"",{Ga:0,path:b,domain:c});return d};
n.isEmpty=function(){return!this.i.cookie};
n.clear=function(){for(var a=(this.i.cookie||"").split(";"),b=[],c=[],d,e,f=0;f<a.length;f++)e=zb(a[f]),d=e.indexOf("="),-1==d?(b.push(""),c.push(e)):(b.push(e.substring(0,d)),c.push(e.substring(d+1)));for(a=b.length-1;0<=a;a--)this.remove(b[a])};
var Zd=new Yd("undefined"==typeof document?null:document);function $d(a){return!!Xd.FPA_SAMESITE_PHASE2_MOD||!(void 0===a||!a)}
function ae(a,b,c,d){(a=A[a])||(a=(new Yd(document)).get(b));return a?Ud(a,c,d):null}
function be(a){var b=void 0===b?!1:b;var c=Rd(String(A.location.href)),d=[];var e=b;e=void 0===e?!1:e;var f=A.__SAPISID||A.__APISID||A.__3PSAPISID||A.__OVERRIDE_SID;$d(e)&&(f=f||A.__1PSAPISID);if(f)e=!0;else{var g=new Yd(document);f=g.get("SAPISID")||g.get("APISID")||g.get("__Secure-3PAPISID")||g.get("SID");$d(e)&&(f=f||g.get("__Secure-1PAPISID"));e=!!f}e&&(e=(c=0==c.indexOf("https:")||0==c.indexOf("chrome-extension:")||0==c.indexOf("moz-extension:"))?A.__SAPISID:A.__APISID,e||(e=new Yd(document),
e=e.get(c?"SAPISID":"APISID")||e.get("__Secure-3PAPISID")),(e=e?Ud(e,c?"SAPISIDHASH":"APISIDHASH",a):null)&&d.push(e),c&&$d(b)&&((b=ae("__1PSAPISID","__Secure-1PAPISID","SAPISID1PHASH",a))&&d.push(b),(a=ae("__3PSAPISID","__Secure-3PAPISID","SAPISID3PHASH",a))&&d.push(a)));return 0==d.length?null:d.join(" ")}
;function ce(){this.o=this.o;this.v=this.v}
ce.prototype.o=!1;ce.prototype.dispose=function(){this.o||(this.o=!0,this.ia())};
ce.prototype.ia=function(){if(this.v)for(;this.v.length;)this.v.shift()()};function de(a,b){this.type=a;this.i=this.target=b;this.defaultPrevented=this.l=!1}
de.prototype.stopPropagation=function(){this.l=!0};
de.prototype.preventDefault=function(){this.defaultPrevented=!0};function ee(a){var b=B("window.location.href");null==a&&(a='Unknown Error of type "null/undefined"');if("string"===typeof a)return{message:a,name:"Unknown error",lineNumber:"Not available",fileName:b,stack:"Not available"};var c=!1;try{var d=a.lineNumber||a.line||"Not available"}catch(g){d="Not available",c=!0}try{var e=a.fileName||a.filename||a.sourceURL||A.$googDebugFname||b}catch(g){e="Not available",c=!0}b=fe(a);if(!(!c&&a.lineNumber&&a.fileName&&a.stack&&a.message&&a.name)){c=a.message;if(null==
c){if(a.constructor&&a.constructor instanceof Function){if(a.constructor.name)c=a.constructor.name;else if(c=a.constructor,ge[c])c=ge[c];else{c=String(c);if(!ge[c]){var f=/function\s+([^\(]+)/m.exec(c);ge[c]=f?f[1]:"[Anonymous]"}c=ge[c]}c='Unknown Error of type "'+c+'"'}else c="Unknown Error of unknown type";"function"===typeof a.toString&&Object.prototype.toString!==a.toString&&(c+=": "+a.toString())}return{message:c,name:a.name||"UnknownError",lineNumber:d,fileName:e,stack:b||"Not available"}}a.stack=
b;return{message:a.message,name:a.name,lineNumber:a.lineNumber,fileName:a.fileName,stack:a.stack}}
function fe(a,b){b||(b={});b[he(a)]=!0;var c=a.stack||"";(a=a.nb)&&!b[he(a)]&&(c+="\nCaused by: ",a.stack&&0==a.stack.indexOf(a.toString())||(c+="string"===typeof a?a:a.message+"\n"),c+=fe(a,b));return c}
function he(a){var b="";"function"===typeof a.toString&&(b=""+a);return b+a.stack}
var ge={};var ie=function(){if(!A.addEventListener||!Object.defineProperty)return!1;var a=!1,b=Object.defineProperty({},"passive",{get:function(){a=!0}});
try{A.addEventListener("test",function(){},b),A.removeEventListener("test",function(){},b)}catch(c){}return a}();function je(a,b){de.call(this,a?a.type:"");this.relatedTarget=this.i=this.target=null;this.button=this.screenY=this.screenX=this.clientY=this.clientX=0;this.key="";this.charCode=this.keyCode=0;this.metaKey=this.shiftKey=this.altKey=this.ctrlKey=!1;this.state=null;this.pointerId=0;this.pointerType="";this.j=null;a&&this.init(a,b)}
Wa(je,de);var ke={2:"touch",3:"pen",4:"mouse"};
je.prototype.init=function(a,b){var c=this.type=a.type,d=a.changedTouches&&a.changedTouches.length?a.changedTouches[0]:null;this.target=a.target||a.srcElement;this.i=b;if(b=a.relatedTarget){if(gc){a:{try{cc(b.nodeName);var e=!0;break a}catch(f){}e=!1}e||(b=null)}}else"mouseover"==c?b=a.fromElement:"mouseout"==c&&(b=a.toElement);this.relatedTarget=b;d?(this.clientX=void 0!==d.clientX?d.clientX:d.pageX,this.clientY=void 0!==d.clientY?d.clientY:d.pageY,this.screenX=d.screenX||0,this.screenY=d.screenY||
0):(this.clientX=void 0!==a.clientX?a.clientX:a.pageX,this.clientY=void 0!==a.clientY?a.clientY:a.pageY,this.screenX=a.screenX||0,this.screenY=a.screenY||0);this.button=a.button;this.keyCode=a.keyCode||0;this.key=a.key||"";this.charCode=a.charCode||("keypress"==c?a.keyCode:0);this.ctrlKey=a.ctrlKey;this.altKey=a.altKey;this.shiftKey=a.shiftKey;this.metaKey=a.metaKey;this.pointerId=a.pointerId||0;this.pointerType="string"===typeof a.pointerType?a.pointerType:ke[a.pointerType]||"";this.state=a.state;
this.j=a;a.defaultPrevented&&je.O.preventDefault.call(this)};
je.prototype.stopPropagation=function(){je.O.stopPropagation.call(this);this.j.stopPropagation?this.j.stopPropagation():this.j.cancelBubble=!0};
je.prototype.preventDefault=function(){je.O.preventDefault.call(this);var a=this.j;a.preventDefault?a.preventDefault():a.returnValue=!1};var le="closure_listenable_"+(1E6*Math.random()|0);var me=0;function ne(a,b,c,d,e){this.listener=a;this.proxy=null;this.src=b;this.type=c;this.capture=!!d;this.wa=e;this.key=++me;this.la=this.ra=!1}
function oe(a){a.la=!0;a.listener=null;a.proxy=null;a.src=null;a.wa=null}
;function pe(a){this.src=a;this.listeners={};this.i=0}
pe.prototype.add=function(a,b,c,d,e){var f=a.toString();a=this.listeners[f];a||(a=this.listeners[f]=[],this.i++);var g=qe(a,b,d,e);-1<g?(b=a[g],c||(b.ra=!1)):(b=new ne(b,this.src,f,!!d,e),b.ra=c,a.push(b));return b};
pe.prototype.remove=function(a,b,c,d){a=a.toString();if(!(a in this.listeners))return!1;var e=this.listeners[a];b=qe(e,b,c,d);return-1<b?(oe(e[b]),Array.prototype.splice.call(e,b,1),0==e.length&&(delete this.listeners[a],this.i--),!0):!1};
function re(a,b){var c=b.type;c in a.listeners&&eb(a.listeners[c],b)&&(oe(b),0==a.listeners[c].length&&(delete a.listeners[c],a.i--))}
function qe(a,b,c,d){for(var e=0;e<a.length;++e){var f=a[e];if(!f.la&&f.listener==b&&f.capture==!!c&&f.wa==d)return e}return-1}
;var se="closure_lm_"+(1E6*Math.random()|0),te={},ue=0;function ve(a,b,c,d,e){if(d&&d.once)we(a,b,c,d,e);else if(Array.isArray(b))for(var f=0;f<b.length;f++)ve(a,b[f],c,d,e);else c=xe(c),a&&a[le]?a.S(b,c,Pa(d)?!!d.capture:!!d,e):ye(a,b,c,!1,d,e)}
function ye(a,b,c,d,e,f){if(!b)throw Error("Invalid event type");var g=Pa(e)?!!e.capture:!!e,h=ze(a);h||(a[se]=h=new pe(a));c=h.add(b,c,d,g,f);if(!c.proxy){d=Ae();c.proxy=d;d.src=a;d.listener=c;if(a.addEventListener)ie||(e=g),void 0===e&&(e=!1),a.addEventListener(b.toString(),d,e);else if(a.attachEvent)a.attachEvent(Be(b.toString()),d);else if(a.addListener&&a.removeListener)a.addListener(d);else throw Error("addEventListener and attachEvent are unavailable.");ue++}}
function Ae(){function a(c){return b.call(a.src,a.listener,c)}
var b=Ce;return a}
function we(a,b,c,d,e){if(Array.isArray(b))for(var f=0;f<b.length;f++)we(a,b[f],c,d,e);else c=xe(c),a&&a[le]?a.l.add(String(b),c,!0,Pa(d)?!!d.capture:!!d,e):ye(a,b,c,!0,d,e)}
function De(a,b,c,d,e){if(Array.isArray(b))for(var f=0;f<b.length;f++)De(a,b[f],c,d,e);else(d=Pa(d)?!!d.capture:!!d,c=xe(c),a&&a[le])?a.l.remove(String(b),c,d,e):a&&(a=ze(a))&&(b=a.listeners[b.toString()],a=-1,b&&(a=qe(b,c,d,e)),(c=-1<a?b[a]:null)&&Ee(c))}
function Ee(a){if("number"!==typeof a&&a&&!a.la){var b=a.src;if(b&&b[le])re(b.l,a);else{var c=a.type,d=a.proxy;b.removeEventListener?b.removeEventListener(c,d,a.capture):b.detachEvent?b.detachEvent(Be(c),d):b.addListener&&b.removeListener&&b.removeListener(d);ue--;(c=ze(b))?(re(c,a),0==c.i&&(c.src=null,b[se]=null)):oe(a)}}}
function Be(a){return a in te?te[a]:te[a]="on"+a}
function Ce(a,b){if(a.la)a=!0;else{b=new je(b,this);var c=a.listener,d=a.wa||a.src;a.ra&&Ee(a);a=c.call(d,b)}return a}
function ze(a){a=a[se];return a instanceof pe?a:null}
var Fe="__closure_events_fn_"+(1E9*Math.random()>>>0);function xe(a){if("function"===typeof a)return a;a[Fe]||(a[Fe]=function(b){return a.handleEvent(b)});
return a[Fe]}
;function J(){ce.call(this);this.l=new pe(this);this.Aa=this;this.J=null}
Wa(J,ce);J.prototype[le]=!0;J.prototype.addEventListener=function(a,b,c,d){ve(this,a,b,c,d)};
J.prototype.removeEventListener=function(a,b,c,d){De(this,a,b,c,d)};
function Ge(a,b){var c=a.J;if(c){var d=[];for(var e=1;c;c=c.J)d.push(c),++e}a=a.Aa;c=b.type||b;"string"===typeof b?b=new de(b,a):b instanceof de?b.target=b.target||a:(e=b,b=new de(c,a),pb(b,e));e=!0;if(d)for(var f=d.length-1;!b.l&&0<=f;f--){var g=b.i=d[f];e=He(g,c,!0,b)&&e}b.l||(g=b.i=a,e=He(g,c,!0,b)&&e,b.l||(e=He(g,c,!1,b)&&e));if(d)for(f=0;!b.l&&f<d.length;f++)g=b.i=d[f],e=He(g,c,!1,b)&&e}
J.prototype.ia=function(){J.O.ia.call(this);if(this.l){var a=this.l,b=0,c;for(c in a.listeners){for(var d=a.listeners[c],e=0;e<d.length;e++)++b,oe(d[e]);delete a.listeners[c];a.i--}}this.J=null};
J.prototype.S=function(a,b,c,d){return this.l.add(String(a),b,!1,c,d)};
function He(a,b,c,d){b=a.l.listeners[String(b)];if(!b)return!0;b=b.concat();for(var e=!0,f=0;f<b.length;++f){var g=b[f];if(g&&!g.la&&g.capture==c){var h=g.listener,k=g.wa||g.src;g.ra&&re(a.l,g);e=!1!==h.call(k,d)&&e}}return e&&!d.defaultPrevented}
;function Ie(a){J.call(this);var b=this;this.C=this.j=0;this.K=null!=a?a:{M:function(e,f){return setTimeout(e,f)},
aa:function(e){clearTimeout(e)}};
var c,d;this.i=null!=(d=null==(c=window.navigator)?void 0:c.onLine)?d:!0;this.m=function(){return x(function(e){return w(e,Je(b),0)})};
window.addEventListener("offline",this.m);window.addEventListener("online",this.m);this.C||Ke(this)}
v(Ie,J);function Le(){var a=Me;Ie.i||(Ie.i=new Ie(a));return Ie.i}
Ie.prototype.dispose=function(){window.removeEventListener("offline",this.m);window.removeEventListener("online",this.m);this.K.aa(this.C);delete Ie.i};
Ie.prototype.G=function(){return this.i};
function Ke(a){a.C=a.K.M(function(){var b;return x(function(c){if(1==c.i)return a.i?(null==(b=window.navigator)?0:b.onLine)?c.s(3):w(c,Je(a),3):w(c,Je(a),3);Ke(a);c.i=0})},3E4)}
function Je(a,b){return a.u?a.u:a.u=new Promise(function(c){var d,e,f,g;return x(function(h){switch(h.i){case 1:return d=window.AbortController?new window.AbortController:void 0,f=null==(e=d)?void 0:e.signal,g=!1,xa(h,2,3),d&&(a.j=a.K.M(function(){d.abort()},b||2E4)),w(h,fetch("/generate_204",{method:"HEAD",
signal:f}),5);case 5:g=!0;case 3:Aa(h);a.u=void 0;a.j&&(a.K.aa(a.j),a.j=0);g!==a.i&&(a.i=g,a.i?Ge(a,"networkstatus-online"):Ge(a,"networkstatus-offline"));c(g);Ba(h);break;case 2:za(h),g=!1,h.s(3)}})})}
;function Ne(){this.data_=[];this.i=-1}
Ne.prototype.set=function(a,b){b=void 0===b?!0:b;0<=a&&52>a&&Number.isInteger(a)&&this.data_[a]!==b&&(this.data_[a]=b,this.i=-1)};
Ne.prototype.get=function(a){return!!this.data_[a]};
function Oe(a){-1===a.i&&(a.i=db(a.data_,function(b,c,d){return c?b+Math.pow(2,d):b},0));
return a.i}
;function Pe(){var a=Qe,b="Fa";if(a.Fa&&a.hasOwnProperty(b))return a.Fa;var c=new a;a.Fa=c;a.hasOwnProperty(b);return c}
;function Qe(){var a={};this.B=function(b,c){return null!=a[b]?a[b]:c}}
;function Re(a){I.call(this,a,-1,Se)}
v(Re,I);function Te(a,b){return F(a,2,b)}
function Ue(a,b){return F(a,3,b)}
function Ve(a,b){return F(a,4,b)}
function We(a,b){return F(a,5,b)}
function Xe(a,b){return F(a,9,b)}
function Ye(a,b){return ld(a,Ze,10,b)}
function $e(a,b){return F(a,11,b)}
function af(a,b){return F(a,1,b)}
function Ze(a){I.call(this,a)}
v(Ze,I);var Se=[10,6];var bf="platform platformVersion architecture model uaFullVersion bitness fullVersionList wow64".split(" ");function cf(a){var b;return null!=(b=a.google_tag_data)?b:a.google_tag_data={}}
function df(a){var b,c;if("function"!==typeof(null==(b=a.navigator)?void 0:null==(c=b.userAgentData)?void 0:c.getHighEntropyValues))return null;var d=cf(a);if(d.uach_promise)return d.uach_promise;a=a.navigator.userAgentData.getHighEntropyValues(bf).then(function(e){null!=d.uach||(d.uach=e);return e});
return d.uach_promise=a}
function ef(a){var b;return $e(Ye(Xe(We(Ve(Ue(Te(af(new Re,a.platform||""),a.platformVersion||""),a.architecture||""),a.model||""),a.uaFullVersion||""),a.bitness||""),(null==(b=a.fullVersionList)?void 0:b.map(function(c){var d=new Ze;d=F(d,1,c.brand);return F(d,2,c.version)}))||[]),a.wow64||!1)}
function ff(){var a=window;if(Pe().B(Qd.flag,Qd.defaultValue)){var b,c;return null!=(c=null==(b=df(a))?void 0:b.then(function(g){return ef(g)}))?c:null}var d,e;
if("function"!==typeof(null==(d=a.navigator)?void 0:null==(e=d.userAgentData)?void 0:e.getHighEntropyValues))return null;var f;return null!=(f=a.navigator.userAgentData.getHighEntropyValues(bf).then(function(g){return ef(g)}))?f:null}
;function gf(a,b){this.l=a;this.o=b;this.j=0;this.i=null}
gf.prototype.get=function(){if(0<this.j){this.j--;var a=this.i;this.i=a.next;a.next=null}else a=this.l();return a};
function hf(a,b){a.o(b);100>a.j&&(a.j++,b.next=a.i,a.i=b)}
;var jf;function kf(){var a=A.MessageChannel;"undefined"===typeof a&&"undefined"!==typeof window&&window.postMessage&&window.addEventListener&&!E("Presto")&&(a=function(){var e=Fd();e.style.display="none";document.documentElement.appendChild(e);var f=e.contentWindow;e=f.document;e.open();e.close();var g="callImmediate"+Math.random(),h="file:"==f.location.protocol?"*":f.location.protocol+"//"+f.location.host;e=Va(function(k){if(("*"==h||k.origin==h)&&k.data==g)this.port1.onmessage()},this);
f.addEventListener("message",e,!1);this.port1={};this.port2={postMessage:function(){f.postMessage(g,h)}}});
if("undefined"!==typeof a&&!E("Trident")&&!E("MSIE")){var b=new a,c={},d=c;b.port1.onmessage=function(){if(void 0!==c.next){c=c.next;var e=c.Qa;c.Qa=null;e()}};
return function(e){d.next={Qa:e};d=d.next;b.port2.postMessage(0)}}return function(e){A.setTimeout(e,0)}}
;function lf(){this.j=this.i=null}
lf.prototype.add=function(a,b){var c=mf.get();c.set(a,b);this.j?this.j.next=c:this.i=c;this.j=c};
lf.prototype.remove=function(){var a=null;this.i&&(a=this.i,this.i=this.i.next,this.i||(this.j=null),a.next=null);return a};
var mf=new gf(function(){return new nf},function(a){return a.reset()});
function nf(){this.next=this.scope=this.i=null}
nf.prototype.set=function(a,b){this.i=a;this.scope=b;this.next=null};
nf.prototype.reset=function(){this.next=this.scope=this.i=null};var of,pf=!1,qf=new lf;function rf(a,b){of||sf();pf||(of(),pf=!0);qf.add(a,b)}
function sf(){if(A.Promise&&A.Promise.resolve){var a=A.Promise.resolve(void 0);of=function(){a.then(tf)}}else of=function(){var b=tf;
"function"!==typeof A.setImmediate||A.Window&&A.Window.prototype&&!E("Edge")&&A.Window.prototype.setImmediate==A.setImmediate?(jf||(jf=kf()),jf(b)):A.setImmediate(b)}}
function tf(){for(var a;a=qf.remove();){try{a.i.call(a.scope)}catch(b){Uc(b)}hf(mf,a)}pf=!1}
;function uf(a,b){this.i=a[A.Symbol.iterator]();this.j=b}
uf.prototype[Symbol.iterator]=function(){return this};
uf.prototype.next=function(){var a=this.i.next();return{value:a.done?void 0:this.j.call(void 0,a.value),done:a.done}};
function vf(a,b){return new uf(a,b)}
;function wf(){this.blockSize=-1}
;function xf(){this.blockSize=-1;this.blockSize=64;this.i=[];this.m=[];this.v=[];this.l=[];this.l[0]=128;for(var a=1;a<this.blockSize;++a)this.l[a]=0;this.o=this.j=0;this.reset()}
Wa(xf,wf);xf.prototype.reset=function(){this.i[0]=1732584193;this.i[1]=4023233417;this.i[2]=2562383102;this.i[3]=271733878;this.i[4]=3285377520;this.o=this.j=0};
function yf(a,b,c){c||(c=0);var d=a.v;if("string"===typeof b)for(var e=0;16>e;e++)d[e]=b.charCodeAt(c)<<24|b.charCodeAt(c+1)<<16|b.charCodeAt(c+2)<<8|b.charCodeAt(c+3),c+=4;else for(e=0;16>e;e++)d[e]=b[c]<<24|b[c+1]<<16|b[c+2]<<8|b[c+3],c+=4;for(e=16;80>e;e++){var f=d[e-3]^d[e-8]^d[e-14]^d[e-16];d[e]=(f<<1|f>>>31)&4294967295}b=a.i[0];c=a.i[1];var g=a.i[2],h=a.i[3],k=a.i[4];for(e=0;80>e;e++){if(40>e)if(20>e){f=h^c&(g^h);var l=1518500249}else f=c^g^h,l=1859775393;else 60>e?(f=c&g|h&(c|g),l=2400959708):
(f=c^g^h,l=3395469782);f=(b<<5|b>>>27)+f+k+l+d[e]&4294967295;k=h;h=g;g=(c<<30|c>>>2)&4294967295;c=b;b=f}a.i[0]=a.i[0]+b&4294967295;a.i[1]=a.i[1]+c&4294967295;a.i[2]=a.i[2]+g&4294967295;a.i[3]=a.i[3]+h&4294967295;a.i[4]=a.i[4]+k&4294967295}
xf.prototype.update=function(a,b){if(null!=a){void 0===b&&(b=a.length);for(var c=b-this.blockSize,d=0,e=this.m,f=this.j;d<b;){if(0==f)for(;d<=c;)yf(this,a,d),d+=this.blockSize;if("string"===typeof a)for(;d<b;){if(e[f]=a.charCodeAt(d),++f,++d,f==this.blockSize){yf(this,e);f=0;break}}else for(;d<b;)if(e[f]=a[d],++f,++d,f==this.blockSize){yf(this,e);f=0;break}}this.j=f;this.o+=b}};
xf.prototype.digest=function(){var a=[],b=8*this.o;56>this.j?this.update(this.l,56-this.j):this.update(this.l,this.blockSize-(this.j-56));for(var c=this.blockSize-1;56<=c;c--)this.m[c]=b&255,b/=256;yf(this,this.m);for(c=b=0;5>c;c++)for(var d=24;0<=d;d-=8)a[b]=this.i[c]>>d&255,++b;return a};function zf(){}
zf.prototype.next=function(){return Af};
var Af={done:!0,value:void 0};function Bf(a){return{value:a,done:!1}}
zf.prototype.L=function(){return this};function Cf(a){if(a instanceof Df||a instanceof Ef||a instanceof Ff)return a;if("function"==typeof a.next)return new Df(function(){return a});
if("function"==typeof a[Symbol.iterator])return new Df(function(){return a[Symbol.iterator]()});
if("function"==typeof a.L)return new Df(function(){return a.L()});
throw Error("Not an iterator or iterable.");}
function Df(a){this.j=a}
Df.prototype.L=function(){return new Ef(this.j())};
Df.prototype[Symbol.iterator]=function(){return new Ff(this.j())};
Df.prototype.i=function(){return new Ff(this.j())};
function Ef(a){this.j=a}
v(Ef,zf);Ef.prototype.next=function(){return this.j.next()};
Ef.prototype[Symbol.iterator]=function(){return new Ff(this.j)};
Ef.prototype.i=function(){return new Ff(this.j)};
function Ff(a){Df.call(this,function(){return a});
this.l=a}
v(Ff,Df);Ff.prototype.next=function(){return this.l.next()};function Gf(a,b){this.j={};this.i=[];this.l=this.size=0;var c=arguments.length;if(1<c){if(c%2)throw Error("Uneven number of arguments");for(var d=0;d<c;d+=2)this.set(arguments[d],arguments[d+1])}else if(a)if(a instanceof Gf)for(c=Hf(a),d=0;d<c.length;d++)this.set(c[d],a.get(c[d]));else for(d in a)this.set(d,a[d])}
function Hf(a){If(a);return a.i.concat()}
n=Gf.prototype;n.has=function(a){return Jf(this.j,a)};
n.equals=function(a,b){if(this===a)return!0;if(this.size!=a.size)return!1;b=b||Kf;If(this);for(var c,d=0;c=this.i[d];d++)if(!b(this.get(c),a.get(c)))return!1;return!0};
function Kf(a,b){return a===b}
n.isEmpty=function(){return 0==this.size};
n.clear=function(){this.j={};this.l=this.size=this.i.length=0};
n.remove=function(a){return this.delete(a)};
n.delete=function(a){return Jf(this.j,a)?(delete this.j[a],--this.size,this.l++,this.i.length>2*this.size&&If(this),!0):!1};
function If(a){if(a.size!=a.i.length){for(var b=0,c=0;b<a.i.length;){var d=a.i[b];Jf(a.j,d)&&(a.i[c++]=d);b++}a.i.length=c}if(a.size!=a.i.length){var e={};for(c=b=0;b<a.i.length;)d=a.i[b],Jf(e,d)||(a.i[c++]=d,e[d]=1),b++;a.i.length=c}}
n.get=function(a,b){return Jf(this.j,a)?this.j[a]:b};
n.set=function(a,b){Jf(this.j,a)||(this.size+=1,this.i.push(a),this.l++);this.j[a]=b};
n.forEach=function(a,b){for(var c=Hf(this),d=0;d<c.length;d++){var e=c[d],f=this.get(e);a.call(b,f,e,this)}};
n.clone=function(){return new Gf(this)};
n.keys=function(){return Cf(this.L(!0)).i()};
n.values=function(){return Cf(this.L(!1)).i()};
n.entries=function(){var a=this;return vf(this.keys(),function(b){return[b,a.get(b)]})};
n.L=function(a){If(this);var b=0,c=this.l,d=this,e=new zf;e.next=function(){if(c!=d.l)throw Error("The map has changed since the iterator was created");if(b>=d.i.length)return Af;var f=d.i[b++];return Bf(a?f:d.j[f])};
return e};
function Jf(a,b){return Object.prototype.hasOwnProperty.call(a,b)}
;var Lf=A.JSON.stringify;function Mf(){var a=this;this.promise=new Promise(function(b,c){a.resolve=b;a.reject=c})}
;function Nf(a){this.i=0;this.u=void 0;this.o=this.j=this.l=null;this.m=this.v=!1;if(a!=ab)try{var b=this;a.call(void 0,function(c){Of(b,2,c)},function(c){Of(b,3,c)})}catch(c){Of(this,3,c)}}
function lg(){this.next=this.context=this.onRejected=this.j=this.i=null;this.l=!1}
lg.prototype.reset=function(){this.context=this.onRejected=this.j=this.i=null;this.l=!1};
var mg=new gf(function(){return new lg},function(a){a.reset()});
function ng(a,b,c){var d=mg.get();d.j=a;d.onRejected=b;d.context=c;return d}
Nf.prototype.then=function(a,b,c){return og(this,"function"===typeof a?a:null,"function"===typeof b?b:null,c)};
Nf.prototype.$goog_Thenable=!0;Nf.prototype.cancel=function(a){if(0==this.i){var b=new pg(a);rf(function(){qg(this,b)},this)}};
function qg(a,b){if(0==a.i)if(a.l){var c=a.l;if(c.j){for(var d=0,e=null,f=null,g=c.j;g&&(g.l||(d++,g.i==a&&(e=g),!(e&&1<d)));g=g.next)e||(f=g);e&&(0==c.i&&1==d?qg(c,b):(f?(d=f,d.next==c.o&&(c.o=d),d.next=d.next.next):rg(c),sg(c,e,3,b)))}a.l=null}else Of(a,3,b)}
function tg(a,b){a.j||2!=a.i&&3!=a.i||ug(a);a.o?a.o.next=b:a.j=b;a.o=b}
function og(a,b,c,d){var e=ng(null,null,null);e.i=new Nf(function(f,g){e.j=b?function(h){try{var k=b.call(d,h);f(k)}catch(l){g(l)}}:f;
e.onRejected=c?function(h){try{var k=c.call(d,h);void 0===k&&h instanceof pg?g(h):f(k)}catch(l){g(l)}}:g});
e.i.l=a;tg(a,e);return e.i}
Nf.prototype.J=function(a){this.i=0;Of(this,2,a)};
Nf.prototype.P=function(a){this.i=0;Of(this,3,a)};
function Of(a,b,c){if(0==a.i){a===c&&(b=3,c=new TypeError("Promise cannot resolve to itself"));a.i=1;a:{var d=c,e=a.J,f=a.P;if(d instanceof Nf){tg(d,ng(e||ab,f||null,a));var g=!0}else{if(d)try{var h=!!d.$goog_Thenable}catch(l){h=!1}else h=!1;if(h)d.then(e,f,a),g=!0;else{if(Pa(d))try{var k=d.then;if("function"===typeof k){vg(d,k,e,f,a);g=!0;break a}}catch(l){f.call(a,l);g=!0;break a}g=!1}}}g||(a.u=c,a.i=b,a.l=null,ug(a),3!=b||c instanceof pg||wg(a,c))}}
function vg(a,b,c,d,e){function f(k){h||(h=!0,d.call(e,k))}
function g(k){h||(h=!0,c.call(e,k))}
var h=!1;try{b.call(a,g,f)}catch(k){f(k)}}
function ug(a){a.v||(a.v=!0,rf(a.C,a))}
function rg(a){var b=null;a.j&&(b=a.j,a.j=b.next,b.next=null);a.j||(a.o=null);return b}
Nf.prototype.C=function(){for(var a;a=rg(this);)sg(this,a,this.i,this.u);this.v=!1};
function sg(a,b,c,d){if(3==c&&b.onRejected&&!b.l)for(;a&&a.m;a=a.l)a.m=!1;if(b.i)b.i.l=null,xg(b,c,d);else try{b.l?b.j.call(b.context):xg(b,c,d)}catch(e){yg.call(null,e)}hf(mg,b)}
function xg(a,b,c){2==b?a.j.call(a.context,c):a.onRejected&&a.onRejected.call(a.context,c)}
function wg(a,b){a.m=!0;rf(function(){a.m&&yg.call(null,b)})}
var yg=Uc;function pg(a){Ya.call(this,a)}
Wa(pg,Ya);pg.prototype.name="cancel";function L(a){ce.call(this);this.u=1;this.l=[];this.m=0;this.i=[];this.j={};this.C=!!a}
Wa(L,ce);n=L.prototype;n.subscribe=function(a,b,c){var d=this.j[a];d||(d=this.j[a]=[]);var e=this.u;this.i[e]=a;this.i[e+1]=b;this.i[e+2]=c;this.u=e+3;d.push(e);return e};
function zg(a,b,c){var d=Ag;if(a=d.j[a]){var e=d.i;(a=a.find(function(f){return e[f+1]==b&&e[f+2]==c}))&&d.oa(a)}}
n.oa=function(a){var b=this.i[a];if(b){var c=this.j[b];0!=this.m?(this.l.push(a),this.i[a+1]=function(){}):(c&&eb(c,a),delete this.i[a],delete this.i[a+1],delete this.i[a+2])}return!!b};
n.fa=function(a,b){var c=this.j[a];if(c){for(var d=Array(arguments.length-1),e=1,f=arguments.length;e<f;e++)d[e-1]=arguments[e];if(this.C)for(e=0;e<c.length;e++){var g=c[e];Bg(this.i[g+1],this.i[g+2],d)}else{this.m++;try{for(e=0,f=c.length;e<f&&!this.o;e++)g=c[e],this.i[g+1].apply(this.i[g+2],d)}finally{if(this.m--,0<this.l.length&&0==this.m)for(;c=this.l.pop();)this.oa(c)}}return 0!=e}return!1};
function Bg(a,b,c){rf(function(){a.apply(b,c)})}
n.clear=function(a){if(a){var b=this.j[a];b&&(b.forEach(this.oa,this),delete this.j[a])}else this.i.length=0,this.j={}};
n.ia=function(){L.O.ia.call(this);this.clear();this.l.length=0};function Cg(a){this.i=a}
Cg.prototype.set=function(a,b){void 0===b?this.i.remove(a):this.i.set(a,Lf(b))};
Cg.prototype.get=function(a){try{var b=this.i.get(a)}catch(c){return}if(null!==b)try{return JSON.parse(b)}catch(c){throw"Storage: Invalid value was encountered";}};
Cg.prototype.remove=function(a){this.i.remove(a)};function Dg(a){this.i=a}
Wa(Dg,Cg);function Eg(a){this.data=a}
function Fg(a){return void 0===a||a instanceof Eg?a:new Eg(a)}
Dg.prototype.set=function(a,b){Dg.O.set.call(this,a,Fg(b))};
Dg.prototype.j=function(a){a=Dg.O.get.call(this,a);if(void 0===a||a instanceof Object)return a;throw"Storage: Invalid value was encountered";};
Dg.prototype.get=function(a){if(a=this.j(a)){if(a=a.data,void 0===a)throw"Storage: Invalid value was encountered";}else a=void 0;return a};function Gg(a){this.i=a}
Wa(Gg,Dg);Gg.prototype.set=function(a,b,c){if(b=Fg(b)){if(c){if(c<Date.now()){Gg.prototype.remove.call(this,a);return}b.expiration=c}b.creation=Date.now()}Gg.O.set.call(this,a,b)};
Gg.prototype.j=function(a){var b=Gg.O.j.call(this,a);if(b){var c=b.creation,d=b.expiration;if(d&&d<Date.now()||c&&c>Date.now())Gg.prototype.remove.call(this,a);else return b}};function Hg(){}
;function Ig(){}
Wa(Ig,Hg);Ig.prototype[Symbol.iterator]=function(){return Cf(this.L(!0)).i()};
Ig.prototype.clear=function(){var a=Array.from(this);a=u(a);for(var b=a.next();!b.done;b=a.next())this.remove(b.value)};function Jg(a){this.i=a}
Wa(Jg,Ig);n=Jg.prototype;n.isAvailable=function(){if(!this.i)return!1;try{return this.i.setItem("__sak","1"),this.i.removeItem("__sak"),!0}catch(a){return!1}};
n.set=function(a,b){try{this.i.setItem(a,b)}catch(c){if(0==this.i.length)throw"Storage mechanism: Storage disabled";throw"Storage mechanism: Quota exceeded";}};
n.get=function(a){a=this.i.getItem(a);if("string"!==typeof a&&null!==a)throw"Storage mechanism: Invalid value was encountered";return a};
n.remove=function(a){this.i.removeItem(a)};
n.L=function(a){var b=0,c=this.i,d=new zf;d.next=function(){if(b>=c.length)return Af;var e=c.key(b++);if(a)return Bf(e);e=c.getItem(e);if("string"!==typeof e)throw"Storage mechanism: Invalid value was encountered";return Bf(e)};
return d};
n.clear=function(){this.i.clear()};
n.key=function(a){return this.i.key(a)};function Kg(){var a=null;try{a=window.localStorage||null}catch(b){}this.i=a}
Wa(Kg,Jg);function Lg(a,b){this.j=a;this.i=null;var c;if(c=ec)c=!(9<=Number(qc));if(c){Mg||(Mg=new Gf);this.i=Mg.get(a);this.i||(b?this.i=document.getElementById(b):(this.i=document.createElement("userdata"),this.i.addBehavior("#default#userData"),document.body.appendChild(this.i)),Mg.set(a,this.i));try{this.i.load(this.j)}catch(d){this.i=null}}}
Wa(Lg,Ig);var Ng={".":".2E","!":".21","~":".7E","*":".2A","'":".27","(":".28",")":".29","%":"."},Mg=null;function Og(a){return"_"+encodeURIComponent(a).replace(/[.!~*'()%]/g,function(b){return Ng[b]})}
n=Lg.prototype;n.isAvailable=function(){return!!this.i};
n.set=function(a,b){this.i.setAttribute(Og(a),b);Pg(this)};
n.get=function(a){a=this.i.getAttribute(Og(a));if("string"!==typeof a&&null!==a)throw"Storage mechanism: Invalid value was encountered";return a};
n.remove=function(a){this.i.removeAttribute(Og(a));Pg(this)};
n.L=function(a){var b=0,c=this.i.XMLDocument.documentElement.attributes,d=new zf;d.next=function(){if(b>=c.length)return Af;var e=c[b++];if(a)return Bf(decodeURIComponent(e.nodeName.replace(/\./g,"%")).slice(1));e=e.nodeValue;if("string"!==typeof e)throw"Storage mechanism: Invalid value was encountered";return Bf(e)};
return d};
n.clear=function(){for(var a=this.i.XMLDocument.documentElement,b=a.attributes.length;0<b;b--)a.removeAttribute(a.attributes[b-1].nodeName);Pg(this)};
function Pg(a){try{a.i.save(a.j)}catch(b){throw"Storage mechanism: Quota exceeded";}}
;function Qg(a,b){this.j=a;this.i=b+"::"}
Wa(Qg,Ig);Qg.prototype.set=function(a,b){this.j.set(this.i+a,b)};
Qg.prototype.get=function(a){return this.j.get(this.i+a)};
Qg.prototype.remove=function(a){this.j.remove(this.i+a)};
Qg.prototype.L=function(a){var b=this.j[Symbol.iterator](),c=this,d=new zf;d.next=function(){var e=b.next();if(e.done)return e;for(e=e.value;e.slice(0,c.i.length)!=c.i;){e=b.next();if(e.done)return e;e=e.value}return Bf(a?e.slice(c.i.length):c.j.get(e))};
return d};function Rg(a){I.call(this,a)}
v(Rg,I);Rg.prototype.getKey=function(){return ed(this,1)};
Rg.prototype.X=function(){return ed(this,2===hd(this,Sg)?2:-1)};
Rg.prototype.setValue=function(a){return gd(this,2,Sg,a)};
var Sg=[2,3,4,5,6];function Tg(a){I.call(this,a)}
v(Tg,I);function Ug(a){I.call(this,a)}
v(Ug,I);function Vg(a){I.call(this,a,-1,Wg)}
v(Vg,I);var Wg=[2];function Xg(a){I.call(this,a,-1,Yg)}
v(Xg,I);Xg.prototype.getPlayerType=function(){return ed(this,36)};
Xg.prototype.setHomeGroupInfo=function(a){return H(this,Vg,81,a)};
var Yg=[9,66,24,32,86,100,101];function Zg(a){I.call(this,a,-1,$g)}
v(Zg,I);var $g=[15,26,28];function ah(a){I.call(this,a)}
v(ah,I);ah.prototype.setToken=function(a){return F(this,2,a)};function bh(a){I.call(this,a,-1,ch)}
v(bh,I);bh.prototype.setSafetyMode=function(a){return F(this,5,a)};
var ch=[12];function dh(a){I.call(this,a,-1,eh)}
v(dh,I);var eh=[12];function fh(a){I.call(this,a,-1,gh)}
v(fh,I);function hh(a){I.call(this,a)}
v(hh,I);hh.prototype.getKey=function(){return nd(this,1)};
hh.prototype.X=function(){return nd(this,2)};
hh.prototype.setValue=function(a){return F(this,2,a)};
var gh=[4,5];function ih(a){I.call(this,a)}
v(ih,I);function jh(a){I.call(this,a)}
v(jh,I);var kh=[2,3,4];function lh(a){I.call(this,a)}
v(lh,I);function mh(a){I.call(this,a)}
v(mh,I);function nh(a){I.call(this,a)}
v(nh,I);function oh(a){I.call(this,a,-1,ph)}
v(oh,I);var ph=[10,17];function qh(a){I.call(this,a)}
v(qh,I);function rh(a){I.call(this,a)}
v(rh,I);function sh(a){I.call(this,a)}
v(sh,I);function th(a){I.call(this,a,432)}
v(th,I);
var uh=[23,24,11,6,7,5,2,3,20,21,28,32,37,229,241,45,59,225,288,72,73,78,208,156,202,215,74,76,79,80,111,85,91,97,100,102,105,119,126,127,136,146,148,157,158,159,163,164,168,176,222,383,177,178,179,411,184,188,189,190,191,193,194,195,196,198,199,200,201,203,204,205,206,258,259,260,261,209,226,227,232,233,234,240,247,248,251,254,255,270,278,291,293,300,304,308,309,310,311,313,314,319,321,323,324,328,330,331,332,334,337,338,340,344,348,350,351,352,353,354,355,356,357,358,361,363,364,368,369,370,373,
374,375,378,380,381,388,389,403,412,429,413,414,415,416,417,418,430,423,424,425,426,427,431,117];function vh(a){I.call(this,a)}
v(vh,I);function wh(a){I.call(this,a)}
v(wh,I);wh.prototype.setVideoId=function(a){return gd(this,1,xh,a)};
wh.prototype.getPlaylistId=function(){return ed(this,2===hd(this,xh)?2:-1)};
var xh=[1,2];function yh(a){I.call(this,a,-1,zh)}
v(yh,I);var zh=[3];var Ah=A.window,Bh,Ch,Dh=(null==Ah?void 0:null==(Bh=Ah.yt)?void 0:Bh.config_)||(null==Ah?void 0:null==(Ch=Ah.ytcfg)?void 0:Ch.data_)||{};C("yt.config_",Dh);function Eh(){var a=arguments;1<a.length?Dh[a[0]]=a[1]:1===a.length&&Object.assign(Dh,a[0])}
function N(a,b){return a in Dh?Dh[a]:b}
function Fh(){return N("LATEST_ECATCHER_SERVICE_TRACKING_PARAMS")}
function Gh(){var a=Dh.EXPERIMENT_FLAGS;return a?a.web_disable_gel_stp_ecatcher_killswitch:void 0}
;var Hh=[];function Ih(a){Hh.forEach(function(b){return b(a)})}
function Jh(a){return a&&window.yterr?function(){try{return a.apply(this,arguments)}catch(b){Kh(b)}}:a}
function Kh(a,b,c,d){var e=B("yt.logging.errors.log");e?e(a,"ERROR",b,c,d):(e=N("ERRORS",[]),e.push([a,"ERROR",b,c,d]),Eh("ERRORS",e));Ih(a)}
function Lh(a,b,c,d){var e=B("yt.logging.errors.log");e?e(a,"WARNING",b,c,d):(e=N("ERRORS",[]),e.push([a,"WARNING",b,c,d]),Eh("ERRORS",e))}
;var Mh=0;C("ytDomDomGetNextId",B("ytDomDomGetNextId")||function(){return++Mh});var Nh={stopImmediatePropagation:1,stopPropagation:1,preventMouseEvent:1,preventManipulation:1,preventDefault:1,layerX:1,layerY:1,screenX:1,screenY:1,scale:1,rotation:1,webkitMovementX:1,webkitMovementY:1};
function Oh(a){this.type="";this.state=this.source=this.data=this.currentTarget=this.relatedTarget=this.target=null;this.charCode=this.keyCode=0;this.metaKey=this.shiftKey=this.ctrlKey=this.altKey=!1;this.rotation=this.clientY=this.clientX=0;this.changedTouches=this.touches=null;try{if(a=a||window.event){this.event=a;for(var b in a)b in Nh||(this[b]=a[b]);this.rotation=a.rotation;var c=a.target||a.srcElement;c&&3==c.nodeType&&(c=c.parentNode);this.target=c;var d=a.relatedTarget;if(d)try{d=d.nodeName?
d:null}catch(e){d=null}else"mouseover"==this.type?d=a.fromElement:"mouseout"==this.type&&(d=a.toElement);this.relatedTarget=d;this.clientX=void 0!=a.clientX?a.clientX:a.pageX;this.clientY=void 0!=a.clientY?a.clientY:a.pageY;this.keyCode=a.keyCode?a.keyCode:a.which;this.charCode=a.charCode||("keypress"==this.type?this.keyCode:0);this.altKey=a.altKey;this.ctrlKey=a.ctrlKey;this.shiftKey=a.shiftKey;this.metaKey=a.metaKey}}catch(e){}}
Oh.prototype.preventDefault=function(){this.event&&(this.event.returnValue=!1,this.event.preventDefault&&this.event.preventDefault())};
Oh.prototype.stopPropagation=function(){this.event&&(this.event.cancelBubble=!0,this.event.stopPropagation&&this.event.stopPropagation())};
Oh.prototype.stopImmediatePropagation=function(){this.event&&(this.event.cancelBubble=!0,this.event.stopImmediatePropagation&&this.event.stopImmediatePropagation())};var lb=A.ytEventsEventsListeners||{};C("ytEventsEventsListeners",lb);var Ph=A.ytEventsEventsCounter||{count:0};C("ytEventsEventsCounter",Ph);
function Qh(a,b,c,d){d=void 0===d?{}:d;a.addEventListener&&("mouseenter"!=b||"onmouseenter"in document?"mouseleave"!=b||"onmouseenter"in document?"mousewheel"==b&&"MozBoxSizing"in document.documentElement.style&&(b="MozMousePixelScroll"):b="mouseout":b="mouseover");return jb(function(e){var f="boolean"===typeof e[4]&&e[4]==!!d,g=Pa(e[4])&&Pa(d)&&mb(e[4],d);return!!e.length&&e[0]==a&&e[1]==b&&e[2]==c&&(f||g)})}
function Rh(a){a&&("string"==typeof a&&(a=[a]),D(a,function(b){if(b in lb){var c=lb[b],d=c[0],e=c[1],f=c[3];c=c[4];d.removeEventListener?Sh()||"boolean"===typeof c?d.removeEventListener(e,f,c):d.removeEventListener(e,f,!!c.capture):d.detachEvent&&d.detachEvent("on"+e,f);delete lb[b]}}))}
var Sh=bb(function(){var a=!1;try{var b=Object.defineProperty({},"capture",{get:function(){a=!0}});
window.addEventListener("test",null,b)}catch(c){}return a});
function Th(a,b,c){var d=void 0===d?{}:d;if(a&&(a.addEventListener||a.attachEvent)){var e=Qh(a,b,c,d);if(!e){e=++Ph.count+"";var f=!("mouseenter"!=b&&"mouseleave"!=b||!a.addEventListener||"onmouseenter"in document);var g=f?function(h){h=new Oh(h);if(!Gd(h.relatedTarget,function(k){return k==a}))return h.currentTarget=a,h.type=b,c.call(a,h)}:function(h){h=new Oh(h);
h.currentTarget=a;return c.call(a,h)};
g=Jh(g);a.addEventListener?("mouseenter"==b&&f?b="mouseover":"mouseleave"==b&&f?b="mouseout":"mousewheel"==b&&"MozBoxSizing"in document.documentElement.style&&(b="MozMousePixelScroll"),Sh()||"boolean"===typeof d?a.addEventListener(b,g,d):a.addEventListener(b,g,!!d.capture)):a.attachEvent("on"+b,g);lb[e]=[a,b,c,g,d]}}}
;function Uh(a,b){"function"===typeof a&&(a=Jh(a));return window.setTimeout(a,b)}
function Vh(a){"function"===typeof a&&(a=Jh(a));return window.setInterval(a,250)}
;var Wh=/^[\w.]*$/,Xh={q:!0,search_query:!0};function Yh(a,b){b=a.split(b);for(var c={},d=0,e=b.length;d<e;d++){var f=b[d].split("=");if(1==f.length&&f[0]||2==f.length)try{var g=Zh(f[0]||""),h=Zh(f[1]||"");g in c?Array.isArray(c[g])?hb(c[g],h):c[g]=[c[g],h]:c[g]=h}catch(q){var k=q,l=f[0],m=String(Yh);k.args=[{key:l,value:f[1],query:a,method:$h==m?"unchanged":m}];Xh.hasOwnProperty(l)||Lh(k)}}return c}
var $h=String(Yh);function ai(a){var b=[];ib(a,function(c,d){var e=encodeURIComponent(String(d)),f;Array.isArray(c)?f=c:f=[c];D(f,function(g){""==g?b.push(e):b.push(e+"="+encodeURIComponent(String(g)))})});
return b.join("&")}
function bi(a){"?"==a.charAt(0)&&(a=a.substr(1));return Yh(a,"&")}
function ci(a,b,c){var d=a.split("#",2);a=d[0];d=1<d.length?"#"+d[1]:"";var e=a.split("?",2);a=e[0];e=bi(e[1]||"");for(var f in b)!c&&null!==e&&f in e||(e[f]=b[f]);b=a;a=Tb(e);a?(c=b.indexOf("#"),0>c&&(c=b.length),f=b.indexOf("?"),0>f||f>c?(f=c,e=""):e=b.substring(f+1,c),b=[b.slice(0,f),e,b.slice(c)],c=b[1],b[1]=a?c?c+"&"+a:a:c,a=b[0]+(b[1]?"?"+b[1]:"")+b[2]):a=b;return a+d}
function di(a){if(!b)var b=window.location.href;var c=a.match(Ob)[1]||null,d=Qb(a);c&&d?(a=a.match(Ob),b=b.match(Ob),a=a[3]==b[3]&&a[1]==b[1]&&a[4]==b[4]):a=d?Qb(b)==d&&(Number(b.match(Ob)[4]||null)||null)==(Number(a.match(Ob)[4]||null)||null):!0;return a}
function Zh(a){return a&&a.match(Wh)?a:decodeURIComponent(a.replace(/\+/g," "))}
;function O(a){a=ei(a);return"string"===typeof a&&"false"===a?!1:!!a}
function fi(a,b){a=ei(a);return void 0===a&&void 0!==b?b:Number(a||0)}
function ei(a){var b=N("EXPERIMENTS_FORCED_FLAGS",{});return void 0!==b[a]?b[a]:N("EXPERIMENT_FLAGS",{})[a]}
function gi(){var a=[],b=N("EXPERIMENTS_FORCED_FLAGS",{});for(c in b)a.push({key:c,value:String(b[c])});var c=N("EXPERIMENT_FLAGS",{});for(var d in c)d.startsWith("force_")&&void 0===b[d]&&a.push({key:d,value:String(c[d])});return a}
;function hi(a){var b=ii;a=void 0===a?B("yt.ads.biscotti.lastId_")||"":a;var c=Object,d=c.assign,e={};e.dt=Pd;e.flash="0";a:{try{var f=b.i.top.location.href}catch(X){f=2;break a}f=f?f===b.j.location.href?0:1:2}e=(e.frm=f,e);try{e.u_tz=-(new Date).getTimezoneOffset();var g=void 0===g?xd:g;try{var h=g.history.length}catch(X){h=0}e.u_his=h;var k;e.u_h=null==(k=xd.screen)?void 0:k.height;var l;e.u_w=null==(l=xd.screen)?void 0:l.width;var m;e.u_ah=null==(m=xd.screen)?void 0:m.availHeight;var q;e.u_aw=null==
(q=xd.screen)?void 0:q.availWidth;var t;e.u_cd=null==(t=xd.screen)?void 0:t.colorDepth}catch(X){}h=b.i;try{var p=h.screenX;var y=h.screenY}catch(X){}try{var z=h.outerWidth;var G=h.outerHeight}catch(X){}try{var K=h.innerWidth;var M=h.innerHeight}catch(X){}try{var P=h.screenLeft;var kb=h.screenTop}catch(X){}try{K=h.innerWidth,M=h.innerHeight}catch(X){}try{var uc=h.screen.availWidth;var va=h.screen.availTop}catch(X){}p=[P,kb,p,y,uc,va,z,G,K,M];y=b.i.top;try{var na=(y||window).document,Y="CSS1Compat"==
na.compatMode?na.documentElement:na.body;var ba=(new Ed(Y.clientWidth,Y.clientHeight)).round()}catch(X){ba=new Ed(-12245933,-12245933)}na=ba;ba={};var ca=void 0===ca?A:ca;Y=new Ne;ca.SVGElement&&ca.document.createElementNS&&Y.set(0);y=Nd();y["allow-top-navigation-by-user-activation"]&&Y.set(1);y["allow-popups-to-escape-sandbox"]&&Y.set(2);ca.crypto&&ca.crypto.subtle&&Y.set(3);ca.TextDecoder&&ca.TextEncoder&&Y.set(4);ca=Oe(Y);ba.bc=ca;ba.bih=na.height;ba.biw=na.width;ba.brdim=p.join();b=b.j;b=(ba.vis=
b.prerendering?3:{visible:1,hidden:2,prerender:3,preview:4,unloaded:5}[b.visibilityState||b.webkitVisibilityState||b.mozVisibilityState||""]||0,ba.wgl=!!xd.WebGLRenderingContext,ba);c=d.call(c,e,b);c.ca_type="image";a&&(c.bid=a);return c}
var ii=new function(){var a=window.document;this.i=window;this.j=a};
C("yt.ads_.signals_.getAdSignalsString",function(a){return ai(hi(a))});Date.now();var ji="XMLHttpRequest"in A?function(){return new XMLHttpRequest}:null;
function ki(){if(!ji)return null;var a=ji();return"open"in a?a:null}
;var li={Authorization:"AUTHORIZATION","X-Goog-EOM-Visitor-Id":"EOM_VISITOR_DATA","X-Goog-Visitor-Id":"SANDBOXED_VISITOR_ID","X-Youtube-Domain-Admin-State":"DOMAIN_ADMIN_STATE","X-Youtube-Chrome-Connected":"CHROME_CONNECTED_HEADER","X-YouTube-Client-Name":"INNERTUBE_CONTEXT_CLIENT_NAME","X-YouTube-Client-Version":"INNERTUBE_CONTEXT_CLIENT_VERSION","X-YouTube-Delegation-Context":"INNERTUBE_CONTEXT_SERIALIZED_DELEGATION_CONTEXT","X-YouTube-Device":"DEVICE","X-Youtube-Identity-Token":"ID_TOKEN","X-YouTube-Page-CL":"PAGE_CL",
"X-YouTube-Page-Label":"PAGE_BUILD_LABEL","X-YouTube-Variants-Checksum":"VARIANTS_CHECKSUM"},mi="app debugcss debugjs expflag force_ad_params force_ad_encrypted force_viral_ad_response_params forced_experiments innertube_snapshots innertube_goldens internalcountrycode internalipoverride absolute_experiments conditional_experiments sbb sr_bns_address".split(" ").concat(ia(Sd)),ni=!1;
function oi(a,b){b=void 0===b?{}:b;var c=di(a),d=O("web_ajax_ignore_global_headers_if_set"),e;for(e in li){var f=N(li[e]);O("enable_visitor_header_for_vss")&&"X-Goog-Visitor-Id"===e&&!f&&(f=N("VISITOR_DATA"));!f||!c&&Qb(a)||d&&void 0!==b[e]||!O("enable_web_eom_visitor_data")&&"X-Goog-EOM-Visitor-Id"===e||(b[e]=f)}"X-Goog-EOM-Visitor-Id"in b&&"X-Goog-Visitor-Id"in b&&delete b["X-Goog-Visitor-Id"];if(c||!Qb(a))b["X-YouTube-Utc-Offset"]=String(-(new Date).getTimezoneOffset());if(c||!Qb(a)){try{var g=
(new Intl.DateTimeFormat).resolvedOptions().timeZone}catch(h){}g&&(b["X-YouTube-Time-Zone"]=g)}if(c||!Qb(a))b["X-YouTube-Ad-Signals"]=ai(hi());return b}
function pi(a){var b=window.location.search,c=Qb(a);O("debug_handle_relative_url_for_query_forward_killswitch")||c||!di(a)||(c=document.location.hostname);var d=Pb(a.match(Ob)[5]||null);d=(c=c&&(c.endsWith("youtube.com")||c.endsWith("youtube-nocookie.com")))&&d&&d.startsWith("/api/");if(!c||d)return a;var e=bi(b),f={};D(mi,function(g){e[g]&&(f[g]=e[g])});
return ci(a,f||{},!1)}
function qi(a,b){var c=b.format||"JSON";a=ri(a,b);var d=si(a,b),e=!1,f=ti(a,function(k){if(!e){e=!0;h&&window.clearTimeout(h);a:switch(k&&"status"in k?k.status:-1){case 200:case 201:case 202:case 203:case 204:case 205:case 206:case 304:var l=!0;break a;default:l=!1}var m=null,q=400<=k.status&&500>k.status,t=500<=k.status&&600>k.status;if(l||q||t)m=ui(a,c,k,b.convertToSafeHtml);if(l)a:if(k&&204==k.status)l=!0;else{switch(c){case "XML":l=0==parseInt(m&&m.return_code,10);break a;case "RAW":l=!0;break a}l=
!!m}m=m||{};q=b.context||A;l?b.onSuccess&&b.onSuccess.call(q,k,m):b.onError&&b.onError.call(q,k,m);b.onFinish&&b.onFinish.call(q,k,m)}},b.method,d,b.headers,b.responseType,b.withCredentials);
d=b.timeout||0;if(b.onTimeout&&0<d){var g=b.onTimeout;var h=Uh(function(){e||(e=!0,f.abort(),window.clearTimeout(h),g.call(b.context||A,f))},d)}}
function ri(a,b){b.includeDomain&&(a=document.location.protocol+"//"+document.location.hostname+(document.location.port?":"+document.location.port:"")+a);var c=N("XSRF_FIELD_NAME");if(b=b.urlParams)b[c]&&delete b[c],a=ci(a,b||{},!0);return a}
function si(a,b){var c=N("XSRF_FIELD_NAME"),d=N("XSRF_TOKEN"),e=b.postBody||"",f=b.postParams,g=N("XSRF_FIELD_NAME"),h;b.headers&&(h=b.headers["Content-Type"]);b.excludeXsrf||Qb(a)&&!b.withCredentials&&Qb(a)!=document.location.hostname||"POST"!=b.method||h&&"application/x-www-form-urlencoded"!=h||b.postParams&&b.postParams[g]||(f||(f={}),f[c]=d);f&&"string"===typeof e&&(e=bi(e),pb(e,f),e=b.postBodyFormat&&"JSON"==b.postBodyFormat?JSON.stringify(e):Tb(e));if(!(a=e)&&(a=f)){a:{for(var k in f){f=!1;
break a}f=!0}a=!f}!ni&&a&&"POST"!=b.method&&(ni=!0,Kh(Error("AJAX request with postData should use POST")));return e}
function ui(a,b,c,d){var e=null;switch(b){case "JSON":try{var f=c.responseText}catch(g){throw d=Error("Error reading responseText"),d.params=a,Lh(d),g;}a=c.getResponseHeader("Content-Type")||"";f&&0<=a.indexOf("json")&&(")]}'\n"===f.substring(0,5)&&(f=f.substring(5)),e=JSON.parse(f));break;case "XML":if(a=(a=c.responseXML)?vi(a):null)e={},D(a.getElementsByTagName("*"),function(g){e[g.tagName]=wi(g)})}d&&xi(e);
return e}
function xi(a){if(Pa(a))for(var b in a){var c;(c="html_content"==b)||(c=b.length-5,c=0<=c&&b.indexOf("_html",c)==c);if(c){c=b;xb("HTML that is escaped and sanitized server-side and passed through yt.net.ajax");var d=a[b];if(void 0===vb){var e=null;var f=A.trustedTypes;if(f&&f.createPolicy){try{e=f.createPolicy("goog#html",{createHTML:Xa,createScript:Xa,createScriptURL:Xa})}catch(g){A.console&&A.console.error(g.message)}vb=e}else vb=e}d=(e=vb)?e.createHTML(d):d;a[c]=new Nb(d)}else xi(a[b])}}
function vi(a){return a?(a=("responseXML"in a?a.responseXML:a).getElementsByTagName("root"))&&0<a.length?a[0]:null:null}
function wi(a){var b="";D(a.childNodes,function(c){b+=c.nodeValue});
return b}
function ti(a,b,c,d,e,f,g){function h(){4==(k&&"readyState"in k?k.readyState:0)&&b&&Jh(b)(k)}
c=void 0===c?"GET":c;d=void 0===d?"":d;var k=ki();if(!k)return null;"onloadend"in k?k.addEventListener("loadend",h,!1):k.onreadystatechange=h;O("debug_forward_web_query_parameters")&&(a=pi(a));k.open(c,a,!0);f&&(k.responseType=f);g&&(k.withCredentials=!0);c="POST"==c&&(void 0===window.FormData||!(d instanceof FormData));if(e=oi(a,e))for(var l in e)k.setRequestHeader(l,e[l]),"content-type"==l.toLowerCase()&&(c=!1);c&&k.setRequestHeader("Content-Type","application/x-www-form-urlencoded");k.send(d);
return k}
;var yi={Rb:"WEB_DISPLAY_MODE_UNKNOWN",Nb:"WEB_DISPLAY_MODE_BROWSER",Pb:"WEB_DISPLAY_MODE_MINIMAL_UI",Qb:"WEB_DISPLAY_MODE_STANDALONE",Ob:"WEB_DISPLAY_MODE_FULLSCREEN"};function zi(){if(!A.matchMedia)return"WEB_DISPLAY_MODE_UNKNOWN";try{return A.matchMedia("(display-mode: standalone)").matches?"WEB_DISPLAY_MODE_STANDALONE":A.matchMedia("(display-mode: minimal-ui)").matches?"WEB_DISPLAY_MODE_MINIMAL_UI":A.matchMedia("(display-mode: fullscreen)").matches?"WEB_DISPLAY_MODE_FULLSCREEN":A.matchMedia("(display-mode: browser)").matches?"WEB_DISPLAY_MODE_BROWSER":"WEB_DISPLAY_MODE_UNKNOWN"}catch(a){return"WEB_DISPLAY_MODE_UNKNOWN"}}
;C("ytglobal.prefsUserPrefsPrefs_",B("ytglobal.prefsUserPrefsPrefs_")||{});var Ai={bluetooth:"CONN_DISCO",cellular:"CONN_CELLULAR_UNKNOWN",ethernet:"CONN_WIFI",none:"CONN_NONE",wifi:"CONN_WIFI",wimax:"CONN_CELLULAR_4G",other:"CONN_UNKNOWN",unknown:"CONN_UNKNOWN","slow-2g":"CONN_CELLULAR_2G","2g":"CONN_CELLULAR_2G","3g":"CONN_CELLULAR_3G","4g":"CONN_CELLULAR_4G"},Bi={CONN_DEFAULT:0,CONN_UNKNOWN:1,CONN_NONE:2,CONN_WIFI:3,CONN_CELLULAR_2G:4,CONN_CELLULAR_3G:5,CONN_CELLULAR_4G:6,CONN_CELLULAR_UNKNOWN:7,CONN_DISCO:8,CONN_CELLULAR_5G:9,CONN_WIFI_METERED:10,CONN_CELLULAR_5G_SA:11,
CONN_CELLULAR_5G_NSA:12,CONN_INVALID:31},Ci={EFFECTIVE_CONNECTION_TYPE_UNKNOWN:0,EFFECTIVE_CONNECTION_TYPE_OFFLINE:1,EFFECTIVE_CONNECTION_TYPE_SLOW_2G:2,EFFECTIVE_CONNECTION_TYPE_2G:3,EFFECTIVE_CONNECTION_TYPE_3G:4,EFFECTIVE_CONNECTION_TYPE_4G:5},Di={"slow-2g":"EFFECTIVE_CONNECTION_TYPE_SLOW_2G","2g":"EFFECTIVE_CONNECTION_TYPE_2G","3g":"EFFECTIVE_CONNECTION_TYPE_3G","4g":"EFFECTIVE_CONNECTION_TYPE_4G"};function Ei(){var a=A.navigator;return a?a.connection:void 0}
;function Fi(){return"INNERTUBE_API_KEY"in Dh&&"INNERTUBE_API_VERSION"in Dh}
function Gi(){return{innertubeApiKey:N("INNERTUBE_API_KEY"),innertubeApiVersion:N("INNERTUBE_API_VERSION"),Ea:N("INNERTUBE_CONTEXT_CLIENT_CONFIG_INFO"),Va:N("INNERTUBE_CONTEXT_CLIENT_NAME","WEB"),sb:N("INNERTUBE_CONTEXT_CLIENT_NAME",1),innertubeContextClientVersion:N("INNERTUBE_CONTEXT_CLIENT_VERSION"),Xa:N("INNERTUBE_CONTEXT_HL"),Wa:N("INNERTUBE_CONTEXT_GL"),tb:N("INNERTUBE_HOST_OVERRIDE")||"",vb:!!N("INNERTUBE_USE_THIRD_PARTY_AUTH",!1),ub:!!N("INNERTUBE_OMIT_API_KEY_WHEN_AUTH_HEADER_IS_PRESENT",
!1),appInstallData:N("SERIALIZED_CLIENT_CONFIG_DATA")}}
function Hi(a){var b={client:{hl:a.Xa,gl:a.Wa,clientName:a.Va,clientVersion:a.innertubeContextClientVersion,configInfo:a.Ea}};navigator.userAgent&&(b.client.userAgent=String(navigator.userAgent));var c=A.devicePixelRatio;c&&1!=c&&(b.client.screenDensityFloat=String(c));c=N("EXPERIMENTS_TOKEN","");""!==c&&(b.client.experimentsToken=c);c=gi();0<c.length&&(b.request={internalExperimentFlags:c});Ii(a,void 0,b);Ji(void 0,b);Ki(a,void 0,b);Li(void 0,b);N("DELEGATED_SESSION_ID")&&!O("pageid_as_header_web")&&
(b.user={onBehalfOfUser:N("DELEGATED_SESSION_ID")});a=Object;c=a.assign;for(var d=b.client,e={},f=u(Object.entries(bi(N("DEVICE","")))),g=f.next();!g.done;g=f.next()){var h=u(g.value);g=h.next().value;h=h.next().value;"cbrand"===g?e.deviceMake=h:"cmodel"===g?e.deviceModel=h:"cbr"===g?e.browserName=h:"cbrver"===g?e.browserVersion=h:"cos"===g?e.osName=h:"cosver"===g?e.osVersion=h:"cplatform"===g&&(e.platform=h)}b.client=c.call(a,d,e);return b}
function Mi(a){var b=new dh,c=new Xg;F(c,1,a.Xa);F(c,2,a.Wa);F(c,16,a.sb);F(c,17,a.innertubeContextClientVersion);if(a.Ea){var d=a.Ea,e=new Tg;d.coldConfigData&&F(e,1,d.coldConfigData);d.appInstallData&&F(e,6,d.appInstallData);d.coldHashData&&F(e,3,d.coldHashData);d.hotHashData&&F(e,5,d.hotHashData);H(c,Tg,62,e)}(d=A.devicePixelRatio)&&1!=d&&F(c,65,d);d=N("EXPERIMENTS_TOKEN","");""!==d&&F(c,54,d);d=gi();if(0<d.length){e=new Zg;for(var f=0;f<d.length;f++){var g=new Rg;F(g,1,d[f].key);g.setValue(d[f].value);
md(e,15,Rg,g)}H(b,Zg,5,e)}Ii(a,c);Ji(c);Ki(a,c);Li(c);N("DELEGATED_SESSION_ID")&&!O("pageid_as_header_web")&&(a=new bh,F(a,3,N("DELEGATED_SESSION_ID")));a=u(Object.entries(bi(N("DEVICE",""))));for(d=a.next();!d.done;d=a.next())e=u(d.value),d=e.next().value,e=e.next().value,"cbrand"===d?F(c,12,e):"cmodel"===d?F(c,13,e):"cbr"===d?F(c,87,e):"cbrver"===d?F(c,88,e):"cos"===d?F(c,18,e):"cosver"===d?F(c,19,e):"cplatform"===d&&F(c,42,e);H(b,Xg,1,c);return b}
function Ii(a,b,c){a=a.Va;if("WEB"===a||"MWEB"===a||1===a||2===a)if(b){c=id(b,Ug,96)||new Ug;var d=zi();d=Object.keys(yi).indexOf(d);d=-1===d?null:d;null!==d&&F(c,3,d);H(b,Ug,96,c)}else c&&(c.client.mainAppWebInfo=null!=(d=c.client.mainAppWebInfo)?d:{},c.client.mainAppWebInfo.webDisplayMode=zi())}
function Ji(a,b){var c;if(O("web_log_memory_total_kbytes")&&(null==(c=A.navigator)?0:c.deviceMemory)){var d;c=null==(d=A.navigator)?void 0:d.deviceMemory;a?F(a,95,1E6*c):b&&(b.client.memoryTotalKbytes=""+1E6*c)}}
function Ki(a,b,c){if(a.appInstallData)if(b){var d;c=null!=(d=id(b,Tg,62))?d:new Tg;F(c,6,a.appInstallData);H(b,Tg,62,c)}else c&&(c.client.configInfo=c.client.configInfo||{},c.client.configInfo.appInstallData=a.appInstallData)}
function Li(a,b){a:{var c=Ei();if(c){var d=Ai[c.type||"unknown"]||"CONN_UNKNOWN";c=Ai[c.effectiveType||"unknown"]||"CONN_UNKNOWN";"CONN_CELLULAR_UNKNOWN"===d&&"CONN_UNKNOWN"!==c&&(d=c);if("CONN_UNKNOWN"!==d)break a;if("CONN_UNKNOWN"!==c){d=c;break a}}d=void 0}d&&(a?F(a,61,Bi[d]):b&&(b.client.connectionType=d));O("web_log_effective_connection_type")&&(d=Ei(),d=null!=d&&d.effectiveType?Di.hasOwnProperty(d.effectiveType)?Di[d.effectiveType]:"EFFECTIVE_CONNECTION_TYPE_UNKNOWN":void 0,d&&(a?F(a,94,Ci[d]):
b&&(b.client.effectiveConnectionType=d)))}
function Ni(a,b,c){c=void 0===c?{}:c;var d={};O("enable_web_eom_visitor_data")&&N("EOM_VISITOR_DATA")?d={"X-Goog-EOM-Visitor-Id":N("EOM_VISITOR_DATA")}:d={"X-Goog-Visitor-Id":c.visitorData||N("VISITOR_DATA","")};if(b&&b.includes("www.youtube-nocookie.com"))return d;(b=c.Tb||N("AUTHORIZATION"))||(a?b="Bearer "+B("gapi.auth.getToken")().Sb:b=be([]));b&&(d.Authorization=b,d["X-Goog-AuthUser"]=N("SESSION_INDEX",0),O("pageid_as_header_web")&&(d["X-Goog-PageId"]=N("DELEGATED_SESSION_ID")));return d}
;function Oi(a){a=Object.assign({},a);delete a.Authorization;var b=be();if(b){var c=new xf;c.update(N("INNERTUBE_API_KEY"));c.update(b);a.hash=xc(c.digest(),3)}return a}
;function Pi(a){var b=new Kg;(b=b.isAvailable()?a?new Qg(b,a):b:null)||(a=new Lg(a||"UserDataSharedStore"),b=a.isAvailable()?a:null);this.i=(a=b)?new Gg(a):null;this.j=document.domain||window.location.hostname}
Pi.prototype.set=function(a,b,c,d){c=c||31104E3;this.remove(a);if(this.i)try{this.i.set(a,b,Date.now()+1E3*c);return}catch(f){}var e="";if(d)try{e=escape(Lf(b))}catch(f){return}else e=escape(b);b=this.j;Zd.set(""+a,e,{Ga:c,path:"/",domain:void 0===b?"youtube.com":b,secure:!1})};
Pi.prototype.get=function(a,b){var c=void 0,d=!this.i;if(!d)try{c=this.i.get(a)}catch(e){d=!0}if(d&&(c=Zd.get(""+a,void 0))&&(c=unescape(c),b))try{c=JSON.parse(c)}catch(e){this.remove(a),c=void 0}return c};
Pi.prototype.remove=function(a){this.i&&this.i.remove(a);var b=this.j;Zd.remove(""+a,"/",void 0===b?"youtube.com":b)};var Qi=window,Q=Qi.ytcsi&&Qi.ytcsi.now?Qi.ytcsi.now:Qi.performance&&Qi.performance.timing&&Qi.performance.now&&Qi.performance.timing.navigationStart?function(){return Qi.performance.timing.navigationStart+Qi.performance.now()}:function(){return(new Date).getTime()};var Ri;function Si(){Ri||(Ri=new Pi("yt.innertube"));return Ri}
function Ti(a,b,c,d){if(d)return null;d=Si().get("nextId",!0)||1;var e=Si().get("requests",!0)||{};e[d]={method:a,request:b,authState:Oi(c),requestTime:Math.round(Q())};Si().set("nextId",d+1,86400,!0);Si().set("requests",e,86400,!0);return d}
function Ui(a){var b=Si().get("requests",!0)||{};delete b[a];Si().set("requests",b,86400,!0)}
function Vi(a){var b=Si().get("requests",!0);if(b){for(var c in b){var d=b[c];if(!(6E4>Math.round(Q())-d.requestTime)){var e=d.authState,f=Oi(Ni(!1));mb(e,f)&&(e=d.request,"requestTimeMs"in e&&(e.requestTimeMs=Math.round(Q())),Wi(a,d.method,e,{}));delete b[c]}}Si().set("requests",b,86400,!0)}}
;function Xi(){}
function Yi(a,b){return Zi(a,0,b)}
Xi.prototype.M=function(a,b){return Zi(a,1,b)};
function $i(a,b){Zi(a,2,b)}
;function aj(){Xi.apply(this,arguments)}
v(aj,Xi);function bj(){aj.i||(aj.i=new aj);return aj.i}
function Zi(a,b,c){void 0!==c&&Number.isNaN(Number(c))&&(c=void 0);var d=B("yt.scheduler.instance.addJob");return d?d(a,b,c):void 0===c?(a(),NaN):Uh(a,c||0)}
aj.prototype.aa=function(a){if(void 0===a||!Number.isNaN(Number(a))){var b=B("yt.scheduler.instance.cancelJob");b?b(a):window.clearTimeout(a)}};
aj.prototype.start=function(){var a=B("yt.scheduler.instance.start");a&&a()};var Me=bj();var cj=rc||sc;var dj=function(){var a;return function(){a||(a=new Pi("ytidb"));return a}}();
function ej(){var a;return null==(a=dj())?void 0:a.get("LAST_RESULT_ENTRY_KEY",!0)}
;var fj=[],gj=!1;function hj(a){gj||(fj.push({type:"ERROR",payload:a}),10<fj.length&&fj.shift())}
function ij(a,b){gj||(fj.push({type:"EVENT",eventType:a,payload:b}),10<fj.length&&fj.shift())}
;function jj(a){var b=Ia.apply(1,arguments);var c=Error.call(this,a);this.message=c.message;"stack"in c&&(this.stack=c.stack);this.args=[].concat(ia(b))}
v(jj,Error);function kj(){try{return lj(),!0}catch(a){return!1}}
function lj(){if(void 0!==N("DATASYNC_ID"))return N("DATASYNC_ID");throw new jj("Datasync ID not set","unknown");}
;function mj(a){if(0<=a.indexOf(":"))throw Error("Database name cannot contain ':'");}
function nj(a){return a.substr(0,a.indexOf(":"))||a}
;var oj={},pj=(oj.AUTH_INVALID="No user identifier specified.",oj.EXPLICIT_ABORT="Transaction was explicitly aborted.",oj.IDB_NOT_SUPPORTED="IndexedDB is not supported.",oj.MISSING_INDEX="Index not created.",oj.MISSING_OBJECT_STORES="Object stores not created.",oj.DB_DELETED_BY_MISSING_OBJECT_STORES="Database is deleted because expected object stores were not created.",oj.DB_REOPENED_BY_MISSING_OBJECT_STORES="Database is reopened because expected object stores were not created.",oj.UNKNOWN_ABORT="Transaction was aborted for unknown reasons.",
oj.QUOTA_EXCEEDED="The current transaction exceeded its quota limitations.",oj.QUOTA_MAYBE_EXCEEDED="The current transaction may have failed because of exceeding quota limitations.",oj.EXECUTE_TRANSACTION_ON_CLOSED_DB="Can't start a transaction on a closed database",oj.INCOMPATIBLE_DB_VERSION="The binary is incompatible with the database version",oj),qj={},rj=(qj.AUTH_INVALID="ERROR",qj.EXECUTE_TRANSACTION_ON_CLOSED_DB="WARNING",qj.EXPLICIT_ABORT="IGNORED",qj.IDB_NOT_SUPPORTED="ERROR",qj.MISSING_INDEX=
"WARNING",qj.MISSING_OBJECT_STORES="ERROR",qj.DB_DELETED_BY_MISSING_OBJECT_STORES="WARNING",qj.DB_REOPENED_BY_MISSING_OBJECT_STORES="WARNING",qj.QUOTA_EXCEEDED="WARNING",qj.QUOTA_MAYBE_EXCEEDED="WARNING",qj.UNKNOWN_ABORT="WARNING",qj.INCOMPATIBLE_DB_VERSION="WARNING",qj),sj={},tj=(sj.AUTH_INVALID=!1,sj.EXECUTE_TRANSACTION_ON_CLOSED_DB=!1,sj.EXPLICIT_ABORT=!1,sj.IDB_NOT_SUPPORTED=!1,sj.MISSING_INDEX=!1,sj.MISSING_OBJECT_STORES=!1,sj.DB_DELETED_BY_MISSING_OBJECT_STORES=!1,sj.DB_REOPENED_BY_MISSING_OBJECT_STORES=
!1,sj.QUOTA_EXCEEDED=!1,sj.QUOTA_MAYBE_EXCEEDED=!0,sj.UNKNOWN_ABORT=!0,sj.INCOMPATIBLE_DB_VERSION=!1,sj);function T(a,b,c,d,e){b=void 0===b?{}:b;c=void 0===c?pj[a]:c;d=void 0===d?rj[a]:d;e=void 0===e?tj[a]:e;jj.call(this,c,Object.assign({},{name:"YtIdbKnownError",isSw:void 0===self.document,isIframe:self!==self.top,type:a},b));this.type=a;this.message=c;this.level=d;this.i=e;Object.setPrototypeOf(this,T.prototype)}
v(T,jj);function uj(a,b){T.call(this,"MISSING_OBJECT_STORES",{expectedObjectStores:b,foundObjectStores:a},pj.MISSING_OBJECT_STORES);Object.setPrototypeOf(this,uj.prototype)}
v(uj,T);function vj(a,b){var c=Error.call(this);this.message=c.message;"stack"in c&&(this.stack=c.stack);this.index=a;this.objectStore=b;Object.setPrototypeOf(this,vj.prototype)}
v(vj,Error);var wj=["The database connection is closing","Can't start a transaction on a closed database","A mutation operation was attempted on a database that did not allow mutations"];
function xj(a,b,c,d){b=nj(b);var e=a instanceof Error?a:Error("Unexpected error: "+a);if(e instanceof T)return e;a={objectStoreNames:c,dbName:b,dbVersion:d};if("QuotaExceededError"===e.name)return new T("QUOTA_EXCEEDED",a);if(tc&&"UnknownError"===e.name)return new T("QUOTA_MAYBE_EXCEEDED",a);if(e instanceof vj)return new T("MISSING_INDEX",Object.assign({},a,{objectStore:e.objectStore,index:e.index}));if("InvalidStateError"===e.name&&wj.some(function(f){return e.message.includes(f)}))return new T("EXECUTE_TRANSACTION_ON_CLOSED_DB",
a);
if("AbortError"===e.name)return new T("UNKNOWN_ABORT",a,e.message);e.args=[Object.assign({},a,{name:"IdbError",Xb:e.name})];e.level="WARNING";return e}
function yj(a,b,c){var d=ej();return new T("IDB_NOT_SUPPORTED",{context:{caller:a,publicName:b,version:c,hasSucceededOnce:null==d?void 0:d.hasSucceededOnce}})}
;function zj(a){if(!a)throw Error();throw a;}
function Aj(a){return a}
function Bj(a){this.i=a}
function U(a){function b(e){if("PENDING"===d.state.status){d.state={status:"REJECTED",reason:e};e=u(d.onRejected);for(var f=e.next();!f.done;f=e.next())f=f.value,f()}}
function c(e){if("PENDING"===d.state.status){d.state={status:"FULFILLED",value:e};e=u(d.i);for(var f=e.next();!f.done;f=e.next())f=f.value,f()}}
var d=this;this.state={status:"PENDING"};this.i=[];this.onRejected=[];a=a.i;try{a(c,b)}catch(e){b(e)}}
U.all=function(a){return new U(new Bj(function(b,c){var d=[],e=a.length;0===e&&b(d);for(var f={ca:0};f.ca<a.length;f={ca:f.ca},++f.ca)Cj(U.resolve(a[f.ca]).then(function(g){return function(h){d[g.ca]=h;e--;0===e&&b(d)}}(f)),function(g){c(g)})}))};
U.resolve=function(a){return new U(new Bj(function(b,c){a instanceof U?a.then(b,c):b(a)}))};
U.reject=function(a){return new U(new Bj(function(b,c){c(a)}))};
U.prototype.then=function(a,b){var c=this,d=null!=a?a:Aj,e=null!=b?b:zj;return new U(new Bj(function(f,g){"PENDING"===c.state.status?(c.i.push(function(){Dj(c,c,d,f,g)}),c.onRejected.push(function(){Ej(c,c,e,f,g)})):"FULFILLED"===c.state.status?Dj(c,c,d,f,g):"REJECTED"===c.state.status&&Ej(c,c,e,f,g)}))};
function Cj(a,b){a.then(void 0,b)}
function Dj(a,b,c,d,e){try{if("FULFILLED"!==a.state.status)throw Error("calling handleResolve before the promise is fulfilled.");var f=c(a.state.value);f instanceof U?Fj(a,b,f,d,e):d(f)}catch(g){e(g)}}
function Ej(a,b,c,d,e){try{if("REJECTED"!==a.state.status)throw Error("calling handleReject before the promise is rejected.");var f=c(a.state.reason);f instanceof U?Fj(a,b,f,d,e):d(f)}catch(g){e(g)}}
function Fj(a,b,c,d,e){b===c?e(new TypeError("Circular promise chain detected.")):c.then(function(f){f instanceof U?Fj(a,b,f,d,e):d(f)},function(f){e(f)})}
;function Gj(a,b,c){function d(){c(a.error);f()}
function e(){b(a.result);f()}
function f(){try{a.removeEventListener("success",e),a.removeEventListener("error",d)}catch(g){}}
a.addEventListener("success",e);a.addEventListener("error",d)}
function Hj(a){return new Promise(function(b,c){Gj(a,b,c)})}
function V(a){return new U(new Bj(function(b,c){Gj(a,b,c)}))}
;function Ij(a,b){return new U(new Bj(function(c,d){function e(){var f=a?b(a):null;f?f.then(function(g){a=g;e()},d):c()}
e()}))}
;function Jj(a,b){this.i=a;this.options=b;this.transactionCount=0;this.l=Math.round(Q());this.j=!1}
n=Jj.prototype;n.add=function(a,b,c){return Kj(this,[a],{mode:"readwrite",I:!0},function(d){return d.objectStore(a).add(b,c)})};
n.clear=function(a){return Kj(this,[a],{mode:"readwrite",I:!0},function(b){return b.objectStore(a).clear()})};
n.close=function(){this.i.close();var a;(null==(a=this.options)?0:a.closed)&&this.options.closed()};
n.count=function(a,b){return Kj(this,[a],{mode:"readonly",I:!0},function(c){return c.objectStore(a).count(b)})};
function Lj(a,b,c){a=a.i.createObjectStore(b,c);return new Mj(a)}
n.delete=function(a,b){return Kj(this,[a],{mode:"readwrite",I:!0},function(c){return c.objectStore(a).delete(b)})};
n.get=function(a,b){return Kj(this,[a],{mode:"readonly",I:!0},function(c){return c.objectStore(a).get(b)})};
function Nj(a,b){return Kj(a,["LogsRequestsStore"],{mode:"readwrite",I:!0},function(c){c=c.objectStore("LogsRequestsStore");return V(c.i.put(b,void 0))})}
n.objectStoreNames=function(){return Array.from(this.i.objectStoreNames)};
function Kj(a,b,c,d){var e,f,g,h,k,l,m,q,t,p,y,z;return x(function(G){switch(G.i){case 1:var K={mode:"readonly",I:!1,tag:"IDB_TRANSACTION_TAG_UNKNOWN"};"string"===typeof c?K.mode=c:Object.assign(K,c);e=K;a.transactionCount++;f=e.I?3:1;g=0;case 2:if(h){G.s(3);break}g++;k=Math.round(Q());xa(G,4);l=a.i.transaction(b,e.mode);K=new Oj(l);K=Pj(K,d);return w(G,K,6);case 6:return m=G.j,q=Math.round(Q()),Ek(a,k,q,g,void 0,b.join(),e),G.return(m);case 4:t=za(G);p=Math.round(Q());y=xj(t,a.i.name,b.join(),a.i.version);
if((z=y instanceof T&&!y.i)||g>=f)Ek(a,k,p,g,y,b.join(),e),h=y;G.s(2);break;case 3:return G.return(Promise.reject(h))}})}
function Ek(a,b,c,d,e,f,g){b=c-b;e?(e instanceof T&&("QUOTA_EXCEEDED"===e.type||"QUOTA_MAYBE_EXCEEDED"===e.type)&&ij("QUOTA_EXCEEDED",{dbName:nj(a.i.name),objectStoreNames:f,transactionCount:a.transactionCount,transactionMode:g.mode}),e instanceof T&&"UNKNOWN_ABORT"===e.type&&(c-=a.l,0>c&&c>=Math.pow(2,31)&&(c=0),ij("TRANSACTION_UNEXPECTEDLY_ABORTED",{objectStoreNames:f,transactionDuration:b,transactionCount:a.transactionCount,dbDuration:c}),a.j=!0),Fk(a,!1,d,f,b,g.tag),hj(e)):Fk(a,!0,d,f,b,g.tag)}
function Fk(a,b,c,d,e,f){ij("TRANSACTION_ENDED",{objectStoreNames:d,connectionHasUnknownAbortedTransaction:a.j,duration:e,isSuccessful:b,tryCount:c,tag:void 0===f?"IDB_TRANSACTION_TAG_UNKNOWN":f})}
n.getName=function(){return this.i.name};
function Mj(a){this.i=a}
n=Mj.prototype;n.add=function(a,b){return V(this.i.add(a,b))};
n.autoIncrement=function(){return this.i.autoIncrement};
n.clear=function(){return V(this.i.clear()).then(function(){})};
n.count=function(a){return V(this.i.count(a))};
function Gk(a,b){return Hk(a,{query:b},function(c){return c.delete().then(function(){return c.continue()})}).then(function(){})}
n.delete=function(a){return a instanceof IDBKeyRange?Gk(this,a):V(this.i.delete(a))};
n.get=function(a){return V(this.i.get(a))};
n.index=function(a){try{return new Ik(this.i.index(a))}catch(b){if(b instanceof Error&&"NotFoundError"===b.name)throw new vj(a,this.i.name);throw b;}};
n.getName=function(){return this.i.name};
n.keyPath=function(){return this.i.keyPath};
function Hk(a,b,c){a=a.i.openCursor(b.query,b.direction);return Jk(a).then(function(d){return Ij(d,c)})}
function Oj(a){var b=this;this.i=a;this.l=new Map;this.j=!1;this.done=new Promise(function(c,d){b.i.addEventListener("complete",function(){c()});
b.i.addEventListener("error",function(e){e.currentTarget===e.target&&d(b.i.error)});
b.i.addEventListener("abort",function(){var e=b.i.error;if(e)d(e);else if(!b.j){e=T;for(var f=b.i.objectStoreNames,g=[],h=0;h<f.length;h++){var k=f.item(h);if(null===k)throw Error("Invariant: item in DOMStringList is null");g.push(k)}e=new e("UNKNOWN_ABORT",{objectStoreNames:g.join(),dbName:b.i.db.name,mode:b.i.mode});d(e)}})})}
function Pj(a,b){var c=new Promise(function(d,e){try{Cj(b(a).then(function(f){d(f)}),e)}catch(f){e(f),a.abort()}});
return Promise.all([c,a.done]).then(function(d){return u(d).next().value})}
Oj.prototype.abort=function(){this.i.abort();this.j=!0;throw new T("EXPLICIT_ABORT");};
Oj.prototype.objectStore=function(a){a=this.i.objectStore(a);var b=this.l.get(a);b||(b=new Mj(a),this.l.set(a,b));return b};
function Ik(a){this.i=a}
n=Ik.prototype;n.count=function(a){return V(this.i.count(a))};
n.delete=function(a){return Kk(this,{query:a},function(b){return b.delete().then(function(){return b.continue()})})};
n.get=function(a){return V(this.i.get(a))};
n.getKey=function(a){return V(this.i.getKey(a))};
n.keyPath=function(){return this.i.keyPath};
n.unique=function(){return this.i.unique};
function Kk(a,b,c){a=a.i.openCursor(void 0===b.query?null:b.query,void 0===b.direction?"next":b.direction);return Jk(a).then(function(d){return Ij(d,c)})}
function Lk(a,b){this.request=a;this.cursor=b}
function Jk(a){return V(a).then(function(b){return b?new Lk(a,b):null})}
n=Lk.prototype;n.advance=function(a){this.cursor.advance(a);return Jk(this.request)};
n.continue=function(a){this.cursor.continue(a);return Jk(this.request)};
n.delete=function(){return V(this.cursor.delete()).then(function(){})};
n.getKey=function(){return this.cursor.key};
n.X=function(){return this.cursor.value};
n.update=function(a){return V(this.cursor.update(a))};function Mk(a,b,c){return new Promise(function(d,e){function f(){t||(t=new Jj(g.result,{closed:q}));return t}
var g=void 0!==b?self.indexedDB.open(a,b):self.indexedDB.open(a);var h=c.blocked,k=c.blocking,l=c.Ab,m=c.upgrade,q=c.closed,t;g.addEventListener("upgradeneeded",function(p){try{if(null===p.newVersion)throw Error("Invariant: newVersion on IDbVersionChangeEvent is null");if(null===g.transaction)throw Error("Invariant: transaction on IDbOpenDbRequest is null");p.dataLoss&&"none"!==p.dataLoss&&ij("IDB_DATA_CORRUPTED",{reason:p.dataLossMessage||"unknown reason",dbName:nj(a)});var y=f(),z=new Oj(g.transaction);
m&&m(y,function(G){return p.oldVersion<G&&p.newVersion>=G},z);
z.done.catch(function(G){e(G)})}catch(G){e(G)}});
g.addEventListener("success",function(){var p=g.result;k&&p.addEventListener("versionchange",function(){k(f())});
p.addEventListener("close",function(){ij("IDB_UNEXPECTEDLY_CLOSED",{dbName:nj(a),dbVersion:p.version});l&&l()});
d(f())});
g.addEventListener("error",function(){e(g.error)});
h&&g.addEventListener("blocked",function(){h()})})}
function Nk(a,b,c){c=void 0===c?{}:c;return Mk(a,b,c)}
function Ok(a,b){b=void 0===b?{}:b;var c,d,e,f;return x(function(g){if(1==g.i)return xa(g,2),c=self.indexedDB.deleteDatabase(a),d=b,(e=d.blocked)&&c.addEventListener("blocked",function(){e()}),w(g,Hj(c),4);
if(2!=g.i)return ya(g,0);f=za(g);throw xj(f,a,"",-1);})}
;function Pk(a){return new Promise(function(b){$i(function(){b()},a)})}
function Qk(a,b){this.name=a;this.options=b;this.o=!0;this.v=this.m=0;this.j=500}
Qk.prototype.l=function(a,b,c){c=void 0===c?{}:c;return Nk(a,b,c)};
Qk.prototype.delete=function(a){a=void 0===a?{}:a;return Ok(this.name,a)};
function Rk(a,b){return new T("INCOMPATIBLE_DB_VERSION",{dbName:a.name,oldVersion:a.options.version,newVersion:b})}
function Sk(a,b){if(!b)throw yj("openWithToken",nj(a.name));return Tk(a)}
function Tk(a){function b(){var f,g,h,k,l,m,q,t,p,y;return x(function(z){switch(z.i){case 1:return g=null!=(f=Error().stack)?f:"",xa(z,2),w(z,a.l(a.name,a.options.version,d),4);case 4:h=z.j;for(var G=a.options,K=[],M=u(Object.keys(G.ka)),P=M.next();!P.done;P=M.next()){P=P.value;var kb=G.ka[P],uc=void 0===kb.yb?Number.MAX_VALUE:kb.yb;!(h.i.version>=kb.Ba)||h.i.version>=uc||h.i.objectStoreNames.contains(P)||K.push(P)}k=K;if(0===k.length){z.s(5);break}l=Object.keys(a.options.ka);m=h.objectStoreNames();
if(a.v<fi("ytidb_reopen_db_retries",0))return a.v++,h.close(),hj(new T("DB_REOPENED_BY_MISSING_OBJECT_STORES",{dbName:a.name,expectedObjectStores:l,foundObjectStores:m})),z.return(b());if(!(a.m<fi("ytidb_remake_db_retries",1))){z.s(6);break}a.m++;if(!O("ytidb_remake_db_enable_backoff_delay")){z.s(7);break}return w(z,Pk(a.j),8);case 8:a.j*=2;case 7:return w(z,a.delete(),9);case 9:return hj(new T("DB_DELETED_BY_MISSING_OBJECT_STORES",{dbName:a.name,expectedObjectStores:l,foundObjectStores:m})),z.return(b());
case 6:throw new uj(m,l);case 5:return z.return(h);case 2:q=za(z);if(q instanceof DOMException?"VersionError"!==q.name:"DOMError"in self&&q instanceof DOMError?"VersionError"!==q.name:!(q instanceof Object&&"message"in q)||"An attempt was made to open a database using a lower version than the existing version."!==q.message){z.s(10);break}return w(z,a.l(a.name,void 0,Object.assign({},d,{upgrade:void 0})),11);case 11:t=z.j;p=t.i.version;if(void 0!==a.options.version&&p>a.options.version+1)throw t.close(),
a.o=!1,Rk(a,p);return z.return(t);case 10:throw c(),q instanceof Error&&!O("ytidb_async_stack_killswitch")&&(q.stack=q.stack+"\n"+g.substring(g.indexOf("\n")+1)),xj(q,a.name,"",null!=(y=a.options.version)?y:-1);}})}
function c(){a.i===e&&(a.i=void 0)}
if(!a.o)throw Rk(a);if(a.i)return a.i;var d={blocking:function(f){f.close()},
closed:c,Ab:c,upgrade:a.options.upgrade};var e=b();a.i=e;return a.i}
;var Uk=new Qk("YtIdbMeta",{ka:{databases:{Ba:1}},upgrade:function(a,b){b(1)&&Lj(a,"databases",{keyPath:"actualName"})}});
function Vk(a,b){var c;return x(function(d){if(1==d.i)return w(d,Sk(Uk,b),2);c=d.j;return d.return(Kj(c,["databases"],{I:!0,mode:"readwrite"},function(e){var f=e.objectStore("databases");return f.get(a.actualName).then(function(g){if(g?a.actualName!==g.actualName||a.publicName!==g.publicName||a.userIdentifier!==g.userIdentifier:1)return V(f.i.put(a,void 0)).then(function(){})})}))})}
function Wk(a,b){var c;return x(function(d){if(1==d.i)return a?w(d,Sk(Uk,b),2):d.return();c=d.j;return d.return(c.delete("databases",a))})}
function Xk(a,b){var c,d;return x(function(e){return 1==e.i?(c=[],w(e,Sk(Uk,b),2)):3!=e.i?(d=e.j,w(e,Kj(d,["databases"],{I:!0,mode:"readonly"},function(f){c.length=0;return Hk(f.objectStore("databases"),{},function(g){a(g.X())&&c.push(g.X());return g.continue()})}),3)):e.return(c)})}
function Yk(a){return Xk(function(b){return"LogsDatabaseV2"===b.publicName&&void 0!==b.userIdentifier},a)}
;var Zk,$k=new function(){}(new function(){});
function al(){var a,b,c,d;return x(function(e){switch(e.i){case 1:a=ej();if(null==(b=a)?0:b.hasSucceededOnce)return e.return(!0);var f;if(f=cj)f=/WebKit\/([0-9]+)/.exec(Kb()),f=!!(f&&600<=parseInt(f[1],10));f&&(f=/WebKit\/([0-9]+)/.exec(Kb()),f=!(f&&602<=parseInt(f[1],10)));if(f||fc)return e.return(!1);try{if(c=self,!(c.indexedDB&&c.IDBIndex&&c.IDBKeyRange&&c.IDBObjectStore))return e.return(!1)}catch(g){return e.return(!1)}if(!("IDBTransaction"in self&&"objectStoreNames"in IDBTransaction.prototype))return e.return(!1);
xa(e,2);d={actualName:"yt-idb-test-do-not-use",publicName:"yt-idb-test-do-not-use",userIdentifier:void 0};return w(e,Vk(d,$k),4);case 4:return w(e,Wk("yt-idb-test-do-not-use",$k),5);case 5:return e.return(!0);case 2:return za(e),e.return(!1)}})}
function bl(){if(void 0!==Zk)return Zk;gj=!0;return Zk=al().then(function(a){gj=!1;var b;if(null!=(b=dj())&&b.i){var c;b={hasSucceededOnce:(null==(c=ej())?void 0:c.hasSucceededOnce)||a};var d;null==(d=dj())||d.set("LAST_RESULT_ENTRY_KEY",b,2592E3,!0)}return a})}
function cl(){return B("ytglobal.idbToken_")||void 0}
function dl(){var a=cl();return a?Promise.resolve(a):bl().then(function(b){(b=b?$k:void 0)&&C("ytglobal.idbToken_",b);return b})}
;new Mf;function el(a){if(!kj())throw a=new T("AUTH_INVALID",{dbName:a}),hj(a),a;var b=lj();return{actualName:a+":"+b,publicName:a,userIdentifier:b}}
function fl(a,b,c,d){var e,f,g,h,k,l;return x(function(m){switch(m.i){case 1:return f=null!=(e=Error().stack)?e:"",w(m,dl(),2);case 2:g=m.j;if(!g)throw h=yj("openDbImpl",a,b),O("ytidb_async_stack_killswitch")||(h.stack=h.stack+"\n"+f.substring(f.indexOf("\n")+1)),hj(h),h;mj(a);k=c?{actualName:a,publicName:a,userIdentifier:void 0}:el(a);xa(m,3);return w(m,Vk(k,g),5);case 5:return w(m,Nk(k.actualName,b,d),6);case 6:return m.return(m.j);case 3:return l=za(m),xa(m,7),w(m,Wk(k.actualName,g),9);case 9:ya(m,
8);break;case 7:za(m);case 8:throw l;}})}
function gl(a,b,c){c=void 0===c?{}:c;return fl(a,b,!1,c)}
function hl(a,b,c){c=void 0===c?{}:c;return fl(a,b,!0,c)}
function il(a,b){b=void 0===b?{}:b;var c,d;return x(function(e){if(1==e.i)return w(e,dl(),2);if(3!=e.i){c=e.j;if(!c)return e.return();mj(a);d=el(a);return w(e,Ok(d.actualName,b),3)}return w(e,Wk(d.actualName,c),0)})}
function jl(a,b,c){a=a.map(function(d){return x(function(e){return 1==e.i?w(e,Ok(d.actualName,b),2):w(e,Wk(d.actualName,c),0)})});
return Promise.all(a).then(function(){})}
function kl(){var a=void 0===a?{}:a;var b,c;return x(function(d){if(1==d.i)return w(d,dl(),2);if(3!=d.i){b=d.j;if(!b)return d.return();mj("LogsDatabaseV2");return w(d,Yk(b),3)}c=d.j;return w(d,jl(c,a,b),0)})}
function ll(a,b){b=void 0===b?{}:b;var c;return x(function(d){if(1==d.i)return w(d,dl(),2);if(3!=d.i){c=d.j;if(!c)return d.return();mj(a);return w(d,Ok(a,b),3)}return w(d,Wk(a,c),0)})}
;function ml(a){this.qa=this.i=!1;this.potentialEsfErrorCounter=this.j=0;this.handleError=function(){};
this.ea=function(){};
this.now=Date.now;this.ha=!1;var b;this.hb=null!=(b=a.hb)?b:100;var c;this.gb=null!=(c=a.gb)?c:1;var d;this.eb=null!=(d=a.eb)?d:2592E6;var e;this.cb=null!=(e=a.cb)?e:12E4;var f;this.fb=null!=(f=a.fb)?f:5E3;var g;this.A=null!=(g=a.A)?g:void 0;this.va=!!a.va;var h;this.ta=null!=(h=a.ta)?h:.1;var k;this.ya=null!=(k=a.ya)?k:10;a.handleError&&(this.handleError=a.handleError);a.ea&&(this.ea=a.ea);a.ha&&(this.ha=a.ha);a.qa&&(this.qa=a.qa);this.B=a.B;this.K=a.K;this.F=a.F;this.H=a.H;this.U=a.U;this.Ja=a.Ja;
this.Ia=a.Ia;nl(this)&&(!this.B||this.B("networkless_logging"))&&ol(this)}
function ol(a){nl(a)&&!a.ha&&(a.i=!0,a.va&&Math.random()<=a.ta&&a.F.ob(a.A),pl(a),a.H.G()&&a.na(),a.H.S(a.Ja,a.na.bind(a)),a.H.S(a.Ia,a.Pa.bind(a)))}
n=ml.prototype;n.writeThenSend=function(a,b){var c=this;b=void 0===b?{}:b;if(nl(this)&&this.i){var d={url:a,options:b,timestamp:this.now(),status:"NEW",sendCount:0};this.F.set(d,this.A).then(function(e){d.id=e;c.H.G()&&ql(c,d)}).catch(function(e){ql(c,d);
rl(c,e)})}else this.U(a,b)};
n.sendThenWrite=function(a,b,c){var d=this;b=void 0===b?{}:b;if(nl(this)&&this.i){var e={url:a,options:b,timestamp:this.now(),status:"NEW",sendCount:0};this.B&&this.B("nwl_skip_retry")&&(e.skipRetry=c);if(this.H.G()||this.B&&this.B("nwl_aggressive_send_then_write")&&!e.skipRetry){if(!e.skipRetry){var f=b.onError?b.onError:function(){};
b.onError=function(g,h){return x(function(k){if(1==k.i)return w(k,d.F.set(e,d.A).catch(function(l){rl(d,l)}),2);
f(g,h);k.i=0})}}this.U(a,b,e.skipRetry)}else this.F.set(e,this.A).catch(function(g){d.U(a,b,e.skipRetry);
rl(d,g)})}else this.U(a,b,this.B&&this.B("nwl_skip_retry")&&c)};
n.sendAndWrite=function(a,b){var c=this;b=void 0===b?{}:b;if(nl(this)&&this.i){var d={url:a,options:b,timestamp:this.now(),status:"NEW",sendCount:0},e=!1,f=b.onSuccess?b.onSuccess:function(){};
d.options.onSuccess=function(g,h){void 0!==d.id?c.F.da(d.id,c.A):e=!0;c.H.T&&c.B&&c.B("vss_network_hint")&&c.H.T(!0);f(g,h)};
this.U(d.url,d.options);this.F.set(d,this.A).then(function(g){d.id=g;e&&c.F.da(d.id,c.A)}).catch(function(g){rl(c,g)})}else this.U(a,b)};
n.na=function(){var a=this;if(!nl(this))throw yj("throttleSend");this.j||(this.j=this.K.M(function(){var b;return x(function(c){if(1==c.i)return w(c,a.F.Ua("NEW",a.A),2);if(3!=c.i)return b=c.j,b?w(c,ql(a,b),3):(a.Pa(),c.return());a.j&&(a.j=0,a.na());c.i=0})},this.hb))};
n.Pa=function(){this.K.aa(this.j);this.j=0};
function ql(a,b){var c,d;return x(function(e){switch(e.i){case 1:if(!nl(a))throw c=yj("immediateSend"),c;if(void 0===b.id){e.s(2);break}return w(e,a.F.wb(b.id,a.A),3);case 3:(d=e.j)?b=d:a.ea(Error("The request cannot be found in the database."));case 2:if(sl(a,b,a.eb)){e.s(4);break}a.ea(Error("Networkless Logging: Stored logs request expired age limit"));if(void 0===b.id){e.s(5);break}return w(e,a.F.da(b.id,a.A),5);case 5:return e.return();case 4:b.skipRetry||(b=tl(a,b));if(!b){e.s(0);break}if(!b.skipRetry||
void 0===b.id){e.s(8);break}return w(e,a.F.da(b.id,a.A),8);case 8:a.U(b.url,b.options,!!b.skipRetry),e.i=0}})}
function tl(a,b){if(!nl(a))throw yj("updateRequestHandlers");var c=b.options.onError?b.options.onError:function(){};
b.options.onError=function(e,f){var g,h,k;return x(function(l){switch(l.i){case 1:g=ul(f);if(!(a.B&&a.B("nwl_consider_error_code")&&g||a.B&&!a.B("nwl_consider_error_code")&&a.potentialEsfErrorCounter<=a.ya)){l.s(2);break}if(!a.H.V){l.s(3);break}return w(l,a.H.V(),3);case 3:if(a.H.G()){l.s(2);break}c(e,f);if(!a.B||!a.B("nwl_consider_error_code")||void 0===(null==(h=b)?void 0:h.id)){l.s(6);break}return w(l,a.F.Ka(b.id,a.A,!1),6);case 6:return l.return();case 2:if(a.B&&a.B("nwl_consider_error_code")&&
!g&&a.potentialEsfErrorCounter>a.ya)return l.return();a.potentialEsfErrorCounter++;if(void 0===(null==(k=b)?void 0:k.id)){l.s(8);break}return b.sendCount<a.gb?w(l,a.F.Ka(b.id,a.A),12):w(l,a.F.da(b.id,a.A),8);case 12:a.K.M(function(){a.H.G()&&a.na()},a.fb);
case 8:c(e,f),l.i=0}})};
var d=b.options.onSuccess?b.options.onSuccess:function(){};
b.options.onSuccess=function(e,f){var g;return x(function(h){if(1==h.i)return void 0===(null==(g=b)?void 0:g.id)?h.s(2):w(h,a.F.da(b.id,a.A),2);a.H.T&&a.B&&a.B("vss_network_hint")&&a.H.T(!0);d(e,f);h.i=0})};
return b}
function sl(a,b,c){b=b.timestamp;return a.now()-b>=c?!1:!0}
function pl(a){if(!nl(a))throw yj("retryQueuedRequests");a.F.Ua("QUEUED",a.A).then(function(b){b&&!sl(a,b,a.cb)?a.K.M(function(){return x(function(c){if(1==c.i)return void 0===b.id?c.s(2):w(c,a.F.Ka(b.id,a.A),2);pl(a);c.i=0})}):a.H.G()&&a.na()})}
function rl(a,b){a.ib&&!a.H.G()?a.ib(b):a.handleError(b)}
function nl(a){return!!a.A||a.qa}
function ul(a){var b;return(a=null==a?void 0:null==(b=a.error)?void 0:b.code)&&400<=a&&599>=a?!1:!0}
;var vl=B("ytPubsub2Pubsub2Instance")||new L;L.prototype.subscribe=L.prototype.subscribe;L.prototype.unsubscribeByKey=L.prototype.oa;L.prototype.publish=L.prototype.fa;L.prototype.clear=L.prototype.clear;C("ytPubsub2Pubsub2Instance",vl);C("ytPubsub2Pubsub2SubscribedKeys",B("ytPubsub2Pubsub2SubscribedKeys")||{});C("ytPubsub2Pubsub2TopicToKeys",B("ytPubsub2Pubsub2TopicToKeys")||{});C("ytPubsub2Pubsub2IsAsync",B("ytPubsub2Pubsub2IsAsync")||{});C("ytPubsub2Pubsub2SkipSubKey",null);function wl(a,b){Qk.call(this,a,b);this.options=b;mj(a)}
v(wl,Qk);function xl(a,b){var c;return function(){c||(c=new wl(a,b));return c}}
wl.prototype.l=function(a,b,c){c=void 0===c?{}:c;return(this.options.La?hl:gl)(a,b,Object.assign({},c))};
wl.prototype.delete=function(a){a=void 0===a?{}:a;return(this.options.La?ll:il)(this.name,a)};
function yl(a,b){return xl(a,b)}
;var zl;
function Al(){if(zl)return zl();var a={};zl=yl("LogsDatabaseV2",{ka:(a.LogsRequestsStore={Ba:2},a),La:!1,upgrade:function(b,c,d){c(2)&&Lj(b,"LogsRequestsStore",{keyPath:"id",autoIncrement:!0});c(3);c(5)&&(d=d.objectStore("LogsRequestsStore"),d.i.indexNames.contains("newRequest")&&d.i.deleteIndex("newRequest"),d.i.createIndex("newRequestV2",["status","interface","timestamp"],{unique:!1}));c(7)&&b.i.objectStoreNames.contains("sapisid")&&b.i.deleteObjectStore("sapisid");c(9)&&b.i.objectStoreNames.contains("SWHealthLog")&&b.i.deleteObjectStore("SWHealthLog")},
version:9});return zl()}
;function Bl(a){return Sk(Al(),a)}
function Cl(a,b){var c,d,e,f;return x(function(g){if(1==g.i)return c={startTime:Q(),transactionType:"YT_IDB_TRANSACTION_TYPE_WRITE"},w(g,Bl(b),2);if(3!=g.i)return d=g.j,e=Object.assign({},a,{options:JSON.parse(JSON.stringify(a.options)),interface:N("INNERTUBE_CONTEXT_CLIENT_NAME",0)}),w(g,Nj(d,e),3);f=g.j;c.Bb=Q();Dl(c);return g.return(f)})}
function El(a,b){var c,d,e,f,g,h,k;return x(function(l){if(1==l.i)return c={startTime:Q(),transactionType:"YT_IDB_TRANSACTION_TYPE_READ"},w(l,Bl(b),2);if(3!=l.i)return d=l.j,e=N("INNERTUBE_CONTEXT_CLIENT_NAME",0),f=[a,e,0],g=[a,e,Q()],h=IDBKeyRange.bound(f,g),k=void 0,w(l,Kj(d,["LogsRequestsStore"],{mode:"readwrite",I:!0},function(m){return Kk(m.objectStore("LogsRequestsStore").index("newRequestV2"),{query:h,direction:"prev"},function(q){q.X()&&(k=q.X(),"NEW"===a&&(k.status="QUEUED",q.update(k)))})}),
3);
c.Bb=Q();Dl(c);return l.return(k)})}
function Fl(a,b){var c;return x(function(d){if(1==d.i)return w(d,Bl(b),2);c=d.j;return d.return(Kj(c,["LogsRequestsStore"],{mode:"readwrite",I:!0},function(e){var f=e.objectStore("LogsRequestsStore");return f.get(a).then(function(g){if(g)return g.status="QUEUED",V(f.i.put(g,void 0)).then(function(){return g})})}))})}
function Gl(a,b,c){c=void 0===c?!0:c;var d;return x(function(e){if(1==e.i)return w(e,Bl(b),2);d=e.j;return e.return(Kj(d,["LogsRequestsStore"],{mode:"readwrite",I:!0},function(f){var g=f.objectStore("LogsRequestsStore");return g.get(a).then(function(h){return h?(h.status="NEW",c&&(h.sendCount+=1),V(g.i.put(h,void 0)).then(function(){return h})):U.resolve(void 0)})}))})}
function Hl(a,b){var c;return x(function(d){if(1==d.i)return w(d,Bl(b),2);c=d.j;return d.return(c.delete("LogsRequestsStore",a))})}
function Il(a){var b,c;return x(function(d){if(1==d.i)return w(d,Bl(a),2);b=d.j;c=Q()-2592E6;return w(d,Kj(b,["LogsRequestsStore"],{mode:"readwrite",I:!0},function(e){return Hk(e.objectStore("LogsRequestsStore"),{},function(f){if(f.X().timestamp<=c)return f.delete().then(function(){return f.continue()})})}),0)})}
function Jl(){x(function(a){return w(a,kl(),0)})}
function Dl(a){if(!O("nwl_csi_killswitch")&&.01>=Math.random()){var b=B("ytPubsub2Pubsub2Instance");b&&b.publish.call(b,"nwl_transaction_latency_payload".toString(),"nwl_transaction_latency_payload",a)}}
;var Kl={},Ll=yl("ServiceWorkerLogsDatabase",{ka:(Kl.SWHealthLog={Ba:1},Kl),La:!0,upgrade:function(a,b){b(1)&&Lj(a,"SWHealthLog",{keyPath:"id",autoIncrement:!0}).i.createIndex("swHealthNewRequest",["interface","timestamp"],{unique:!1})},
version:1});function Ml(a){return Sk(Ll(),a)}
function Nl(a){var b,c;x(function(d){if(1==d.i)return w(d,Ml(a),2);b=d.j;c=Q()-2592E6;return w(d,Kj(b,["SWHealthLog"],{mode:"readwrite",I:!0},function(e){return Hk(e.objectStore("SWHealthLog"),{},function(f){if(f.X().timestamp<=c)return f.delete().then(function(){return f.continue()})})}),0)})}
function Ol(a){var b;return x(function(c){if(1==c.i)return w(c,Ml(a),2);b=c.j;return w(c,b.clear("SWHealthLog"),0)})}
;var Pl={},Ql=0;
function Rl(a){var b=void 0===b?"":b;var c=void 0===c?!1:c;if(a)if(b)ti(a,void 0,"POST",b);else if(N("USE_NET_AJAX_FOR_PING_TRANSPORT",!1))ti(a,void 0,"GET","",void 0,void 0,c);else{b:{try{var d=new Za({url:a});if(d.l&&d.j||d.o){var e=Pb(a.match(Ob)[5]||null);var f=!(!e||!e.endsWith("/aclk")||"1"!==Zb(a,"ri"));break b}}catch(h){}f=!1}if(f){b:{try{if(window.navigator&&window.navigator.sendBeacon&&window.navigator.sendBeacon(a,"")){var g=!0;break b}}catch(h){}g=!1}b=g?!0:!1}else b=!1;b||Sl(a)}}
function Sl(a){var b=new Image,c=""+Ql++;Pl[c]=b;b.onload=b.onerror=function(){delete Pl[c]};
b.src=a}
;function W(){this.i=new Map;this.j=!1}
function Tl(){if(!W.i){var a=B("yt.networkRequestMonitor.instance")||new W;C("yt.networkRequestMonitor.instance",a);W.i=a}return W.i}
W.prototype.requestComplete=function(a,b){b&&(this.j=!0);a=this.removeParams(a);this.i.get(a)||this.i.set(a,b)};
W.prototype.isEndpointCFR=function(a){a=this.removeParams(a);return(a=this.i.get(a))?!1:!1===a&&this.j?!0:null};
W.prototype.removeParams=function(a){return a.split("?")[0]};
W.prototype.removeParams=W.prototype.removeParams;W.prototype.isEndpointCFR=W.prototype.isEndpointCFR;W.prototype.requestComplete=W.prototype.requestComplete;W.getInstance=Tl;var Ul;function Vl(){Ul||(Ul=new Pi("yt.offline"));return Ul}
function Wl(a){if(O("offline_error_handling")){var b=Vl().get("errors",!0)||{};b[a.message]={name:a.name,stack:a.stack};a.level&&(b[a.message].level=a.level);Vl().set("errors",b,2592E3,!0)}}
function Xl(){if(O("offline_error_handling")){var a=Vl().get("errors",!0);if(a){for(var b in a)if(a[b]){var c=new jj(b,"sent via offline_errors");c.name=a[b].name;c.stack=a[b].stack;c.level=a[b].level;Kh(c)}Vl().set("errors",{},2592E3,!0)}}}
;var Yl=fi("network_polling_interval",3E4);function Z(){J.call(this);var a=this;this.pa=0;this.C=this.m=!1;this.j=this.Da();O("use_shared_nsm")?(this.i=Le(),O("use_shared_nsm_and_keep_yt_online_updated")&&(this.i.S("networkstatus-online",function(){a.j=!0;a.C&&Xl()}),this.i.S("networkstatus-offline",function(){a.j=!1}))):(Zl(this),$l(this))}
v(Z,J);function am(){if(!Z.i){var a=B("yt.networkStatusManager.instance")||new Z;C("yt.networkStatusManager.instance",a);Z.i=a}return Z.i}
n=Z.prototype;n.G=function(){if(O("use_shared_nsm")&&this.i){var a;return null==(a=this.i)?void 0:a.G()}return this.j};
n.T=function(a){if(O("use_shared_nsm")&&this.i){var b;null!=(b=this.i)&&(b.i=a)}else a!==this.j&&(this.j=a)};
n.xb=function(a){!O("use_shared_nsm")&&(this.m=!0,void 0===a?0:a)&&(this.pa||bm(this))};
n.Da=function(){var a=window.navigator.onLine;return void 0===a?!0:a};
n.qb=function(){this.C=!0};
n.S=function(a,b){return O("use_shared_nsm")&&this.i?this.i.S(a,b):J.prototype.S.call(this,a,b)};
function $l(a){window.addEventListener("online",function(){return x(function(b){if(1==b.i)return w(b,a.V(),2);a.C&&Xl();b.i=0})})}
function Zl(a){window.addEventListener("offline",function(){return x(function(b){return w(b,a.V(),0)})})}
function bm(a){a.pa=Yi(function(){return x(function(b){if(1==b.i)return a.j?a.Da()||!a.m?b.s(3):w(b,a.V(),3):w(b,a.V(),3);bm(a);b.i=0})},Yl)}
n.V=function(a){var b=this;if(O("use_shared_nsm")&&this.i){var c=Je(this.i,a);c.then(function(d){O("use_cfr_monitor")&&Tl().requestComplete("generate_204",d)});
return c}return this.u?this.u:this.u=new Promise(function(d){var e,f,g,h;return x(function(k){switch(k.i){case 1:return e=window.AbortController?new window.AbortController:void 0,g=null==(f=e)?void 0:f.signal,h=!1,xa(k,2,3),e&&(b.P=Me.M(function(){e.abort()},a||2E4)),w(k,fetch("/generate_204",{method:"HEAD",
signal:g}),5);case 5:h=!0;case 3:Aa(k);O("use_cfr_monitor")&&Tl().requestComplete("generate_204",h);b.u=void 0;b.P&&Me.aa(b.P);h!==b.j&&(b.j=h,b.j&&b.m?Ge(b,"ytnetworkstatus-online"):b.m&&Ge(b,"ytnetworkstatus-offline"));d(h);Ba(k);break;case 2:za(k),h=!1,k.s(3)}})})};
Z.prototype.sendNetworkCheckRequest=Z.prototype.V;Z.prototype.listen=Z.prototype.S;Z.prototype.enableErrorFlushing=Z.prototype.qb;Z.prototype.getWindowStatus=Z.prototype.Da;Z.prototype.monitorNetworkStatusChange=Z.prototype.xb;Z.prototype.networkStatusHint=Z.prototype.T;Z.prototype.isNetworkAvailable=Z.prototype.G;Z.getInstance=am;function cm(a){a=void 0===a?{}:a;J.call(this);var b=this;this.j=this.P=0;this.m="ytnetworkstatus-offline";this.u="ytnetworkstatus-online";O("use_shared_nsm")&&(this.m="networkstatus-offline",this.u="networkstatus-online");this.i=am();var c=B("yt.networkStatusManager.instance.monitorNetworkStatusChange").bind(this.i);c&&c(a.Sa);a.Za&&(c=B("yt.networkStatusManager.instance.enableErrorFlushing").bind(this.i))&&c();if(c=B("yt.networkStatusManager.instance.listen").bind(this.i))a.za?(this.za=a.za,c(this.u,
function(){dm(b,"publicytnetworkstatus-online")}),c(this.m,function(){dm(b,"publicytnetworkstatus-offline")})):(c(this.u,function(){Ge(b,"publicytnetworkstatus-online")}),c(this.m,function(){Ge(b,"publicytnetworkstatus-offline")}))}
v(cm,J);cm.prototype.G=function(){var a=B("yt.networkStatusManager.instance.isNetworkAvailable");return a?a.bind(this.i)():!0};
cm.prototype.T=function(a){var b=B("yt.networkStatusManager.instance.networkStatusHint").bind(this.i);b&&b(a)};
cm.prototype.V=function(a){var b=this,c;return x(function(d){c=B("yt.networkStatusManager.instance.sendNetworkCheckRequest").bind(b.i);return O("skip_network_check_if_cfr")&&Tl().isEndpointCFR("generate_204")?d.return(new Promise(function(e){var f;b.T((null==(f=window.navigator)?void 0:f.onLine)||!0);e(b.G())})):c?d.return(c(a)):d.return(!0)})};
function dm(a,b){a.za?a.j?(Me.aa(a.P),a.P=Me.M(function(){a.C!==b&&(Ge(a,b),a.C=b,a.j=Q())},a.za-(Q()-a.j))):(Ge(a,b),a.C=b,a.j=Q()):Ge(a,b)}
;var em;function fm(){ml.call(this,{F:{ob:Il,da:Hl,Ua:El,wb:Fl,Ka:Gl,set:Cl},H:gm(),handleError:Kh,ea:Lh,U:hm,now:Q,ib:Wl,K:bj(),Ja:"publicytnetworkstatus-online",Ia:"publicytnetworkstatus-offline",va:!0,ta:.1,ya:fi("potential_esf_error_limit",10),B:O,ha:!(kj()&&"www.youtube-nocookie.com"!==Qb(document.location.toString()))});this.l=new Mf;O("networkless_immediately_drop_all_requests")&&Jl();ll("LogsDatabaseV2")}
v(fm,ml);function im(){var a=B("yt.networklessRequestController.instance");a||(a=new fm,C("yt.networklessRequestController.instance",a),O("networkless_logging")&&dl().then(function(b){a.A=b;ol(a);a.l.resolve();a.va&&Math.random()<=a.ta&&a.A&&Nl(a.A);O("networkless_immediately_drop_sw_health_store")&&jm(a)}));
return a}
fm.prototype.writeThenSend=function(a,b){b||(b={});kj()||(this.i=!1);ml.prototype.writeThenSend.call(this,a,b)};
fm.prototype.sendThenWrite=function(a,b,c){b||(b={});kj()||(this.i=!1);ml.prototype.sendThenWrite.call(this,a,b,c)};
fm.prototype.sendAndWrite=function(a,b){b||(b={});kj()||(this.i=!1);ml.prototype.sendAndWrite.call(this,a,b)};
fm.prototype.awaitInitialization=function(){return this.l.promise};
function jm(a){var b;x(function(c){if(!a.A)throw b=yj("clearSWHealthLogsDb"),b;return c.return(Ol(a.A).catch(function(d){a.handleError(d)}))})}
function hm(a,b,c){O("use_cfr_monitor")&&km(a,b);var d;if(null==(d=b.postParams)?0:d.requestTimeMs)b.postParams.requestTimeMs=Math.round(Q());c&&0===Object.keys(b).length?Rl(a):qi(a,b)}
function gm(){em||(em=new cm({Za:!0,Sa:!0}));return em}
function km(a,b){var c=b.onError?b.onError:function(){};
b.onError=function(e,f){Tl().requestComplete(a,!1);c(e,f)};
var d=b.onSuccess?b.onSuccess:function(){};
b.onSuccess=function(e,f){Tl().requestComplete(a,!0);d(e,f)}}
;var lm=0,mm=0,nm,om=A.ytNetworklessLoggingInitializationOptions||{isNwlInitialized:!1,potentialEsfErrorCounter:mm};C("ytNetworklessLoggingInitializationOptions",om);function pm(a,b){function c(d){var e=qm().G();if(!rm()||!d||e&&O("vss_networkless_bypass_write"))sm(a,b);else{var f={url:a,options:b,timestamp:Q(),status:"NEW",sendCount:0};Cl(f,d).then(function(g){f.id=g;qm().G()&&tm(f)}).catch(function(g){tm(f);
qm().G()?Kh(g):Wl(g)})}}
b=void 0===b?{}:b;O("skip_is_supported_killswitch")?dl().then(function(d){c(d)}):c(cl())}
function um(a,b){function c(d){if(rm()&&d){var e={url:a,options:b,timestamp:Q(),status:"NEW",sendCount:0},f=!1,g=b.onSuccess?b.onSuccess:function(){};
e.options.onSuccess=function(k,l){O("use_cfr_monitor")&&Tl().requestComplete(e.url,!0);void 0!==e.id?Hl(e.id,d):f=!0;O("vss_network_hint")&&qm().T(!0);g(k,l)};
if(O("use_cfr_monitor")){var h=b.onError?b.onError:function(){};
e.options.onError=function(k,l){Tl().requestComplete(e.url,!1);h(k,l)}}sm(e.url,e.options);
Cl(e,d).then(function(k){e.id=k;f&&Hl(e.id,d)}).catch(function(k){qm().G()?Kh(k):Wl(k)})}else sm(a,b)}
b=void 0===b?{}:b;O("skip_is_supported_killswitch")?dl().then(function(d){c(d)}):c(cl())}
function vm(){var a=cl();if(!a)throw yj("throttleSend");lm||(lm=Me.M(function(){var b;return x(function(c){if(1==c.i)return w(c,El("NEW",a),2);if(3!=c.i)return b=c.j,b?w(c,tm(b),3):(Me.aa(lm),lm=0,c.return());lm&&(lm=0,vm());c.i=0})},100))}
function tm(a){var b,c,d;return x(function(e){switch(e.i){case 1:b=cl();if(!b)throw c=yj("immediateSend"),c;if(void 0===a.id){e.s(2);break}return w(e,Fl(a.id,b),3);case 3:(d=e.j)?a=d:Lh(Error("The request cannot be found in the database."));case 2:var f=a.timestamp;if(!(2592E6<=Q()-f)){e.s(4);break}Lh(Error("Networkless Logging: Stored logs request expired age limit"));if(void 0===a.id){e.s(5);break}return w(e,Hl(a.id,b),5);case 5:return e.return();case 4:a.skipRetry||(a=wm(a));f=a;var g,h;if(null==
f?0:null==(g=f.options)?0:null==(h=g.postParams)?0:h.requestTimeMs)f.options.postParams.requestTimeMs=Math.round(Q());a=f;if(!a){e.s(0);break}if(!a.skipRetry||void 0===a.id){e.s(8);break}return w(e,Hl(a.id,b),8);case 8:sm(a.url,a.options,!!a.skipRetry),e.i=0}})}
function wm(a){var b=cl();if(!b)throw yj("updateRequestHandlers");var c=a.options.onError?a.options.onError:function(){};
a.options.onError=function(e,f){var g,h,k;return x(function(l){switch(l.i){case 1:O("use_cfr_monitor")&&Tl().requestComplete(a.url,!1);g=ul(f);if(!(O("nwl_consider_error_code")&&g||!O("nwl_consider_error_code")&&xm()<=fi("potential_esf_error_limit",10))){l.s(2);break}if(O("skip_checking_network_on_cfr_failure")&&(!O("skip_checking_network_on_cfr_failure")||Tl().isEndpointCFR(a.url))){l.s(3);break}return w(l,qm().V(),3);case 3:if(qm().G()){l.s(2);break}c(e,f);if(!O("nwl_consider_error_code")||void 0===
(null==(h=a)?void 0:h.id)){l.s(6);break}return w(l,Gl(a.id,b,!1),6);case 6:return l.return();case 2:if(O("nwl_consider_error_code")&&!g&&xm()>fi("potential_esf_error_limit",10))return l.return();B("ytNetworklessLoggingInitializationOptions")&&om.potentialEsfErrorCounter++;mm++;if(void 0===(null==(k=a)?void 0:k.id)){l.s(8);break}return 1>a.sendCount?w(l,Gl(a.id,b),12):w(l,Hl(a.id,b),8);case 12:Me.M(function(){qm().G()&&vm()},5E3);
case 8:c(e,f),l.i=0}})};
var d=a.options.onSuccess?a.options.onSuccess:function(){};
a.options.onSuccess=function(e,f){var g;return x(function(h){if(1==h.i)return O("use_cfr_monitor")&&Tl().requestComplete(a.url,!0),void 0===(null==(g=a)?void 0:g.id)?h.s(2):w(h,Hl(a.id,b),2);O("vss_network_hint")&&qm().T(!0);d(e,f);h.i=0})};
return a}
function qm(){if(O("use_new_nwl"))return gm();nm||(nm=new cm({Za:!0,Sa:!0}));return nm}
function sm(a,b,c){c&&0===Object.keys(b).length?Rl(a):qi(a,b)}
function rm(){return B("ytNetworklessLoggingInitializationOptions")?om.isNwlInitialized:!1}
function xm(){return B("ytNetworklessLoggingInitializationOptions")?om.potentialEsfErrorCounter:mm}
;function ym(a){var b=this;this.config_=null;a?this.config_=a:Fi()&&(this.config_=Gi());Yi(function(){Vi(b)},5E3)}
ym.prototype.isReady=function(){!this.config_&&Fi()&&(this.config_=Gi());return!!this.config_};
function Wi(a,b,c,d){function e(y){y=void 0===y?!1:y;var z;if(d.retry&&"www.youtube-nocookie.com"!=h&&(y||O("skip_ls_gel_retry")||"application/json"!==g.headers["Content-Type"]||(z=Ti(b,c,l,k)),z)){var G=g.onSuccess,K=g.onFetchSuccess;g.onSuccess=function(M,P){Ui(z);G(M,P)};
c.onFetchSuccess=function(M,P){Ui(z);K(M,P)}}try{y&&d.retry&&!d.ab.bypassNetworkless?(g.method="POST",d.ab.writeThenSend?O("use_new_nwl_wts")?im().writeThenSend(p,g):pm(p,g):O("use_new_nwl_saw")?im().sendAndWrite(p,g):um(p,g)):(g.method="POST",g.postParams||(g.postParams={}),qi(p,g))}catch(M){if("InvalidAccessError"==M.name)z&&(Ui(z),z=0),Lh(Error("An extension is blocking network request."));
else throw M;}z&&Yi(function(){Vi(a)},5E3)}
!N("VISITOR_DATA")&&"visitor_id"!==b&&.01>Math.random()&&Lh(new jj("Missing VISITOR_DATA when sending innertube request.",b,c,d));if(!a.isReady()){var f=new jj("innertube xhrclient not ready",b,c,d);Kh(f);throw f;}var g={headers:d.headers||{},method:"POST",postParams:c,postBody:d.postBody,postBodyFormat:d.postBodyFormat||"JSON",onTimeout:function(){d.onTimeout()},
onFetchTimeout:d.onTimeout,onSuccess:function(y,z){if(d.onSuccess)d.onSuccess(z)},
onFetchSuccess:function(y){if(d.onSuccess)d.onSuccess(y)},
onError:function(y,z){if(d.onError)d.onError(z)},
onFetchError:function(y){if(d.onError)d.onError(y)},
timeout:d.timeout,withCredentials:!0};g.headers["Content-Type"]||(g.headers["Content-Type"]="application/json");var h="";(f=a.config_.tb)&&(h=f);var k=a.config_.vb||!1,l=Ni(k,h,d);Object.assign(g.headers,l);(f=g.headers.Authorization)&&!h&&(g.headers["x-origin"]=window.location.origin);var m="/youtubei/"+a.config_.innertubeApiVersion+"/"+b,q={alt:"json"},t=a.config_.ub&&f;t=t&&f.startsWith("Bearer");t||(q.key=a.config_.innertubeApiKey);var p=ci(""+h+m,q||{},!0);O("use_new_nwl")&&im().i||!O("use_new_nwl")&&
rm()?bl().then(function(y){e(y)}):e(!1)}
;var zm={appSettingsCaptured:!0,visualElementAttached:!0,visualElementGestured:!0,visualElementHidden:!0,visualElementShown:!0,flowEvent:!0,visualElementStateChanged:!0,playbackAssociated:!0,youThere:!0,accountStateChangeSignedIn:!0,accountStateChangeSignedOut:!0},Am={latencyActionBaselined:!0,latencyActionInfo:!0,latencyActionTicked:!0,bedrockRepetitiveActionTimed:!0,adsClientStateChange:!0,streamzIncremented:!0,mdxDialAdditionalDataUpdateEvent:!0,tvhtml5WatchKeyEvent:!0,tvhtml5VideoSeek:!0,tokenRefreshEvent:!0,
adNotify:!0,adNotifyFilled:!0,tvhtml5LaunchUrlComponentChanged:!0,bedrockResourceConsumptionSnapshot:!0,deviceStartupMetrics:!0,mdxSignIn:!0,tvhtml5KeyboardLogging:!0,tvhtml5StartupSoundEvent:!0,tvhtml5LiveChatStatus:!0,tvhtml5DeviceStorageStatus:!0,tvhtml5LocalStorage:!0,directSignInEvent:!0,finalPayload:!0,tvhtml5SearchCompleted:!0,tvhtml5KeyboardPerformance:!0,adNotifyFailure:!0,latencyActionSpan:!0,tvhtml5AccountDialogOpened:!0,tvhtml5ApiTest:!0};function Bm(){var a=B("_lact",window);return null==a?-1:Math.max(Date.now()-a,0)}
;var Cm=A.ytPubsubPubsubInstance||new L,Dm=A.ytPubsubPubsubSubscribedKeys||{},Em=A.ytPubsubPubsubTopicToKeys||{},Fm=A.ytPubsubPubsubIsSynchronous||{};L.prototype.subscribe=L.prototype.subscribe;L.prototype.unsubscribeByKey=L.prototype.oa;L.prototype.publish=L.prototype.fa;L.prototype.clear=L.prototype.clear;C("ytPubsubPubsubInstance",Cm);C("ytPubsubPubsubTopicToKeys",Em);C("ytPubsubPubsubIsSynchronous",Fm);C("ytPubsubPubsubSubscribedKeys",Dm);var Gm=A.window;Gm.ytExports||(Gm.ytExports={logging:{transport:{leaderQueueLength:0,leaderChosen:!1}}});var Hm=fi("initial_gel_batch_timeout",2E3),Im=Math.pow(2,16)-1,Jm=!1,Km=void 0;function Lm(){this.l=this.i=this.j=0}
var Mm=new Lm,Nm=new Lm,Om=!0,Pm=A.ytLoggingTransportGELQueue_||new Map;C("ytLoggingTransportGELQueue_",Pm);var Qm=new Map,Rm=A.ytLoggingTransportGELProtoQueue_||new Map;C("ytLoggingTransportGELProtoQueue_",Rm);var Sm=A.ytLoggingTransportTokensToCttTargetIds_||{};C("ytLoggingTransportTokensToCttTargetIds_",Sm);var Tm=A.ytLoggingTransportTokensToJspbCttTargetIds_||{};C("ytLoggingTransportTokensToJspbCttTargetIds_",Tm);
function Um(){O("jspb_with_transport_leader")&&!Gm.ytExports.logging.transport.leaderChosen&&(Jm=Gm.ytExports.logging.transport.leaderChosen=!0,document.addEventListener("FLUSH_REQUEST",function(){Vm(void 0,void 0,!0)}))}
function Wm(a,b){Um();if("log_event"===a.endpoint){var c=Xm(a),d=Pm.get(c)||[];Pm.set(c,d);d.push(a.payload);Ym(b,d,c)}}
function Zm(a,b){Um();if("log_event"===a.endpoint){var c=Xm(a,!0);if(O("jspb_with_transport_leader")&&Jm){var d=Qm.get(c)||[];Qm.set(c,d);Gm.ytExports.logging.transport.leaderQueueLength++;d.push(a.payload);Ym(b,d,c,!0)}else d=Rm.get(c)||[],Rm.set(c,d),a=a.payload.toJSON(),d.push(a),Ym(b,d,c,!0)}}
function Ym(a,b,c,d){d=void 0===d?!1:d;a&&(Km=new a);a=fi("tvhtml5_logging_max_batch")||fi("web_logging_max_batch")||100;var e=Q(),f=d?Nm.l:Mm.l,g=Rm.get(c)||[];O("jspb_with_transport_leader")&&(Jm&&b.length+g.length>=a||!Jm&&Gm.ytExports.logging.transport.leaderQueueLength+b.length>=a)||b.length>=a?Vm({writeThenSend:!0},O("flush_only_full_queue")?c:void 0,d):10<=e-f&&($m(d),d?Nm.l=e:Mm.l=e)}
function an(a,b){Um();if("log_event"===a.endpoint){var c=Xm(a),d=new Map;d.set(c,[a.payload]);b&&(Km=new b);return new Nf(function(e,f){Km&&Km.isReady()?bn(d,e,f,{bypassNetworkless:!0},!0):e()})}}
function cn(a,b){Um();if("log_event"===a.endpoint){var c=Xm(a,!0),d=new Map,e=new Map;O("jspb_with_transport_leader")&&Jm?e.set(c,[a.payload]):d.set(c,[a.payload.toJSON()]);b&&(Km=new b);return new Nf(function(f){Km&&Km.isReady()?dn(d,e,f,{bypassNetworkless:!0},!0):f()})}}
function Xm(a,b){var c="";if(a.ga)c="visitorOnlyApprovedKey";else if(a.R){if(void 0===b?0:b){b=a.R.token;c=a.R;var d=new wh;c.videoId?d.setVideoId(c.videoId):c.playlistId&&gd(d,2,xh,c.playlistId);Tm[b]=d}else b=a.R,c={},b.videoId?c.videoId=b.videoId:b.playlistId&&(c.playlistId=b.playlistId),Sm[a.R.token]=c;c=a.R.token}return c}
function Vm(a,b,c){a=void 0===a?{}:a;c=void 0===c?!1:c;new Nf(function(d,e){c?(window.clearTimeout(Nm.j),window.clearTimeout(Nm.i),Nm.i=0):(window.clearTimeout(Mm.j),window.clearTimeout(Mm.i),Mm.i=0);if(O("jspb_with_transport_leader")&&!Jm)document.dispatchEvent(new CustomEvent("FLUSH_REQUEST")),d();else if(Km&&Km.isReady())if(void 0!==b)if(c){e=new Map;var f=new Map,g=Rm.get(b)||[];e.set(b,g);O("jspb_with_transport_leader")&&(g=Qm.get(b)||[],f.set(b,g));dn(e,f,d,a);O("jspb_with_transport_leader")&&
Qm.delete(b);Rm.delete(b)}else f=new Map,g=Pm.get(b)||[],f.set(b,g),bn(f,d,e,a),Pm.delete(b);else c?(dn(Rm,Qm,d,a),Rm.clear()):(bn(Pm,d,e,a),Pm.clear());else $m(c),d()})}
function $m(a){a=void 0===a?!1:a;if(O("web_gel_timeout_cap")&&(!a&&!Mm.i||a&&!Nm.i)){var b=Uh(function(){Vm({writeThenSend:!0},void 0,a)},6E4);
a?Nm.i=b:Mm.i=b}window.clearTimeout(a?Nm.j:Mm.j);b=N("LOGGING_BATCH_TIMEOUT",fi("web_gel_debounce_ms",1E4));O("shorten_initial_gel_batch_timeout")&&Om&&(b=Hm);b=Uh(function(){Vm({writeThenSend:!0},void 0,a)},b);
a?Nm.j=b:Mm.j=b}
function bn(a,b,c,d,e){var f=Km;d=void 0===d?{}:d;var g=Math.round(Q()),h=a.size;a=u(a);for(var k=a.next();!k.done;k=a.next()){var l=u(k.value);k=l.next().value;var m=l.next().value;l=k;k=nb({context:Hi(f.config_||Gi())});k.events=m;(m=Sm[l])&&en(k,l,m);delete Sm[l];l="visitorOnlyApprovedKey"===l;fn(k,g,l);gn(d);m=function(){h--;h||b()};
var q=function(){h--;h||b()};
try{Wi(f,"log_event",k,hn(d,l,m,q,e)),Om=!1}catch(t){Kh(t),c()}}}
function dn(a,b,c,d,e){var f=Km;d=void 0===d?{}:d;var g=Math.round(Q()),h=a.size+b.size,k=new Map([].concat(ia(a),ia(b)));k=u(k);for(var l=k.next();!l.done;l=k.next()){var m=u(l.value).next().value,q=a.get(m),t=b.get(m)||[];l=new yh;var p=Mi(f.config_||Gi());H(l,dh,1,p);q=q?jn(q):[];q=u(q);for(p=q.next();!p.done;p=q.next())md(l,3,th,p.value);t=u(t);for(q=t.next();!q.done;q=t.next())md(l,3,th,q.value);(t=Tm[m])&&kn(l,m,t);delete Tm[m];m="visitorOnlyApprovedKey"===m;ln(l,g,m);gn(d);l=qd(l);m=hn(d,m,
function(){Gm.ytExports.logging.transport.leaderQueueLength=0;h--;h||c()},function(){Gm.ytExports.logging.transport.leaderQueueLength=0;
h--;h||c()},e);
m.headers={"Content-Type":"application/json+protobuf"};m.postBodyFormat="JSPB";m.postBody=l;Wi(f,"log_event","",m);Om=!1}}
function gn(a){O("always_send_and_write")&&(a.writeThenSend=!1)}
function hn(a,b,c,d,e){return{retry:!0,onSuccess:c,onError:d,ab:a,ga:b,Vb:!!e,headers:{},postBodyFormat:"",postBody:""}}
function fn(a,b,c){a.requestTimeMs=String(b);O("unsplit_gel_payloads_in_logs")&&(a.unsplitGelPayloadsInLogs=!0);!c&&(b=N("EVENT_ID"))&&(c=mn(),a.serializedClientEventId={serializedEventId:b,clientCounter:String(c)})}
function ln(a,b,c){F(a,2,b);if(!c&&(b=N("EVENT_ID"))){c=mn();var d=new vh;F(d,1,b);F(d,2,c);H(a,vh,5,d)}}
function mn(){var a=N("BATCH_CLIENT_COUNTER")||0;a||(a=Math.floor(Math.random()*Im/2));a++;a>Im&&(a=1);Eh("BATCH_CLIENT_COUNTER",a);return a}
function en(a,b,c){if(c.videoId)var d="VIDEO";else if(c.playlistId)d="PLAYLIST";else return;a.credentialTransferTokenTargetId=c;a.context=a.context||{};a.context.user=a.context.user||{};a.context.user.credentialTransferTokens=[{token:b,scope:d}]}
function kn(a,b,c){if(ed(c,1===hd(c,xh)?1:-1))var d=1;else if(c.getPlaylistId())d=2;else return;H(a,wh,4,c);a=id(a,dh,1)||new dh;c=id(a,bh,3)||new bh;var e=new ah;e.setToken(b);F(e,1,d);md(c,12,ah,e);H(a,bh,3,c)}
function jn(a){for(var b=[],c=0;c<a.length;c++)try{b.push(new th(a[c]))}catch(d){Kh(new jj("Transport failed to deserialize "+String(a[c])))}return b}
;var nn=A.ytLoggingGelSequenceIdObj_||{};C("ytLoggingGelSequenceIdObj_",nn);function on(a){Vm(void 0,void 0,void 0===a?!1:a)}
function pn(a){nn[a]=a in nn?nn[a]+1:0;return nn[a]}
;function qn(a,b){var c=void 0===c?{}:c;var d=ym;N("ytLoggingEventsDefaultDisabled",!1)&&ym==ym&&(d=null);a:{c=void 0===c?{}:c;if(O("lr_drop_other_and_business_payloads")){if(Am[a]||zm[a])break a}else if(O("lr_drop_other_payloads")&&Am[a])break a;var e={},f=Math.round(c.timestamp||Q());e.eventTimeMs=f<Number.MAX_SAFE_INTEGER?f:0;e[a]=b;a=Bm();e.context={lastActivityMs:String(c.timestamp||!isFinite(a)?-1:a)};O("log_sequence_info_on_gel_web")&&c.ma&&(a=e.context,b=c.ma,b={index:pn(b),groupKey:b},a.sequence=
b,c.rb&&delete nn[c.ma]);(c.zb?an:Wm)({endpoint:"log_event",payload:e,R:c.R,ga:c.ga},d)}}
;var rn=[{Ha:function(a){return"Cannot read property '"+a.key+"'"},
xa:{Error:[{regexp:/(Permission denied) to access property "([^']+)"/,groups:["reason","key"]}],TypeError:[{regexp:/Cannot read property '([^']+)' of (null|undefined)/,groups:["key","value"]},{regexp:/\u65e0\u6cd5\u83b7\u53d6\u672a\u5b9a\u4e49\u6216 (null|undefined) \u5f15\u7528\u7684\u5c5e\u6027\u201c([^\u201d]+)\u201d/,groups:["value","key"]},{regexp:/\uc815\uc758\ub418\uc9c0 \uc54a\uc74c \ub610\ub294 (null|undefined) \ucc38\uc870\uc778 '([^']+)' \uc18d\uc131\uc744 \uac00\uc838\uc62c \uc218 \uc5c6\uc2b5\ub2c8\ub2e4./,
groups:["value","key"]},{regexp:/No se puede obtener la propiedad '([^']+)' de referencia nula o sin definir/,groups:["key"]},{regexp:/Unable to get property '([^']+)' of (undefined or null) reference/,groups:["key","value"]},{regexp:/(null) is not an object \(evaluating '(?:([^.]+)\.)?([^']+)'\)/,groups:["value","base","key"]}]}},{Ha:function(a){return"Cannot call '"+a.key+"'"},
xa:{TypeError:[{regexp:/(?:([^ ]+)?\.)?([^ ]+) is not a function/,groups:["base","key"]},{regexp:/([^ ]+) called on (null or undefined)/,groups:["key","value"]},{regexp:/Object (.*) has no method '([^ ]+)'/,groups:["base","key"]},{regexp:/Object doesn't support property or method '([^ ]+)'/,groups:["key"]},{regexp:/\u30aa\u30d6\u30b8\u30a7\u30af\u30c8\u306f '([^']+)' \u30d7\u30ed\u30d1\u30c6\u30a3\u307e\u305f\u306f\u30e1\u30bd\u30c3\u30c9\u3092\u30b5\u30dd\u30fc\u30c8\u3057\u3066\u3044\u307e\u305b\u3093/,
groups:["key"]},{regexp:/\uac1c\uccb4\uac00 '([^']+)' \uc18d\uc131\uc774\ub098 \uba54\uc11c\ub4dc\ub97c \uc9c0\uc6d0\ud558\uc9c0 \uc54a\uc2b5\ub2c8\ub2e4./,groups:["key"]}]}},{Ha:function(a){return a.key+" is not defined"},
xa:{ReferenceError:[{regexp:/(.*) is not defined/,groups:["key"]},{regexp:/Can't find variable: (.*)/,groups:["key"]}]}}];var tn={Y:[],W:[{mb:sn,weight:500}]};function sn(a){if("JavaException"===a.name)return!0;a=a.stack;return a.includes("chrome://")||a.includes("chrome-extension://")||a.includes("moz-extension://")}
;function un(){this.W=[];this.Y=[]}
var vn;function wn(){if(!vn){var a=vn=new un;a.Y.length=0;a.W.length=0;tn.Y&&a.Y.push.apply(a.Y,tn.Y);tn.W&&a.W.push.apply(a.W,tn.W)}return vn}
;var xn=new L;function yn(a){function b(){return a.charCodeAt(d++)}
var c=a.length,d=0;do{var e=zn(b);if(Infinity===e)break;var f=e>>3;switch(e&7){case 0:e=zn(b);if(2===f)return e;break;case 1:if(2===f)return;d+=8;break;case 2:e=zn(b);if(2===f)return a.substr(d,e);d+=e;break;case 5:if(2===f)return;d+=4;break;default:return}}while(d<c)}
function zn(a){var b=a(),c=b&127;if(128>b)return c;b=a();c|=(b&127)<<7;if(128>b)return c;b=a();c|=(b&127)<<14;if(128>b)return c;b=a();return 128>b?c|(b&127)<<21:Infinity}
;function An(a,b,c,d){if(a)if(Array.isArray(a)){var e=d;for(d=0;d<a.length&&!(a[d]&&(e+=Bn(d,a[d],b,c),500<e));d++);d=e}else if("object"===typeof a)for(e in a){if(a[e]){var f=a[e];var g=b;var h=c;g="string"!==typeof f||"clickTrackingParams"!==e&&"trackingParams"!==e?0:(f=yn(atob(f.replace(/-/g,"+").replace(/_/g,"/"))))?Bn(e+".ve",f,g,h):0;d+=g;d+=Bn(e,a[e],b,c);if(500<d)break}}else c[b]=Cn(a),d+=c[b].length;else c[b]=Cn(a),d+=c[b].length;return d}
function Bn(a,b,c,d){c+="."+a;a=Cn(b);d[c]=a;return c.length+a.length}
function Cn(a){try{return("string"===typeof a?a:String(JSON.stringify(a))).substr(0,500)}catch(b){return"unable to serialize "+typeof a+" ("+b.message+")"}}
;var Dn=A.ytLoggingGelSequenceIdObj_||{};C("ytLoggingGelSequenceIdObj_",Dn);function En(a){var b=void 0;b=void 0===b?{}:b;var c=!1;N("ytLoggingEventsDefaultDisabled",!1)&&ym===ym&&(c=!0);c=c?null:ym;b=void 0===b?{}:b;var d=Math.round(b.timestamp||Q());F(a,1,d<Number.MAX_SAFE_INTEGER?d:0);var e=Bm();d=new sh;F(d,1,b.timestamp||!isFinite(e)?-1:e);if(O("log_sequence_info_on_gel_web")&&b.ma){e=b.ma;var f=pn(e),g=new rh;F(g,2,f);F(g,1,e);H(d,rh,3,g);b.rb&&delete Dn[b.ma]}H(a,sh,33,d);(b.zb?cn:Zm)({endpoint:"log_event",payload:a,R:b.R,ga:b.ga},c)}
;var Fn=new Set,Gn=0,Hn=0,In=0,Jn=[],Kn=["PhantomJS","Googlebot","TO STOP THIS SECURITY SCAN go/scan"];function Ln(){for(var a=u(Kn),b=a.next();!b.done;b=a.next()){var c=Kb();if(c&&0<=c.toLowerCase().indexOf(b.value.toLowerCase()))return!0}return!1}
;function Mn(){var a;return x(function(b){return(a=ff())?b.return(a.then(function(c){c=qd(c);for(var d=[],e=0,f=0;f<c.length;f++){var g=c.charCodeAt(f);255<g&&(d[e++]=g&255,g>>=8);d[e++]=g}return xc(d,3)})):b.return(Promise.resolve(null))})}
;var Nn={};function On(a){return Nn[a]||(Nn[a]=String(a).replace(/\-([a-z])/g,function(b,c){return c.toUpperCase()}))}
;var Pn={},Qn=[],Ag=new L,Rn={};function Sn(){for(var a=u(Qn),b=a.next();!b.done;b=a.next())b=b.value,b()}
function Tn(a,b){var c;"yt:"===a.tagName.toLowerCase().substr(0,3)?c=a.getAttribute(b):c=a?a.dataset?a.dataset[On(b)]:a.getAttribute("data-"+b):null;return c}
function Un(a){Ag.fa.apply(Ag,arguments)}
;function Vn(a){this.i=a||{};a=[this.i,window.YTConfig||{}];for(var b=0;b<a.length;b++)a[b].host&&(a[b].host=a[b].host.toString().replace("http://","https://"))}
function Wn(a,b){a=[a.i,window.YTConfig||{}];for(var c=0;c<a.length;c++){var d=a[c][b];if(void 0!==d)return d}return null}
function Xn(a,b,c){Yn||(Yn={},Th(window,"message",function(d){a:{if(d.origin===Wn(a,"host")){try{var e=JSON.parse(d.data)}catch(f){e=void 0;break a}if(d=Yn[e.id])d.u=!0,d.u&&(D(d.v,d.sendMessage,d),d.v.length=0),d.Oa(e)}e=void 0}return e}));
Yn[c]=b}
var Yn=null;var Zn=window;function $n(a,b,c){this.m=this.i=this.j=null;this.l=0;this.u=!1;this.v=[];this.o=null;this.J={};if(!a)throw Error("YouTube player element ID required.");this.id=Qa(this);this.C=c;this.setup(a,b)}
n=$n.prototype;n.setSize=function(a,b){this.i.width=a.toString();this.i.height=b.toString();return this};
n.getIframe=function(){return this.i};
n.Oa=function(a){ao(this,a.event,a)};
n.addEventListener=function(a,b){var c=b;"string"===typeof b&&(c=function(){window[b].apply(window,arguments)});
if(!c)return this;this.o.subscribe(a,c);bo(this,a);return this};
function co(a,b){b=b.split(".");if(2===b.length){var c=b[1];a.C===b[0]&&bo(a,c)}}
n.destroy=function(){this.i&&this.i.id&&(Pn[this.i.id]=null);var a=this.o;a&&"function"==typeof a.dispose&&a.dispose();if(this.m){a=this.i;var b=a.parentNode;b&&b.replaceChild(this.m,a)}else(a=this.i)&&a.parentNode&&a.parentNode.removeChild(a);Yn&&(Yn[this.id]=null);this.j=null;a=this.i;for(var c in lb)lb[c][0]==a&&Rh(c);this.m=this.i=null};
n.Ra=function(){return{}};
function eo(a,b,c){c=c||[];c=Array.prototype.slice.call(c);b={event:"command",func:b,args:c};a.u?a.sendMessage(b):a.v.push(b)}
function ao(a,b,c){a.o.o||(c={target:a,data:c},a.o.fa(b,c),Un(a.C+"."+b,c))}
function fo(a,b){var c=document.createElement("iframe");b=b.attributes;for(var d=0,e=b.length;d<e;d++){var f=b[d].value;null!=f&&""!==f&&"null"!==f&&c.setAttribute(b[d].name,f)}c.setAttribute("frameBorder","0");c.setAttribute("allowfullscreen","1");c.setAttribute("allow","accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture");c.setAttribute("title","YouTube "+Wn(a.j,"title"));(b=Wn(a.j,"width"))&&c.setAttribute("width",b.toString());(b=Wn(a.j,"height"))&&c.setAttribute("height",
b.toString());var g=a.Ra();g.enablejsapi=window.postMessage?1:0;window.location.host&&(g.origin=window.location.protocol+"//"+window.location.host);g.widgetid=a.id;window.location.href&&D(["debugjs","debugcss"],function(k){var l=Zb(window.location.href,k);null!==l&&(g[k]=l)});
Zn.yt_embedsTokenValue&&(g.embedsTokenValue=encodeURIComponent(Zn.yt_embedsTokenValue),delete Zn.yt_embedsTokenValue);var h=""+Wn(a.j,"host")+("/embed/"+Wn(a.j,"videoId"))+"?"+Tb(g);Zn.yt_embedsEnableUaChProbe?Mn().then(function(k){var l=new URL(h),m=Number(l.searchParams.get("reloads"));isNaN(m)&&(m=0);l.searchParams.set("reloads",(m+1).toString());k&&l.searchParams.set("uach",k);l.searchParams.set("uats",Math.floor(window.performance.timeOrigin).toString());k=Bd(l.href).toString();Dd(c,Cd(k));return k}):
Zn.yt_embedsEnableIframeSrcWithIntent?Dd(c,Cd(h)):c.src=h;
return c}
n.bb=function(){this.i&&this.i.contentWindow?this.sendMessage({event:"listening"}):window.clearInterval(this.l)};
function go(a){Xn(a.j,a,a.id);a.l=Vh(a.bb.bind(a));Th(a.i,"load",function(){window.clearInterval(a.l);a.l=Vh(a.bb.bind(a))})}
n.setup=function(a,b){var c=document;if(a="string"===typeof a?c.getElementById(a):a)if(c="iframe"===a.tagName.toLowerCase(),b.host||(b.host=c?Rb(a.src):"https://www.youtube.com"),this.j=new Vn(b),c||(b=fo(this,a),this.m=a,(c=a.parentNode)&&c.replaceChild(b,a),a=b),this.i=a,this.i.id||(this.i.id="widget"+Qa(this.i)),Pn[this.i.id]=this,window.postMessage){this.o=new L;go(this);b=Wn(this.j,"events");for(var d in b)b.hasOwnProperty(d)&&this.addEventListener(d,b[d]);for(var e in Rn)Rn.hasOwnProperty(e)&&
co(this,e)}};
function bo(a,b){a.J[b]||(a.J[b]=!0,eo(a,"addEventListener",[b]))}
n.sendMessage=function(a){a.id=this.id;a.channel="widget";var b=Lf(a),c=[Rb(this.i.src||"").replace("http:","https:")];if(this.i.contentWindow)for(var d=0;d<c.length;d++)try{this.i.contentWindow.postMessage(b,c[d])}catch(Ub){if(Ub.name&&"SyntaxError"===Ub.name){if(!(Ub.message&&0<Ub.message.indexOf("target origin ''"))){var e=void 0,f=Ub;e=void 0===e?{}:e;e.name=N("INNERTUBE_CONTEXT_CLIENT_NAME",1);e.version=N("INNERTUBE_CONTEXT_CLIENT_VERSION");var g=e||{},h="WARNING";h=void 0===h?"ERROR":h;if(f){f.hasOwnProperty("level")&&
f.level&&(h=f.level);if(O("console_log_js_exceptions")){var k=f,l=[];l.push("Name: "+k.name);l.push("Message: "+k.message);k.hasOwnProperty("params")&&l.push("Error Params: "+JSON.stringify(k.params));k.hasOwnProperty("args")&&l.push("Error args: "+JSON.stringify(k.args));l.push("File name: "+k.fileName);l.push("Stacktrace: "+k.stack);window.console.log(l.join("\n"),k)}if(!(5<=Gn)){var m=void 0,q=void 0,t=f,p=g,y=ee(t),z=y.message||"Unknown Error",G=y.name||"UnknownError",K=y.stack||t.j||"Not available";
if(K.startsWith(G+": "+z)){var M=K.split("\n");M.shift();K=M.join("\n")}var P=y.lineNumber||"Not available",kb=y.fileName||"Not available",uc=K,va=0;if(t.hasOwnProperty("args")&&t.args&&t.args.length)for(var na=0;na<t.args.length&&!(va=An(t.args[na],"params."+na,p,va),500<=va);na++);else if(t.hasOwnProperty("params")&&t.params){var Y=t.params;if("object"===typeof t.params)for(q in Y){if(Y[q]){var ba="params."+q,ca=Cn(Y[q]);p[ba]=ca;va+=ba.length+ca.length;if(500<va)break}}else p.params=Cn(Y)}if(Jn.length)for(var X=
0;X<Jn.length&&!(va=An(Jn[X],"params.context."+X,p,va),500<=va);X++);navigator.vendor&&!p.hasOwnProperty("vendor")&&(p["device.vendor"]=navigator.vendor);var S={message:z,name:G,lineNumber:P,fileName:kb,stack:uc,params:p,sampleWeight:1},Qj=Number(t.columnNumber);isNaN(Qj)||(S.lineNumber=S.lineNumber+":"+Qj);if("IGNORED"===t.level)m=0;else a:{for(var Rj=wn(),Sj=u(Rj.Y),Pf=Sj.next();!Pf.done;Pf=Sj.next()){var Tj=Pf.value;if(S.message&&S.message.match(Tj.Wb)){m=Tj.weight;break a}}for(var Uj=u(Rj.W),
Qf=Uj.next();!Qf.done;Qf=Uj.next()){var Vj=Qf.value;if(Vj.mb(S)){m=Vj.weight;break a}}m=1}S.sampleWeight=m;for(var Wj=u(rn),Rf=Wj.next();!Rf.done;Rf=Wj.next()){var Sf=Rf.value;if(Sf.xa[S.name])for(var Xj=u(Sf.xa[S.name]),Tf=Xj.next();!Tf.done;Tf=Xj.next()){var Yj=Tf.value,Ld=S.message.match(Yj.regexp);if(Ld){S.params["params.error.original"]=Ld[0];for(var Uf=Yj.groups,Zj={},Vb=0;Vb<Uf.length;Vb++)Zj[Uf[Vb]]=Ld[Vb+1],S.params["params.error."+Uf[Vb]]=Ld[Vb+1];S.message=Sf.Ha(Zj);break}}}S.params||(S.params=
{});var ak=wn();S.params["params.errorServiceSignature"]="msg="+ak.Y.length+"&cb="+ak.W.length;S.params["params.serviceWorker"]="false";A.document&&A.document.querySelectorAll&&(S.params["params.fscripts"]=String(document.querySelectorAll("script:not([nonce])").length));xb("sample").constructor!==wb&&(S.params["params.fconst"]="true");var ra=S;window.yterr&&"function"===typeof window.yterr&&window.yterr(ra);if(0!==ra.sampleWeight&&!Fn.has(ra.message)){if("ERROR"===h){xn.fa("handleError",ra);if(O("record_app_crashed_web")&&
0===In&&1===ra.sampleWeight)if(In++,O("errors_via_jspb")){var Vf=new qh;F(Vf,1,1);if(!O("report_client_error_with_app_crash_ks")){var bk=new lh;F(bk,1,ra.message);var ck=new mh;H(ck,lh,3,bk);var dk=new nh;H(dk,mh,5,ck);var ek=new oh;H(ek,nh,9,dk);H(Vf,oh,4,ek)}var mo=Vf,fk=new th;kd(fk,qh,20,uh,mo);En(fk)}else{var gk={appCrashType:"APP_CRASH_TYPE_BREAKPAD"};O("report_client_error_with_app_crash_ks")||(gk.systemHealth={crashData:{clientError:{logMessage:{message:ra.message}}}});qn("appCrashed",gk)}Hn++}else"WARNING"===
h&&xn.fa("handleWarning",ra);if(O("kevlar_gel_error_routing"))a:{var Wf=void 0,Xf=void 0,Hc=h,R=ra;if(O("errors_via_jspb")){if(Ln())Xf=void 0;else{var Wb=new ih;F(Wb,1,R.stack);R.fileName&&F(Wb,4,R.fileName);var Ja=R.lineNumber&&R.lineNumber.split?R.lineNumber.split(":"):[];0!==Ja.length&&(1!==Ja.length||isNaN(Number(Ja[0]))?2!==Ja.length||isNaN(Number(Ja[0]))||isNaN(Number(Ja[1]))||(F(Wb,2,Number(Ja[0])),F(Wb,3,Number(Ja[1]))):F(Wb,2,Number(Ja[0])));var qb=new lh;F(qb,1,R.message);F(qb,3,R.name);
F(qb,6,R.sampleWeight);"ERROR"===Hc?F(qb,2,2):"WARNING"===Hc?F(qb,2,1):F(qb,2,0);var Yf=new jh;F(Yf,1,!0);kd(Yf,ih,3,kh,Wb);var rb=new fh;F(rb,3,window.location.href);for(var hk=N("FEXP_EXPERIMENTS",[]),Zf=0;Zf<hk.length;Zf++){var ik=rb,no=hk[Zf];Rc(ik);fd(ik,5).push(no)}var $f=Fh();if(!Gh()&&$f)for(var jk=u(Object.keys($f)),sb=jk.next();!sb.done;sb=jk.next()){var kk=sb.value,ag=new hh;F(ag,1,kk);ag.setValue(String($f[kk]));md(rb,4,hh,ag)}var bg=R.params;if(bg){var lk=u(Object.keys(bg));for(sb=lk.next();!sb.done;sb=
lk.next()){var mk=sb.value,cg=new hh;F(cg,1,"client."+mk);cg.setValue(String(bg[mk]));md(rb,4,hh,cg)}}var nk=N("SERVER_NAME"),ok=N("SERVER_VERSION");if(nk&&ok){var dg=new hh;F(dg,1,"server.name");dg.setValue(nk);md(rb,4,hh,dg);var eg=new hh;F(eg,1,"server.version");eg.setValue(ok);md(rb,4,hh,eg)}var Md=new mh;H(Md,fh,1,rb);H(Md,jh,2,Yf);H(Md,lh,3,qb);Xf=Md}var pk=Xf;if(!pk)break a;var qk=new th;kd(qk,mh,163,uh,pk);En(qk)}else{if(Ln())Wf=void 0;else{var Ic={stackTrace:R.stack};R.fileName&&(Ic.filename=
R.fileName);var Ka=R.lineNumber&&R.lineNumber.split?R.lineNumber.split(":"):[];0!==Ka.length&&(1!==Ka.length||isNaN(Number(Ka[0]))?2!==Ka.length||isNaN(Number(Ka[0]))||isNaN(Number(Ka[1]))||(Ic.lineNumber=Number(Ka[0]),Ic.columnNumber=Number(Ka[1])):Ic.lineNumber=Number(Ka[0]));var fg={level:"ERROR_LEVEL_UNKNOWN",message:R.message,errorClassName:R.name,sampleWeight:R.sampleWeight};"ERROR"===Hc?fg.level="ERROR_LEVEL_ERROR":"WARNING"===Hc&&(fg.level="ERROR_LEVEL_WARNNING");var oo={isObfuscated:!0,browserStackInfo:Ic},
Xb={pageUrl:window.location.href,kvPairs:[]};N("FEXP_EXPERIMENTS")&&(Xb.experimentIds=N("FEXP_EXPERIMENTS"));var gg=Fh();if(!Gh()&&gg)for(var rk=u(Object.keys(gg)),tb=rk.next();!tb.done;tb=rk.next()){var sk=tb.value;Xb.kvPairs.push({key:sk,value:String(gg[sk])})}var hg=R.params;if(hg){var tk=u(Object.keys(hg));for(tb=tk.next();!tb.done;tb=tk.next()){var uk=tb.value;Xb.kvPairs.push({key:"client."+uk,value:String(hg[uk])})}}var vk=N("SERVER_NAME"),wk=N("SERVER_VERSION");vk&&wk&&(Xb.kvPairs.push({key:"server.name",
value:vk}),Xb.kvPairs.push({key:"server.version",value:wk}));Wf={errorMetadata:Xb,stackTrace:oo,logMessage:fg}}var xk=Wf;if(!xk)break a;qn("clientError",xk)}if("ERROR"===Hc||O("errors_flush_gel_always_killswitch"))O("web_fp_via_jspb")&&on(!0),on()}if(!O("suppress_error_204_logging")){var ub=ra,Jc=ub.params||{},$a={urlParams:{a:"logerror",t:"jserror",type:ub.name,msg:ub.message.substr(0,250),line:ub.lineNumber,level:h,"client.name":Jc.name},postParams:{url:N("PAGE_NAME",window.location.href),file:ub.fileName},
method:"POST"};Jc.version&&($a["client.version"]=Jc.version);if($a.postParams){ub.stack&&($a.postParams.stack=ub.stack);for(var yk=u(Object.keys(Jc)),ig=yk.next();!ig.done;ig=yk.next()){var zk=ig.value;$a.postParams["client."+zk]=Jc[zk]}var jg=Fh();if(jg)for(var Ak=u(Object.keys(jg)),kg=Ak.next();!kg.done;kg=Ak.next()){var Bk=kg.value;$a.postParams[Bk]=jg[Bk]}var Ck=N("SERVER_NAME"),Dk=N("SERVER_VERSION");Ck&&Dk&&($a.postParams["server.name"]=Ck,$a.postParams["server.version"]=Dk)}qi(N("ECATCHER_REPORT_HOST",
"")+"/error_204",$a)}try{Fn.add(ra.message)}catch(to){}Gn++}}}}}else throw Ub;}else console&&console.warn&&console.warn("The YouTube player is not attached to the DOM. API calls should be made after the onReady event. See more: https://developers.google.com/youtube/iframe_api_reference#Events")};function ho(a){return(0===a.search("cue")||0===a.search("load"))&&"loadModule"!==a}
function io(a){return 0===a.search("get")||0===a.search("is")}
;function jo(a,b){$n.call(this,a,Object.assign({title:"video player",videoId:"",width:640,height:360},b||{}),"player");this.N={};this.playerInfo={}}
v(jo,$n);n=jo.prototype;n.Ra=function(){var a=Wn(this.j,"playerVars");if(a){var b={},c;for(c in a)b[c]=a[c];a=b}else a={};window!==window.top&&document.referrer&&(a.widget_referrer=document.referrer.substring(0,256));if(c=Wn(this.j,"embedConfig")){if(Pa(c))try{c=JSON.stringify(c)}catch(d){console.error("Invalid embed config JSON",d)}a.embed_config=c}return a};
n.Oa=function(a){var b=a.event;a=a.info;switch(b){case "apiInfoDelivery":if(Pa(a))for(var c in a)a.hasOwnProperty(c)&&(this.N[c]=a[c]);break;case "infoDelivery":ko(this,a);break;case "initialDelivery":Pa(a)&&(window.clearInterval(this.l),this.playerInfo={},this.N={},lo(this,a.apiInterface),ko(this,a));break;default:ao(this,b,a)}};
function ko(a,b){if(Pa(b))for(var c in b)b.hasOwnProperty(c)&&(a.playerInfo[c]=b[c])}
function lo(a,b){D(b,function(c){this[c]||("getCurrentTime"===c?this[c]=function(){var d=this.playerInfo.currentTime;if(1===this.playerInfo.playerState){var e=(Date.now()/1E3-this.playerInfo.currentTimeLastUpdated_)*this.playerInfo.playbackRate;0<e&&(d+=Math.min(e,1))}return d}:ho(c)?this[c]=function(){this.playerInfo={};
this.N={};eo(this,c,arguments);return this}:io(c)?this[c]=function(){var d=0;
0===c.search("get")?d=3:0===c.search("is")&&(d=2);return this.playerInfo[c.charAt(d).toLowerCase()+c.substr(d+1)]}:this[c]=function(){eo(this,c,arguments);
return this})},a)}
n.getVideoEmbedCode=function(){var a=Wn(this.j,"host")+("/embed/"+Wn(this.j,"videoId")),b=Number(Wn(this.j,"width")),c=Number(Wn(this.j,"height"));if(isNaN(b)||isNaN(c))throw Error("Invalid width or height property");b=Math.floor(b);c=Math.floor(c);Gb.test(a)&&(-1!=a.indexOf("&")&&(a=a.replace(Ab,"&amp;")),-1!=a.indexOf("<")&&(a=a.replace(Bb,"&lt;")),-1!=a.indexOf(">")&&(a=a.replace(Cb,"&gt;")),-1!=a.indexOf('"')&&(a=a.replace(Db,"&quot;")),-1!=a.indexOf("'")&&(a=a.replace(Eb,"&#39;")),-1!=a.indexOf("\x00")&&
(a=a.replace(Fb,"&#0;")));return'<iframe width="'+b+'" height="'+c+'" src="'+a+'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'};
n.getOptions=function(a){return this.N.namespaces?a?this.N[a]?this.N[a].options||[]:[]:this.N.namespaces||[]:[]};
n.getOption=function(a,b){if(this.N.namespaces&&a&&b&&this.N[a])return this.N[a][b]};
function po(a){if("iframe"!==a.tagName.toLowerCase()){var b=Tn(a,"videoid");b&&(b={videoId:b,width:Tn(a,"width"),height:Tn(a,"height")},new jo(a,b))}}
;C("YT.PlayerState.UNSTARTED",-1);C("YT.PlayerState.ENDED",0);C("YT.PlayerState.PLAYING",1);C("YT.PlayerState.PAUSED",2);C("YT.PlayerState.BUFFERING",3);C("YT.PlayerState.CUED",5);C("YT.get",function(a){return Pn[a]});
C("YT.scan",Sn);C("YT.subscribe",function(a,b,c){Ag.subscribe(a,b,c);Rn[a]=!0;for(var d in Pn)Pn.hasOwnProperty(d)&&co(Pn[d],a)});
C("YT.unsubscribe",function(a,b,c){zg(a,b,c)});
C("YT.Player",jo);$n.prototype.destroy=$n.prototype.destroy;$n.prototype.setSize=$n.prototype.setSize;$n.prototype.getIframe=$n.prototype.getIframe;$n.prototype.addEventListener=$n.prototype.addEventListener;jo.prototype.getVideoEmbedCode=jo.prototype.getVideoEmbedCode;jo.prototype.getOptions=jo.prototype.getOptions;jo.prototype.getOption=jo.prototype.getOption;
Qn.push(function(a){var b=a;b||(b=document);a=gb(b.getElementsByTagName("yt:player"));var c=b||document;if(c.querySelectorAll&&c.querySelector)b=c.querySelectorAll(".yt-player");else{var d;c=document;b=b||c;if(b.querySelectorAll&&b.querySelector)b=b.querySelectorAll(".yt-player");else if(b.getElementsByClassName){var e=b.getElementsByClassName("yt-player");b=e}else{e=b.getElementsByTagName("*");var f={};for(c=d=0;b=e[c];c++){var g=b.className,h;if(h="function"==typeof g.split)h=0<=cb(g.split(/\s+/),
"yt-player");h&&(f[d++]=b)}f.length=d;b=f}}b=gb(b);D(fb(a,b),po)});
"undefined"!=typeof YTConfig&&YTConfig.parsetags&&"onload"!=YTConfig.parsetags||Sn();var qo=A.onYTReady;qo&&qo();var ro=A.onYouTubeIframeAPIReady;ro&&ro();var so=A.onYouTubePlayerAPIReady;so&&so();}).call(this);
