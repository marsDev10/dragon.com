$(document).ready(function(){

    // Function to detect browser language
    function detectBrowserLanguage() {
        var userLang = navigator.language || navigator.userLanguage;
        return userLang;
    }
    
    // Function to redirect to the appropriate language section
    function redirectLanguageSection() {
        var browserLanguage = detectBrowserLanguage();
        
        // Add your language section URLs and corresponding language codes here
        var languageSections = {
            "en": "https://dragoncem.com/v3/en-US/index.html",
            "es": "https://dragoncem.com/v3/es-MX/index.html",
            "pt": "https://dragoncem.com/v3/pt-BR/index.html",
            // Add more language sections as needed
        };
        
        // Redirect to the appropriate language section based on browser language
        if (languageSections.hasOwnProperty(browserLanguage)) {
            window.location.href = languageSections[browserLanguage];
        } else {
            // Redirect to a default language section if browser language is not supported
            window.location.href = "https://dragoncem.com/v3/es-MX/index.html";
        }
    }
    
    // Call the redirectLanguageSection function when the page loads
    window.onload = redirectLanguageSection;

})