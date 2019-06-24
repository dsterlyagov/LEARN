function Slider(selector, options) {
    var __self = this;
    //DOM Nodes
    var sliderNode = document.querySelector(selector),
        sliderImagesNode = sliderNode.querySelector('.slider__images-wrap'),
        prevSliderNode = sliderNode.querySelector('.slider__pager_previous'),
        nextSliderNode = sliderNode.querySelector('.slider__pager_next'),
        paginationNode = sliderNode.querySelector('.slider__pagination');
    var currentSlideIndex = options.currentSlide||0,
        imagesCount = sliderImagesNode.children.length,
        slideSize = sliderImagesNode.offsetWidth;

    this.prevSlide = function () {
        if(currentSlideIndex === 0){
            currentSlideIndex = imagesCount - 1;
            console.log(currentSlideIndex);

            return;
        }
        currentSlideIndex--;
        console.log(currentSlideIndex);

    }
    this.nextSlide = function () {
        if(currentSlideIndex === imagesCount - 1){
            currentSlideIndex = 0;
            console.log(currentSlideIndex);
            return;
        }
        currentSlideIndex++;
        console.log(currentSlideIndex);
    }

    // console.log(imagesCount);
    prevSliderNode.onclick = function () {
        __self.prevSlide();
    }
    nextSliderNode.onclick = function(){
        __self.nextSlide();
    }


    this.__render = function () {
        prevSliderNode.onclick = function () {
            __self.prevSlide;
        }
        nextSliderNode.onclick = function(){
            __self.nextSlide;
        }

    }

}
