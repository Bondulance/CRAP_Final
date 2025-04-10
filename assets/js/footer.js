//js for footer
function buttonToggle() {
    var linkBlock = document.getElementById('q');
    if (linkBlock.style.display == 'none') {
        linkBlock.style.display = 'block';
    }
    else if (linkBlock.style.display == 'block') {
        linkBlock.style.display = 'none';
    }
    else {
        linkBlock.style.display = 'block';
    }
}