export default class Tab {
  constructor() {
    this.tabLinks = document.querySelectorAll('.tab__link')
    this.tabFigures = document.querySelectorAll('.tab__figure')
    this.tabContents = document.querySelectorAll('.tab__content')
    this.tabBar = document.querySelector('.tab')


    this.openTab()

  }

  openTab() {

    this.tabLinks.forEach(tab => {
      tab.addEventListener('click', (e) => {
        this.tabNumber = tab.dataset.forTab
        this.tabContentToActivate = document.querySelector(`.tab__content[data-tab="${this.tabNumber}"]`)

        this.tabLinks.forEach(link => {
          link.classList.remove('tab__link--active')
        })

        this.tabContents.forEach(content => {
          content.classList.remove('tab__content--active')
        })

        this.tabFigures.forEach(content => {
          content.classList.remove('tab__figure--active')
        })

        tab.classList.add('tab__link--active')
        this.tabContentToActivate.classList.add('tab__content--active')

        this.figure = tab.parentNode
        tab.parentNode.classList.add('tab__figure--active')

      })
    })
  }
}
