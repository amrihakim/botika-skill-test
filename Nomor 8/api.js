function getRandomUser() {
    fetch('https://randomuser.me/api/')
    .then(response => response.json())
    .then(data => {
        console.log(data)

        let firstName = data.results[0].name.first
        let lastName = data.results[0].name.last
        let gender = data.results[0].gender
        let dob = data.results[0].dob.date
        let age = data.results[0].dob.age
        let picture = data.results[0].picture.medium
        
        // document.body.appendChild(x);
        document.getElementById("first-name").innerHTML = firstName
        document.getElementById("last-name").innerHTML = lastName
        document.getElementById("gender").innerHTML = gender
        document.getElementById("dob").innerHTML = dob
        document.getElementById("age").innerHTML = age
        document.getElementById("picture").src = picture
    })
    .catch(err => {
        console.log(err)
    });
}