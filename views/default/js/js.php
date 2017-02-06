<script>
    elgg.get('ajax/form/hello_wrld/test',{
  data: {
    guid: 123 // querystring
  },
  success: function (output) {
    $('.hello_wrld').html(output);
  }
});
</script>
