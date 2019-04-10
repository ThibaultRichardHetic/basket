console.log('all good man')

const $input = document.querySelectorAll("[class*='js-input']")

console.log($input)

// [class*='-js-input']


document.querySelector('.main--connexion .section--2').addEventListener('click', () =>
{
  for (let i = 0; i < $input.length; i++) {
    if ($input[i].hasFocus())
    {
      console.log($input[i])
    }
    
  }
})