let numberImage = 1;
const countImage = 3;
//const pathImages1 = "/images/gallery/gallery1";
//const pathImages2 = "/images/gallery/gallery2";
const countDiv = 15;
const speed = 100;

function GenerateImage () {
    let widthDiv = 500/countDiv
    let Image = "/images/gallery/gallery1/0" + numberImage+".jpg"
    for (let i=0; i < countDiv; i++){

            let item = $("<div></div>")
            item.addClass("elementImage")
            item.css("height", widthDiv+"px")    
            item.css("background-image", 'url('+Image+')')
            item.css("background-position-y", - i * widthDiv + "px")
            $("#mainImage").append(item);
        
    }
}

  function changeImage1() {

    let Image = "/images/gallery/gallery1/0"+numberImage+".jpg"
    let i = 30;
    let j = 30;
    $( "#mainImage div").each(function () {
        $( "#mainImage div").animate( {
            
          
        }, );
        $(this).hide(speed*i, function () {
            $(this).css("background-image", 'url('+Image+')');
            $(this).show(speed*j);
        });
        i++;
    });
    
    
  }
 
 
/*
    Левый клик
*/
function leftChangeImage()
{
    if(numberImage > 1)
        numberImage--;
    else 
        numberImage = countImage;
    changeImage1();
}

/*
    Правый клик
*/
function rightChangeImage()
{
    if(numberImage < countImage)
        numberImage++;
    else 
        numberImage = 1;
    changeImage1();
}


$( document ).ready(function() {
    GenerateImage();
});