const planesWrapper = document.getElementById('planes__wrapper')
const planes_left_trigger = document.getElementById('trigger_left')
const showSedes = document.getElementById('showSedes')


window.slide=(direction,container)=>{
   
    const planesWrapper = document.querySelector(`${container}`)

     console.log(planesWrapper)
    scrollCompleted = 0;
    let slideVar = setInterval(function(){
        if(direction == 'left'){
            planesWrapper.scrollLeft -= 30;
        } else {
            planesWrapper.scrollLeft += 30;
        }
        scrollCompleted += 30;
        if(scrollCompleted >= 100){
            window.clearInterval(slideVar);
        }
    }, 50);
}
if (document.getElementById('valores__wrapper')) {
    document.getElementById('valorRight').addEventListener('click',()=>{
        
        slide('right','#valores__wrapper')
    })
    document.getElementById('valorLeft').addEventListener('click',()=>{
        
        slide('left','#valores__wrapper')
    })    
}
/* if(showSedes){
    document.getElementById('sedesRight').addEventListener('click',()=>{
        console.log('first')
        slide('right','.sedes-content')
    })
    document.getElementById('sedesLeft').addEventListener('click',()=>{
        console.log('left')
        
        slide('left','.sedes-content')
    })   
}
 */

