// get link of stylesheet
var link = document.getElementById("theme-link");

$(document).ready(function() {
    // get var theme if it is in local
    if (!localStorage.getItem('theme')) {
        localStorage.setItem('theme', "");
        theme = "";
    } else theme = localStorage.getItem('theme');

    setTheme(theme);

    $("#theme-button").click(function() {
        changeTheme();
    });
});


function setTheme(theme) {
    var currTheme = link.getAttribute("href");
    if (theme == "light") {
        // seted dark theme, need change to light
        theme = "light";
        localStorage.setItem('theme', theme);
        currTheme = currTheme.replace("dark", "light");
    } else {
        // seted light theme, need change to dark
        theme = "dark";
        localStorage.setItem('theme', theme);
        currTheme = currTheme.replace("light", "dark");
    }
    link.setAttribute("href", currTheme);
}

function changeTheme() {
    let lightTheme = "style/light.css";
    let darkTheme = "style/dark.css";

    var currTheme = link.getAttribute("href");

    if (currTheme.indexOf("dark") != -1) {
        // seted dark theme, need change to light
        theme = "light";
        localStorage.setItem('theme', theme);
        currTheme = currTheme.replace("dark", "light");
    } else {
        // seted light theme, need change to dark
        theme = "dark";
        localStorage.setItem('theme', theme);
        currTheme = currTheme.replace("light", "dark");
    }

    link.setAttribute("href", currTheme);
}