$('.subscribe-form__btn').click(function (e) {
    e.preventDefault();

      //var subscribeMail = document.querySelector('.subscribe-form__input').value;

      if($(this).closest('form').find('input').hasClass('email-field')){
      var reg = /^[\w\.\d-_]+@[\w\.\d-_]+\.\w{2,4}$/i;

      var input = $(this).closest('form').find('input');

      if($(this).closest('form').find('.email-field').val() == ""){
        $(this).closest('form').addClass('error-field');
        $(this).closest('form').find('.email-field').next().html('Please enter your email');
        return;
      }

      if(reg.test(input.val()) == false) {
        $(this).closest('form').addClass('error-field');
        input.next().html('Please enter a valid email address');
        return;
      } else {

          var xhr = new XMLHttpRequest();

          xhr.open('POST', '/manage/ajaxfunc.php?f=subscribe');
          xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
          xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
          xhr.send('email=' + encodeURIComponent(input))
        $(this).closest('form').removeClass('error-field');
        $('.subscribe-form-success').addClass('active');
        return;``
      }
    }