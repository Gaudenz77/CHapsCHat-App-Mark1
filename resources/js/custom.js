// CREATE LIBRARY DIV -------------------------------------------------------TEST IF ENTRY PAGE STILL WORKING!!!

document.addEventListener("DOMContentLoaded", () => {
    const createButton = document.getElementById("createButton");
    const formContainer = document.getElementById("formContainer");

    createButton.addEventListener("click", () => {
        formContainer.style.display = "block";
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const createButton = document.getElementById("createButton");
    const formContainer = document.getElementById("formContainer");
    const closeButton = document.getElementById("closeButton");

    createButton.addEventListener("click", () => {
        formContainer.style.display = "block";
    });

    closeButton.addEventListener("click", () => {
        formContainer.style.display = "none";
    });
});

// CREATE BLOG DIV -------------------------------------------------------TEST IF ENTRY PAGE STILL WORKING!!!

document.addEventListener("DOMContentLoaded", () => {
    const createButton = document.getElementById("createButton2");
    const formContainer = document.getElementById("formContainer1");

    createButton.addEventListener("click", () => {
        formContainer.style.display = "block";
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const createButton = document.getElementById("createButton2");
    const formContainer = document.getElementById("formContainer1");
    const closeButton = document.getElementById("closeButton2");

    createButton.addEventListener("click", () => {
        formContainer.style.display = "block";
    });

    closeButton.addEventListener("click", () => {
        formContainer.style.display = "none";
    });
});

// VARIANT BOUNCE OFF EDGES ON INTERVAL
// Get the icon element
const icon = document.getElementById("icon");

// Set the initial position and velocity of the icon
let posX = Math.floor(Math.random() * window.innerWidth);
let posY = Math.floor(Math.random() * window.innerHeight);
// Set velocity of target icon
let velocityX = 2;
let velocityY = 2;
icon.style.position = "fixed";
icon.style.left = `${posX}px`;
icon.style.top = `${posY}px`;

// Define the function to move the icon
function moveIcon() {
    // Calculate the new position of the icon
    posX += velocityX;
    posY += velocityY;

    // Repel the icon when it reaches the edge of the screen
    if (posX < 0 || posX > window.innerWidth - icon.offsetWidth) {
        velocityX = -velocityX;
    }
    if (posY < 0 || posY > window.innerHeight - icon.offsetHeight) {
        velocityY = -velocityY;
    }

    // Set the new position of the icon
    icon.style.left = `${posX}px`;
    icon.style.top = `${posY}px`;

    // Request the next frame
    requestAnimationFrame(moveIcon);
}

// Start the animation
moveIcon();
document.addEventListener("DOMContentLoaded", () => {
    const icon = document.getElementById("icon");
    icon.addEventListener("click", () => {
        console.log("Icon clicked");
        window.location.href = "http://krakatoom.ch/register";
    });
});

function removecircleProfileCols() {
    var authCard = document.getElementById("authCard");
    if (
        window.matchMedia("(orientation: landscape) and (min-width: 768px)")
            .matches
    ) {
        authCard.classList.add("circleProfileCols");
    } else {
        authCard.classList.remove("circleProfileCols");
    }
}
