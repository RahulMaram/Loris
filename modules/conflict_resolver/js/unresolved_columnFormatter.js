!function(e){function t(r){if(n[r])return n[r].exports;var a=n[r]={exports:{},id:r,loaded:!1};return e[r].call(a.exports,a,a.exports,t),a.loaded=!0,a.exports}var n={};return t.m=e,t.c=n,t.p="",t(0)}([function(e,t){"use strict";function n(e,t,n,r){if(loris.hiddenHeaders.indexOf(e)>-1)return null;var a={};r.forEach(function(e,t){a[e]=n[t]},this);var o,l,c;return"Correct Answer"===e?(o=a.Value1,l=a.Value2,c=a.Hash,React.createElement("td",null,React.createElement("select",{name:c,className:"form-control input-sm"},React.createElement("option",{value:"none"},"Unresolved"),React.createElement("option",{value:"1"},o),React.createElement("option",{value:"2"},l)))):React.createElement("td",null,t)}Object.defineProperty(t,"__esModule",{value:!0}),window.formatColumn=n,t.default=n}]);
//# sourceMappingURL=unresolved_columnFormatter.js.map