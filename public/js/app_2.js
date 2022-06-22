window.onscroll = function () {

    if (document.documentElement.scrollTop > 40) {
        /*au scrool*/
        document.getElementById("header").style.boxShadow = "4px 26px 16px -6px rgba(150,93,93,1);";
/*         document.getElementById("navbar").style.padding = "40px 0px"; */
        document.getElementById("navbar").style.backgroundColor = "#cda58e";
    }
    else {
        /*sans scrool*/
    }

}