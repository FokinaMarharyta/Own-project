tinymce.init({
    selector: '#editor',
    language: 'cs',
    height: 400,

    plugins: 'lists link wordcount',

    toolbar:
        'undo redo | bold italic underline | ' +
        'h1 h2 | bullist numlist | alignleft aligncenter alignright | link',

    setup: function (editor) {
        editor.on('keyup', updateWordCount);
        editor.on('change', updateWordCount);
    }
});

function updateWordCount() {
    const count = tinymce.activeEditor.plugins.wordcount.getCount();
    document.getElementById("wordCount").innerText = count;
}

function saveText() {
    const content = tinymce.get("editor").getContent();
    localStorage.setItem("article", content);
    alert("Článek byl uložen.");
}

function loadText() {
    const content = localStorage.getItem("article");
    if (content) {
        tinymce.get("editor").setContent(content);
        updateWordCount();
    } else {
        alert("Žádný uložený článek.");
    }
}

function clearText() {
    tinymce.get("editor").setContent("");
    updateWordCount();
}