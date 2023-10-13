$(document).ready(function() {
    $('#togglePassword').click(function() {
      const passwordInput = $('#password');
      // const passwordIcon = $('#passwordIcon');
      
      // Toggle the input type between 'password' and 'text'
      if (passwordInput.attr('type') === 'password') {
        passwordInput.attr('type', 'text');
        $(this).removeClass('bi bi-eye-fill').addClass('bi bi-eye-slash-fill');
      } else {
        passwordInput.attr('type', 'password');
        $(this).removeClass('bi bi-eye-slash-fill').addClass('bi bi-eye-fill');
      }
    });
    $('#ntogglePassword').click(function() {
      const passwordInput = $('#npassword');
      // const passwordIcon = $('#passwordIcon');
      
      // Toggle the input type between 'password' and 'text'
      if (passwordInput.attr('type') === 'password') {
        passwordInput.attr('type', 'text');
        $(this).removeClass('bi bi-eye-fill').addClass('bi bi-eye-slash-fill');
      } else {
        passwordInput.attr('type', 'password');
        $(this).removeClass('bi bi-eye-slash-fill').addClass('bi bi-eye-fill');
      }
    });
    $('#ctogglePassword').click(function() {
      const passwordInput = $('#cpassword');
      // const passwordIcon = $('#passwordIcon');
      
      // Toggle the input type between 'password' and 'text'
      if (passwordInput.attr('type') === 'password') {
        passwordInput.attr('type', 'text');
        $(this).removeClass('bi bi-eye-fill').addClass('bi bi-eye-slash-fill');
      } else {
        passwordInput.attr('type', 'password');
        $(this).removeClass('bi bi-eye-slash-fill').addClass('bi bi-eye-fill');
      }
    });
  });