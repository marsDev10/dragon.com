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
            "en": "http://127.0.0.1/sitio%20web/en-US/",
            "en-US": "http://127.0.0.1/sitio%20web/en-US/",

            "es": "http://127.0.0.1/sitio%20web/es-MX/",
            "es-US": "http://127.0.0.1/sitio%20web/es-MX/",
            "es-MX": "http://127.0.0.1/sitio%20web/es-MX/",
            "es-419": "http://127.0.0.1/sitio%20web/es-MX/",
            
            "pt": "http://127.0.0.1/sitio%20web/pt-BR/",
            "pt-BR": "http://127.0.0.1/sitio%20web/pt-BR/",
            // Add more language sections as needed
        };
        
        // Redirect to the appropriate language section based on browser language
        if (languageSections.hasOwnProperty(browserLanguage)) {
            window.location.href = languageSections[browserLanguage];
        } else {
            // Redirect to a default language section if browser language is not supported
            window.location.href = "http://127.0.0.1/sitio%20web/es-MX/";
        }
    }
    
    // Call the redirectLanguageSection function when the page loads
    window.onload = redirectLanguageSection;

})