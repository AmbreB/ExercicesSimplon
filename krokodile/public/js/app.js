'use strict';
$(document).ready(function(){

	function watchers(){
		$("button").on('click', function(){
			var id = $(this).attr('counter-id');
			incrementCounter(id);
		});
	}
	function incrementCounter(id){
		$.getJSON(baseURL + '?ajax=increment&id=' + id, function(data){
			console.log(data);
			$(".herecomethenumber" + id).html(data.count);
		});
	}
	watchers();
});