
/////////// REGISTER PASSWORD CHECK//////////////

const strengthText = document.querySelector('.text-success');
const pwInput = document.querySelector('#password')

pwInput.addEventListener('keyup', function (e) {
    // console.log(e)
    let inputLength = pwInput.value.length

    switch (inputLength) {

        case 0:
            strengthText.innerHTML = '';
            break

        case 1:
        case 2:
        case 3:
            strengthText.innerHTML = 'weak';
            strengthText.classList.add('text-danger')

            break;
        case 4:
        case 5:
        case 6:
        case 7:
            strengthText.innerHTML = 'middle';
            strengthText.classList.add('text-warning')
            strengthText.classList.remove('text-danger')

            break;
        case 8:
            strengthText.innerHTML = 'strong';
            strengthText.classList.remove('text-danger')
            strengthText.classList.remove('text-warning')
            break;


        default:
            break;
    }

});

