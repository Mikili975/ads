//nsole.log('eve me!!!');
//console.log(document.getElementsByTagName('a'));
var elements = document.getElementsByTagName('a');
//console.log(elements);
var element1 = elements.item(0);
//console.log(element1);

element1.addEventListener('mouseover', function(e) {
    e.target.style.color='red';
});

element1.addEventListener('mouseout', function (e) {
    e.target.style.color='';
})

var searchField = document.getElementById('searchfield');
console.log(searchField.value);

var searchButton = document.getElementById('searchbutton');
console.log(searchButton);

searchButton.addEventListener("click", function(e) {

    if(searchField.value === "") {
        e.preventDefault();
        alert("Please don't leave search field empty");
    }
})
// function isEmpty(){
//
//     if(searchField.value === "") {
//         alert("empty");
//     }
//     else {
//        run();
//     }
//     return;





// e.target.preventDefault()
//var element = HTMLCollection.item(index)
// /var/www/html/ads/public/js/test.js