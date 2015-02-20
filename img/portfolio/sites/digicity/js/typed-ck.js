// The MIT License (MIT)
// Tyepd.js | Copyright (c) 2014 Matt Boldt | www.mattboldt.com
// Permission is hereby granted, free of charge, to any person obtaining a copy
// of this software and associated documentation files (the "Software"), to deal
// in the Software without restriction, including without limitation the rights
// to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
// copies of the Software, and to permit persons to whom the Software is
// furnished to do so, subject to the following conditions:
// The above copyright notice and this permission notice shall be included in
// all copies or substantial portions of the Software.
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
// OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
// THE SOFTWARE.
!function(e){"use strict";var t=function(t,n){this.el=e(t);this.options=e.extend({},e.fn.typed.defaults,n);this.text=this.el.text();this.typeSpeed=this.options.typeSpeed;this.startDelay=this.options.startDelay;this.backDelay=this.options.backDelay;this.strings=this.options.strings;this.strPos=0;this.arrayPos=0;this.string=this.strings[this.arrayPos];this.stopNum=0;this.loop=this.options.loop;this.loopCount=this.options.loopCount;this.curLoop=1;this.loop===!1?this.stopArray=this.strings.length-1:this.stopArray=this.strings.length;this.build()};t.prototype={constructor:t,init:function(){var e=this;setTimeout(function(){e.typewrite(e.string,e.strPos)},e.startDelay)},build:function(){this.init()},typewrite:function(e,t){var n=Math.round(Math.random()*70)+this.typeSpeed,r=this;setTimeout(function(){if(r.arrayPos<r.strings.length){r.el.attr("placeholder",e.substr(0,t));if(t>e.length&&r.arrayPos<r.stopArray){clearTimeout(n);var n=setTimeout(function(){r.backspace(e,t)},r.backDelay)}else{t++;r.typewrite(e,t);if(r.loop===!1&&r.arrayPos===r.stopArray&&t===e.length){var n=r.options.callback();clearTimeout(n)}}}else if(r.loop===!0&&r.loopCount===!1){r.arrayPos=0;r.init()}else if(r.loopCount!==!1&&r.curLoop<r.loopCount){r.arrayPos=0;r.curLoop=r.curLoop+1;r.init()}},n)},backspace:function(e,t){var n=Math.round(Math.random()*70)+this.typeSpeed,r=this;setTimeout(function(){r.el.attr("placeholder",e.substr(0,t));if(t>r.stopNum){t--;r.backspace(e,t)}else if(t<=r.stopNum){clearTimeout(n);var n=r.arrayPos=r.arrayPos+1;r.typewrite(r.strings[r.arrayPos],t)}},n)}};e.fn.typed=function(n){return this.each(function(){var r=e(this),i=r.data("typed"),s=typeof n=="object"&&n;i||r.data("typed",i=new t(this,s));typeof n=="string"&&i[n]()})};e.fn.typed.defaults={strings:["These are the default values...","You know what you should do?","Use your own!","Have a great day!"],typeSpeed:0,startDelay:0,backDelay:500,loop:!1,loopCount:!1,callback:function(){null}}}(window.jQuery);