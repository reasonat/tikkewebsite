/**
 * In AJAX file uploads, automatically press the 'Upload' form button.
 *
 * Based on http://drupal.stackexchange.com/a/31453/10086
 */
(function ($) {
  Drupal.behaviors.yamAutoUpload = {
    attach: function (context, settings) {
      $('form', context).delegate('input.form-file', 'change', function () {
        $(this).next('input[type="submit"]').mousedown();
      });
    }
  };
})(jQuery);
