const url = 'http://127.0.0.1:8000/api/testuser/mikayla.baumbach'; // Get 10 random users

fetch(url)   // Call the fetch function passing the url of the API as a parameter
    .then((result) => result.json() /*console.log(result)*/ )
    .then((data) => console.log(data))
    .catch(data => console.log(data));

//zadatak:
// 1. Kako iz DOM-a izvuci urlname
// 2. Dinamicki napraviti url za upit iz baze
// 3. Prikazati tj. napraviti novi element u DOM koji ce prikazati ono sto treba
// 4. i sigraj se malo...

