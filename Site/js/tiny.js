var demoBaseConfig = {
  selector: "textarea",
  width: 755,
  height: 500,
  resize: false,
  autosave_ask_before_unload: false,
  mentions_fetch: mentionsFetchFunction,
  powerpaste_allow_local_images: true,
  plugins: [
    "a11ychecker advcode advlist anchor autolink codesample colorpicker fullscreen help image imagetools",
    " lists link media noneditable powerpaste preview",
    " searchreplace table template textcolor tinymcespellchecker visualblocks wordcount"
  ], /* removed:  charmap insertdatetime print */
  external_plugins: {
    mentions: "//www.tiny.cloud/pro-demo/mentions/plugin.min.js",
    moxiemanager: "//www.tiny.cloud/pro-demo/moxiemanager/plugin.min.js"
  },
  templates: [
    {
      title: "Non-editable Example",
      description: "Non-editable example.",
      content: table
    },
    {
      title: "Simple Table Example",
      description: "Simple Table example.",
      content: table2
    }
  ],
  toolbar:
    "insertfile a11ycheck undo redo | bold italic | forecolor backcolor | template codesample | alignleft aligncenter alignright alignjustify | bullist numlist | link image",
  content_css: [
    "//fonts.googleapis.com/css?family=Lato:300,300i,400,400i",
    "//www.tiny.cloud/css/content-standard.min.css"
  ],
  api_key: 'fake-key',
  spellchecker_rpc_url: 'https://spelling.tinymce.com/',
  spellchecker_api_key: 'h22wb7h8xi78b4fyo46hhx5k7fbh46vt5f6yqmvd492iy00c',
  spellchecker_dialog: true,
  spellchecker_whitelist: ['Ephox', 'Moxiecode'],
  api_key: 'fakekey',
};

var mentionsFetchFunction = function (query, success) {
      var users = [
         ];

    users = $.map(users, function (fullName) {
        var userName = fullName.replace(/ /g, '').toLowerCase();

        return {
          id: userName,
          name: userName,
          fullName: fullName
        }
    });

    users = $.grep(users, function (user) {
        return user.name.indexOf(query.term) === 0
    });

    success(users)
};

var table = '<p></p>' +
'    <table style="width: 60%; border-collapse: collapse;" border="1"> ' +
'        <caption class="mceNonEditable">Ephox Sales Analysis</caption> ' +
'       <tbody> ' +
'          <tr class="mceNonEditable"> ' +
'                <th style="width: 40%;">&nbsp;</th><th style="width: 15%;">Q1</th> ' +
'                <th style="width: 15%;">Q2</th><th style="width: 15%;">Q3</th> ' +
'                <th style="width: 15%;">Q4</th> ' +
'            </tr> ' +
'            <tr> ' +
'                <td class="mceNonEditable">East Region</td> ' +
'                <td>100</td> <td>110</td> <td>115</td> <td>130</td> ' +
'            </tr> ' +
'            <tr> ' +
'                <td class="mceNonEditable">Central Region</td> ' +
'                <td>100</td> <td>110</td> <td>115</td> <td>130</td> ' + 
'            </tr> ' +
'            <tr> ' +
'                <td class="mceNonEditable">West Region</td> ' +
'                <td>100</td> <td>110</td> <td>115</td> <td>130</td> ' +
'            </tr> ' +
'        </tbody> ' +
'    </table>';

var table2 = '<div> ' +
'       </div> '; 

tinymce.init(demoBaseConfig);