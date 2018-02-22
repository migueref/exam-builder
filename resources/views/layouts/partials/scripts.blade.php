<script>
  $(document).ready(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.plugins.addExternal('wordcount', 'https://www..edu.mx/exam/libraries/wordcount/', 'plugin.js');
    CKEDITOR.plugins.addExternal('notification', 'https://www..edu.mx/exam/libraries/notification/', 'plugin.js');

    CKEDITOR.replace('q11', {
      extraPlugins: 'wordcount,notification'
    });
  });
</script>

<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>

<script>
  $(document).ready(function() {
    $('select').material_select();

  });
</script>
