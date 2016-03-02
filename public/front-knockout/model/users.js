function User(){
	var self = this;

	self.all = function(){
		return $.ajax({
			url: '/user',
			dataType: 'json',
			method: 'GET',
			contentType: "application/json"
		});
	};

}