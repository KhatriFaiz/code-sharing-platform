/* Header User Details navigation menu */
const userNavigation = document.querySelector(
  "header .user-details .user-navigation"
);
const userAvatar = document.querySelector("header .user-details .user-avatar");

userAvatar.addEventListener("mouseenter", () => {
  userNavigation.style.display = "grid";
});
userAvatar.addEventListener("mouseleave", () => {
  userNavigation.style.display = "none";
});
userNavigation.addEventListener("mouseenter", () => {
  userNavigation.style.display = "grid";
});
userNavigation.addEventListener("mouseleave", () => {
  userNavigation.style.display = "none";
});

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

/* Code Editor snippet title edit button */

const snippetTitleEditBtn = document.getElementById("snippet-title-edit-btn");
const snippetTitleSubmitBtn = document.getElementById(
  "snippet-title-submit-btn"
);
const snippetTitle = document.getElementById("snippet-title");

snippetTitleEditBtn.addEventListener("click", (e) => {
  e.preventDefault();

  snippetTitle.readOnly = false;
  snippetTitle.select();
  snippetTitleSubmitBtn.style.display = "block";
  snippetTitleEditBtn.style.display = "none";
});

snippetTitleSubmitBtn.addEventListener("click", (e) => {
  e.preventDefault();

  snippetTitle.readOnly = true;
  snippetTitleSubmitBtn.style.display = "none";
  snippetTitleEditBtn.style.display = "block";
});

/* code-successful-dialog time out */

const codeSuccessfulDialog = document.getElementById("code-successful-dialog");
const saveSnippetBtn = document.getElementById("save-snippet-btn");

saveSnippetBtn.addEventListener("click", () => {
  codeSuccessfulDialog.style.display = "block";
});
if (codeSuccessfulDialog.style.display == "block") {
  setTimeout(() => {
    codeSuccessfulDialog.style.display = "none";
  }, 3000);
}
