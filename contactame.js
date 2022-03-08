const $form = document.querySelector('form')
const $buttonMailto = document.querySelector('#mailto')

$form.addEventListener('submit', handleSubmit)

function handleSubmit(event) {
    event.preventDefault();
    const form = new FormData(this)
    $buttonMailto.setAttribute('href', `mailto:leandro.m9601@gmail.com?subject=${form.get('name')}${form.get('email')}&body=${form.get('mensaje')}`)
    $buttonMailto.click()
}