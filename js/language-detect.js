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
            "en": "https://www.dragoncem.com/v3/en-US/",
            "en-US": "https://www.dragoncem.com/v3/en-US/",

            "es": "https://www.dragoncem.com/v3/es-MX/",
            "es-US": "https://www.dragoncem.com/v3/es-MX/",
            "es-MX": "https://www.dragoncem.com/v3/es-MX/",
            "es-419": "https://www.dragoncem.com/v3/es-MX/",
            
            "pt": "https://www.dragoncem.com/v3/pt-BR/",
            "pt-BR": "https://www.dragoncem.com/v3/pt-BR/",
            // Add more language sections as needed
        };
        
        // Redirect to the appropriate language section based on browser language
        if (languageSections.hasOwnProperty(browserLanguage)) {
            window.location.href = languageSections[browserLanguage];
        } else {
            // Redirect to a default language section if browser language is not supported
            window.location.href = "https://www.dragoncem.com/v3/es-MX/";
        }
    }
    
    // Call the redirectLanguageSection function when the page loads
    window.onload = redirectLanguageSection;

})