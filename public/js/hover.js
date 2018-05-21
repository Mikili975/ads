const userLinks = Array.from(document.querySelectorAll('.user'));

const urls = userLinks.map(a => 'http://127.0.0.1:8000/api/users/' + a.href.split('/')[4]);

const arrayOfUsers = [];

urls.forEach(url => {
    fetch(url)   // Call the fetch function passing the url of the API as a parameter
        .then((result) => result.json())
        .then(data =>  {
            arrayOfUsers.push(data);
        })
        .catch(data => console.log(data));
});

function makeHtml() {

    const data = arrayOfUsers.find(user => {return user.url_name === this.href.split('/')[4]});

    const name = data.first_name + ' ' + data.last_name;
    const city = data.city;

    const div = document.createElement('div');
    div.className = 'appended';

    const pName = document.createElement('p');
    pName.className = 'fullname';
    pName.innerHTML = name;

    const pCity = document.createElement('p');
    pCity.className = 'city';
    pCity.innerHTML = city;

    div.appendChild(pName);
    div.appendChild(pCity);

    this.appendChild(div);
}

function removeHtml() {

    const html = document.querySelector('.appended');

    if (html) {
        html.remove();
    }
}

userLinks.forEach(user => user.addEventListener('mouseenter', makeHtml));

userLinks.forEach(user => user.addEventListener('mouseleave', removeHtml));



//zadatak:
// 1. Kako iz DOM-a izvuci urlname
// 2. Dinamicki napraviti url za upit iz baze
// 3. Prikazati tj. napraviti novi element u DOM koji ce prikazati ono sto treba
// 4. i sigraj se malo...
// 5. Pokupi pri ucitavanju stranice sve sto ti treba u jednu promenljivu, pa se onda zajebavaj i ne salji upit bazi sto puta...
// 6. Dodaj ssh key

