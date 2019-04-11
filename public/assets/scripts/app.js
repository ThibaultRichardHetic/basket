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


class League
{
  constructor()
  {

  }

  addFriend()
  {
    let newField = document.createElement('div')
    newField.className = 'field'

    let newLabel = document.createElement('label')
    newLabel.className = 'js-label'
    newLabel.setAttribute('for', 'friend-name') 
    newField.appendChild(newLabel)

    let newInput = document.createElement('input')
    newInput.className = 'input js-input'
    newInput.setAttribute('name', 'friend-name') 
    newInput.setAttribute('placeholder', 'Mail / Nom du club de ton ami') 
    newInput.setAttribute('type', 'text') 
    newField.appendChild(newInput)

    document.querySelector('.js-en-y').appendChild(newField)
 
  }
} 

const league = new League()

const $addButton = document.querySelector('.js-add-friend')

$addButton.addEventListener('click', () =>
{
  league.addFriend()

})




{/* let newCityCross = document.createElement('div')
newCityCross.className = `cross js-cross-${index}`
let newCross1 = document.createElement('div')
newCross1.className = 'cross__1'
newCityCross.appendChild(newCross1)
let newCross2 = document.createElement('div')
newCross2.className = 'cross__2'
newCityCross.appendChild(newCross2)
newCity.appendChild(newCityCross)

this.$myCity.appendChild(newCity)
this.mine.push(this.$myCity) */}