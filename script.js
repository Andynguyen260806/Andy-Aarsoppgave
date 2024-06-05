// Define the ShowCart function
function ShowCart() {
  // Implementation of the ShowCart function
  document.getElementById("cart").innerHTML = localStorage.lagretHandlekurv;
}

// Call the ShowCart function on page load
window.onload = function() {
  ShowCart();
};

// Define other functions (buyGPU, buyRAM, EmptyCart) and variables below

let GPU = "<div class='kurv'> GeForce GTX 1080, 13 499,- <img class='kurvbilde' src='Bilder/GPU.png' style='width:10%'></div>";
let RAM = "<div class='kurv'> Corsair 16 GB Ddr4 RAM 1 599,- <img class='kurvbilde' src='Bilder/RAM.png' style='width:10%'></div>";

let handlekurv = localStorage.getItem("lagretHandlekurv");

function buyGPU() {
  handlekurv += GPU;
  localStorage.setItem("lagretHandlekurv", handlekurv);
}

function buyRAM() {
  handlekurv += RAM;
  localStorage.setItem("lagretHandlekurv", handlekurv);
}

function EmptyCart() {
  handlekurv = "";
  localStorage.setItem("lagretHandlekurv", handlekurv);
  ShowCart();
} 

console.log("JavaScript code executed.");
