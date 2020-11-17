$(function() {
	'use strict';
	$("#imageurl").change(ev => {
	 $(ev.target).closest('form').trigger('submit')
	});
});
