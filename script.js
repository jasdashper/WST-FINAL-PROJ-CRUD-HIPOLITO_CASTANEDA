function loadData() {
    fetch("process.php?action=read")
    .then(res => res.text())
    .then(data => {
        document.getElementById("data").innerHTML = data;
    });
}

let selectedID = null;

window.addEventListener("load", function() {

    if (document.getElementById("name")) {
        document.getElementById("name").value = localStorage.getItem("name");
        document.getElementById("course").value = localStorage.getItem("course");
        document.getElementById("phone").value = localStorage.getItem("phone");
        document.getElementById("address").value = localStorage.getItem("address");

        selectedID = localStorage.getItem("editID");
    }

});

function addStudent() {
    let name = document.getElementById("name").value;
    let course = document.getElementById("course").value;
    let phone = document.getElementById("phone").value;
    let address = document.getElementById("address").value;
    fetch(`process.php?action=add&name=${encodeURIComponent(name)}&course=${encodeURIComponent(course)}&phone=${encodeURIComponent(phone)}&address=${encodeURIComponent(address)}`)
    .then(() => {
        window.location.href = "index.php";
    });
}


function editStudent(id, name, course, phone, address) {
    localStorage.setItem("editID", id);
    localStorage.setItem("name", name);
    localStorage.setItem("course", course);
    localStorage.setItem("phone", phone);
    localStorage.setItem("address", address);

    window.location.href = "edit.php";
}

function updateStudent() {
    let id = localStorage.getItem("editID"); // 👈 kuha diretso dito
    let name = document.getElementById("name").value;
    let course = document.getElementById("course").value;
    let phone = document.getElementById("phone").value;
    let address = document.getElementById("address").value;

    fetch(`process.php?action=update&id=${encodeURIComponent(id)}&name=${encodeURIComponent(name)}&course=${encodeURIComponent(course)}&phone=${encodeURIComponent(phone)}&address=${encodeURIComponent(address)}`)
    .then(() => {
        localStorage.clear();
        window.location.href = "index.php";
    });
}


function deleteStudent(id) {
    if (confirm("Are you sure you want to delete this user?")) {
        fetch(`process.php?action=delete&id=${encodeURIComponent(id)}`)
        .then(() => {
            window.location.href = "index.php"; 
        });
    }
}


