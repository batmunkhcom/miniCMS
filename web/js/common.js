
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
/**
 * @param {string} url descriptionurl /page/url geh met
 * @param {string} data a=123&b=my_text_value geh met
 * */
function ajax_load(url, data, title) {
    if (!title) {
        title = 'Command result';
    }
    $.ajax({
        type: "POST",
        url: url,
        data: data
    })
            .done(function(msg) {
                //alert(msg);
                show_notification_box(title + ':', msg);
            });
}

function show_notification_box(title, text, image, sticky, time) {

    if (!title) {
        title = 'No title';
    }
    if (!text) {
        text = 'No data';
    }
    if (!image) {
        image = '';
    }
    if (!sticky) {
        sticky = false;
    }
    if (!time) {
        time = '';
    }

    $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: title,
        // (string | mandatory) the text inside the notification
        text: text,
        // (string | optional) the image to display on the left
        image: image,
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: sticky,
        // (int | optional) the time you want it to be alive for before fading out
        time: time
    });

    return false;
}