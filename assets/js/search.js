document.getElementById("input-search").addEventListener("keyup", search);

function search(e) {
    const inputSearch = document.getElementById("input-search").value.toUpperCase();
    const containerSearch = document.getElementById("result-search");
    const containerNotFound = document.getElementById("container-not-found");
    const containerTotalSearch = document.getElementById("container-search");
    const li = containerSearch.getElementsByTagName("li");
    for (var i = 0; i < li.length; i++) {
        let a = li[i].getElementsByTagName("a")[0];
        let tValue = a.textContent || a.innerHTML;
        console.log(li[i].style.display)
        if (tValue.toUpperCase().indexOf(inputSearch) !== -1) {
            li[i].style.display = "";
            containerSearch.style.display = "block";
            if (inputSearch === "") {
                containerSearch.style.display = "none";
            }
        } else {
            li[i].style.display = "none";
            if (containerSearch.style.display === "none") {
                containerTotalSearch.style.background =  "red";
                containerNotFound.style.display = "block";
            }
        }
    }
    if (inputSearch === "") {
        containerTotalSearch.style.background =  "white";
        containerNotFound.style.display = "none";
        containerSearch.style.display = "none";
    }else if (containerSearch.style.display === "block") {
        containerTotalSearch.style.background =  "white";
        containerNotFound.style.display = "none";
    }
}
