const session = document.getElementById('session')

if (session) {
    setTimeout(() => {
        session.style.display = "none";
        session.style.transitionDuration = "2s";
    }, 2000);
}
