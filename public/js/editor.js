$(document).ready(() => {
    const editorId = $("input[name='editorId']").val();
    const editor = $(`#${editorId}`);
    const headingButton = $(`#${editorId}-heading`);
    const paragraphButton = $(`#${editorId}-paragraph`);
    const boldButton = $(`#${editorId}-bold`);
    const italicButton = $(`#${editorId}-italic`);
    const underlineButton = $(`#${editorId}-underline`);
    const imageButton = $(`#${editorId}-image`);
    const videoButton = $(`#${editorId}-video`);
    const linkButton = $(`#${editorId}-link`);
    const paletteButton = $(`#${editorId}-palette`);
    const codeButton = $(`#${editorId}-code`);
    const codePreButton = $(`#${editorId}-code-pre`);
    const ulButton = $(`#${editorId}-ul`);
    const olButton = $(`#${editorId}-ol`);
    const checkButton = $(`#${editorId}-check`);

    headingButton.on('click', () => {
        let html = editor.val() ?? '';
        editor.val(html + `<h5><b class="text-danger">#</b>\n\n</h5>`)
    })
    paragraphButton.on('click', () => {
        let html = editor.val() ?? '';
        editor.val(html + `<p>\n\n</p>`)
    })
    boldButton.on('click', () => {
        let html = editor.val() ?? '';
        editor.val(html + `<b>\n\n</b>`)
    })
    italicButton.on('click', () => {
        let html = editor.val() ?? '';
        editor.val(html + `<i>\n\n</i>`)
    })
    underlineButton.on('click', () => {
        let html = editor.val() ?? '';
        editor.val(html + `<u>\n\n</u>`)
    })
    imageButton.on('click', () => {
        let html = editor.val() ?? '';
        editor.val(html + `<img src="#" alt="img">`)
    })
    videoButton.on('click', () => {
        let html = editor.val() ?? '';
        editor.val(html + `<iframe src="" width="" height=""></iframe>`)
    })
    linkButton.on('click', () => {
        let html = editor.val() ?? '';
        editor.val(html + `<a href=""></a>`)
    })
    paletteButton.on('click', () => {
        let html = editor.val() ?? '';
        editor.val(html + `<span class="text-"></span>`)
    })
    codeButton.on('click', () => {
        let html = editor.val() ?? '';
        editor.val(html + `<code></code>`)
    })
    codePreButton.on('click', () => {
        let html = editor.val() ?? '';
        editor.val(html + `<pre></pre>`)
    })
    ulButton.on('click', () => {
        let html = editor.val() ?? '';
        editor.val(html + `<ul>\n<li></li>\n</ul>`)
    })
    olButton.on('click', () => {
        let html = editor.val() ?? '';
        editor.val(html + `<ol>\n<li></li>\n</ol>`)
    })
    checkButton.on('click', () => {
        let html = editor.val() ?? '';
        editor.val(html + `<ul class="check">\n<li></li>\n</ul>`)
    })
})
