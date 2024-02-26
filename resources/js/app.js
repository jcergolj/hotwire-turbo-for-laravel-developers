import "./bootstrap";
import "./elements/turbo-echo-stream-tag";
import "./libs";
import highlightJs from "highlight.js";

// @codesection
// app.js
document.addEventListener("turbo:load", async (event) => {
    // when to show the progress bar
    Turbo.setProgressBarDelay(2);

    // code highlighting
    highlightJs.highlightAll();
});

document.addEventListener("keydown", function (event) {
    if (event.key === "ArrowLeft") {
        document.getElementById("previous-button").click();

        return;
    } else if (event.key === "ArrowRight") {
        document.getElementById("next-button").click();

        return;
    }
});
// @codeendsection
