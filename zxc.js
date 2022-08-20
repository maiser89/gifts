

const el = document.getElementById("foo");
const inputEl = document.getElementById("nameFoo");
el.addEventListener("change", function() {
    if (this.value === "1") {
        inputEl.style.display = "none";
    }
    else {
        inputEl.style.display = "block";
    }
});