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
        response = '03AL4dnxqFTrU1_v6KTM2WyW0WvUw-44XMlHa4gZGiGE4bW5zriL0lDbLL3n-qnuIXr84AN4bV6BYM8tkL-i14hg9yhXMKkJv12FaF9Z-M4TpfMJ4i-yHsaiECRRmX8MrEvNsshlocKhPdKSWAy1CmXWZ3QRd0MtXvjrc-AT76K69KCv-fdfh1CZ_V_bx2b0p19CIlUv1aaeXAGKFWBvyWM0X3zGNklO51iJln3iSQZi2Ksi1S3Z0GFvSI4Toembc7CSieh2FhOLsZ7KLI-zBPZyiOPdASai5N5g';
        $.ajax({
          url: 'https://www.google.com/recaptcha/api/siteverify',
          data: {serect: recaptcha.params.serect, response: response},
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          }
        }).
        done(function (res) {
          console.log(res);
        });
      }
    }
  }
  $(document).ready(function() {
    console.log('init recaptcha');
    if (recaptcha.methods.isExists()) {
      recaptcha.init();
      console.log(recaptcha.params.serect);
      recaptcha.methods.verify();
    }
  });

});