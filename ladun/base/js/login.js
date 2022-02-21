// vue object 
var loginApp = new Vue({
    el : '#loginApp',
    data : {

    },
    methods : {
        loginAtc : function()
        {
            let username = document.querySelector("#txtUsername").value;
            let password = document.querySelector("#txtPassword").value;
            let ds = {'username':username, 'password':password}
        }
    }
});
// inisialisasi 
document.querySelector("#txtUsername").focus();