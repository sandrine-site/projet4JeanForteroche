<!DOCTYPE html>



<html lang="fr">
<head>
    <title>Site de Jean Forteroche</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css" lang="fr" />
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=ml0pyee54mk9ckslddh5xe90xundxmo02hggj1v9bnnbyi8a'></script>   
    <script> tinymce.init({
    selector: '#mytextarea',
    width:600,
    height: 300,
    plugins: "image  fullpage preview save insertdatetime",
    toolbar: [
        "newdocument,save, cut, copy, paste, bullist, numlist, outdent, indent, blockquote, undo, redo,insertdatetime,image",
        "bold, italic, underline, strikethrough, alignjustify, alignleft, aligncenter, alignright,styleselect"
        ],
    automatic_uploads: true,
    image_prepend_url: "http://jeanforteroche.slashcreations.fr/images/",
    file_browser_callback: function(field_name, url, type, win) {
    win.document.getElementById(field_name).value = 'my browser value';
  }
    });
</script>
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    
</head>
<body>
    <div id="administration">  
        <div id="create">
        <h2> Vous pouvez publier un billet à partir de cette interface</h2>
        <textarea id="mytextarea"></textarea>
        <form><button name="submitbtn">Publier</button></form>
        </div>
        <div id="upload">
            <h2>Pour éditer un billet, veuillez entrer les réferences du billets (Date de premiére publication)</h2>
            <form method="post" >
            <input title="date" name="date" placeholder="jj/mm/AAAA"/>
            <input type="submit" value="Envoyé"/>
            </form>
        </div>
    </div>
</body>
</html>
    
