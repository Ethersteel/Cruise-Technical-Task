function loadPage(page) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("cruises").innerHTML = this.responseText;
        }
    };
    xhr.open("GET", "./private/shared/cruise_template.php?page=" + page , true);
    xhr.send();
}