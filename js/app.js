/* Editor Language Tabs */

const languageTabBar = document.getElementById("language-tab-bar");
const languageTabs = document.getElementsByClassName("language-tab");
const editorTextareas = document.querySelectorAll("#editor-textareas textarea");

for (i = 0; i < languageTabs.length; i++) {
  languageTabs[i].addEventListener("click", (e) => {
    let selectedLanguage = e.target.dataset.language;

    for (j = 0; j < editorTextareas.length; j++) {
      if (editorTextareas[j].dataset.language == selectedLanguage) {
        editorTextareas[j].dataset.display = "active";
      } else {
        editorTextareas[j].dataset.display = "hidden";
      }

      for (k = 0; k < languageTabs.length; k++) {
        if (languageTabs[k].dataset.language == selectedLanguage) {
          languageTabs[k].dataset.display = "active";
        } else {
          languageTabs[k].dataset.display = "hidden";
        }
      }
    }
  });
}

/* Preview of code */

function run() {
  const preview = document.getElementById("preview");
  const htmlCode = document.getElementById("html-textarea").value;
  const cssCode = document.getElementById("css-textarea").value;
  const jsCode = document.getElementById("js-textarea").value;

  preview.contentDocument.body.innerHTML =
    htmlCode + "<style>" + cssCode + "</style>";
  preview.contentWindow.eval(jsCode);
}
