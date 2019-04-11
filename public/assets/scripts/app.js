const $input = document.querySelectorAll("[class*='js-input']")

const $label = document.querySelectorAll("[class*='js-label']")


for (let i = 0; i < $input.length; i++) {
  $input[i].addEventListener('focus', () =>
  {
    $label[i].classList.add('label--focus')
  })

  $input[i].addEventListener('focusout', () =>
  {
    if ($input[i].value == '') {
      $label[i].classList.remove('label--focus')
    }
  })
  if (($label[i].getAttribute('data-active')) != '') {
    $label[i].classList.add('label--focus')    
  }
}

const $addButton = document.querySelector('.js-add-friend')
const $newUser1 = document.querySelector('.js-field-1')
const $newUser2 = document.querySelector('.js-field-2')

let isPossible = 0

$addButton.addEventListener('click', () =>
{
  if (isPossible == 0){
    $newUser1.className = 'field js-field-1'
  }
  if(isPossible == 1)
  {
    $newUser2.className = 'field js-field-2'
    $addButton.className = 'hidden'
  }
  isPossible += 1

})
