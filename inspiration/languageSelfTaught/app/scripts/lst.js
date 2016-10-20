$(function () {
	$.Lst.boxWidget.activate();
});
$.Lst = {};
$.Lst.options = {
	animationSpeed: 500,
	//Box Widget plugin options
	boxWidgetOptions: {
		boxWidgetIcons: {
		  //Collapse icon
		  collapse: 'fa-minus',
		  //Open icon
		  open: 'fa-plus',
		  //Remove icon
		  remove: 'fa-times'
		},
		boxWidgetSelectors: {
		  //Remove button selector
		  remove: '[data-widget="remove"]',
		  //Collapse button selector
		  collapse: '[data-widget="collapse"]'
		}
	},
};
$.Lst.boxWidget = {
	selectors: $.Lst.options.boxWidgetOptions.boxWidgetSelectors,
	icons: $.Lst.options.boxWidgetOptions.boxWidgetIcons,
	animationSpeed: $.Lst.options.animationSpeed,
	activate: function (_box) {
	  var _this = this;
	  if (!_box) {
	    _box = document; // activate all boxes per default
	  }
	  //Listen for collapse event triggers
	  $(_box).on('click', _this.selectors.collapse, function (e) {
	    e.preventDefault();
	    _this.collapse($(this));
	  });

	  //Listen for remove event triggers
	  $(_box).on('click', _this.selectors.remove, function (e) {
	    e.preventDefault();
	    _this.remove($(this));
	  });
	},
	collapse: function (element) {
	  var _this = this;
	  //Find the box parent
	  var box = element.parents(".box").first();
	  //Find the body and the footer
	  var box_content = box.find("> .box-body, > .box-footer, > form  >.box-body, > form > .box-footer");
	  if (!box.hasClass("collapsed-box")) {
	    //Convert minus into plus
	    element.children(":first")
	      .removeClass(_this.icons.collapse)
	      .addClass(_this.icons.open);
	    //Hide the content
	    box_content.slideUp(_this.animationSpeed, function () {
	      box.addClass("collapsed-box");
	    });
	  } else {
	    //Convert plus into minus
	    element.children(":first")
	      .removeClass(_this.icons.open)
	      .addClass(_this.icons.collapse);
	    //Show the content
	    box_content.slideDown(_this.animationSpeed, function () {
	      box.removeClass("collapsed-box");
	    });
	  }
	},
	remove: function (element) {
	  //Find the box parent
	  var box = element.parents(".box").first();
	  box.slideUp(this.animationSpeed);
	}
};