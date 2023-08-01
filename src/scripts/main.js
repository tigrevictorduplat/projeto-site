function getYPostion(element) {
    const rect = element.getBoundingClientRect();
    return rect.top + window.scrollY;
  }

document.addEventListener("DOMContentLoaded", function() {
    const progressBar = document.querySelector("progress");
    /*
    const firstDivisor = document.getElementById("first-break");
    const secondDivisor = document.getElementById("second-break");
    const rigthContainer = document.querySelector(".right-content");
    */
    

    window.addEventListener("scroll", function(){
        let pageElement = this.document.documentElement;
        

        let currentTop = pageElement.scrollTop; // Current position of top
        let pageHeight = pageElement.scrollHeight;

        let percentageProgress = currentTop / (pageHeight - pageElement.clientHeight) * 100; 
        percentageProgress = Math.round(percentageProgress);
        progressBar.value = percentageProgress;
      
    });

    
})