document.querySelector("a.toggle-nav")
    .addEventListener("click", (event) => {
        let links = document.querySelector("ul.links")
        links.classList.contains("display") ? 
            links.classList.remove("display") :
            links.classList.add("display")
})
