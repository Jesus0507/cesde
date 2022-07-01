import Shuffle from 'shufflejs';
console.log( sedes );
document.addEventListener('DOMContentLoaded',()=>{
    const sedesItems =document.querySelectorAll('.sede-item')
const nuestroPrograma = document.getElementById('nuestros-programas')
if(sedesItems && nuestroPrograma){
   
    const shuffleInstance = new Shuffle(document.getElementById('nuestros-programas'), {
        itemSelector: '.programa-item',
        gutterWidth: 10,
        isCentered: true
      });
      sedesItems.forEach((sedeItem,i)=>{
        sedeItem.addEventListener('click',()=>{
            const sede = sedeItem.dataset.sede
            shuffleInstance.filter(sede)
        })
    })
}
})