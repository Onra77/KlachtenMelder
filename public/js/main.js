var harmonicas = document.getElementsByClassName('harmonica');
for(i = 0; i < harmonicas.length; i++) {
    harmonicas[i].onclick = function () {
        var textarea = this.getElementsByClassName('texter')[0];
        textarea.hidden = !textarea.hidden;
    };
}