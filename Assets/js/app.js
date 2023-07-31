
if('serviceWoorker' in navigator){


    // get the sw.js file and registered it as a service worker 
    navigator.serviceWorker.register('/sw.js')
    .then((reg) => console.log('serviceWorker registered', reg))
    .catch((error) => console.log ('serviceWorker not registered', error))

}