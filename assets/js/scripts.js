$(".menu li").on("click", function() {
  $(".menu li").removeClass("active");
  $(this).addClass("active");
});

function login() {
 $.ajax({
   url: 'server/login_form.php',
    type: "POST",
   data: $('#loginForm').serialize(),
   success: function(result) {
     data = JSON.parse(result);
     if (data.status == 'success') {
       window.location.href = data.redirect;
     } else {
       notify(data.errorMsg, 'notify-red');
     }
   }
    });
};

// POSTs the register info to server via AJAX
function register() {
 $.ajax({
   url: '../server/register_form.php',
     type: "POST",
   data: $('#registerForm').serialize(),
   success: function(result) {
     data = JSON.parse(result);
     if (data.status == 'success') {
       window.location.href = data.redirect;
     } else {
       notify(data.errorMsg, 'notify-red');
     }
   }
    });
};
