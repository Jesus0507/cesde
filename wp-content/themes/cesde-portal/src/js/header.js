const openMainMenu = document.getElementById('open-main-menu')
const mobileNavigation = document.getElementById('mobile-navigation')
const preheaderbutton = document.getElementById('preheader-button')
const preheaderNavigation = document.getElementById('preheader-navigation')
const searchButton = document.getElementById('search-button')
const searchContainer = document.querySelector('.search-container')
const closerSearch = document.getElementById('closerSearch')
const headercesde = document.getElementById('header-cesde')

if(searchButton){
    searchButton.addEventListener('click',()=>{
        if (!searchContainer.classList.contains('open')) {
            searchContainer.classList.add('open')
            if(preheaderNavigation.classList.contains('open')){
                document.querySelector('#preheader-button i').classList.remove('fa-caret-up')
                document.querySelector('#preheader-button i').classList.add('fa-caret-down')
                preheaderNavigation.classList.remove('open')
             }
             if(mobileNavigation.classList.contains('opened')){
                openMainMenu.classList.remove('active')
                mobileNavigation.classList.remove('opened')
             }
        }else{
            searchContainer.classList.remove('open')
        }
    })
    closerSearch.addEventListener('click',()=>{
        searchContainer.classList.remove('open')
    })
}
if(openMainMenu){
    openMainMenu.addEventListener('click',()=>{
        if(!mobileNavigation.classList.contains('opened')){
            openMainMenu.classList.add('active')
            mobileNavigation.classList.add('opened')
            if(preheaderNavigation.classList.contains('open')){
                document.querySelector('#preheader-button i').classList.remove('fa-caret-up')
                document.querySelector('#preheader-button i').classList.add('fa-caret-down')
                preheaderNavigation.classList.remove('open')
             }
        }else{
            openMainMenu.classList.remove('active')
            mobileNavigation.classList.remove('opened')
        }
    })
}
if (preheaderbutton) {
    preheaderbutton.addEventListener('click',()=>{
        if (!preheaderNavigation.classList.contains('open')) {
            preheaderNavigation.classList.add('open')
           document.querySelector('#preheader-button i').classList.remove('fa-caret-down')
           document.querySelector('#preheader-button i').classList.add('fa-caret-up')
           if(mobileNavigation.classList.contains('opened')){
               openMainMenu.classList.remove('active')
               mobileNavigation.classList.remove('opened')
            }
        } else {
            document.querySelector('#preheader-button i').classList.remove('fa-caret-up')
            document.querySelector('#preheader-button i').classList.add('fa-caret-down')
          
            preheaderNavigation.classList.remove('open')
           
        }
    })
}
document.addEventListener('scroll',()=>{
    const scroll = window.pageYOffset || document.documentElement.scrollTop;

   if(scroll >headercesde.clientHeight ){
        if(!headercesde.classList.contains('sticky')){
            headercesde.classList.add('sticky')
        }
   }else{
    if(headercesde.classList.contains('sticky')){
        headercesde.classList.remove('sticky')
    }
   }
})