
// for navbar
window.addEventListener('scroll', function() {
    var navbar = document.querySelector(".n-container");
    var currentPosition = window.pageYOffset; // Get the current scroll position
  
    if (currentPosition > 0) {
      navbar.style.background = 'rgb(81, 70, 205)'; // Change to desired background color
      navbar.style.height = '4em'; // Change to desired background color
    } else {
      navbar.style.background = 'none'; // Revert to initial background color
      navbar.style.height = '5em'; // Change to desired background color
    }
  });
  
// Initializing variables for later use
let sign = document.getElementById('signup');
let log = document.getElementById('login');
let disp = document.getElementById('displayall');

let menu = document.querySelector('.menu');
let nav = document.querySelector('.nav');


// For menu
//to display the login / sign up form
function displayAll(){
    disp.style.transform = "translateX(0px)";
}

//this is a multipurpose function, it is use to close the 
//login/sign up form as well as it is use to close the store container
function closeDisplay(){
    disp.style.transform = "translateX(-1800px)";
    prod.style.visibility = "hidden";
    prodOne.style.visibility = "hidden";
    prodTwo.style.visibility = "hidden";
    prodThree.style.visibility = "hidden";
    prodFour.style.visibility = "hidden";
    prodFive.style.visibility = "hidden";
    prodSix.style.visibility = "hidden";
}

// to display the login interface and hide the signup interface
function loginDisplay(){
    sign.style.visibility = "hidden";
    log.style.visibility = "visible";
}
// to display the signup interface and hide the login interface
function signupDisplay(){
    log.style.visibility = "hidden";
    sign.style.visibility = "visible";
}

//this one is when user clicks the menu icon, the menu will appear.
menu.addEventListener('click', () => {
    nav.classList.toggle('active')
})

// For products
//Just initialie variables for later use
let prod = document.querySelector('.market-click');
let prodOne = document.querySelector('.box-one');
let prodTwo = document.querySelector('.box-two');
let prodThree = document.querySelector('.box-three');
let prodFour = document.querySelector('.box-four');
let prodFive = document.querySelector('.box-five');
let prodSix = document.querySelector('.box-six');

//if user click the first item (Hades), the discription will appear
function clickMarketOne(){
    prod.style.visibility = "visible";
    prodOne.style.visibility = "visible";
    prodTwo.style.visibility = "hidden";
    prodThree.style.visibility = "hidden";
    prodFour.style.visibility = "hidden";
    prodFive.style.visibility = "hidden";
    prodSix.style.visibility = "hidden";
}

//same explanation above
function clickMarketTwo(){
    prod.style.visibility = "visible";
    prodOne.style.visibility = "hidden";
    prodTwo.style.visibility = "visible";
    prodThree.style.visibility = "hidden";
    prodFour.style.visibility = "hidden";
    prodFive.style.visibility = "hidden";
    prodSix.style.visibility = "hidden";
}

//same explanation above
function clickMarketThree(){
    prod.style.visibility = "visible";
    prodOne.style.visibility = "hidden";
    prodTwo.style.visibility = "hidden";
    prodThree.style.visibility = "visible";
    prodFour.style.visibility = "hidden";
    prodFive.style.visibility = "hidden";
    prodSix.style.visibility = "hidden";
}

//same explanation above
function clickMarketFour(){
    prod.style.visibility = "visible";
    prodOne.style.visibility = "hidden";
    prodTwo.style.visibility = "hidden";
    prodThree.style.visibility = "hidden";
    prodFour.style.visibility = "visible";
    prodFive.style.visibility = "hidden";
    prodSix.style.visibility = "hidden";
}

//same explanation above
function clickMarketFive(){
    prod.style.visibility = "visible";
    prodOne.style.visibility = "hidden";
    prodTwo.style.visibility = "hidden";
    prodThree.style.visibility = "hidden";
    prodFour.style.visibility = "hidden";
    prodFive.style.visibility = "visible";
    prodSix.style.visibility = "hidden";
}

//same explanation above
function clickMarketSix(){
    prod.style.visibility = "visible";
    prodOne.style.visibility = "hidden";
    prodTwo.style.visibility = "hidden";
    prodThree.style.visibility = "hidden";
    prodFour.style.visibility = "hidden";
    prodFive.style.visibility = "hidden";
    prodSix.style.visibility = "visible";
}

// For market Page
// initialize
const slider = document.querySelector(".second-container-slider");
const arrowBtns = document.querySelectorAll(".market-second-container i");
const firstCardWidth = slider.querySelector(".card").offsetWidth;
// array
const carouselChildrens = [...slider.children];

//when user didn't drag over the items
let isDragging = false,
    startX, startScrollLeft;

