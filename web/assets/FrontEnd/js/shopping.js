function clear_cart($url) {
    var result = confirm('Are you sure want to clear all bookings?');

    if (result) {
        window.location = $url;
    } else {
        return false; // cancel button
    }
}