if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}
function funcmsg(){
    alert("added to the cart");
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    var addToCartButtons = document.getElementsByClassName('shop-item-button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
}

function purchaseClicked() {
    // alert('Thank you for your purchase')
    var quantityInputs = document.getElementsByClassName('cart-quantity-input')

    for (var i = 0; i < quantityInputs.length; i++) {
        // console.log('in' + quantityInputs[i].value)
        var quantityInput = document.getElementById('quantity');
        quantityInput.value += quantityInputs[i].value + ","
        // console.log(quantityInput.value)
    }
    console.log(document.getElementById('quantity').value)
    var phonesInputs = document.getElementsByClassName('cart-item-title')
    for (var i = 0; i < phonesInputs.length; i++) {
        // console.log('in' + phonesInputs[i].value)
        var phonesInput = document.getElementById('phones');
        phonesInput.value += phonesInputs[i].innerText + ","
        // console.log(phonesInput.value)
    }
    console.log(document.getElementById('phones').value)
    var priceInputs = document.getElementsByClassName('new-class')
    for (var i = 0; i < priceInputs.length; i++) {
        // console.log('    ' + priceInputs[i].innerText)
        var priceInput = document.getElementById('price');
        priceInput.value += priceInputs[i].innerText + ","
        // console.log(priceInput.value)
    }
    console.log(document.getElementById('price').value)
    var priceInput = document.getElementById('total');
    priceInput.value = document.getElementById("span-total").innerText;
    
    // var cartItems = document.getElementsByClassName('cart-items')[0]
    // while (cartItems.hasChildNodes()) {
    //     cartItems.removeChild(cartItems.firstChild)
    // }
    // updateCartTotal()
}

function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}

function quantityChanged(event) {
    // console.log("clicked")
    var input = event.target
    // console.log(input.value)
    // var quantityInput = document.getElementById('quantity');
    // quantityInput.value = input.value
    // console.log(quantityInput.value)
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}

function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText
    var imageSrc = shopItem.getElementsByClassName('shop-item-image')[0].src
    addItemToCart(title, price, imageSrc)
    updateCartTotal()
}

function addItemToCart(title, price, imageSrc) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    // console.log(cartItems)
    // console.log('helllllo')
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart')
            return
        }
    }
    var cartRowContents = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column new-class">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>`

    // var phonesInput = document.getElementById('phones');
    // phonesInput.value += title + ","
    // console.log(phonesInput.value)

    // var priceInput = document.getElementById('price');
    // priceInput.value += price + ","
    // console.log(priceInput.value)
    
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    funcmsg()
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('$', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementById("span-total").innerText = '$'+ total
}