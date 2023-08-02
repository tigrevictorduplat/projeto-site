function getYPostion(element) {
    const rect = element.getBoundingClientRect();
    return rect.top + window.scrollY;
  }

  function getInfos(){
    $.ajax({
        url:'http://localhost/projeto-site/src/scripts/js-crud/right-content.php',
        method:'GET',  
        dataType:'json'
    }).done(function(result){
        console.log(result);
    });
}
document.addEventListener("DOMContentLoaded", function() {
    const progressBar = document.querySelector("progress");
    getInfos();
    
    window.addEventListener("scroll", function(){
        let pageElement = this.document.documentElement;
        

        let currentTop = pageElement.scrollTop; // Current position of top
        let pageHeight = pageElement.scrollHeight;

        let percentageProgress = currentTop / (pageHeight - pageElement.clientHeight) * 100; 
        percentageProgress = Math.round(percentageProgress);
        progressBar.value = percentageProgress;
      
    });

})