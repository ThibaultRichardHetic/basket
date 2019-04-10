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
}
