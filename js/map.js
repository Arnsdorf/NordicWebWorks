document.addEventListener("DOMContentLoaded", function() {
    let mapLoaded = false;

    const mapElement = document.getElementById('map');

    // Tjek om elementet eksisterer
    if (!mapElement) {
        console.error("Map element not found in the DOM");
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !mapLoaded) {
                loadMap();
                mapLoaded = true;
                observer.unobserve(mapElement);  // Stop observeren når kortet er indlæst
            }
        });
    });

    observer.observe(mapElement);

    function loadMap() {
        if (mapLoaded) return;  // Sikre at kortet ikke bliver indlæst flere gange

        const script = document.createElement('script');
        script.src = `https://maps.googleapis.com/maps/api/js?key=AIzaSyDrPuA-xr2fvB4mABONR5_gPclME0PFxaM&callback=initMap&libraries=marker`;
        script.async = true;
        document.head.appendChild(script);
        mapLoaded = true;
    }

    window.initMap = function() {
        const location = { lat: 54.970620, lng: 12.261680 };

        const mapOptions = {
            zoom: 14,
            center: location,
            mapId: '386742f7f2e2be63',  // Dit map ID
            styles: [  // Brugerdefinerede stilarter
                {
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        { "saturation": 36 },
                        { "color": "#000000" },
                        { "lightness": 40 }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        { "visibility": "on" },
                        { "color": "#000000" },
                        { "lightness": 16 }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        { "color": "#000000" },
                        { "lightness": 20 }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        { "color": "#000000" },
                        { "lightness": 17 }
                    ]
                }
            ],
            disableDefaultUI: true
        };

        const map = new google.maps.Map(mapElement, mapOptions);

        // Brug af AdvancedMarkerElement
        const marker = new google.maps.marker.AdvancedMarkerElement({
            position: location,
            map: map
        });
    };
});
