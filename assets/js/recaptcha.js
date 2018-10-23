$( document ).ready(function(e) {
  var recaptcha = {
    params: {
      serect: '',
      selfElement: '#g-recaptcha',
      urlVerify: 'https://www.google.com/recaptcha/api/siteverify'
    },
    init: function () {
      recaptcha.params.serect = $(recaptcha.params.selfElement).data('secret');
    },
    methods: {
      isExists: function () {
        if ($(recaptcha.params.selfElement).length > 0) {
          return true;
        }
        return false;
      },
      verify: function () {
        var response = $('#g-recaptcha-response').val();
        var data = $('form').serializeArray().reduce(function(obj, item) {
          obj[item.name] = item.value;
          return obj;
        }, {});
        data['action'] = 'front';
        data['method'] = 'addForm';
        data['response'] = response;

        $.post(ajaxurl, data, function(res) {
          let result = $.parseJSON(res);
          if (result.error == 1) {
            $('#message-error').html(result.message);
            $('#message-error').show();
          } else {
            alert(result.message);
            window.location.reload();
          }
        });
        return false;
      }
    }
  }

  $(document).ready(function() {
    if (recaptcha.methods.isExists()) {
      window.recaptcha = recaptcha;
      window.recaptcha.init();
    }
  });

});