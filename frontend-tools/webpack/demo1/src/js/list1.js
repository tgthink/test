//document.write("It works.");
// require("!style!css!./style.css");
var Vue = require('vue');
var $ = require('jquery');

new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue.js!'
  }
});
$('#msg').html('我是list1!<br/>');

/*require("./style.css");
document.write(require("./content.js"));*/