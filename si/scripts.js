function updateUser(id, field, value) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "update_user.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.send("id=" + id + "&field=" + field + "&value=" + encodeURIComponent(value));
}

function deleteUser(id) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "delete_user.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            console.log(xhr.responseText);
            location.reload();
        }
    };
    xhr.send("id=" + id);
}
