//js for footer
function buttonToggle() {
    var paragraph = document.getElementById('q');
    if (paragraph.style.display == 'none') {
        paragraph.style.display = 'block';
    }
    else if (paragraph.style.display == 'block') {
        paragraph.style.display = 'none';
    }
    else {
        paragraph.style.display = 'block';
    }
}