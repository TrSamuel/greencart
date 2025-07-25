var cardDrop = document.getElementById('card-dropdown');
var activeDropdown;
cardDrop.addEventListener('click', function () {
    var node;
    for (var i = 0; i < this.childNodes.length - 1; i++)
        node = this.childNodes[i];
    if (node.className === 'dropdown-select') {
        node.classList.add('visible');
        activeDropdown = node;
    };
})

window.onclick = function (e) {
    console.log(e.target.tagName)
    console.log('dropdown');
    console.log(activeDropdown)
    if (e.target.tagName === 'LI' && activeDropdown) {
        if (e.target.innerHTML === 'Master Card') {
            document.getElementById('credit-card-image').src = '../Assets/Img/Payment/mastercard.png';
            activeDropdown.classList.remove('visible');
            activeDropdown = null;
            e.target.innerHTML = document.getElementById('current-card').innerHTML;
            document.getElementById('current-card').innerHTML = 'Master Card';
        }
        else if (e.target.innerHTML === 'Rupay') {
            document.getElementById('credit-card-image').src = '../Assets/Img/Payment/Rupay.png';
            activeDropdown.classList.remove('visible');
            activeDropdown = null;
            e.target.innerHTML = document.getElementById('current-card').innerHTML;
            document.getElementById('current-card').innerHTML = 'Rupay';
        }
        else if (e.target.innerHTML === 'Visa') {
            document.getElementById('credit-card-image').src = '../Assets/Img/Payment/Visa.png';
            activeDropdown.classList.remove('visible');
            activeDropdown = null;
            e.target.innerHTML = document.getElementById('current-card').innerHTML;
            document.getElementById('current-card').innerHTML = 'Visa';
        }
    }
    else if (e.target.className !== 'dropdown-btn' && activeDropdown) {
        activeDropdown.classList.remove('visible');
        activeDropdown = null;
    }
}
