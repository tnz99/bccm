document.addEventListener("DOMContentLoaded", function () {
    const audio = document.getElementById("audio");
    const playPauseButton = document.getElementById("play-pause-button");

    playPauseButton.addEventListener("click", function () {
        if (audio.paused) {
            audio.play();
            playPauseButton.classList.remove("paused");
        } else {
            audio.pause();
            playPauseButton.classList.add("paused");
        }
    });

    audio.addEventListener("ended", function () {
        playPauseButton.classList.add("paused");
    });
});
