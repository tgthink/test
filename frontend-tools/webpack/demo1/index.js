//document.write("It works.");
// require("!style!css!./style.css");
var $ = require('jquery');
$('body').html('Hello Webpack!<br/>');

require("./style.css");
document.write(require("./content.js"));