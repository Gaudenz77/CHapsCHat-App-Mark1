<script>

    // Read the value of the "darkMode" cookie
    const cookies = document.cookie.split("; ");
    const darkModeCookie = cookies.find(cookie => cookie.startsWith("darkMode="));
    const darkModeOn = darkModeCookie ? (darkModeCookie.split("=")[1] === "on") : false;
    
    // Set the "dark-mode" class on the body element if necessary
    if (darkModeOn) {
      document.body.classList.add("dark-mode");
    } 
    
    function setDarkModePreference(darkModeOn) {
      const cookieValue = darkModeOn ? "on" : "off";
      document.cookie = `darkMode=${cookieValue}; path=/; max-age=${60 * 60 * 24 * 365}`;
    }
    
    function toggleDarkMode() {
      document.body.classList.toggle('dark-mode');
      setDarkModePreference(document.body.classList.contains('dark-mode'));
    }
        





    </script>