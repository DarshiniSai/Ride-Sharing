// Initialize the Google Map
function initMap() {
    const centerCoords = { lat: 35.2828, lng: -120.6596 }; // Example: San Luis Obispo
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 9,
      center: centerCoords,
    });
  
    // Example construction markers
    const constructionPoints = [
      { lat: 35.3, lng: -120.7 },
      { lat: 35.1, lng: -120.6 },
    ];
  
    constructionPoints.forEach((point) => {
      new google.maps.Marker({
        position: point,
        map: map,
        title: "Construction Zone",
        icon: "https://maps.google.com/mapfiles/ms/icons/orange-dot.png",
      });
    });
  }
  
  // Search Route Function
  function searchRoute() {
    const start = document.getElementById("start").value;
    const end = document.getElementById("end").value;
  
    if (start && end) {
      alert(`Searching route from ${start} to ${end}`);
      // Placeholder: Implement route calculation logic with Google Maps API Directions Service
    } else {
      alert("Please enter both start and end locations.");
    }
  }
  
  // Load map after window loads
  window.onload = initMap;
  