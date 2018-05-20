const users = Array.from(document.querySelectorAll('.user'));

function makeHtml(e) {

    const url = 'http://127.0.0.1:8000/api/users/' +
        e.toElement.href.split('/')[4];

    fetch(url)   // Call the fetch function passing the url of the API as a parameter
        .then((result) => result.json())
        .then(data =>  {

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

            function removeHtml() {

                const html = document.querySelector('.appended');

                if (html) {
                    html.remove();
                }
            }

            users.forEach(user => user.addEventListener('mouseleave', removeHtml));

        })
        .catch(data => console.log(data));
}
users.forEach(user => user.addEventListener('mouseenter', makeHtml));

//zadatak:
// 1. Kako iz DOM-a izvuci urlname
// 2. Dinamicki napraviti url za upit iz baze
// 3. Prikazati tj. napraviti novi element u DOM koji ce prikazati ono sto treba
// 4. i sigraj se malo...

