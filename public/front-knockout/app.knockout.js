$(document).ready(function(){
    
    var users = document.getElementById('users');
        if (users != null){
            ko.applyBindings(new UsersViewModel(), users);
        }

        

});