
/////////////////////////////////slider//////////////////////////////////
document.addEventListener("DOMContentLoaded", function(){

    let greenLight = document.querySelector('.carusel');
    
    if (greenLight){  
        let position = 0;//начальная позиция
        const slidesToShow = 3;//количество слайдов показанных на экране
        const slidesToScroll = 1;//колличество слайдов для пролистывания
        const container = document.querySelector('.carusel');//контейнер, где хранится трэк и кнопки
        const track = document.querySelector('.carTrack');//на трэке расположены элементы слайдера
        const btnPrev = document.querySelector('.prev');//кнопка назад
        const btnNext = document.querySelector('.next');//кнопка вперед
        const items = document.querySelectorAll('.carEl');//элементы слайдера
        const itemCount = items.length;//колличество элементов слайдера
        const itemWidth = container.clientWidth / slidesToShow;//ширина элемента
        const movePosition = slidesToScroll * itemWidth;//длина на которую необходимо передвинуть слайд

        items.forEach((item) => {
            item.style.minWidth = `${itemWidth}px`;//задаем ширину для каждого элемента слайдера
        });

        btnNext.addEventListener('click', () => {
            const itemsLeft = itemCount - (Math.abs(position) + slidesToShow * itemWidth) / itemWidth;
            position -= itemsLeft >= slidesToScroll ? movePosition : itemsLeft * itemWidth;

            setPosition();//передвигаем вперед
            checkBtns();
        });

        btnPrev.addEventListener('click', () => {
            const itemsLeft = Math.abs(position) / itemWidth;
            position += itemsLeft >= slidesToScroll ? movePosition : itemsLeft * itemWidth;

            setPosition();//передвигаем назад
            checkBtns();

        });

        const setPosition = () => {
        track.style.transform = `translateX(${position}px)`;//функция для передвижения слайда вперед или назад
        };

        const checkBtns = () => {
            btnPrev.disabled = position === 0;
            btnNext.disabled = position <= -(itemCount - slidesToShow) * itemWidth;//если позиция меньше,чем число
        };

    }  else {
        return false;
    }

})
/////////////////////////////////tabs//////////////////////////////////

document.addEventListener("DOMContentLoaded", function(){
    let greenLight = document.querySelector('.wrapper');
    
    if (greenLight){  

        document.querySelectorAll('.tabs-triggers-item').forEach((item) =>
            item.addEventListener('click', (e) => {
                e.preventDefault();
                const id = e.target.getAttribute('href').replace('#', '');

                document.querySelectorAll('.tabs-triggers-item').forEach((child) => 
                    child.classList.remove('tabs-triggers-item--active')   
                );

                document.querySelectorAll('.tabs-content-item').forEach((child) => 
                    child.classList.remove('tabs-content-item--active')   
                );

                item.classList.add('tabs-triggers-item--active');

                document.getElementById(id).classList.add('tabs-content-item--active');
        
            })
    );

        let inAndOut = (x, y) => { 
            document.querySelector(x).addEventListener('focus', () => {
                document.querySelector(y).style.display = 'block';
            })
            document.querySelector(x).addEventListener('blur', () => {
                document.querySelector(y).style.display = 'none';
            })
        };

        inAndOut('#item-1', '#item-span-1');
        inAndOut('#item-2', '#item-span-2');
        inAndOut('#item-3', '#item-span-3');
        inAndOut('#item-4', '#item-span-4');
        inAndOut('#item-5', '#item-span-5');
        inAndOut('#item-6', '#item-span-6');
    
        document.querySelector('.tabs-triggers-item').click();

    }  else {
        return false;
    }
})

/////////////////////////////////portfolio tabs//////////////////////////////////


