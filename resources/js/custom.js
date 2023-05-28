// CREATE LIBRARY DIV -------------------------------------------------------TEST IF ENTRY PAGE STILL WORKING!!!

document.addEventListener('DOMContentLoaded', () => {
  const createButton = document.getElementById('createButton');
const formContainer = document.getElementById('formContainer1');

createButton.addEventListener('click', () => {
  formContainer.style.display = 'block';
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const createButton = document.getElementById('createButton');
  const formContainer = document.getElementById('formContainer1');
  const closeButton = document.getElementById('closeButton');

  createButton.addEventListener('click', () => {
    formContainer.style.display = 'block';
  });

  closeButton.addEventListener('click', () => {
    formContainer.style.display = 'none';
  });
});

// CREATE BLOG DIV -------------------------------------------------------TEST IF ENTRY PAGE STILL WORKING!!!

document.addEventListener('DOMContentLoaded', () => {
  const createButton = document.getElementById('createButton2');
const formContainer = document.getElementById('formContainer2');

createButton.addEventListener('click', () => {
  formContainer.style.display = 'block';
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const createButton = document.getElementById('createButton2');
  const formContainer = document.getElementById('formContainer2');
  const closeButton = document.getElementById('closeButton2');

  createButton.addEventListener('click', () => {
    formContainer.style.display = 'block';
  });

  closeButton.addEventListener('click', () => {
    formContainer.style.display = 'none';
  });
});

// VARIANT BOUNCE OFF EDGES ON INTERVAL
// Get the icon element
const icon = document.getElementById('icon');

// Set the initial position and velocity of the icon
let posX = Math.floor(Math.random() * window.innerWidth);
let posY = Math.floor(Math.random() * window.innerHeight);
let velocityX = 0;
let velocityY = 0;
icon.style.position = 'fixed';
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


  
  document.addEventListener('DOMContentLoaded', () => {
  const icon = document.getElementById('icon');
  icon.addEventListener('click', () => {
      console.log('Icon clicked');
      /* window.location.href = '{{ route("playground") }}'; */
      /* window.location.href='{{ url("/playground") }}'; */
      window.location.href='http://localhost/register';
  });
});





// Check local storage for the user's preference
/*const isDarkMode = localStorage.getItem('darkMode') === 'true';*/

// Set the initial state of the toggle based on the user's preference
/*const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
if (isDarkMode) {
  toggleSwitch.checked = true;
  document.documentElement.setAttribute('data-theme', 'dark');
}*/

// Listen for changes to the toggle and update local storage and the page accordingly
/*toggleSwitch.addEventListener('change', function(e) {
  if (e.target.checked) {
    document.documentElement.setAttribute('data-theme', 'dark');
    localStorage.setItem('darkMode', 'true');
  } else {
    document.documentElement.setAttribute('data-theme', 'light');
    localStorage.setItem('darkMode', 'false');
  }
});



// VARIANT CHANGE ON INTERVAL

/*   // Get the icon element
  const icon = document.getElementById('icon');

  // Set the initial position of the icon
  let posX = Math.floor(Math.random() * window.innerWidth);
  let posY = Math.floor(Math.random() * window.innerHeight);
  icon.style.position = 'fixed';
  icon.style.left = `${posX}px`;
  icon.style.top = `${posY}px`;

  // Define the function to move the icon
  function moveIcon() {
  // Generate random X and Y coordinates
  posX = Math.floor(Math.random() * window.innerWidth);
  posY = Math.floor(Math.random() * window.innerHeight);

  // Set the new position of the icon
  icon.style.left = `${posX}px`;
  icon.style.top = `${posY}px`;
  }

  // Move the icon every 2 seconds
  setInterval(moveIcon, 2000);


  // Push the icon off the window border
  window.addEventListener('resize', () => {
  const rect = icon.getBoundingClientRect();
  if (rect.top < 0) {
      icon.style.top = '0';
  }
  if (rect.left < 0) {
      icon.style.left = '0';
  }
  if (rect.bottom > window.innerHeight) {
      icon.style.top = `${window.innerHeight - icon.offsetHeight}px`;
  }
  if (rect.right > window.innerWidth) {
      icon.style.left = `${window.innerWidth - icon.offsetWidth}px`;
  }
  }); */

/**
 * @footer
 * 
 * collapse the icon
 * 
 */
/*---------------------------------------------------------------- FOOTER */
/* $(document).ready(function() {
  var footer = $('.footer');
  var windowHeight = $(window).height();
  var documentHeight = $(document).height();
  
  $(window).scroll(function() {
    if ($(window).scrollTop() + windowHeight == documentHeight) {
      footer.addClass('visible');
    } else {
      footer.removeClass('visible');
    }
  });
}); */
