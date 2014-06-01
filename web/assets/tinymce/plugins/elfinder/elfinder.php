<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>File Manager</title>

        <!-- jQuery and jQuery UI (REQUIRED) -->
        <link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>

        <!-- elFinder CSS (REQUIRED) -->
        <link rel="stylesheet" type="text/css" media="screen" href="css/elfinder.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/theme.css">

        <!-- elFinder JS (REQUIRED) -->
        <script type="text/javascript" src="js/elfinder.min.js"></script>

        <!-- elFinder translation (OPTIONAL) -->
        <script type="text/javascript" src="js/i18n/elfinder.ru.js"></script>

        <!-- elFinder initialization (REQUIRED) -->
        <script type="text/javascript">
            var FileBrowserDialogue = {
                init: function() {
// Here goes your code for setting your custom things onLoad.
                },
                mySubmit: function(URL) {
// pass selected file path to TinyMCE
                    parent.tinymce.activeEditor.windowManager.getParams().setUrl(URL);

// close popup window
                    parent.tinymce.activeEditor.windowManager.close();
                }
            }

            $().ready(function() {
                var elf = $('#elfinder').elfinder({
// set your elFinder options here
                    url: 'php/connector.php', // connector URL
                    getFileCallback: function(file) { // editor callback
// actually file.url - doesnt work for me, but file does. (elfinder 2.0-rc1)
                        FileBrowserDialogue.mySubmit(file); // pass selected file path to TinyMCE
                    }
                }).elfinder('instance');
            });
        </script>
    </head>
    <body>

        <!-- Element where elFinder will be created (REQUIRED) -->
        <div id="elfinder"></div>

    </body>
</html>