document.addEventListener("DOMContentLoaded", function(){

    let greenLight = document.querySelector('.portfolio-tabs');
    
    if (greenLight){  
        document.querySelectorAll('.portfolio-tabs-triggers-item').forEach((item) =>
            item.addEventListener('click', (e) => {
                e.preventDefault();
                const id = e.target.getAttribute('href').replace('#', '');

                document.querySelectorAll('.portfolio-tabs-triggers-item').forEach((child) => 
                    child.classList.remove('portfolio-tabs-triggers-item--active')   
                );

                document.querySelectorAll('.portfolio-tabs-content-item').forEach((child) => 
                    child.classList.remove('portfolio-tabs-content-item--active')   
                );

            item.classList.add('portfolio-tabs-triggers-item--active');

            document.getElementById(id).classList.add('portfolio-tabs-content-item--active');
        
            })
        );
        
        document.querySelector('.portfolio-tabs-triggers-item').click();
    }  else {
        return false;
    }
})

// функция для онклик для иконок//

let link = (x) => {
 document.location.href = x
}


//*******************************ajax long form ********************************************************/
document.addEventListener("DOMContentLoaded", function(){

    let greenLight = document.querySelector('.left-mid');
    
    if (greenLight){ 
const longFormButton = document.querySelector('.form-left-mid-button');

longFormButton.addEventListener('click', (e) =>{
    e.preventDefault();


    const name = document.querySelector('input[name = "name"]').value;
    const phone = document.querySelector('input[name = "phone"]').value;
    const comment = document.querySelector('input[name = "comment"]').value;
    const button = document.querySelector('input[name = "long-button"]').value;

    const requestURL = `./components/long_form_test.php?name=${name}&phone=${phone}&comment=${comment}&button=${button}`;
    const request = new XMLHttpRequest();

    
    request.onload = function () {
        if (request.status !== 200) {
        return;
    }
        
    const response = JSON.parse(request.response);
        
    // console.log(response)

        if (response.name === 'OK' && response.phone === 'OK' && response.comment === 'OK') { 
            document.querySelector('.left-mid').innerHTML = '<p class = "long-form-valid">Благодарим Вас!<br>Ваша заявка направлена на обработку!<br>В скорем времени с Вами свяжется наш специалист!</p>'
        } 
 
        if (response.name != 'OK'){
            document.querySelector('#name-error').innerHTML = `${response.name}`;  
        } else {
           document.querySelector('#name-error').innerHTML = ' '
        }
        if(response.phone != 'OK'){
            document.querySelector('#phone-error').innerHTML = `${response.phone}`;
        } else {
            document.querySelector('#phone-error').innerHTML = ' '
         }
        if(response.comment != 'OK'){
            document.querySelector('#comment-error').innerHTML = `${response.comment}`;
        } else {
            document.querySelector('#comment-error').innerHTML = ' '
         }
        
}
request.open('GET', requestURL);
    
   
request.send();
});
}  else {
    return false;
}
})
//*******************************ajax short form ********************************************************/

document.addEventListener("DOMContentLoaded", function(){

    let greenLight = document.querySelector('.footer-form');
    
    if (greenLight){ 
const shortFormButton = document.querySelector('.footer-form-button');

shortFormButton.addEventListener('click', (el) =>{
    el.preventDefault();


    const number = document.querySelector('input[name = "number"]').value;
    const button = document.querySelector('input[name = "button"]').value;

    const requestURL = `components/test.php?number=${number}&button=${button}`;
    const request = new XMLHttpRequest();

    
request.onload = function () {
    if (request.status !== 200) {
    return;
    }
       
    const response = JSON.parse(request.response);
    // console.log(response)    
    if (response.number === 'OK') { 
        document.querySelector('.footer-form').innerHTML = '<p class = "short-form-valid">Благодарим Вас! Ваша заявка направлена на обработку!<br>В скорем времени с Вами свяжется наш специалист!</p>'
    } else {
        
        document.querySelector('#short-form-error').innerHTML = `${response.number}`;
    }
}
request.open('GET', requestURL);
    
   
request.send();
});
}  else {
    return false;
}
})