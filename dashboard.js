function initMap() {
    const myLatLng = { lat: -25.363, lng: 131.044 };
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4,
      center: myLatLng,
    });
  
    new google.maps.Marker({
      position: myLatLng,
      map,
      title: "Hello World!",
    });
  }

//  https://dotnettec.com/how-to-show-multiple-locations-on-google-maps-using-javascript/

// https://developers.google.com/maps/documentation/javascript/examples/marker-simple#maps_marker_simple-html

//map
// mapboxgl.accessToken = 'pk.eyJ1Ijoia2F0LW1hbG9wZSIsImEiOiJjbDF4OTBwNGswMGo5M2JvMHdqZjAwM3duIn0.3kggYLI8ZRCust-xJap61w';
// var map = new mapboxgl.Map({
// container: 'map',
// style: 'mapbox://styles/mapbox/streets-v11'
// });

// // Create a new marker.
// const marker = new mapboxgl.Marker()
//     .setLngLat([-26.1452310, 28.0384710])
//     .addTo(map);



//tabs
// const tabs = document.querySelector(".tabs");
// const btns = document.querySelectorAll(".button");
// const articles = document.querySelectorAll(".content");
// tabs.addEventListener("click", function (e) {
//   const id = e.target.dataset.id;
//   if (id) {
//     // remove selected from other buttons
//     btns.forEach(function (btn) {
//       btn.classList.remove("live");
//     });
//     e.target.classList.add("live");
//     // hide other articles
//     articles.forEach(function (article) {
//       article.classList.remove("live");
//     });
//     const element = document.getElementById(id);
//     element.classList.add("live");
//   }
// });