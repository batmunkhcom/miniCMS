
DOMAIN = 'http://www.minicms.me/';
/*
 * busad zuilstei zodoldood jquery disable bolgod bna. buh file deer jQuery gej ashiglah bolchihood bna
 * //jquery conflict arilgah
 $.noConflict();
 */

/**
 * elfinder plugin for tinymce.
 * */
function elFinderBrowser(field_name, url, type, win) {
    tinymce.activeEditor.windowManager.open({
        file: '/assets/tinymce/plugins/elfinder/elfinder.php', // use an absolute path!
        title: 'File manager',
        width: 900,
        height: 450,
        resizable: 'yes'
    }, {
        setUrl: function(url) {
            win.document.getElementById(field_name).value = url;
        }
    });
    return false;
}

