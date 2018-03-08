function openColour(evt, colourName) {
    var i, content, colours;
    content = document.getElementsByClassName("content");
    for (i = 0; i < content.length; i++) {
        content[i].style.display = "none";
    }
    colours = document.getElementsByClassName("colours");
    for (i = 0; i < colours.length; i++) {
        colours[i].className = colours[i].className.replace(" active", "");
    }
    document.getElementById(colourName).style.display = "block";
    evt.currentTarget.className += " active";
}