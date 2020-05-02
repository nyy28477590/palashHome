function getMap() {
    var form = document.getElementById("map");
    var store = form.store.value;
    var city = form.city.value;

    var newwin = window.open();
    newwin.location = "https://google.com/maps/search/?api=1&query=" + city + "+" + store;
}