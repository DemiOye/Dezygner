
let slide = document.getElementById("home");
let dot1 = document.getElementById("dot-1");
let dot2 = document.getElementById("dot-2");
let dot3 = document.getElementById("dot-3");

window.onload = function() {

    slide.className = "slide-one";
    dot1.className = "dot-active";
    dot2.className = "dot-inactive";
    dot3.className = "dot-inactive";

    function slideShow() {

        if (slide.className === "slide-one") {

                slide.className = "slide-two";
                dot1.className = "dot-inactive";
                dot2.className = "dot-active";
                dot3.className = "dot-inactive";

                //console.log(slide.className);
        }

        else if (slide.className === "slide-two") {

                slide.className = "slide-three";
                dot1.className = "dot-inactive";
                dot2.className = "dot-inactive";
                dot3.className = "dot-active";

                //console.log(slide.className);
            }

        else if (slide.className === "slide-three") {

                slide.className = "slide-one";
                dot1.className = "dot-active";
                dot2.className = "dot-inactive";
                dot3.className = "dot-inactive";

                //console.log(slide.className);

            }

    }

    setInterval(slideShow, 4000);

}

let menu_btn = document.getElementById("menu-btn");

    menu_btn.onclick = function() {

        document.getElementById("nav").style.display = "none";
        document.getElementById("main").style.zIndex = "-1";
        document.getElementById("main").style.opacity = "0.2";
        document.getElementById("menu").style.display = "block";
        
    }

let close_menu = document.getElementById("menu-close");

    close_menu.onclick = function() {

        document.getElementById("nav").style.display = "flex";
        document.getElementById("main").style.zIndex = "1";
        document.getElementById("main").style.opacity = "1";
        document.getElementById("menu").style.display = "none";

    }

let home_link = document.getElementById("home-link");
let services_link = document.getElementById("services-link");
let gallery_link = document.getElementById("gallery-link");
let clients_link = document.getElementById("clients-link");
let contact_link = document.getElementById("contact-link");

let menu_home = document.getElementById("menu-home");
let menu_services = document.getElementById("menu-services");
let menu_gallery = document.getElementById("menu-gallery");
let menu_clients = document.getElementById("menu-clients");
let menu_contact = document.getElementById("menu-contact");

    home_link.onclick = function() {

        document.getElementById("home").style.display = "block";
        document.getElementById("mission").style.display = "block";
        document.getElementById("services").style.display = "block";
        //document.getElementById("gallery").style.display = "block";
        document.getElementById("clients").style.display = "block";
        document.getElementById("contact").style.display = "block";

    }

    services_link.onclick = function() {

        document.getElementById("home").style.display = "none";
        document.getElementById("mission").style.display = "none";
        document.getElementById("services").style.display = "block";
        //document.getElementById("gallery").style.display = "block";
        document.getElementById("clients").style.display = "none";
        document.getElementById("contact").style.display = "none";

    }

    /* gallery_link.onclick = function() {

        document.getElementById("home").style.display = "block";
        document.getElementById("mission").style.display = "block";
        document.getElementById("services").style.display = "block";
        //document.getElementById("gallery").style.display = "block";
        document.getElementById("clients").style.display = "block";
        document.getElementById("contact").style.display = "block";

    } */

    clients_link.onclick = function() {

        document.getElementById("home").style.display = "none";
        document.getElementById("mission").style.display = "none";
        document.getElementById("services").style.display = "none";
        //document.getElementById("gallery").style.display = "block";
        document.getElementById("clients").style.display = "block";
        document.getElementById("contact").style.display = "none";

    }

    contact_link.onclick = function() {

        document.getElementById("home").style.display = "none";
        document.getElementById("mission").style.display = "none";
        document.getElementById("services").style.display = "none";
        //document.getElementById("gallery").style.display = "block";
        document.getElementById("clients").style.display = "none";
        document.getElementById("contact").style.display = "block";

    }

    menu_home.onclick = function() {

        document.getElementById("nav").style.display = "flex";
        document.getElementById("main").style.zIndex = "1";
        document.getElementById("main").style.opacity = "1";
        document.getElementById("menu").style.display = "none";

        document.getElementById("home").style.display = "block";
        document.getElementById("mission").style.display = "block";
        document.getElementById("services").style.display = "block";
        //document.getElementById("gallery").style.display = "block";
        document.getElementById("clients").style.display = "block";
        document.getElementById("contact").style.display = "block";

    }

    menu_services.onclick = function() {

        document.getElementById("nav").style.display = "flex";
        document.getElementById("main").style.zIndex = "1";
        document.getElementById("main").style.opacity = "1";
        document.getElementById("menu").style.display = "none";

        document.getElementById("home").style.display = "none";
        document.getElementById("mission").style.display = "none";
        document.getElementById("services").style.display = "block";
        //document.getElementById("gallery").style.display = "block";
        document.getElementById("clients").style.display = "none";
        document.getElementById("contact").style.display = "none";

    }

    menu_clients.onclick = function() {

        document.getElementById("nav").style.display = "flex";
        document.getElementById("main").style.zIndex = "1";
        document.getElementById("main").style.opacity = "1";
        document.getElementById("menu").style.display = "none";

        document.getElementById("home").style.display = "none";
        document.getElementById("mission").style.display = "none";
        document.getElementById("services").style.display = "none";
        //document.getElementById("gallery").style.display = "block";
        document.getElementById("clients").style.display = "block";
        document.getElementById("contact").style.display = "none";

    }

    menu_contact.onclick = function() {

        document.getElementById("nav").style.display = "flex";
        document.getElementById("main").style.zIndex = "1";
        document.getElementById("main").style.opacity = "1";
        document.getElementById("menu").style.display = "none";

        document.getElementById("home").style.display = "none";
        document.getElementById("mission").style.display = "none";
        document.getElementById("services").style.display = "none";
        //document.getElementById("gallery").style.display = "block";
        document.getElementById("clients").style.display = "none";
        document.getElementById("contact").style.display = "block";

    }

    let footer_services = document.getElementById("footer-services");
    let footer_gallery = document.getElementById("footer-gallery");
    let footer_clients = document.getElementById("footer-clients");
    let footer_contact = document.getElementById("footer-contact");

    footer_services.onclick = function() {

        document.getElementById("home").style.display = "none";
        document.getElementById("mission").style.display = "none";
        document.getElementById("services").style.display = "block";
        //document.getElementById("gallery").style.display = "block";
        document.getElementById("clients").style.display = "none";
        document.getElementById("contact").style.display = "none";

    }

    footer_clients.onclick = function() {

        document.getElementById("home").style.display = "none";
        document.getElementById("mission").style.display = "none";
        document.getElementById("services").style.display = "none";
        //document.getElementById("gallery").style.display = "block";
        document.getElementById("clients").style.display = "block";
        document.getElementById("contact").style.display = "none";

    }

    footer_contact.onclick = function() {

        document.getElementById("home").style.display = "none";
        document.getElementById("mission").style.display = "none";
        document.getElementById("services").style.display = "none";
        //document.getElementById("gallery").style.display = "block";
        document.getElementById("clients").style.display = "none";
        document.getElementById("contact").style.display = "block";

    }