// Get the number of cards that can fit in the slider at once
let cardPerview = Math.round(slider.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of slider for infinite scrolling
carouselChildrens.slice(-cardPerview).reverse().forEach(card => {
    slider.insertAdjacentHTML("afterbegin", card.outerHTML);
})

// Insert copies of the first few cards to beginning of slider for infinite scrolling
carouselChildrens.slice(0, cardPerview).forEach(card => {
    slider.insertAdjacentHTML("beforeend", card.outerHTML);
})

// This one is when user clicks left or right slider button
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        slider.scrollLeft += btn.id === "left" ? -firstCardWidth : firstCardWidth;
    })
});

// User drags the items in "other games" section
const dragStart = (e) => {
    isDragging = true;
    slider.classList.add("dragging");
    // Records the initial cursor and scroll position of the slider
    startX = e.pageX;
    startScrollLeft = slider.scrollLeft;
}

const dragging = (e) => {
    if (!isDragging) return; // if isDragging is false, return from here
    // Updates the scroll position of the slider based on the cursor movement
    slider.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    slider.classList.remove("dragging");
}

//Resets if the it reaches the end. This will create an infinite scroll effect.
const infiniteScroll = () => {
    // If the slider is at the beggining, scroll to the end
    if (slider.scrollLeft === 0) {
        slider.classList.add("no-transition");
        slider.scrollLeft = slider.scrollWidth - (2 * slider.offsetWidth);
        slider.classList.remove("no-transition");

        // If the slider is at the end, scroll to the beginning
    } else if (Math.ceil(slider.scrollLeft) === slider.scrollWidth - slider.offsetWidth) {
        slider.classList.add("no-transition");
        console.log("right end");
        slider.scrollLeft = slider.offsetWidth
        slider.classList.remove("no-transition");
    }
}

// Events
slider.addEventListener("mousedown", dragStart);
slider.addEventListener("mousemove", dragging);
slider.addEventListener("mouseup", dragStop);
slider.addEventListener("scroll", infiniteScroll);

// For add to cart 
// Get all "Add to Cart" buttons
const addToCartButtons = document.querySelectorAll('.add-to-cart');

// Order items array
const orderItems = [];

// Add event listener to each button
for (let i = 0; i < addToCartButtons.length; i++) {
  const button = addToCartButtons[i];
  button.addEventListener('click', () => {
    // Get item details
    const item = {
      name: button.parentElement.querySelector('.game-title').textContent,
      price: button.parentElement.querySelector('.price').textContent,
      imageSrc: button.parentElement.querySelector('img').getAttribute('src')
    };

    // Add item to order
    orderItems.push(item);

    // Update order page
    updateOrderPage();
  });
}

// Function to update the order page
function updateOrderPage() {
  const orderItemsTable = document.getElementById('order-items');
  orderItemsTable.innerHTML = '';

  // Generate table rows for each ordered item
// Generate table rows for each ordered item
for (let i = 0; i < orderItems.length; i++) {
    const item = orderItems[i];
  
    // Create a new row element
    const row = document.createElement('tr');
  
    // Create a cell for the item number
    const numberCell = document.createElement('td');
    numberCell.textContent = i + 1;
    row.appendChild(numberCell);
  
    // Create a cell for the item details
    const itemCell = document.createElement('td');
  
    // Create an image element for the item
    const img = document.createElement('img');
    img.src = item.imageSrc;
    img.alt = item.name;
    itemCell.appendChild(img);
  
    // Create a span element for the item name
    const itemName = document.createElement('span');
    itemName.textContent = item.name;
    itemCell.appendChild(itemName);
  
    row.appendChild(itemCell);
  
    // Create a cell for the item price
    const priceCell = document.createElement('td');
    priceCell.textContent = item.price;
    row.appendChild(priceCell);
  
    // Create a cell for the action (cancel button)
    const actionCell = document.createElement('td');
    const cancelButton = document.createElement('button');
    cancelButton.textContent = 'Cancel';
    cancelButton.classList.add('cancel-button');
    cancelButton.addEventListener('click', () => {
      removeItem(i);
    });
    actionCell.appendChild(cancelButton);
    row.appendChild(actionCell);
  
    // Append the row to the order items table
    orderItemsTable.appendChild(row);
  }
  
}

// Function to remove an item from the order
function removeItem(index) {
  if (index >= 0 && index < orderItems.length) {
    orderItems.splice(index, 1);
    updateOrderPage();
  }
}


//For order Details
const orderContainer = document.querySelector(".order-container");

showCartContent = () => {
    orderContainer.style.visibility = "visible";
}

closeOrder = () => {
    orderContainer.style.visibility = "hidden";
}
