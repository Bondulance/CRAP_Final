function navButtonToggle() {
    var content = document.getElementById("dropdown");
    // if (content.style.display == 'none') {
    //     content.style.display = 'block';
    // }
    // else if (content.style.display == 'block') {
    //     content.style.display = 'none';
    // }
    // else {
    //     content.style.display = 'block';
    // }
    if (content.style.display == 'block') {
        content.style.display = 'none';
    }
    else if (content.style.display == 'none') {
        content.style.display = 'block';
    }
    else {
        content.style.display = 'none';
    }
}