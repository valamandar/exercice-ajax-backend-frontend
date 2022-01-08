
const btn_refech = document.querySelector('#btn-relaod')
const img_loader = document.querySelector('#img-loader')

const body_list_container = document.querySelector('#body-list-container')


let listOfUsers = null

const createListOfUser = (data) => {

    let body = data.map(user => {

        const { id, name, username, email } = user

        let element = `
            <tr>
                <th scope="row">${id}</th>
                <td>
                    <img src='https://thispersondoesnotexist.com/image' width='50' height='50' />
                </td>
                <td>${name}</td>
                <td>${username}</td>
                <td>${email}</td>
            </tr>
        `
        return element;
    })

    body_list_container.innerHTML = body
}

btn_refech.addEventListener('click', () => {

    // Reactive le loader 
    img_loader.style.display = 'inline-block'

    fetch('http://localhost:8000/user/all')
        .then(res => res.json())
        .then(
            data => {
                img_loader.style.display = 'none'
                createListOfUser(data)
            }
        )
        .catch(err => console.error(err))

})


