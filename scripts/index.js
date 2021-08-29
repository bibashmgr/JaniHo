// variables-declaration
let currLocation = document.getElementById("select-from");
let destination = document.getElementById("select-to");

function checkValueFirst() {
    switch (currLocation.value) {
        case "Pokhara":
            document.getElementById("opt-b-one").setAttribute("hidden", true);
            document.getElementById("opt-b-two").removeAttribute("hidden");
            document.getElementById("opt-b-three").removeAttribute("hidden");
            document.getElementById("opt-b-four").removeAttribute("hidden");
            break;
        case "Kathmandu":
            document.getElementById("opt-b-one").removeAttribute("hidden");
            document.getElementById("opt-b-two").setAttribute("hidden", true);
            document.getElementById("opt-b-three").removeAttribute("hidden");
            document.getElementById("opt-b-four").removeAttribute("hidden");
            break;
        case "Chitwan":
            document.getElementById("opt-b-one").removeAttribute("hidden");
            document.getElementById("opt-b-two").removeAttribute("hidden");
            document.getElementById("opt-b-three").setAttribute("hidden", true);
            document.getElementById("opt-b-four").removeAttribute("hidden");
            break;
        case "Mustang":
            document.getElementById("opt-b-one").removeAttribute("hidden");
            document.getElementById("opt-b-two").removeAttribute("hidden");
            document.getElementById("opt-b-three").removeAttribute("hidden");
            document.getElementById("opt-b-four").setAttribute("hidden", true);
            break;
    }
}

function checkValueSecond() {
    switch (destination.value) {
        case "Pokhara":
            document.getElementById("opt-a-one").setAttribute("hidden", true);
            document.getElementById("opt-a-two").removeAttribute("hidden");
            document.getElementById("opt-a-three").removeAttribute("hidden");
            document.getElementById("opt-a-four").removeAttribute("hidden");
            break;
        case "Kathmandu":
            document.getElementById("opt-a-one").removeAttribute("hidden");
            document.getElementById("opt-a-two").setAttribute("hidden", true);
            document.getElementById("opt-a-three").removeAttribute("hidden");
            document.getElementById("opt-a-four").removeAttribute("hidden");
            break;
        case "Chitwan":
            document.getElementById("opt-a-one").removeAttribute("hidden");
            document.getElementById("opt-a-two").removeAttribute("hidden");
            document.getElementById("opt-a-three").setAttribute("hidden", true);
            document.getElementById("opt-a-four").removeAttribute("hidden");
            break;
        case "Mustang":
            document.getElementById("opt-a-one").removeAttribute("hidden");
            document.getElementById("opt-a-two").removeAttribute("hidden");
            document.getElementById("opt-a-three").removeAttribute("hidden");
            document.getElementById("opt-a-four").setAttribute("hidden", true);
            break;
    }
}