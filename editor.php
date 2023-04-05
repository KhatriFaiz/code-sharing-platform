<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor Page</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body id="editor-page">
    <header id="editor-header">
        <div class="editor-title">
            <h1>The Title of Code snippet</h1>
        </div>
        <div class="editor-actions">
            <button id="save-snippet-btn">Save</button>
        </div>
    </header>
    <main>
        <div id="editor">
            <ul id="language-tab-bar">
                <li class="language-tab" data-language="html" data-display="active">HTML</li>
                <li class="language-tab" data-language="css" data-display="hidden">CSS</li>
                <li class="language-tab" data-language="javascript" data-display="hidden">JavaScript</li>
            </ul>
            <div id="editor-textareas">
                <textarea name="html-textarea" id="html-textarea" data-display="active" data-language="html"
                    onkeyup="run()"></textarea>
                <textarea name="css-textarea" id="css-textarea" data-display="hidden" data-language="css"
                    onkeyup="run()"></textarea>
                <textarea name="js-textarea" id="js-textarea" data-display="hidden" data-language="javascript"
                    onkeyup="run()"></textarea>
            </div>
        </div>
        <div id="preview-container">
            <iframe id="preview"></iframe>
        </div>
    </main>

    <script src="./js/app.js"></script>
</body>

</html>