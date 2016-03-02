function UsersViewModel(){
	var self = this;
	var user = new User();
	self.users = ko.observableArray();
	


	self.getUsers = function(){
		user.all()
		.done(function(response){
			self.users(response);
		});

	};

	self.getUsers();

}