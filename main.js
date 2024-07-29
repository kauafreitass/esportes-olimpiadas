function Link() {
    const LocationHref = window.location.href;

    const urls = ["atletismo", "natacao", "tiro", "vela", "peso", "luta", "voleibol", "tenis"];

    urls.forEach(url => {
        if (LocationHref.includes(url)) {
            const element = document.getElementById(url).classList.add("active");
        }
    });
}