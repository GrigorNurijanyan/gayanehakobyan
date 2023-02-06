function dropDownFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}


// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

/* Open the sidenav */
function openNav() {
    document.getElementById("blogSideNav").style.width = "100%";
    document.querySelector("body").style.overflow = "hidden";
}

/* Close/hide the sidenav */
function closeNav() {
    document.getElementById("blogSideNav").style.width = "0";
    document.querySelector("body").style.overflow = "";
}

function dropDownFunctionResp() {
    document.getElementById("myDropdownResp").classList.toggle("show");
}