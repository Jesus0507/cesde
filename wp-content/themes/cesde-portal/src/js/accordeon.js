const accordeon = document.getElementById('cesde-accordeon')
const accordeonItems = document.querySelectorAll('.programas__accordeon__item')
const accordeonItemTriggers = document.querySelectorAll('.programas__accordeon__item .programas__accordeon__item__title')
const accordeonItemTargets = document.querySelectorAll('.programas__accordeon__item .acordeon__content')
const accordeonItemMinus = document.querySelectorAll('.programas__accordeon__item h3 .fa-solid')



document.addEventListener('DOMContentLoaded',()=>{
  if(accordeon){
    accordeonItems[0].classList.add('active')
    if(accordeonItemMinus[0].classList.contains('fa-plus')){
        accordeonItemMinus[0].classList.remove('fa-plus')
        accordeonItemMinus[0].classList.add('fa-minus')
    }
    accordeonItemTriggers.forEach((accordeonItemTrigger,i)=>{
        accordeonItemTrigger.addEventListener('click',()=>{
            accordeonItems.forEach((accordeonItem,index)=>{
                if(accordeonItem.classList.contains('active') && !accordeonItems[i].classList.contains('active')){
                    accordeonItem.classList.remove('active')
                   
                }
                if(accordeonItemMinus[index].classList.contains('fa-minus')){
                    accordeonItemMinus[index].classList.remove('fa-minus')
                    accordeonItemMinus[index].classList.add('fa-plus')
                }
            })
            if(!accordeonItems[i].classList.contains('active')){
                accordeonItems[i].classList.add('active')
                accordeonItemMinus[i].classList.remove('fa-plus')
                accordeonItemMinus[i].classList.add('fa-minus')
            }else{
    
                accordeonItems[i].classList.remove('active')
                accordeonItemMinus[i].classList.remove('fa-minus')
                accordeonItemMinus[i].classList.add('fa-plus')
            }
        })
    })
  }
})