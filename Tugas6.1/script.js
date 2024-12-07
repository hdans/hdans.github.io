function setTheme(theme) {
    document.body.className = theme;
    document.cookie = "theme=" + theme + "; path=/; max-age=31536000";
}

function getThemeFromCookies() {
    let cookies = document.cookie.split(';');
    for (let cookie of cookies) {
        let [name, value] = cookie.trim().split('=');
        if (name === 'theme') {
            return value;
        }
    }
    return null;
}

document.addEventListener("DOMContentLoaded", () => {
    const savedTheme = getThemeFromCookies();
    if (savedTheme) {
        document.body.className = savedTheme;
    }


    document.getElementById("lightTheme").addEventListener("click", () => setTheme('light'));
    document.getElementById("darkTheme").addEventListener("click", () => setTheme('dark'));
});
