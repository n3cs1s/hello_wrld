<script>
    elgg.get('ajax/form/hello_wrld/test_ajax',{
  data: {
    guid: 123 // querystring
  },
  success: function (output) {
    $('.hello_wrld').html(output);
  }
});
</script>
