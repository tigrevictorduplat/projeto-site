function getYPostion(element) {
    const rect = element.getBoundingClientRect();
    return rect.top + window.scrollY;
  }
$.get("http://localhost/projeto-site/src/scripts/js-crud/right-content.php")
    .done((data) => console.log(data))
    .fail((error) => console.error(error))
    .always(() => console.log("Feito")
    );

document.addEventListener("DOMContentLoaded", function() {   
    const progressBar = document.querySelector("progress");
    const firstBreak = document.getElementById("first-break");
    const secondBreak = document.getElementById("second-break");
    
    
    window.addEventListener("scroll", function(){
        let pageElement = this.document.documentElement;
        

        let currentTop = pageElement.scrollTop; // Current position of top
        let pageHeight = pageElement.scrollHeight;
        let screenHeight = (pageHeight - pageElement.clientHeight);

        let percentageProgress = Math.round(currentTop / screenHeight * 100); 
        let firstBreakProgress = Math.round(getYPostion(firstBreak) / screenHeight * 100);
        let secondBreakProgress = Math.round(getYPostion(secondBreak) / screenHeight * 100);

        progressBar.value = percentageProgress;
      
        if (percentageProgress == firstBreakProgress) {
            $(".right-content").replaceWith(
                '<section class="right-content">'+
                '<?php'+
                "$extraID = $currentPag['index_pag2'];" +
                'include("../template-parts/right-content.php");'+ 
                "?>"+
                "</section>"
            );
        } else if (percentageProgress == secondBreakProgress){
           $(".right-content").replaceWith(
            '<section class="right-content">'+
            "<?php $extraID = $currentPag['index_pag3'];" +
            "include('../template-parts/right-content.php'); ?>"+
            "</section>"
            );
            
        }
    });

});