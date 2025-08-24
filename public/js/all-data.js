setTimeout(() => {
    const sessionDiv = document.getElementById("session");
    if (sessionDiv) {
        sessionDiv.style.display = "none";
    }
}, 3000);

function openModal(url) {
    fetch(url)
        .then((res) => res.text())
        .then((html) => {
            document.getElementById("modal-content").innerHTML = html;
            document.getElementById("modal-tki").classList.remove("hidden");
        });
}

function closeModal() {
    document.getElementById("modal-tki").classList.add("hidden");
    document.getElementById("modal-content").innerHTML = "";
}
