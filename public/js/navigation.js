window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbar").style.padding = "5px";
        document.getElementById("logo").style.fontSize = "20px";
        document.getElementById("navbar").classList.add("nav-solid");
    } else {
        document.getElementById("navbar").style.padding = "30px";
        document.getElementById("logo").style.fontSize = "25px";
        document.getElementById("navbar").classList.remove("nav-solid");
    }
}
