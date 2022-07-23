const form = document.getElementById('form')
const button = document.getElementById('submitButton')

const nombre = document.getElementById('nombre')
const apellidos = document.getElementById('apellidos')
const telefono = document.getElementById('telefono')
const email = document.getElementById('email')
const comentarios = document.getElementById('comentarios')
const terms = document.getElementById('terms')

const formIsValid = {
    nombre: false,
    apellidos: false,
    telefono: false,
    email: false,
    comentarios: false,
    terms: false
}

form.addEventListener('submit', (e) => {
    e.preventDefault()
    validateForm()
})

nombre.addEventListener('change', (e) => {
    if(e.target.value.trim().length > 0) formIsValid.nombre = true
})

apellidos.addEventListener('change', (e) => {
    if(e.target.value.trim().length > 0) formIsValid.apellidos = true
})

telefono.addEventListener('change', (e) => {
    if(e.target.value.trim().length > 0) formIsValid.telefono = true
})

email.addEventListener('change', (e) => {
    if(e.target.value.trim().length > 0) formIsValid.email = true
})

comentarios.addEventListener('change', (e) => {
    if(e.target.value.trim().length > 0) formIsValid.comentarios = true
})

terms.addEventListener('change', (e) => {
    formIsValid.terms = e.target.checked
    e.target.checked ? button.removeAttribute('disabled') : button.setAttribute('disabled', true)
})

const validateForm = () => {
    const formValues = Object.values(formIsValid)
    const valid = formValues.findIndex(value => value == false)
    if(valid == -1) form.submit()
    else alert('Faltan campos por rellenar')
}