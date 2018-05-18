const users = Array.from(document.querySelectorAll('#user'));

function makeHtml(e) {

    const url = 'http://127.0.0.1:8000/api/users/' +
        e.relatedTarget.childNodes[3].childNodes[1].href.split('/')[4];

    fetch(url)   // Call the fetch function passing the url of the API as a parameter
        .then((result) => result.json() /*console.log(result)*/ )
        .then(data =>  {

            const name = data.first_name + ' ' + data.last_name;
            const city = data.city;

            const user = document.querySelector('#user');

            const div = document.createElement('div');
            div.className = 'appended';

            const p = document.createElement('p');
            p.className = 'fullname';
            p.innerHTML = name;


            div.appendChild(p);

            user.appendChild(div);

        })
        .catch(data => console.log(data));}

function removeHtml() {
    const user = document.querySelector('.appended');
    user.remove();
}

users.forEach(user => user.addEventListener('mouseenter', makeHtml));
users.forEach(user => user.addEventListener('mouseleave', removeHtml));


//zadatak:
// 1. Kako iz DOM-a izvuci urlname
// 2. Dinamicki napraviti url za upit iz baze
// 3. Prikazati tj. napraviti novi element u DOM koji ce prikazati ono sto treba
// 4. i sigraj se malo...

