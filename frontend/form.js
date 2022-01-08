
const btn_create = document.querySelector('#btn-create')

const img_loader = document.querySelector('#img-loader')

const formulaire = document.querySelector('#formulaire')



formulaire.addEventListener('submit', (e) => {
    e.preventDefault()
    e.stopPropagation()

    img_loader.style.display = 'inline-block'

    let formData = new FormData(formulaire)

    fetch('http://localhost:8000/user/create', { method: 'POST', body: formData })
        .then(
            res => console.log(res)
        )
        .then(data => img_loader.style.display = 'inline-block')
        .catch(err => conosle.log(err))


})